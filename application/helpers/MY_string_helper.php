<?php
// ------------------------------------------------------------------------

/**
 * Remove HTML,quotes
 * Loại bỏ các ký tự HTML,
 * Thay dấu ' " thành entity
 *
 * @access    public
 * @param    string    the string
 * @param	string $allow cho phép các thẻ
 * @return    string
 * 
 * @author Tiểu Tinh
 * @tutorial removeHtml($text)
 */
if ( ! function_exists('removeHtml'))
{
    function removeHtml($string,$allow = '')
    {
    	//Sử dụng hàm quotes_to_entities của code igniter để thay thế các ký tự ' "
        //return quotes_to_entities(htmlspecialchars(strip_tags($string,$allow),ENT_QUOTES,"UTF-8",FALSE));
		return htmlspecialchars(strip_tags($string,$allow),ENT_QUOTES,"UTF-8",FALSE);
    }
}

// ------------------------------------------------------------------------
/**
 * Chuyển ký tự hoa thành ký tự thường theo format UTF-8
 * 
 */
if ( ! function_exists('strtolower_utf8'))
{
    function strtolower_utf8($string)
	{
		return mb_strtolower($string,'UTF-8');
	}
}

// ------------------------------------------------------------------------
/**
 * Chỉ lấy ký tự thường
 * giữ lại ký tự dấu phẩu và khoảng trắng
 * 
 */
if ( ! function_exists('get_character'))
{
	function get_character($str)
	{
		$trans = array(
	                        '&\#\d+?;'              				=> '',
	                        '&\S+?;'                				=> '',
	                        '\s+'                   				=> ' ',
	                        '[\!\@\#\$\%\^\&\*\(\)\-\`\{\}\;\|\[\]\_\:\.\/\+\=\?]'   => '',
	                        '-+'            						=> ' ',
	                        '-$'            						=> '',
	                        '^-'            						=> '',
	                        '\.+$'                  				=> ''
	                    );
	    $str = strip_tags($str);
	    foreach ($trans as $key => $val)
	    {
	        $str = preg_replace("#".$key."#u", $val, $str);
	    }
		return trim(stripslashes(strip_quotes($str)));
	}
}

// ------------------------------------------------------------------------
/**
 * Chuyển chuỗi sang tag. Mỗi tag cách nhau dấu phẩy
 * Tag đều chuyển sang ký tự thường
 * -Loại bỏ kí tự ' "
 * @param string $tags Chuỗi Tag
 * @return array $tags
 */
function doTags($tags)
{
	$tags = explode(',',mb_strtolower(reduce_multiples(removeHtml(get_character($tags)), ",", TRUE),'UTF-8'));
	foreach($tags as $k => $tag)
		$tags[$k] = trim($tag);
	return $tags;
	
}
