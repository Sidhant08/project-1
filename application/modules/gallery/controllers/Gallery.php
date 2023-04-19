<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Gallery extends MX_Controller {
	
	function index()
	{
		$data['title']="Gallery Devika Packers and Movers";
		$data['description']="Picture and Video gallery of Devika packers and movers";
		$data['module']="gallery";
		$data['view_file']="gallery";
		echo Modules::run('template/layout2',$data);
	}
}