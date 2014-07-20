<?php
// ------------------------------------------------------------------------

/**
 * Create URL Title
 *
 * Takes a "title" string as input and creates a
 * human-friendly URL string with either a dash
 * or an underscore as the word separator.
 *
 * @access    public
 * @param    string    the string
 * @param    string    the separator: dash, or underscore
 * @return    string
 * 
 * @author Tiểu Tinh
 * @tutorial url_title_utf8($text-url)
 */
if ( ! function_exists('url_title_urf8'))
{
    function url_title_utf8($str, $separator = 'dash', $lowercase = TRUE)
    {
        //Change character utf8
        $str = convert_accented_characters($str);
        
        if ($separator == 'dash')
        {
            $search        = '_';
            $replace    = '-';
        }
        else
        {
            $search        = '-';
            $replace    = '_';
        }

        $trans = array(
                        '&\#\d+?;'              => '',
                        '&\S+?;'                => '',
                        '\s+'                   => $replace,
                        '[^a-z0-9\-]'        	=> '',
                        $replace.'+'            => $replace,
                        $replace.'$'            => $replace,
                        '^'.$replace            => $replace,
                        '\.+$'                  => ''
                    );

        $str = strip_tags($str);

        foreach ($trans as $key => $val)
        {
            $str = preg_replace("#".$key."#i", $val, $str);
        }

        if ($lowercase === TRUE)
        {
            $str = strtolower($str);
        }

        return trim(stripslashes($str));
    }
}

// ------------------------------------------------------------------------

/**
 * Convert Accented Foreign Characters to ASCII
 *
 * @access    public
 * @param    string    the text string
 * @return    string
 * 
 * Copy of Core CodeIgniter
 */
if ( ! function_exists('convert_accented_characters'))
{
    function convert_accented_characters($str)
    {
        if (defined('ENVIRONMENT') AND is_file(APPPATH.'config/'.ENVIRONMENT.'/foreign_chars.php'))
        {
            include(APPPATH.'config/'.ENVIRONMENT.'/foreign_chars.php');
        }
        elseif (is_file(APPPATH.'config/foreign_chars.php'))
        {
            include(APPPATH.'config/foreign_chars.php');
        }

        if ( ! isset($foreign_characters))
        {
            return $str;
        }

        return preg_replace(array_keys($foreign_characters), array_values($foreign_characters), $str);
    }
}

// ------------------------------------------------------------------------
/**
* Quay trở lại trang trước đó
* 
* @author Tiểu Tinh
* @final 2012/02/27
*/
if ( ! function_exists('goback'))
{
    function goback($default = '')
    {
    	//Load file config
    	if (defined('ENVIRONMENT') AND is_file(APPPATH.'config/'.ENVIRONMENT.'/config.php'))
        {
            include(APPPATH.'config/'.ENVIRONMENT.'/config.php');
        }
        elseif (is_file(APPPATH.'config/config.php'))
        {
            include(APPPATH.'config/config.php');
        }
        
        $referer = $_SERVER['HTTP_REFERER'];
		if(strpos($referer,base_url()) > -1)
		{
			$referer = str_replace(base_url(),'',$referer);  
			$referer = str_replace($config['url_suffix'],'',$referer); 
			//Chuyển trang
			redirect($referer); 	
		}
		else
		{
			redirect($default);
			return false;
		}
		die;
    }
}