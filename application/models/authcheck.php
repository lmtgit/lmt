<?php
class Authcheck extends CI_Model
{
    /**
    * Collection of Web_accounts
    * 
    * @var mixed
    */
    private $collection   = 'web_accounts';


    function __construct()
    {
        parent::__construct();
        //$this->load->library('session');
    }

    //------------------------------------------------------------------------------------------------------------
    /**
    * Check Auth of Administrators
    * 
    * @param string $uName
    * @param string $pass
    * 
    * @return boolean
    */
    public function checkAuthAdmin($uName,$pass){

        $query = $this->mongo_db
        ->where(array(
	        'wacc_username'       => $uName,
	        'wacc_password'       => $pass,
	        'wacc_active'         => 1,
        ))
        ->getOne($this->collection);

        if($query != NULL) {

        	$group = $this->mongo_db->get_dbref($query['wgr_id']);
        	if($group['wgr_level'] == 1)
        	{
				$sessionArray = array(     
		            'admin_uid'         =>    	$query['_id'],
		            'admin_username'    =>    	$query['wacc_username'],
		            'admin_level'       =>   	1,
		            'admin_login'   	=>    	TRUE,
				); 

	            $this->session->set_userdata($sessionArray);
				return TRUE;
        	}
        	else
        		return FALSE;

        } else {
            return FALSE;
        }
    }
    
    //------------------------------------------------------------------------------------------------------------
    /**
    * Check session of administrators
    * 
    * @return boolean
    */
    public function checkSessionAdmin()
    {
        if ($this->session->userdata('admin_uid') AND $this->session->userdata('admin_login') == TRUE) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    //------------------------------------------------------------------------------------------------------------
    /**
    * Admin logout
    * 
    */
    public function logoutAdmin(){
        $sessionArray = array(     
            'admin_uid'         =>    '',
            'admin_username'    =>    '',
            'admin_level'       =>    '',
            'admin_logged_in'   =>    ''); 
        $this->session->unset_userdata($sessionArray);
		$this->session->sess_destroy();
    } 
	
	//------------------------------------------------------------------------------------------------------------
    /**
    * Check Auth of Members
    * 
    * @param string $uName
    * @param string $pass
    * @param boolean $adminLogin Admin đăng nhập nick thành viên
	 * 
    * @return boolean
    */
    public function checkAuthMember($uName,$pass,$adminLogin = FALSE)
    {
		//Lấy thông tin thành viên
		if($adminLogin == FALSE)
		{
			//Đăng nhập bình thường
			$arrMember = array(
				        'wacc_username'       => $uName,
				        'wacc_password'       => $pass,
				        'wacc_active'         => 1,
			        );
		}
		else
		{
			//Admin đăng nhập nick thành viên
			$arrMember = array(
				        'wacc_username'       => $uName,
			        );	
		}
        $query = $this->mongo_db->where($arrMember)->getOne($this->collection);

		//Kiểm tra tồn tại dữ liệu hay không
        if($query != NULL) 
        {
			//Lấy thông tin nhóm của thành viên
        	$group = $this->mongo_db->get_dbref($query['wgr_id']);
			//Kiểm tra nhóm có hoạt động hay không
        	if($group['wgr_level'] != 3)
        	{
				$sessionArray = array(     
	            'user_uid'         		=>    	$query['_id'],
	            'user_username'    		=>    	$query['wacc_username'],
	            'user_fullname'        	=>   	$query['wacc_lastname'].' '.$query['wacc_firstname'],
	            'user_icon'				=> 		$query['wacc_avatar']['icon'],
	            'user_thumb'			=> 		$query['wacc_avatar']['thumb'],
	            'user_level'			=> 		$group['wgr_level'],
	            'user_login'   			=>    	TRUE,
	            'user_set'				=>		1, 
	            'user_xu'				=> 		$query['wacc_xu']['xu'],
	            'user_xu2'				=> 		$query['wacc_xu']['xu2'],
	            
				); 
				// Quyền mua,download. 1 : Kiểm tra quyền download trong setting 3 : Download miễn phí. 4 : Không được mua.
				/**
				 * Quyền mua / Download
				 * 1 : Thành viên .Kiểm tra quyền download trong setting, cho download miễn phí bao nhiêu tài liệu / ngày
				 * 2 : Thành viên Vip. Xem,download tài liệu miễn phí tự do hoặc số lượng theo setting trong admincp
				 * 3 : Admin, thành viên vip. download và xem tài liệu miễn phí
				 * 4 : Không có quyền mua tài liệu
				 */
				//Kiểm tra quyền hạn mua / download tài liệu
				switch($group['wgr_level'])
				{
					case 2: //Members
					case 6: //Members Gold
						$sessionArray['user_set']	= 1; //Thành viên
						break;
					case 1: //Admin
						$sessionArray['admin_level']= 1; //Set quyền admin
					case 5: //Vip
						$sessionArray['user_set']	= 3; //Admin , vip
						break;
					case 4: //CTV
						$sessionArray['user_set']	= 4; // CTV
						break;
				}
				//Kiểm tra nếu Admin đăng nhập nick thành viên thì set quyền mua + download thành CTV
				if($adminLogin == TRUE)
				{
					$sessionArray['user_set']	= 4; // CTV
				}
				
				//Set Session
	            $this->session->set_userdata($sessionArray);
				return TRUE;
        	} else
        		return FALSE;

        } else {
            return FALSE;
        }
    }  

	//------------------------------------------------------------------------------------------------------------
    /**
    * Check session of member
    * 
    * @return boolean
    */
    public function checkSessionMember()
    {
    	//Kiểm tra thành viên đăng nhập
        if ($this->session->userdata('user_uid') AND $this->session->userdata('user_login') == TRUE) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    //------------------------------------------------------------------------------------------------------------
    /**
    * Admin logout
    * 
    */
    public function logoutMember()
    {
    	//Xóa SESSION
        $sessionArray = array(     
	            'user_uid'         		=>    	'',
	            'user_username'    		=>    	'',
	            'user_fullname'        	=>   	'',
	            'user_level'			=> 		'',
	            'user_login'   			=>    	'',
	            'user_set'				=>		'', // Quyền mua,download. 1 : bình thường. 2 : Không được mua. 3 : Download miễn phí
				);
        $this->session->unset_userdata($sessionArray);
		$this->session->sess_destroy();
		return TRUE;
    }
}

