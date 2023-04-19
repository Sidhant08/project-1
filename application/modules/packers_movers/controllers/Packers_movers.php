<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Packers_movers extends MX_Controller {
	
	function index()
	{
		$data['title']="All India Service Radhika Cargo Packers and Movers";
		$data['description']="Radhika Cargo Packers & Movers employs high-quality packaging materials. We take great care with your valuables. We utilise bubble wrap and carbon boxes to protect your package from scratches and damage.";
		$data['module']="packers_movers";
		$data['view_file']="states";
		echo Modules::run('template/layout2',$data);
	}
	
    function state_services($state)
    {
    	if($state!="west_bengal"){
    		redirect("home/error");
    	}
        $this->load->helper('text');
        $state=str_replace("_", " ", ucwords($state));
        $data=array(
            "state"=>$state,
            "title"=>"Radhika Cargo Packers and Movers in $state",
            "description"=>"Radhika Cargo Packers and Movers is the best packers and movers in $state",
            "keywords"=>"$state Radhika Cargo Packers and Movers in $state, $state packers, packers in $state, movers in $state, Radhika Cargo Packers $state",
            "module"=>"packers_movers",
            "view_file"=>"city_list",
        );
        echo Modules::run('template/layout2',$data);
    }
    function get_title($city,$state){//capitalized params
    	$phone=str_replace(" ", "", $this->comp['phone1']);
    	/*
    	$seo=array(
    		"Siliguri"=>array("title"=>"Best Packers and Movers in Siliguri NCR West Bengal, Call $phone Best Transportation for packing and moving","desc"=>"ISO Certified, Govt Authorized, 15+ Years of Trust for Courier Services, Packers & Movers, Transportation and Storage of Goods, Contact Radhika Cargo Packers and movers for all your packing and moving solutions in Siliguri NCR region"),
    		"Patna"=>array("title"=>"Patna Movers and Packers Solution & Cost, Call $phone Best Transportation for packing and moving","desc"=>"Contact Radhika Cargo Packers and movers for all your packing and moving solutions in Patna bihar, ISO Certified, Govt Authorized, 15+ Years of Trust for Courier Services, Packers & Movers, Transportation and Storage of Goods"),
    		"Ghaziabad"=>array("title"=>"Best Packers and Movers in Ghaziabad Call $phone, Radhika Cargo Packers and Movers in Ghaziabad for Transportation Services","desc"=>"Contact Radhika Cargo Packers and movers for all your packing and moving solutions in Ghaziabad NCR West Bengal, ISO Certified, Govt Authorized, 15+ Years of Trust for Courier Services, Packers & Movers, Transportation and Storage of Goods"),
    		"Bhubaneswar"=>array("title"=>"Best Movers and Packers in Bhubaneswar, Call $phone Best Transportation for packing and moving","desc"=>"Contact Radhika Cargo Packers and movers for all your packing and moving solutions in Bhubaneswar Orissa, ISO Certified, Govt Authorized, 15+ Years of Trust for Courier Services, Packers & Movers, Transportation and Storage of Goods"),
    		"Siliguri"=>array("title"=>"Packers and Movers for Siliguri Branch, Call $phone Best Transportation for packing and moving","desc"=>"Contact Radhika Cargo Packers and movers company for all your packing and moving solutions in Siliguri WB, ISO Certified, Govt Authorized, 15+ Years of Trust for Courier Services, Packers & Movers, Transportation and Storage of Goods"),
    		"Kanpur"=>array("title"=>"Best Packers and Movers Trusted Company in Kanpur UP, Call $phone Best Transportation for packing and moving","desc"=>"Top and Trusted Packers and movers company for all your packing and moving solutions in Kanpur UP, ISO Certified, Govt Authorized, 15+ Years of Trust for Courier Services, Packers & Movers, Transportation and Storage of Goods"),
    		"Hyderabad"=>array("title"=>"Affordable Packers and Movers services in Hyderabad, Call $phone Best Transportation for packing and moving","desc"=>"Top affordable and Trusted Packers and movers company for all your packing and moving solutions in Hyderabad, ISO Certified, Govt Authorized, 15+ Years of Trust for Courier Services, Packers & Movers, Transportation and Storage of Goods"),
    		"Secunderabad"=>array("title"=>"Packers and Movers services in Secunderabad, Call $phone Best Transportation for packing and moving","desc"=>"Top affordable and Renowned Packers and movers company for all your packing and moving solutions in Secunderabad, ISO Certified, Govt Authorized, 15+ Years of Trust for Courier Services, Packers & Movers, Transportation and Storage of Goods"),
    	);
    	foreach ($seo as $k=>$s){
    		if($k==$city){
    			return $s;
    		}
    	}
    	*/
    	//else
    	return array('title'=>"Best Packers and Movers in $city $phone, Radhika Cargo Packers $state",
    			"desc"=>"Best $city packers and movers, Radhika Cargo Packers and Movers provide all types of packing and moving services in $city, $state"); 
    }
    
    function city($city='Siliguri',$state='West Bengal')
    {
        $this->load->helper('text');
        $state=str_replace("_", " ", $state);
        $state=ucwords(str_replace("-", " ", $state));
        $city=str_replace("_", " ", $city);
        $city=urldecode(ucwords(str_replace("-", " ", $city)));
        $seo=$this->get_title($city,$state);
//         print_r($seo);
        $data=array(
            "city"=>$city,
            "state"=>$state,
        	// 'img'=>base_url('assets')."/img/princepackers.png",
        	"title"=>$seo['title'],
        	"description"=>$seo['desc'],
        	"keywords"=>"Top 5 Packers in $city,Top 10 Packers in $city,Top movers in $city, Top 5 movers in $city, Movers near me $city, Packers and movers in $city, Moving companies near me $city, Movers $city, Packers and movers near me $city",
						"Removal companies in $city, Moving services in $city, Cheap movers in $city, Local movers in $city, Local moving companies in $city",
						"$city best moving companies, House movers $city, Packers movers $city, Moving services near $city, House removals $city, Cheap moving companies in $city",
						"Professional movers in $city, House movers near $city, Cheap movers $city, Best packers and movers in $city, Affordable movers $city, International movers from $city, International moving companies in $city",
            "module"=>"packers_movers",
            "view_file"=>"view_service",
        );
        echo Modules::run('template/layout2',$data);
    }
}