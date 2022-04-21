<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EventCtrl extends CI_Controller {


    
    // DISPLAY EVENTES  IN DATA TABLE
    public function EventViewdetails()
    {

       

        $eventStartDate         =$this->input->post('eventStartDate');
        $eventEndDate           =$this->input->post('eventEndDate');
        $eventTypeID            =$this->input->post('eventTypeID');
        $eventStatusID          =0;
        $eventID                =0;

        $apiPrefix = $this->config->item('url_prefix');
         $viewevents = $this->ctlib->url($apiPrefix .'viewEvents?eventStartDate='.$eventStartDate.'&eventEndDate='.$eventEndDate.'&eventTypeID='.$eventTypeID.'&eventStatusID='.$eventStatusID.'&eventID='.$eventID);
         //echo $viewclubpoint;

         $draw = intval($this->input->get("draw"));
         // $start = intval($this->input->get("start"));
         // $length = intval($this->input->get("length"));
 
         //$HNDatas = $this->hospitallib->ViewHospitalNetworks();
         $viewevent = json_decode($viewevents, true);
         $countOfevents= count($viewevent['events']);
 
         
         $data = [];
         $k=1;
 
         for ($i = 0; $i < $countOfevents; $i++) {
             $eventsID = $viewevent['events'][$i]['eventsID'];
             $eventsName = $viewevent['events'][$i]['eventsName'];
             $eventsTypeID = $viewevent['events'][$i]['eventsTypeID'];
             $eventTypeName = $viewevent['events'][$i]['eventTypeName'];
             $eventVenue = $viewevent['events'][$i]['eventVenue'];
             $eventsDateTime = $viewevent['events'][$i]['eventsDateTime'];
             $ClubName = $viewevent['events'][$i]['ClubName'];
          
             $eventdate=date('Y-m-d', strtotime($eventsDateTime) );
             
           
             if($eventTypeName  =="District Events"){
                 $typename=$eventTypeName;
             }else{
                $typename=$eventTypeName.' (LC : ' .$ClubName.')'; 
             }
 
            
 
             $data[] = array(
                 $k,
                 $eventsName,
                 $eventdate,
                 //$ClubName,
                 $typename
              
             );
                $k++;
         }
         $result = array(
             "draw" => $draw,
              "recordsTotal" => $countOfevents,
              "recordsFiltered" => $countOfevents,
              "data" => $data
          );
         echo json_encode($result);
         exit();
    }
    public function EventCalender()
       {
        
        $eventStartDate         = '2021-06-01';
        $eventEndDate           = '2022-06-30';
        $eventTypeID            = 0;
        $eventStatusID          = 3;
        $eventID                = 0;

        $apiPrefix = $this->config->item('url_prefix');
        $viewevents = $this->ctlib->url($apiPrefix .'viewEvents?eventStartDate='.$eventStartDate.'&eventEndDate='.$eventEndDate.'&eventTypeID='.$eventTypeID.'&eventStatusID='.$eventStatusID.'&eventID='.$eventID);
        $viewevent = json_decode($viewevents, true);
         $countOfevents= count($viewevent['events']);
        
        $data = [];
        $k=1;
        
         for ($i = 0; $i < $countOfevents; $i++) {
             $eventsID = $viewevent['events'][$i]['eventsID'];
             $eventsName = $viewevent['events'][$i]['eventsName'];
             $eventsTypeID = $viewevent['events'][$i]['eventsTypeID'];
             $eventTypeName = $viewevent['events'][$i]['eventTypeName'];
             $eventVenue = $viewevent['events'][$i]['eventVenue'];
             $eventsDateTime = $viewevent['events'][$i]['eventsDateTime'];
             $eventdate=date('F\/n\/Y', strtotime($eventsDateTime) );
             $ClubName = $viewevent['events'][$i]['ClubName'];
         
          
             
         
      
         
         
         
         	 $data[] =  array(
                            'id'=> $eventsID, // Event's ID (required)
                             'name'=> $eventsName, // Event name (required)
                             'date'=> $eventsDateTime, // Event date (required)
                             'description' =>$eventVenue,
                             'type' => "holiday", // Event type (required)
                             'everyYear' => false // S
                            
                
              
             );
         }
         // 
        //$result = $resp['viewActivities']->result_array();
        $d = $data;
                    
        
        
          echo json_encode($data);
       
        
       }
}