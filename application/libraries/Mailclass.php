<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Mailclass extends CI_Controller{
	
	
	 public function __construct()
    {
        parent::__construct();
		//$this->load->model('setting_model');
    }
	
	public function index()
	{
		$CI =& get_instance();

		//$this->load->model('setting_model');
		$from_email=$this->get_mail_from();
	}

    function get_mail_type()
	{
		$mailsetting=$this->setting_model->get_mail_setting();
		if($mailsetting['mail_method']=='mail')
			return 'mail';
		else
			return 'smtp';
	}
	
	function get_mail_from()
	{
		$mailsetting=$this->setting_model->get_mail_setting();
		if($mailsetting['mail_from']=='' || $mailsetting['mail_from']==NULL || empty($mailsetting['mail_from']))
		{
			$from_email='admin@mydocs.com';
		}
		else
		{
			$from_email=$mailsetting['mail_from'];
		}
		return $from_email;
	}
	
	function get_mail_fromname()
	{
		$mailsetting=$this->setting_model->get_mail_setting();
		if($mailsetting['mailfromname']=='' || $mailsetting['mailfromname']==NULL || empty($mailsetting['mailfromname']))
		{
			$from_name='MyDocs';
		}
		else
		{
			$from_name=$mailsetting['mailfromname'];
		}
		return $from_name;
	}
	
	function get_smtp_host()
	{
		$mailsetting=$this->setting_model->get_mail_setting();
		if($mailsetting['mail_host']=='' || $mailsetting['mail_host']==NULL || empty($mailsetting['mail_host']))
		{
			$smtphost='mail@geeconglobal.com';
		}
		else
		{
			$smtphost=$mailsetting['mail_host'];
		}
		return $smtphost;
	}
	
	function get_smtp_user()
	{
		$mailsetting=$this->setting_model->get_mail_setting();
		if($mailsetting['mail_user']=='' || $mailsetting['mail_user']==NULL || empty($mailsetting['mail_user']))
		{
			$smtpuser='gap@geeconglobal.com';
		}
		else
		{
			$smtpuser=$mailsetting['mail_user'];
		}
		return $smtpuser;
	}
	
	function get_smtp_pass()
	{
		$mailsetting=$this->setting_model->get_mail_setting();
		if($mailsetting['mail_pass']=='' || $mailsetting['mail_pass']==NULL || empty($mailsetting['mail_pass']))
		{
			$smtppass='Geecon0404';
		}
		else
		{
			$smtppass=$mailsetting['mail_pass'];
		}
		return $smtppass;
	}
	
	
	function php_mail($to_email,$subject,$msg)
	{
		$from_email=$this->get_mail_from();
		$from_display=$this->get_mail_fromname();
		
		$config['mailtype'] = 'html';
		$this->load->library('email',$config);
		
    	$this->email->from($from_email, $from_display);
    	$this->email->to($to_email);


    	$this->email->subject($subject);
	    $this->email->message($msg);
    		
			if($this->email->send())
    		{
				return true;
    		}
	   		else
   			{
				return false;
	   		}
	
	}
	
	/*function smtp_mail($smtphost,$smtpuser,$smtppass,$from_email,$from_display,$to_email,$subject,$msg)
	{
		$config = Array(  
			'smtp_host' => $smtphost,  
			'smtp_user' => $smtpuser, 
			'smtp_pass' => $smtppass,
			'mailtype' => 'html'
			);
		
		$this->load->library('email',$config);
    	$this->email->from($from_email, $from_display);
    	$this->email->to($to_email);
    	$this->email->subject($subject);
	    $this->email->message($msg);
    		
			if($this->email->send())
    		{
				return true;
    		}
	   		else
   			{
				return false;
	   		}
	}*/
	
	function smtp_mail($to_email,$subject,$msg)
	{
		/*$smtphost=$this->get_smtp_host();
		$smtpuser=$this->get_smtp_user();
		$smtppass=$this->get_smtp_pass();
		$from_email=$this->get_mail_from();
		$from_display=$this->get_mail_fromname();
		*/
		$smtphost='mail@geeconglobal.com';
		$smtpuser='gap@geeconglobal.com';
		$smtppass='Geecon0404';
		$from_email='sysadmin@geeconglobal.com';
		$from_display='SYSADMIN';
		$config = Array(  
			'smtp_host' => $smtphost,  
			'smtp_user' => $smtpuser, 
			'smtp_pass' => $smtppass,
			'mailtype' => 'html'
			);
		
		$this->load->library('email',$config);
    	$this->email->from($from_email, $from_display);
    	$this->email->to($to_email);
    	$this->email->subject($subject);
	    $this->email->message($msg);
    		
			if($this->email->send())
    		{
				return true;
    		}
	   		else
   			{
				return false;
	   		}
	}

	function sendMail($to_email,$subject,$msg)
	{
		
			$mail=$this->smtp_mail($to_email,$subject,$msg);
			if($mail){
				return true;
					}else{
				return false;
					}
		
	}
	
}

/* End of file Mailclass.php */