<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:			Social Igniter : LinkedIn : Home Controller
* Author: 		Brennan Novak
* 		  		hi@brennannovak.com
* 
* Project:		http://social-igniter.com
* 
* Description: This file is for the LinkedIn Home Controller class
*/
class Home extends Dashboard_Controller
{
    function __construct()
    {
        parent::__construct();

		$this->load->config('linkedin');

		$this->data['page_title'] = 'LinkedIn';
	}

}