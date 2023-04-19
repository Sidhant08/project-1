<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Contacts extends MX_Controller
{
	function __construct(){
		parent::__construct();
// 		$this->load->database();
	}
    function index()
    {
        $data['title'] = "Contact Training Institute, Siliguri";
        $data['description'] = "";
        $data['module'] = "contacts";
        $data['view_file'] = "contacts";
        echo Modules::run('template/layout2', $data);
    }

    public function add()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
//         $this->form_validation->set_rules('category', 'Category', 'trim|required');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required|min_length[10]|max_length[12]|numeric');
        $this->form_validation->set_rules('message', 'Message', 'trim');
        
        if ($this->form_validation->run() == true) {
            $this->load->model('contacts_mdl');
            $check = $this->contacts_mdl->insert();
            if ($check == true) {
                echo "<div class='alert alert-success'><h4>Success ! Thanks For Contacting Us.</h4></div>";
            }
        } else {
            echo "<div class='alert alert-danger'>" . validation_errors() . "</div>";
        }
    }
    
    function add2()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', "Email", 'required|trim');
        $this->form_validation->set_rules('mobile', 'Mobile Number', 'required|trim|numeric');
        $this->form_validation->set_rules('message', 'Message', 'trim');
        
        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $this->load->model('contact_mdl');
            $chk = $this->contact_mdl->add();
            if ($chk == true) {
                $msg = "Success ! Thanks For Contacting Us.";
                redirect("contacts/index?msg=$msg");
            } else {
                echo "Failed";
            }
        }
    }

    function booking()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', "Email", 'trim|valid_email');
        $this->form_validation->set_rules('phone', 'Mobile', 'required|trim|numeric|exact_length[10]');
        $this->form_validation->set_rules('mfrom', 'From', 'required|trim');
        $this->form_validation->set_rules('mto', 'To', 'required|trim');
//         $this->form_validation->set_rules('date', 'Date', 'required|trim');
        $this->form_validation->set_rules('message', 'Message', 'trim|max_length[2000]');
        
        if ($this->form_validation->run() == true) {
            $this->load->model('contacts_mdl');
            $check = $this->contacts_mdl->bookings();
            if ($check == true) {
//             	$this->sms($_POST['phone'], "Dear ".$_POST['name']." , Thank you for contacting Radhika Cargo Packers and Movers. We will reach you soon.","1707164187740172322");
//             	$qry=character_limiter($_POST['message'],20);
//             	$this->sms('9810666642,9810666643,8130418555', "New Website Enquiry - Name: ".$_POST['name'].", Phone: ".$_POST['phone'].". Query: From- ".$_POST['mfrom']."-".$_POST['mto'].". The Prince Packers and Movers","1707164197075552779");
                echo "1";
            }
        } else {
            echo "<div class='alert alert-danger'>" . validation_errors() . "</div>";
        }
    }
    function sms($to,$text,$temp_id){
    	/*
    	$text=urlencode($text);
    	$url="http://nimbusit.info/api/pushsms.php?user=t5OMPACKERS&key=010G4910U8YBVBpG9I0o&sender=OMPCKS&mobile=$to&text=$text&entityid=1701164138807208887&templateid=$temp_id";
//     	echo $url;die();
    	
    	ob_start();
    	$ch=curl_init($url);
    	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    	curl_setopt($ch,CURLOPT_POST,1);
    	curl_setopt($ch,CURLOPT_POSTFIELDS,"");
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER,2);
    	$output =  curl_exec($ch); //Grab output
    	ob_end_clean();
    	return $output=json_decode($output);
// var_dump($output);
//     	echo "<pre>";print_r($output);die();
  */
    }
}