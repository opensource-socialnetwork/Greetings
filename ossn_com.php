<?php
/**
 * Open Source Social Network
 *
 * @package   (softlab24.com).ossn
 * @author    OSSN Core Team <info@softlab24.com>
 * @copyright (C) SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */

define('Greetings', ossn_route()->com . 'Greetings/');
/**
 * Greetings Init
 *
 * @return void
 */
function greetings_init(){
	ossn_extend_view('css/ossn.default', 'greetings/css');
	ossn_extend_view('ossn/site/head','greetings/js');
}
/**
 * Return time of day in sense or morning day...
 *
 * @type m morning
 * @type a afternoon
 * @type e evening
 * @type n night
 *
 * @return string
 */
function greetings_time_now(){
    $time = date("H");
    if($time < "12"){
        return 'm';
    } elseif($time >= "12" && $time < "17"){
       return 'a';
    } elseif($time >= "17" && $time < "19"){
        return'e';
    } elseif($time >= "19"){
        return 'n';
    }	
}
ossn_register_callback('ossn', 'init', 'greetings_init');
