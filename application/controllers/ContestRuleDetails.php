<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContestRuleDetails extends CI_Controller {
    
   


        public function PaginationData()
        {
            
           
               
            $contestRuleID = $this->input->post('contestRuleID');
            $activityID = $this->input->post('activityID');
            $pageNo = $this->input->post('pageNo');
            $pageLimit = $this->input->post('pageLimit');
            
               $apiPrefix = $this->config->item('url_prefix');
              $result = $this->ctlib->url($apiPrefix.'DisplayContestDetails/'.$contestRuleID.'/'.$activityID.'/'.$pageNo.'/'.$pageLimit);
               $activityList = json_decode($result, true);
             $activity_Count = count($activityList['ContestDetails']);
             $data = '';
           
           
           if($activity_Count == 0)
           {
               $data = '<div class="col-md-12">
                                 <div class="single-post card">
                                    <h3 class="card-body text-center">No Activities Uploaded</a></h3>
                                   
                                
                           </div> </div>';
           }
           
            else
            {
               for ($j = 0; $j < $activity_Count ; $j++) 
            {

            $clubName = $activityList['ContestDetails'][$j]['clubName'];
            $contestRuleName = $activityList['ContestDetails'][$j]['contestRuleName'];
            $activityDescription = $activityList['ContestDetails'][$j]['activityDescription'];
            $activityUploadedTS =   $activityList['ContestDetails'][$j]['activityUploadedTS'];
            $activityPicture = $activityList['ContestDetails'][$j]['activityPicture'];
            $activityUploadedTS  = date("d F Y", strtotime($activityUploadedTS));
            $activityID = $activityList['ContestDetails'][$j]['activityID'];
            
            $data .=' <div class="col-md-4">
                                <div class="single-post card">
                                    <div class="img-body">
                                     <img src="http://controlpanel.lci318d.in/activityImages/'.$activityPicture.'" alt="" style="height:100%;width:100%">
                                    </div>
                                   
                                    <h4 class="card-body"><span style="color:#FFCF01;"><i class="fa fa-building-o"></i></span>&nbsp; H C&nbsp;-'.'&nbsp;<b style="color:#337ab7;">'.$clubName.'</b></a></h4>
                                    <hr/>
                                    
                                    
                                    <p class="card-body blog-body" >'.$activityDescription.'</p>
                                    <hr/>
                                     
                                     <h5 class="card-body"><span><i class="fa fa-calendar" style="color:green;"></i></span> <span>'.$activityUploadedTS.'</span></h5>
                                     <a href="'.base_url('viewActivity/').$activityID.'" target="_blank"><button type="button" class="btn" id="b1"    value="">Read More </button></a>
                               
                                
                                </div>
                            </div>';
            
            $result = json_encode(array('contestRuleName'=>$contestRuleName,'ContestRuleData'=>$data));
             } 
            }

            
            echo $result;
            
        }




     public function PaginationCount()
        {
            $contestRuleID = $this->input->post('contestRuleID');
            $activityID = $this->input->post('activityID');
        
           
               $apiPrefix = $this->config->item('url_prefix');
              $result = $this->ctlib->url($apiPrefix.'DisplayContestDetailsCount/'.$contestRuleID.'/'.$activityID);
               $pagination = json_decode($result, true);
            
            $pagination_Count = $pagination['Count'];
             $page = '';
           
           
           if($pagination_Count == 0)
           {
               $page = ' ';
           }
           
            else
            {
                $per_page = 9;
                $pagination_Count = ceil($pagination_Count / $per_page);
               for ($j = 1; $j < $pagination_Count ; $j++) 
            {

           
           
            $page .='<a class="page-numbers" id="'.$j.'" onclick="changepage(this.id)">'.$j.'</a>';
            
            // <a class="page-numbers" href="#">1</a>
            
             } 
             
            }

            
            echo $page;
            
        }



        public function ViewOneActivity()
        {
            $activityID = $this->input->post('activityID');
           
            
               $apiPrefix = $this->config->item('url_prefix');
               $result = $this->ctlib->url($apiPrefix.'DisplayContestDetails/0/'.$activityID.'/0/99');
               echo $result;
        }
        
        
           public function CActivityData()
        {
              $contestRuleID = $this->input->post('contestRuleID');
            $pageNO = $this->input->post('pageNO');
            $limit_val = $this->input->post('limit_val');
            
               $apiPrefix = $this->config->item('url_prefix');
              $result = $this->ctlib->url($apiPrefix.'ViewCActivityPagination?clubID=0&activityID=0&contestRuleID='.$contestRuleID.'&pageNO='.$pageNO.'&limit_val='.$limit_val);
              echo $result;
        }



}
?>