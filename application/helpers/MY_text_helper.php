<?php
/**
* Cắt chuỗi UTF-81
*/
if ( ! function_exists('character_limiter_utf8'))
{
    function character_limiter_utf8($str,$len,$show = '&#8230;')
    {
    	return character_limiter($str, $len);
        //$str = strip_tags($str);
        //$cut = preg_replace('/#^(?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,0}'.'((?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$len.'}).*#s/','$1',$str);
        //echo 'test';
        if(strlen($str) > $len )
            return $cut.$show;
        return $cut;
    }
}
