<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Contacts_mdl extends CI_Model
{
        private $config;
        function __construct()
        {
                parent::__construct();
                // 		$this->load->database();
                $this->config = array(
                        'protocol' => 'smtp',
                        'smtp_host' => 'smtp.edubios.com',
                        'smtp_port' => 587,
                        'smtp_user' => 'support@edubios.com',
                        'smtp_pass' => 'k@Is#w)oW3',
                        'mailtype' => 'html',
                        'charset' => 'iso-8859-1'
                );
        }
        public function insert()
        {
                $this->load->library('email', $this->config);
                $this->email->set_newline("\r\n");

                $name = $this->input->post('name');
                $email = $this->input->post('email');
                $msg = $this->input->post('message');
                $sub = $this->input->post('subject');
                $phn = $this->input->post('phone');
                //         $category = $this->input->post('category');
                $message = "<div style='padding:30px;background: #e6e6e6;font-size: 18px !important;'>Client's Query: <b><q>$msg</q></b><br>Client's Name:  <b>$name</b><br>Phone Number:  <b>$phn</b><br> Email: <b> $email</b></div>";

                
                $this->email->to("stardentalncosmetics@gmail.com");
               
                $this->email->from("support@edubios.com");
                if (@$email)
                $this->email->reply_to(@$email);
                $this->email->subject($sub);
                $this->email->message($message);
                $this->email->send();

                return true;
        }
}