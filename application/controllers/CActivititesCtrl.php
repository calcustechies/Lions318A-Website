<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CActivititesCtrl extends CI_Controller {
    
     public function contestRuleList()
   {

    //  $apiPrefix = $this->input->post('adminUrl');
    $apiPrefix = $this->config->item('url_prefix');

    $result = $this->ctlib->url($apiPrefix.'viewSubContestRuleOfParent/2');

    $viewContestRules = json_decode($result, true);
    $contestRule_Count = count($viewContestRules['ContestRules']);


    
        $options = ' ';
      

        for ($j = 0; $j < $contestRule_Count ; $j++) {

            $contestRuleID = $viewContestRules['ContestRules'][$j]['contestRuleID'];
            //$contestRuleNo  = $viewContestRules['ContestRules'][$j]['contestRuleNo'];
            $contestRuleName = $viewContestRules['ContestRules'][$j]['contestRuleName'];
            $options .= '<option value="'.$contestRuleID.'" style="display:none">'.$contestRuleName.'</option>';
        }
        
       // echo   $options;

     $result = $this->ctlib->url($apiPrefix.'viewSubContestRuleOfParent/14');

    $viewContestRules = json_decode($result, true);
    $contestRule_Count = count($viewContestRules['ContestRules']);


    
       
        for ($j = 0; $j < $contestRule_Count ; $j++) {

            $contestRuleID = $viewContestRules['ContestRules'][$j]['contestRuleID'];
            //$contestRuleNo  = $viewContestRules['ContestRules'][$j]['contestRuleNo'];
            $contestRuleName = $viewContestRules['ContestRules'][$j]['contestRuleName'];
            $options .= '<option value="'.$contestRuleID.'" style="display:none">'.$contestRuleName.'</option>';
        }
        
        //echo   $options;
        
        
         $result = $this->ctlib->url($apiPrefix.'viewSubContestRuleOfParent/26');

    $viewContestRules = json_decode($result, true);
    $contestRule_Count = count($viewContestRules['ContestRules']);


    
       
        for ($j = 0; $j < $contestRule_Count ; $j++) {

            $contestRuleID = $viewContestRules['ContestRules'][$j]['contestRuleID'];
            //$contestRuleNo  = $viewContestRules['ContestRules'][$j]['contestRuleNo'];
            $contestRuleName = $viewContestRules['ContestRules'][$j]['contestRuleName'];
            $options .= '<option value="'.$contestRuleID.'" style="display:none">'.$contestRuleName.'</option>';
        }
        
        echo   $options;

   }



        public function ViewCActivityPaginationLoad()
        {
            $contestRuleID = $this->input->post('contestRuleID');
            $pageNO = $this->input->post('pageNO');
            $limit_val = $this->input->post('limit_val');
            
               $apiPrefix = $this->config->item('url_prefix');
              $result = $this->ctlib->url($apiPrefix.'ViewCActivityPagination?clubID=0&activityID=0&contestRuleID='.$contestRuleID.'&pageNO='.$pageNO.'&limit_val='.$limit_val);
               $activityList = json_decode($result, true);
             $activity_Count = count($activityList['ActivityList']);
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

            $clubName = $activityList['ActivityList'][$j]['clubName'];
            $activityDescription = $activityList['ActivityList'][$j]['activityDescription'];
             $activityUploadedTS =   $activityList['ActivityList'][$j]['activityUploadedTS'];
            $activityPicture = $activityList['ActivityList'][$j]['activityPicture'];
            $activityUploadedTS  = date("d F Y", strtotime($activityUploadedTS));
            $activityID = $activityList['ActivityList'][$j]['activityID'];
            
            $data .=' <div class="col-md-4">
                                <div class="single-post card">
                                    <div class="img-body">
                                     <img src="http://controlpanel.lci318d.in/activityImages/'.$activityPicture.'" alt="" class="img1">
                                    </div>
                                   
                                    <h4 class="card-body"><span style="color:#FFCF01;"><i class="fa fa-building-o"></i></span>&nbsp; H C&nbsp;-'.'&nbsp;<b style="color:#337ab7;">'.$clubName.'</b></a></h4>
                                    <hr/>
                                    
                                    
                                    <p class="card-body blog-body" >'.$activityDescription.'</p>
                                    <hr/>
                                     
                                     <h5 class="card-body"><span><i class="fa fa-calendar" style="color:green;"></i></span> <span>'.$activityUploadedTS.'</span></h5>
                                     <a href="'.base_url('CActivity_single/').$activityID.'" target="_blank"><button type="button" class="btn" id="b1"    value="">Read More </button></a>
                               
                                
                                </div>
                            </div>';
            
             } 
            }

            
            echo $data;
            
        }




     public function ViewCActivityPaginationCount()
        {
            $contestRuleID = $this->input->post('contestRuleID');
           
               $apiPrefix = $this->config->item('url_prefix');
              $result = $this->ctlib->url($apiPrefix.'ViewCActivityPaginationCount/0/0/'.$contestRuleID);
               $pagination = json_decode($result, true);
             $pagination_Count = count($pagination['paginationCount']);
          $pagination_Count = $pagination['paginationCount'][0]['count'];
             $page = '';
           
           
           if($pagination_Count == 0)
           {
               $page = ' ';
           }
           
            else
            {
               for ($j = 1; $j < $pagination_Count ; $j++) 
            {

           $per_page = 9;
           $pagination_Count = ceil($pagination_Count / $per_page);
           
            $page .='<a class="page-numbers" id="'.$j.'" onclick="changepage(this.id)">'.$j.'</a>';
            
            // <a class="page-numbers" href="#">1</a>
            
             } 
             
            }

            
            echo $page;
            
        }



        public function ViewOneCActivity()
        {
            $activityID = $this->input->post('activityID');
           
            
               $apiPrefix = $this->config->item('url_prefix');
               $result = $this->ctlib->url($apiPrefix.'ViewCActivityPagination?clubID=0&activityID='.$activityID.'&contestRuleID=0&pageNO=0&limit_val=1');
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