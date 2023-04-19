<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class About extends MX_Controller {
	
	function index()
	{
		$data['title']="About Us";
		$data['description']="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.";
		$data['module']="about";
		$data['view_file']="about";
		echo Modules::run('template/layout2',$data);
	}
	function why_choose_us()
	{
	    $data['title']="Why Choose Us";
	    $data['description']="Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.";
	    $data['module']="about";
	    $data['view_file']="choose";
	    echo Modules::run('template/layout2',$data);
	}
	function faq()
	{
		$data['title']="FAQ";
		$data['description']="";
		$data['module']="about";
		$data['view_file']="faq";
		echo Modules::run('template/layout2',$data);
	}
	function testimonials()
	{
		$data['title']="Testimonials";
		$data['description']="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquet viverra dolor eget condimentum. In felis ligula, pharetra sed efficitur ut, pellentesque eu augue. Vestibulum tempor mi ac magna venenatis, vel hendrerit ante mattis. Proin in convallis mauris. Cras euismod sodales felis. Duis commodo pharetra risus, nec hendrerit neque cursus id.";
		$data['module']="about";
		$data['view_file']="testimonials";
		echo Modules::run('template/layout2',$data);
	}
}