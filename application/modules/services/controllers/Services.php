<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Services extends MX_Controller
{
    function frontend($city='Siliguri',$state="West Bengal")
    {
    	$this->load->helper('text');
    	$state=str_replace("_", " ", $state);
    	$state=ucwords(str_replace("-", " ", $state));
    	$city=str_replace("_", " ", $city);
    	$city=ucwords(str_replace("-", " ", $city));
        
        $data['city']=$city;
        $data['state']=$state;
        $data['img']=base_url('assets')."/img/images/img6.png";
        $data['title'] = "Best Frontend Training in $city, Call ".str_replace(" ", "", $this->comp['phone1']);
        $data['description']="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita ipsam perferendis rem molestiae dignissimos! Id maiores, est eum doloribus numquam velit, voluptatem suscipit nemo ex cumque blanditiis? Repellat, accusamus veniam.";
        $data['module'] = "services";
        $data['view_file'] = "frontend";
        echo Modules::run('template/layout2', $data);
    }
    function backend($city='Siliguri',$state="West Bengal")
    {
    	$this->load->helper('text');
    	$state=str_replace("_", " ", $state);
    	$state=ucwords(str_replace("-", " ", $state));
    	$city=str_replace("_", " ", $city);
    	$city=ucwords(str_replace("-", " ", $city));
    	
    	$data['city']=$city;
    	$data['state']=$state;
    	$data['img']=base_url('assets')."/img/images/img7.png";
    	$data['title'] = "Affordable Backend Training in $city, Call ".str_replace(" ", "", $this->comp['phone1']);
    	$data['description']="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita ipsam perferendis rem molestiae dignissimos! Id maiores, est eum doloribus numquam velit, voluptatem suscipit nemo ex cumque blanditiis? Repellat, accusamus veniam.";
    	$data['module'] = "services";
    	$data['view_file'] = "backend";
    	echo Modules::run('template/layout2', $data);
    }
    function web_design($city='Siliguri',$state="West Bengal")
    {
    	$this->load->helper('text');
    	$state=str_replace("_", " ", $state);
    	$state=ucwords(str_replace("-", " ", $state));
    	$city=str_replace("_", " ", $city);
    	$city=ucwords(str_replace("-", " ", $city));
    	
    	$data['city']=$city;
    	$data['state']=$state;
    	$data['img']=base_url('assets')."/img/images/img8.png";
    	$data['title'] = "Web Designing Training in $city";
    	$data['description']="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita ipsam perferendis rem molestiae dignissimos! Id maiores, est eum doloribus numquam velit, voluptatem suscipit nemo ex cumque blanditiis? Repellat, accusamus veniam.";
    	$data['module'] = "services";
    	$data['view_file'] = "web";
    	echo Modules::run('template/layout2', $data);
    }
    function ui_ux($city='Siliguri',$state="West Bengal")
    {
    	$this->load->helper('text');
    	$state=str_replace("_", " ", $state);
    	$state=ucwords(str_replace("-", " ", $state));
    	$city=str_replace("_", " ", $city);
    	$city=ucwords(str_replace("-", " ", $city));
    	
    	$data['city']=$city;
    	$data['state']=$state;
    	$data['img']=base_url('assets')."/img/images/img9.png";
    	$data['title'] = "UI/UX Development in $city";
    	$data['description']="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita ipsam perferendis rem molestiae dignissimos! Id maiores, est eum doloribus numquam velit, voluptatem suscipit nemo ex cumque blanditiis? Repellat, accusamus veniam.";
    	$data['module'] = "services";
    	$data['view_file'] = "ui";
    	echo Modules::run('template/layout2', $data);
    }
    function graphic($city='Siliguri',$state="West Bengal")
    {
    	$this->load->helper('text');
    	$state=str_replace("_", " ", $state);
    	$state=ucwords(str_replace("-", " ", $state));
    	$city=str_replace("_", " ", $city);
    	$city=ucwords(str_replace("-", " ", $city));
    	
    	$data['city']=$city;
    	$data['state']=$state;
    	$data['img']=base_url('assets')."/img/images/img10.png";
    	$data['title'] = "Graphic Design in $city";
    	$data['description']="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita ipsam perferendis rem molestiae dignissimos! Id maiores, est eum doloribus numquam velit, voluptatem suscipit nemo ex cumque blanditiis? Repellat, accusamus veniam.";
    	$data['module'] = "services";
    	$data['view_file'] = "graphic";
    	echo Modules::run('template/layout2', $data);
    }
    
    function software($city='Siliguri',$state="West Bengal")
    {
    	$this->load->helper('text');
    	$state=str_replace("_", " ", $state);
    	$state=ucwords(str_replace("-", " ", $state));
    	$city=str_replace("_", " ", $city);
    	$city=ucwords(str_replace("-", " ", $city));
    	
    	$data['city']=$city;
    	$data['state']=$state;
    	$data['img']=base_url('assets')."/img/images/img11.png";
    	$data['title'] = "Software Developer Training in $city, Call - ".str_replace(" ", "", $this->comp['phone1']);
    	$data['description']="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita ipsam perferendis rem molestiae dignissimos! Id maiores, est eum doloribus numquam velit, voluptatem suscipit nemo ex cumque blanditiis? Repellat, accusamus veniam.";
    	$data['module'] = "services";
    	$data['view_file'] = "software";
    	echo Modules::run('template/layout2', $data);
    }
    
}