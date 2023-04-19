<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Contacts_mdl extends CI_Model{
	private $config;
	function __construct(){
		parent::__construct();
// 		$this->load->database();
		$this->config = Array(
				'protocol' => 'smtp',
				'smtp_host' => 'smtp.edubios.com',
				'smtp_port' => 587,
				'smtp_user' => 'support@edubios.com',
				'smtp_pass' => 'k@Is#w)oW3',
				'mailtype'  => 'html',
				'charset'   => 'iso-8859-1'
				);
	}
    public function insert()
    {
        $this->load->library('email', $this->config);
        $this->email->set_newline("\r\n");
        
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $msg = $this->input->post('message');
        $phn = $this->input->post('phone');
//         $category = $this->input->post('category');
        $message = "<div style='padding:30px;background: #e6e6e6;font-size: 18px !important;'>Client's Query: <b><q>$msg</q></b><br>Client's Name:  <b>$name</b><br>Phone Number:  <b>$phn</b><br> Email: <b> $email</b></div>";
        
       /* if(@$email){
        // clients mail
	        $this->email->to($email);
	        $this->email->from('support@sriabhirajpackers.com');
	        $this->email->reply_to('support@sriabhirajpackers.com');
	        $this->email->subject('Thanks for Contacting us');
	        $this->email->message('Hi ' . $name . ',<br> Thanks for contacting us. We will reach you soon.<br><br><br>Regards,<br> Sri Abhiraj Packers and Movers (support@sriabhirajpackers.com).');
	        $this->email->send();
        }
        */
        // admin mail
//         $this->email->to('pdshiwam@gmail.com');
        $this->email->to('tamangsidhant06@gmail.com');
        $this->email->from("tamangsidhant06@gmail.com");
        if(@$email)
        	$this->email->reply_to(@$email);
        $this->email->subject('New Contact Message Received mysite.com');
        $this->email->message($message);
        $this->email->send();
        
        return true;
    }
    
    
    public function bookings()
    {
        $this->load->library('email', $this->config);
        $this->email->set_newline("\r\n");
    
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phn = $this->input->post('phone');
        $qry=$this->input->post('message');
//         $this->db->insert('bookings',array("name"=>$name,"email"=>$email,"phone"=>$phn,"msg"=>$qry,"mfrom"=>$this->input->post('mfrom'),"mto"=>$this->input->post('mto')));
        $msg = "Services Needed <br>From: <b>".$this->input->post('mfrom')."</b><br>To: <b>".$this->input->post('mto')."</b><br>$qry";//<br>Date: <b>".$this->input->post('date')."</b><br>";
//         $message = $msg . "<br><p style='color:red'>Client Name: " . $name . "<p style='color:red'>Client Phone: " . $phn . "<p style='color:red'> Client Email: " . $email;
        $message = "<div style='padding:30px;background: #e6e6e6;font-size: 18px !important;'>Client's Query: <b><q>$msg</q></b><br>Client's Name:  <b>$name</b><br>Phone Number:  <b>$phn</b><br>Email: <b> $email</b></div>";
    
        
//         $this->email->to('pdshiwam@gmail.com');
                $this->email->to('tamangsidhant06@gmail.com');
        $this->email->from('tamangsidhant06@gmail.com');
        if(@$email)
        	$this->email->reply_to(@$email);
        $this->email->subject('New Booking Enquiry Received mysite.com');
        $this->email->message($message);
        $this->email->send();
    
        return true;
    }
 }