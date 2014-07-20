<?php
// ------------------------------------------------------------------------

/**
 * Convert Time to Mircro Time
 *
 * @access    public
 * @param    string    the text string
 * @return    int
 *
 */
if ( ! function_exists('time_mirco'))
{   
    function time_mirco($date)
    {
        return strtotime($date); 
    }
}

/**
 * Convert Time to Mircro Time
 *
 * @access    public
 * @param    string    the text string
 * @return    int
 *
 */
if ( ! function_exists('mirco_time'))
{   
    function mirco_time($time,$format = 'Y-m-d')
    {
        try
		{
			if($time == '')
				return false;
			return date($format, $time);  	
		}
        catch(Exception $ex)
        {
			return false;
        }
    }
}