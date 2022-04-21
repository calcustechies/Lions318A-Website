<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VisitCtrl extends CI_Controller {


    
    // DISPLAY VISIT  IN DATA TABLE
    public function viewVisits()
    {
        $visitStartDate         =$this->input->post('visitStartDate');
        
        $visitEndDate           =$this->input->post('visitEndDate');
        $visitTypeID            =$this->input->post('visitTypeID');
        $visitStatusID          =0;
        $visitID                =0;


        $apiPrefix = $this->config->item('url_prefix');
         $viewvisit = $this->ctlib->url($apiPrefix .'viewVisits?visitStartDate='.$visitStartDate.'&visitEndDate='.$visitEndDate.'&visitTypeID='.$visitTypeID.'&visitStatusID='.$visitStatusID.'&visitID='.$visitID);
         //echo $viewclubpoint;

         $draw = intval($this->input->get("draw"));
         // $start = intval($this->input->get("start"));
         // $length = intval($this->input->get("length"));
 
         //$HNDatas = $this->hospitallib->ViewHospitalNetworks();
         $viewvisit = json_decode($viewvisit, true);
         $countOfvisit= count($viewvisit['Visits']);
 
         
         $data = [];
         $k=1;
 
         for ($i = 0; $i < $countOfvisit; $i++) {
             $visitID = $viewvisit['Visits'][$i]['visitID'];
             $visitName = $viewvisit['Visits'][$i]['visitName'];
             $visitDateTime = $viewvisit['Visits'][$i]['visitDateTime'];
             $visitTypeID = $viewvisit['Visits'][$i]['visitTypeID'];
             $visitTypeName = $viewvisit['Visits'][$i]['visitTypeName'];
             $visitVenue = $viewvisit['Visits'][$i]['visitVenue'];
             $RequestedClubName = $viewvisit['Visits'][$i]['RequestedClubName'];
            // $visitRequestedBy = $viewvisit['Visits'][$i]['visitRequestedBy'];
          
             $visitDate=date('Y-m-d h:i:s A', strtotime($visitDateTime) );
             
           
             
 
            
 
             $data[] = array(
                 $k,
                 $visitName,
                 $visitDate,
                 $visitTypeName,
                 $RequestedClubName
                 //$visitRequestedBy
              
             );
                $k++;
         }
         $result = array(
             "draw" => $draw,
              "recordsTotal" => $countOfvisit,
              "recordsFiltered" => $countOfvisit,
              "data" => $data
          );
         echo json_encode($result);
         exit();
    }
}