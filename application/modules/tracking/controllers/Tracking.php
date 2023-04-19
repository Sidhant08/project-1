<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Tracking extends MX_Controller {
	
	function index()
	{
		$data['title']="Tracking OM Packers and Movers India";
		$data['description']="Picture and Video gallery of OM packers and movers";
		$data['module']="tracking";
		$data['view_file']="tracking";
		echo Modules::run('template/layout2',$data);
	}
	
	function check(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('trackcode', 'Track Code', 'required|trim');
		if ($this->form_validation->run() == true) {
			echo "<div class='alert alert-danger'>Invalid Tracking Code</div>";
		}else{
			echo "<div class='alert alert-danger'>".validation_errors()."</div>";
		}
	}
}