<?php
/**
* Class Paging
* @author Tiểu Tinh
* @since 2011/12/08
*/
class Paging
{
	//private $link;
    
	private $config;
    
    private $fileconfig = array();
    
    /**
    * Construct
    * 
    * @param mixed $config
    */
	function __construct($config = array())
	{
        //Object CI
        $this->CI =& get_instance();

        //Load file Config Messenge
        $this->_load_config_paging();
        
        //Load Config
        $this->config = array_merge($config,$this->fileconfig[$config['config']]);
		//$this->config = $config;
        $this->config["page"]           = $config['page'];
		$this->config["page_current"]   = $this->_page_current();
        $this->config['page_rows']      = $config['limit'];
        $this->config['page_total']     = $config['total'];
        $this->config['link']           = $config['url'];
        
        log_message('debug', "Paging Class Initialized");  
	}

    //---------------------------------------------------------------------------------------
	/**
    * get Page Current
    * 
    */
	private function _page_current()
	{	
		if( $this->config["page"] == 0 )
		{
			return 1;
		}
		else
		{
			if( $this->config["page"] <= 0)
				return 1;	
			else
				return  (int) $this->config["page"];
		}
	}

    //---------------------------------------------------------------------------------------
    /**
    * Load Config Paging
    * 
    */
    protected function _load_config_paging()
    {
        if (defined('ENVIRONMENT') AND is_file(APPPATH.'config/'.ENVIRONMENT.'/paging.php'))
        {
            include(APPPATH.'config/'.ENVIRONMENT.'/paging.php');
        }
        elseif (is_file(APPPATH.'config/paging.php'))
        {
            include(APPPATH.'config/paging.php');
        }
        else
        {
            return FALSE;
        }
        $return = FALSE;

        if (isset($paging))
        {
            $this->fileconfig = $paging;
            $return = TRUE;
        }
        return $return;
    }
    
    //---------------------------------------------------------------------------------------
	/**
    * Get LIMIT SQL
    * 
    * @return string 0,10
    */
	public function getLimitSql()
	{
		$end 	= $this->config['page_current'] * $this->config['page_rows'];
		$begin  = $end - $this->config['page_rows'];
		return $begin.",".$end;
	}
	//*** Create Limit
	
    //--------------------------------------------------------------------------------------- 
	/**
    * Create Limit INNER JOINE - SQL
    * 
    * @return string 0,10
    */
	public function limitSqlInnerJoin()
	{
		$end 	= $this->config['page_current'] * $this->config['page_rows'];
		$begin  = $end - $this->config['page_rows'];
		return $begin.",".$this->config['page_rows'];
	}
	//*** Create Limit
	
    //---------------------------------------------------------------------------------------
	/**
	* Get LIMIT NOSQL
    * 
    * @return array('limit' => 10,'skip' => 10)
	* 
	*/
	function getLimitMongo()
	{
		return array(
		        'limit'	=> $this->config['page_rows'],
		        'skip'	=> $this->config['page_rows'] * ($this->_page_current() - 1)
				);
	}
    
    //--------------------------------------------------------------------------------------- 
	/**
    * Lấy vị trí số row hiện tại của trang
    * 
    */
	public function getRowsCurrent()
	{
		$end 	= $this->config['page_current'] * $this->config['page_rows'];
		$begin  = $end - $this->config['page_rows'];
		return $begin;
	}
	
    //--------------------------------------------------------------------------------------- 
    /**
    * Create Page / Total  
    * Lấy thông tin số trang / tổng số trang
    * VD : Trang 1 / 10 trang
    * 
    * @param mixed $page
    */
	public function getBrowsePage($page = 'page')
	{
		$page_end = ceil($this->config['page_total'] / $this->config['page_rows']);
		if($page_end <= 1)
		{
			return $page."1/1";
		}	
		else
		{
			return $page.$this->config['page_current'] ."/". $page_end;
		}
	}
	
    //---------------------------------------------------------------------------------------
    /**
    * Create Total
    *  
    * @param string $total
    */
    public function getTotal($total = 'Total')
    {
        return $total ." : ".$this->config['page_total'];
    }
    
	//---------------------------------------------------------------------------------------
	/**
	* Tính trong khoảng nào
	* vd : trong khoảng 20-30 trong 100 dữ liệu
	* 
	*/
	public function getBrowseRows()
	{
		return  ($this->config['page_rows'] * ($this->config['page_current'] - 1)) + 1 ." - ".$this->config['page_rows'] * $this->config['page_current'];	
	}
	
	//---------------------------------------------------------------------------------------
    /**
    * Tạo dữ liệu phân trang
    * 
    */
	public function getPaging()
	{
		//Total Page
		$page_end = ceil($this->config['page_total'] / $this->config['page_rows']);
		//Check page 1
		if($page_end != 1 && $this->config['page_total'] != 0)
		{
			$paging["begin"] = "";
			$paging["end"] = "";

			
			// Page Begin
			if($this->config['page_current'] != 1 && $this->config['tag']['begin']['true'] == 1)
			{
				$paging["begin"] = "<".$this->config['tag']['begin']['name']." ".$this->config['tag']['begin']['att']." ><a href='".$this->config["link"].$this->config["equal"]."1' ".$this->config['tag']['begin']['href']." title='Page 1' >".$this->config['tag']['begin']['show']."</a></".$this->config['tag']['begin']['name']."> ".$this->config["show"]["space"];
			}
			// Page End
			if($this->config["page_current"] != $page_end && $this->config['tag']['end']['true'] == 1)
			{
				$paging["end"] = $this->config["show"]["space"]."<".$this->config['tag']['end']['name']." ".$this->config['tag']['end']['att']." ><a href='".$this->config["link"].$this->config["equal"].$page_end."' ".$this->config['tag']['end']['href']." title='Page end' >".$this->config['tag']['end']['show']."</a></".$this->config['tag']['end']['name']."> ";
			}
			
			//Lien ket truoc
			$page_prev = "";
			$page_middle_first = "";
			$page_middle_space_first = $this->config["show"]["noshow"];
			if($this->config["page_current"] > 1)
			{		
				$page_prev = "<".$this->config["tag"]['prev']['name']." ".$this->config["tag"]['prev']['att']." >"."<a href='".$this->config["link"].$this->config["equal"].($this->config["page_current"] - 1)."' title='Page ".($this->config["page_current"] - 1)."' ".$this->config["tag"]['prev']['href']." >".$this->config["tag"]['prev']['show']."</a>"."</".$this->config["tag"]['prev']['name'].">" . $this->config["show"]["space"];
				for($i = $this->config["show"]["rows"] ; $i > 0 ; $i--)
				{
					if($this->config["page_current"] - $i > 0)
					{
						$page_middle_first .= "<".$this->config["tag"]['number']['name']." ".$this->config["tag"]['number']['att']." ><a href='".$this->config["link"].$this->config["equal"].($this->config["page_current"] - $i)."' title='Page ".($this->config["page_current"] - $i)."' ".$this->config["tag"]['number']['href']." >".($this->config["page_current"] - $i)."</a></".$this->config["tag"]['number']['name'].">" . $this->config["show"]["space"];
					}
					if($this->config["page_current"] - $i == 1)
					{
						$page_middle_space_first = "";
					}
				}
			}
			else
			{
				$page_middle_space_first = "";	
			}
			
			
			$page_next = "";
			$page_middle_second = "";
			$page_middle_space_second = $this->config["show"]["noshow"];
			if($this->config["page_current"] < $page_end)
			{
				$page_next = $this->config["show"]["space"] . "<".$this->config["tag"]['next']['name']." ".$this->config["tag"]['next']['att'].">" ."<a href='".$this->config["link"].$this->config["equal"].($this->config["page_current"] + 1)."' title='Page ".($this->config["page_current"] + 1)."' ".$this->config["tag"]['next']['href']." >".$this->config["tag"]['next']['show']."</a></".$this->config["tag"]['next']['name'].">";
				for($i = 1 ; $i <= $this->config["show"]["rows"] ; $i++)
				{
					if($this->config["page_current"] + $i <= $page_end)
					{
						$page_middle_second .= $this->config["show"]["space"] . "<".$this->config["tag"]['number']['name']." ".$this->config["tag"]['number']['att']." ><a href='".$this->config["link"].$this->config["equal"].($this->config["page_current"] + $i)."' title='Page ".($this->config["page_current"] + $i)."' ".$this->config["tag"]['number']['href']." >".($this->config["page_current"] + $i)."</a></".$this->config["tag"]['number']['name'].">";
					}
					if($this->config["page_current"] + $i == $page_end)
					{
						$page_middle_space_second = "";
					}
				}
			}
			else
			{
				$page_middle_space_second = "";
			}
			
			$page_current2 = "<".$this->config["tag"]['current']['name']." ".$this->config["tag"]['current']['att']."><a href='#' ".$this->config["tag"]['current']['att'] ." ".$this->config["tag"]['current']['href']." >".$this->config["page_current"]."</a></".$this->config["tag"]['current']['name'].">";
			
			$vPaging = $paging["begin"] . $page_prev ."<".$this->config["tag"]['number']['tag']." ".$this->config["tag"]['number']['tag-att'].">". $page_middle_space_first . $page_middle_first . $page_current2 . $page_middle_second . $page_middle_space_second ."</".$this->config["tag"]['number']['tag'].">". $page_next . $paging["end"];
			$vPaging = str_replace(array('< >','<>','</>','</ >'),array('','','',''),$vPaging);
			if(!preg_match("{page}",$vPaging))
			{
                echo 'test';
				return $vPaging;
			}
			else
			{
				return preg_replace("/({page}{1})([a-zA-Z0-9-_.\/]+)\/(\d+)/","$3$2",$vPaging);
			}
		}
		else
		{
			return "";	
		}
		
	}
}

//* Config Paging
//	$config['page_total'] 	= 100;
//	$config['page_rows']	= 10; //So hang tren 1 trang
//	$config["page_current"]	= 1;
//
//	$config["page"]			= "page";
//	$config["slash"]		= "&"; 		// ? or &
//	$config["equal"]		= "="; 		// = or / (= dùng cho lấy giá trị bằng GET
//	$config["link"] 		= WEBSITE_ADMIN."/index.php?mod=admin";
//	
//	$config["show"]["rows"]				= 3; //Số trang kế tiếp hoặc trước đó sẽ hiện ra
//	$config["show"]["space"] 			= " ";
//	$config["show"]["noshow"]			= "";	
//	
//	$config["tag"]['name']				= "div"; //Ten tag - (div,span)
//	$config["tag"]['att']				= "class='pagination'"; //thuoc tinh - (class = 'paging')
//	
//	
//	$config["tag"]['prev']['name']		= "div"; //The chung cua cac so trang (span / div)
//	$config["tag"]['prev']['att']		= "class='prev_link_inactiv'"; //thuoc tinh - (class = 'paging')
//	$config["tag"]['prev']['href']		= ""; //thuoc tinh - (class = 'paging')
//	$config["tag"]['prev']['show']		= "Prev Page"; //thuoc tinh - (class = 'paging')
//	
//	$config["tag"]['next']['name']		= "div"; //The chung cua cac so trang (span / div)
//	$config["tag"]['next']['att']		= "class='next_link_activ'"; //thuoc tinh - (class = 'paging')
//	$config["tag"]['next']['href']		= ""; //thuoc tinh - (class = 'paging')
//	$config["tag"]['next']['show']		= "Next Page"; //thuoc tinh - (class = 'paging')
//	
//	$config["tag"]['number']['tag']		= "div";
//	$config["tag"]['number']['tag-att']	= "class='middle_link'";
//	$config["tag"]['number']['name']	= "span"; //The chung cua cac so trang (span / div)
//	$config["tag"]['number']['att']		= ""; //thuoc tinh - (class = 'paging')
//	$config["tag"]['number']['href']	= ""; //thuoc tinh - (class = 'paging')	
//	
//	
//	$config["tag"]['current']['name'] 	= "span"; //The chung cua cac so trang (span / div)
//	$config["tag"]['current']['att'] 	= "";//thuoc tinh - (class = 'paging')
//	$config["tag"]['current']['href']	= "class='active'"; //thuoc tinh - (class = 'paging')
//	
//	
//	$config['tag']['begin']['true']		= 0;
//	$config['tag']['begin']['name']		= "span"; //The chung cua cac so trang (span / div)
//	$config['tag']['begin']['att']		= "";
//	$config['tag']['begin']['href']		= "";	
//	$config['tag']['begin']['show']		= "First"; //Name trang dau
//	
//	$config['tag']['end']['true']		= 0;
//	$config['tag']['end']['name']		= "span"; //The chung cua cac so trang (span / div)
//	$config['tag']['end']['att']		= "";
//	$config['tag']['end']['href']		= "";
//	$config['tag']['end']['show']		= "Last"; //Name trang cuoi
////*** Config Paging
//
//
//
//$a = new Paging($config);
//
////Xuat ra phan trang
//echo $a->create_paging();
//echo "<br />";
////Xuar ra trang xem / tong so trang
//echo $a->create_browse("Page");
//echo "<br />";

//Xuat ra tong so ket qua
//echo $a->create_total("Total");
//echo "<br />";
//
//Tao ra Limit
//echo $a->page_limit();