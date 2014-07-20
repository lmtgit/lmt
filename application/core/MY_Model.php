<?php
/**
* Custom Model
* 
* @author Tiểu Tinh
* 2011/12/12
* 
* @final 2012/02/26
*/
class MY_Model extends CI_Model
{
	/**
	 * Biến dùng chung
	 */
	public $_data;
	
	//------------------------------------------------------------------------------------------
    /**
    * Construct
    * 
    */
    function __construct()
    {
        parent::__construct();
		
		//Load MongoDB
		$this->load->library('Mongo_db');
    }
    
    //------------------------------------------------------------------------------------------
    /**
    * Count all Documents
    * Tính tổng số Document có trong Collection
    * 
    * @author Tiểu Tinh
    * 2011/12/08
    */
    function countDocuments($where = array())
    {
        if( count($where) > 0 )
            return $this->mongo_db->where($where)->count($this->collection); 
        else
            return $this->mongo_db->count($this->collection);   
    }
    
    //------------------------------------------------------------------------------------------
    /**
    * Lấy danh sách document
    * 
    * @param array $limit array('skip' => 0,'limit' => 10)
    * 
    * @author Tiểu Tinh
    * 2011/12/08
    */
    function getAllDocuments($limit = array(),$where = null,$order_by = null)
    {
    	//Check Where
    	if(is_array($where) && count($where) > 0)
    	{
			$this->mongo_db->where($where);	
    	}
		//Check OrderBy
    	if(is_array($order_by) && count($order_by) > 0)
    	{
			$this->mongo_db->order_by($order_by);	
    	}
		else
		{
			//Dùng OrderBy mặc định
			$this->mongo_db->order_by(array('_id' => -1));	
		}
    	
        if(is_array($limit) && count($limit) > 0)
            return $this->mongo_db->offset($limit['skip'])->limit($limit['limit'])->get($this->collection);
        else
            return $this->mongo_db->order_by(array('_id' => -1))->get($this->collection);     
    }//*end getAllDocuments
    
    //------------------------------------------------------------------------------------------
    /**
    * Get one Document
    * 
    * @param array $where
    * 
    * @author Tiểu Tinh
    */
    function getDocumentById($id)
    {
        return $this->mongo_db->where(array('_id' => new MongoId($id)))->getOne($this->collection);    
    }
    
    //------------------------------------------------------------------------------------------
    /**
    * Get one Document by Where
    * 
    * @param mixed $where
    */
    function getDocumentByWhere($where = array())
    {
        if( count($where) > 0 )
            return $this->mongo_db->where($where)->getOne($this->collection); 
        else
            return NULL;   
    }
    
    //------------------------------------------------------------------------------------------
    /**
    * Add Document
    * 
    * @param mixed $data
	 * 
	 * @return new MongoId id của dữ liệu insert
    */
    function addDocument($data)
    {
        return $this->mongo_db->insert($this->collection,$data); 
    }
    
    //------------------------------------------------------------------------------------------ 
    /**
    * Update Document
    * 
    * @param array $data
    * @param string $id
    */
    function updateDocument($data,$id)
    {
        return $this->mongo_db->where(array('_id' => new MongoId($id)))->set($data)->update($this->collection);    
    }
    
    //------------------------------------------------------------------------------------------ 
    /**
    * Update Document
    * 
    * @param array $data
    * @param string $id
    */
    function updateDocumentByWhere($data,$where)
    {
        return $this->mongo_db->where($where)->set($data)->update($this->collection);    
    }
    
    //------------------------------------------------------------------------------------------ 
    /**
    * Delete Document
    * 
    * @param mixed $id
    */
    function deleteDocument($id)
    {
        //Delete Document
        return $this->mongo_db->where(array('_id' => new MongoId($id)))->delete($this->collection);     
    }
    
    //------------------------------------------------------------------------------------------- 
	/**
	* Kiểm tra dữ liệu có tồn tại hay không
	* 
	* @param array $where Mảng where
	* @param mongoid $id object new MongoId
	*/
	function checkExits($where,$id = null)
	{   
		$data = $this->mongo_db
            		->where($where)
                    ->getOne($this->collection);
        if($data == null)
        	return FALSE;
        	                       
        if($id == null)
	    	return TRUE;    
        else
        {
			if($id == $data['_id'])
				return FALSE; //Không tính trùng id khi edit
			return TRUE;	
        }	
	}//*end checkExits
	
	//------------------------------------------------------------------------------------------
    /**
    * Lưu file vào GridFS
    * 
    * @param string $file
    * @param string $nameFile Tên file muốn lưu
    * 
    * @return Id nếu insert thành công,boolean FALSE nếu không thành công
    * 
    * @author Tiểu Tinh
    * 2011/08/12
    */
    function storeFile($file,$nameFile = '')
    {
        return $this->mongo_db->storeFile($this->gridfs,$file, array("name" => $nameFile));    
    }
    
    //------------------------------------------------------------------------------------------
    /**
    * Lấy file trong GridFS
    * 
    * @param string $id
    */
    function getFile($id)
    {
        return $this->mongo_db->getFile($this->gridfs,$id);    
    }
    
    //------------------------------------------------------------------------------------------
    /**
    * Delete Image + Image Thumb of collection
    * Xóa trong MongoDB GridFS
	* 
    * @param array $imgArr array('thumb' => 'id/name.jpg', 'image' => 'id/name.jpg')
	* 
	* @since 2012/05/09 - Sử lại cách xóa file. (Cần xóa khung code đã được ghi chú bên trong)
    */
    function deleteImage($imgArr)
    {
        //Kiểm tra xóa hình
        if(is_array($imgArr))
        {
        	foreach($imgArr as $imageTmp)
			{
				$image 	= explode('/',$imageTmp);	
				$this->mongo_db->where(array('_id' => new MongoId($image[0])))->deleteFile($this->gridfs);
			} 
        }    
    }
	//*end deleteImage
	
	//----------------------------------------------------------------------------------------------
	/**
	 * Resize hình ảnh
	 * 
	 * @param string $patImg đường dẫn của file hình
	 * @param array $sizeImg array('width' => 100,'height' => 100)
	 * 
	 * @return string path của file hình
	 */
	function resizePic($patImg,$sizeImg)
	{
		$this->load->library('image_lib'); 
		//---Tạo hình Icon
		$this->image_lib->clear();
		//Xử lý Resize hình icon
        $config['image_library']    = 'gd2';
        $config['source_image']     = $patImg;
        $config['create_thumb']     = TRUE;
        $config['maintain_ratio']   = FALSE;
        $config['width']            = $sizeImg['width'];
        $config['height']           = $sizeImg['height'];
		$this->image_lib->initialize($config); 
		
		//Nếu Resize hình ko được thí báo lỗi
        if(!$this->image_lib->resize())
        {
			return FALSE;
        }
		
		//Xử tên file hình
		$infoPath 	= pathinfo($patImg);
		//File resize
		$fileResize = $infoPath['dirname'].'/'.$infoPath['filename'].'_thumb.'.$infoPath['extension'];
		//File hình mới
		$fileNew	= $infoPath['dirname'].'/'.new MongoId().'.'.$infoPath['extension'];	
		
		//Rename
		if(!rename($fileResize,$fileNew))
			return FALSE;
		return $fileNew;
	}
	//*end function resizePic
	
	//----------------------------------------------------------------------------------------------
	/**
	 * Xóa file hình tạm sau khi upload
	 */
	function deleteFile($fileImg)
	{
		//Xóa file hình
		if(is_array($fileImg))
		foreach($fileImg as $img)
		{
			//Xóa file hình tạm
	        if(file_exists($img))
	            unlink($img); 
		}
	}
	//*end function deletePic
}