<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeCtrl extends CI_Controller {

	public function index()
	{

		$apiPrefix = $this->config->item('url_prefix');
		$data['dgmsgs']= $this->ctlib->url($apiPrefix .'viewDGMessage');
	 	
		// $data['dgmsgs']->next_result();
        // $data['dgmsgs']->free_result();
		// $data['dgmsgs']->result_array();

		$data['viewevents']= $this->ctlib->url($apiPrefix .'upcomingEvents/15');
		
		//print_r($data['viewevents']);
		
		$data['viewvisits']= $this->ctlib->url($apiPrefix .'upcomingVisits/15');

		$data['countdata']= $this->ctlib->url($apiPrefix .'CountOfData');

		//print_r($data['viewevents']);
		$this->load->view('index',$data);
	}
// VIEW POINTTABLE
	public function pointtable()
	{
		$this->load->view('pointtable');
	}

//VIEW EVENT PAGE
	public function events()
	{
		$this->load->view('events');
	}

	//VIEW VISIT PAGE
	public function visits()
	{
		$this->load->view('visits');
	}

	
	//VIEW Gallery PAGE
	public function gallery()
	{
		$apiPrefix = $this->config->item('url_prefix');
		$data['viewGallerys']= $this->ctlib->url($apiPrefix .'viewGallery/0/0');
        //print_r($data['viewGallerys']);
		$this->load->view('gallery',$data);
	}

	//VIEW Districtmembers PAGE
	public function districtmembers()
	{
		$this->load->view('districtmembers');
	}
	
	

	//VIEW LOGIN PAGE
	public function login()
	{
		$this->load->view('login');
	}

	//VIEW CLUB NAME PAGE
	public function clubname($id)
	{
		$cID=$this->uri->segment('2');
		$apiPrefix = $this->config->item('url_prefix');
		$data['viewOneClub']= $this->ctlib->url($apiPrefix .'DisplayOneClubDetails?clubID='.$cID.'');
		//print_r($data['viewOneClub']);
		//echo $cID;
		$this->load->view('clubname',$data);
	}

	//VIEW ALL CLUB  PAGE
	public function viewclubs()
	{
		$this->load->view('viewclubs');
	}


//DISTRICT MEMBERS
    public function districtmembersByRole()
    {
        $this->load->view('membersByRole');
    }
    
    
    
    //DISTRICT MEMBERS
    public function districtmembersByRoleCopy()
    {
        $this->load->view('membersByRoleCopy');
    }
    
    
    
    //OUR PROJECTS
    
    public function OurProjects()
    {
        $this->load->view('ourProjects');
    }
    
    	//contest details PAGE
	public function contestdetails($id)
	{
	    $ID=$this->uri->segment('2');
		$apiPrefix = $this->config->item('url_prefix');
		$data['DisplayContestDetails']= $this->ctlib->url($apiPrefix .'DisplayContestDetails/'.$id.'/0');
		$data['i'] = $ID;
// 		print_r($data['DisplayContestDetails']);
		//echo $id;
		$this->load->view('contestdetails',$data);
	}
	
    	//DOWNLOADS
    public function download()
    {
        $this->load->view('downloads');
    }
    
    	public function CActivities()
	{
		$this->load->view('CActivities');
	}
	
		public function DistrictCalender()
	{
		$this->load->view('districtCalender');
	}
	
		public function CActivity_single($id)
	{
// 	    $activityID = $_GET['id'];
// 	    $apiPrefix = $this->config->item('url_prefix');
// 		$data['activityDetails']= $this->ctlib->url($apiPrefix.'ViewCActivityPagination?clubID=0&activityID='.$activityID.'&contestRuleID=0&pageNO=0&limit_val=1');
// 		print_r($data['DisplayContestDetails']);
		 $data['i'] = $this->uri->segment('2');
		$this->load->view('CActivity_single',$data);
	
	}
	
	
		public function viewActivity($id)
	{
// 	    $activityID = $_GET['id'];
// 	    $apiPrefix = $this->config->item('url_prefix');
// 		$data['activityDetails']= $this->ctlib->url($apiPrefix.'ViewCActivityPagination?clubID=0&activityID='.$activityID.'&contestRuleID=0&pageNO=0&limit_val=1');
// 		print_r($data['DisplayContestDetails']);
		 $data['i'] = $this->uri->segment('2');
		$this->load->view('viewActivity',$data);
	
	}
}
