<?php
/**
 * Smarty plugin
 *
 * @package Smarty
 * @subpackage PluginsModifier
 */

/**
 * Smarty truncate modifier plugin
 *
 * Type:     modifier<br>
 * Name:     truncate<br>
 * Purpose:  Truncate a string to a certain length if necessary,
 *               optionally splitting in the middle of a word, and
 *               appending the $etc string or inserting $etc into the middle.
 *
 * @link http://smarty.php.net/manual/en/language.modifier.truncate.php truncate (Smarty online manual)
 * @author Monte Ohrt <monte at ohrt dot com>
 * @param string  $string      input string
 * @param integer $length      length of truncated text
 * @param string  $etc         end string
 * @param boolean $break_words truncate at word boundary
 * @param boolean $middle      truncate in the middle of text
 * @return string truncated string
 */
/*function smarty_modifier_truncate($string, $length = 80, $etc = '...', $break_words = false, $middle = false)
{
    if ($length == 0)
        return '';

    if (Smarty::$_MBSTRING) {
        if (mb_strlen($string, Smarty::$_CHARSET) > $length) {
            $length -= min($length, mb_strlen($etc, Smarty::$_CHARSET));
            if (!$break_words && !$middle) {
                $string = preg_replace('/\s+?(\S+)?$/' . Smarty::$_UTF8_MODIFIER, '', mb_substr($string, 0, $length + 1, Smarty::$_CHARSET));
            }
            if (!$middle) {
                return mb_substr($string, 0, $length, Smarty::$_CHARSET) . $etc;
            }

            return mb_substr($string, 0, $length / 2, Smarty::$_CHARSET) . $etc . mb_substr($string, - $length / 2, $length, Smarty::$_CHARSET);
        }

        return $string;
    }

    // no MBString fallback
    if (isset($string[$length])) {
        $length -= min($length, strlen($etc));
        if (!$break_words && !$middle) {
            $string = preg_replace('/\s+?(\S+)?$/', '', substr($string, 0, $length + 1));
        }
        if (!$middle) {
            return substr($string, 0, $length) . $etc;
        }

        return substr($string, 0, $length / 2) . $etc . substr($string, - $length / 2);
    }

    return $string;
}*/
function smarty_modifier_truncate($string, $length, $etc = '...',$break_words = false, $middle = false)
{
    $result = ''; 
    $string = html_entity_decode(trim(strip_tags($string)), ENT_QUOTES, 'GB2312');
    $strlen = strlen($string);
    for($i = 0; (($i < $strlen) && ($length > 0)); $i++)
    {
        if(ord(substr($string, $i, 1)) > 128)
        {
            if($length < 1.0)
            {
                break;
            }

            $result .= substr($string, $i, 2);

            $length -= 1.0;

            $i++;
        }
        else
        {
            $result .= substr($string, $i, 1);
            $length -= 0.5;
        }
    } 
    $result = htmlspecialchars($result, ENT_QUOTES, 'GB2312'); 
    if($i < $strlen)
    {
        $result .= $etc;
    }
    return $result;
}