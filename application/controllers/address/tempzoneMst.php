<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TempzoneMst extends CI_Controller {
	
	//start variables
	 
	private $gvn_tempzoneId;
	private $gvs_tempzone;
	private $gvs_country;


	//end variables
	
	private $actionMode; //used to set mode
	// 0 -> for add
	// 1 -> for editHeirLevelConfig
	
	public function __construct() {
		parent::__construct(); //call parent constructor
		
		//$this->output->enable_profiler(TRUE); //profiler for debugging	
			
		//start load models, helpers, libraries, etc
		$this->load->model('address/tempzone_mst_m');
		//$this->load->model('common/indp_mst_data_m');
		//$this->is_logged_in();
		
		//start load models, helpers, libraries, etc
		
		//start constructor code
		//constructor code here
		//end constructor code
	}
	
	public function index() {
		$head['title'] = 'TempZone Master';	
		
		$data['tzone'] 		= $this->tempzone_mst_m->getAllTempZoneMst();
		$template['header']   = $this->load->view('include/header_v', $head);
		//$template['menu']     = $this->load->view('include/left_menu_v', true);
		$template['body']     = $this->load->view('address/tempzoneMst_v', $data);
		$template['footer']   = $this->load->view('include/footer_v', true);
		$this->load->view('include/main_page_v', $template);

	}
	
////////////////////////Employee
	public function initForm($id){
		

		//start of setting initial values for insert mode 
		if(!$id){
			$head['title']		 = 'New Temp Zone';	
			$data['title'] 		 = 'New Temp Zone';		
			$data['action'] 		= site_url('address/tempzoneMst/insert');
			$data['id']	 		= null;
			$data['Tempzone']	  = null;	
			$data['country']  = null;	

		}
		//end of setting initial values for insert mode 
		
		
		//start of setting initial values for update mode 
		if($id){
			$head['title'] 		 = 'Edit Temp Zone';	
			$data['title'] 		 = 'Edit Temp Zone';		
			$data['action']	    = site_url('address/tempzoneMst/update');		
			$data['id'] 			= $id;
			$data['Tempzone']  	  = $this->tempzone_mst_m->getTempZone($id);
			$data['country']  	  = $this->tempzone_mst_m->getcountry($id);		
			
		}
		
		//end of setting initial values for update mode 
		//$loctypeId = LOCZONETYPE;	
		//$data['tzId_dropdown'] = $this->indp_mst_data_m->getAllIndMstDetailsByTypeId($loctypeId)->result();		
		//start of setting initial values for both insert and update mode		
		$template['header'] = $this->load->view('include/header_v', $head);
		//$template['menu'] = $this->load->view('include/left_menu_v', true);
		$template['body'] = $this->load->view('address/viewtempzoneMst_v', $data);
		$template['footer'] = $this->load->view('include/footer_v', true);
		$this->load->view('include/main_page_v', $template);
		//end of setting initial values for both insert and update mode 
	}
	
	public function setFormControls(){
		
		//start of setting rules for insert mode 
		if($this->actionMode==0){
			//enter insert rules here
		}
		//end of setting rules for insert mode 
		
		//start of setting rules for update mode 
		if($this->actionMode==1){
			$this->gvn_tempzoneId = $this->input->post('id');
			
		}
		//end of setting rules for update mode 
		
		//start of setting rules for both insert and update mode 
			$this->gvs_tempzone	   = $this->input->post('Tempzone');
			$this->gvs_country	   = $this->input->post('country');
        //end of setting rules for both insert and update mode 
		
		
		if($this->actionMode==0){
			$this->tempzone_mst_m->insert($this->gvs_tempzone,$this->gvs_country);
		} else {
			$this->tempzone_mst_m->update($this->gvn_tempzoneId, $this->gvs_tempzone,$this->gvs_country);
		}
	}
	
	public function setFormValidationRules(){
		//start of setting rules for insert mode 
		if($this->actionMode==0){
 			//enter insert rules here
		}
		//end of setting rules for insert mode 
		
		//start of setting rules for update mode 
		if($this->actionMode==1){
			$this->form_validation->set_rules('id');
		}
		//end of setting rules for update mode 
		
		//start of setting rules for both insert and update mode 
		$id = $this->input->post('id');
		$this->form_validation->set_rules('Tempzone', 'Field', 'trim|required|');
		$this->form_validation->set_rules('country', 'Country', 'trim|required|');
		//$this->form_validation->set_rules('TimezoneTypeId', 'Field', 'trim|required');
		
		//$this->form_validation->set_message('addEditUnique', '%s should contain unique value.');
		 
	  

		//end of setting rules for both insert and update mode 
	}
	
	
	
	
	public function newTempzoneMst()
	{
		$this->initForm(0);
		
	}
	
	
	public function editTempzoneMst($id=null) {
		//$actionMode = 1;
					
		$this->initForm($id);
	}
	
	
	public function insert() {
		$this->actionMode = 0;
		
		//start of form validation
		$this->load->library('form_validation');
		$this->setFormValidationRules();
		//end of form validation

		if ($this->form_validation->run() == FALSE)	{
		$this->newTempZoneMst();
		} else {
			$this->setFormControls();
		
			$this->session->set_flashdata("success", "Successfully Added Tempratures");
			redirect('address/tempzoneMst', 'refresh');
		}
	}
	
	public function update() {
		$this->actionMode = 1;
		
		//start of form validation
	 	$this->load->library('form_validation');
	 	$this->setFormValidationRules();
		//end of form validation

 		if ($this->form_validation->run() == FALSE)	{
	 		$this->editTempzoneMst($this->input->post('id'));
	 	} else {
			$this->setFormControls();
			
			$this->session->set_flashdata("success", "Successfully Updated TempZone ID ".$this->gvn_tempzoneId);
			redirect('address/tempzoneMst', 'refresh');
	 	}		
	}
	
	public function delete($gvn_tempzoneId) {
		$this->tempzone_mst_m->delete($gvn_tempzoneId);
		$this->session->set_flashdata("success", "Successfully Deleted Temprature");
		redirect('address/tempzoneMst', 'refresh');
	}
	#public function __destruct(){
		//destructor code here
	#}
}