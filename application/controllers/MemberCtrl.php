<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MemberCtrl extends CI_Controller {




// VIEW ALL MEMBER IN DATA TABLE
    public function viewMember()
    {


        $apiPrefix = $this->config->item('url_prefix');
        $r = $this->input->post('mRegion');
        $z = $this->input->post('mZone');
        $c = $this->input->post('mClub');
     
        $result = $this->ctlib->url($apiPrefix . 'FilterMembersOptimized/' . $r .'/'. $z.'/'.$c.'/0');
        

        $draw = intval($this->input->get("draw"));

      
        $k=1;


        //Decode received data
        $viewMember = json_decode($result, true);
        $count_of_Members = count($viewMember['MemberInfo']);

        $data = [];
        for ($j = 0; $j < $count_of_Members; $j++) {

            $memberID = $viewMember['MemberInfo'][$j]['memberID'];
            $memberInternationalID  = $viewMember['MemberInfo'][$j]['memberInternationalID'];
            $memberFirstName = $viewMember['MemberInfo'][$j]['memberFirstName'];
            $memberMiddleName = $viewMember['MemberInfo'][$j]['memberMiddleName'];
            $memberLastName = $viewMember['MemberInfo'][$j]['memberLastName'];
            $memberName = $memberFirstName ." ". $memberMiddleName ." ". $memberLastName;
   
            $memberClubID = $viewMember['MemberInfo'][$j]['memberClubID'];
            $clubName = $viewMember['MemberInfo'][$j]['clubName'];
        
            $memberStatus = $viewMember['MemberInfo'][$j]['memberStatus'];

        


            $data[] = array(
                // $k,
                $memberID,
                $memberInternationalID,
                $memberName,
                $clubName
          
            );
            $k++;
        }

        $result = array(
            "draw" => $draw,
            "recordsTotal" =>  $count_of_Members,
            "recordsFiltered" => $count_of_Members,
            "data" => $data
        );
        echo json_encode($result);
        exit();
    }





   // VIEW REGION
public function regionData()
    {
        $apiPrefix = $this->config->item('url_prefix');
        
        $result = $this->ctlib->url($apiPrefix.'AllRegions/0');
        //echo $result;

        $viewRegion = json_decode($result, true);
        $count_of_Regions = count($viewRegion['RegionDetails']);
        
        
        $options =  '<option value="0">Choose Region</option>';

        for ($j = 0; $j < $count_of_Regions ; $j++) {

            $regionID  = $viewRegion['RegionDetails'][$j]['regionID'];
            $regionName = $viewRegion['RegionDetails'][$j]['regionName'];
            $options .= '<option value="'.$regionID.'">'.$regionName.'</option>';
        }
        
        echo  $options;


    }


    // VIEW ZONE
    public function zoneData()
    {
        
        $apiPrefix = $this->config->item('url_prefix');
         
        $z = $this->input->post('Region');
        
        $result = $this->ctlib->url($apiPrefix.'AllZones/'.$z.'/0');
        //echo $result;
        $viewZone = json_decode($result, true);
        $count_of_Zones = count($viewZone['ZoneDetails']);

        $options = '';
        $options .=  '<option value="0">Choose Zone</option>';

        for ($j = 0; $j < $count_of_Zones ; $j++) {

            $zoneID  = $viewZone['ZoneDetails'][$j]['zoneID'];
            $zoneName = $viewZone['ZoneDetails'][$j]['zoneName'];
            $options .= '<option value="'.$zoneID.'">'.$zoneName.'</option>';
            
        
        
    }
    echo   $options;
    }


    // VIEW CLUB DETAILS
    public function clubData()
    {
        $apiPrefix = $this->config->item('url_prefix');
         
        $r = $this->input->post('upRegion');
        $z = $this->input->post('upZone');

        
        $result = $this->ctlib->url($apiPrefix.'AllClubs/'.$r.'/'.$z.'/0');
        //echo $result;

        $viewClub = json_decode($result, true);
        $count_of_Clubs = count($viewClub['ClubDetails']);

        $options = '';
        $options .=  '<option value="0">Choose Club</option>';

        for ($j = 0; $j < $count_of_Clubs ; $j++) {

            $clubID  = $viewClub['ClubDetails'][$j]['clubID'];
            $clubName = $viewClub['ClubDetails'][$j]['clubName'];
            $options .= '<option value="'.$clubID.'">'.$clubName.'</option>';
        }
        
        echo   $options;
        
        


    }
    //ParentMemberList
    
    public function viewMembersimage()
    {
        
        $apiPrefix = $this->config->item('url_prefix');
         
        $deatailsID   =$this->input->post('detailId');
        $result = $this->ctlib->url($apiPrefix.'viewParentRoleMemberListFiltered/'.$deatailsID);
        
        //print_r($result);
        echo   $result;
    }
    
    public function List_CPAM()
    {
        
        $apiPrefix = $this->config->item('url_prefix');
         
      
        $result = $this->ctlib->url($apiPrefix.'viewParentRoleMemberListFiltered/2');
        
    
        echo   $result;
    }
    
    public function List_AAS()
    {
        
        $apiPrefix = $this->config->item('url_prefix');
         
      
        $result = $this->ctlib->url($apiPrefix.'viewParentRoleMemberListFiltered/3');
        
    
        echo   $result;
    }
     public function List_ACS()
    {
        
        $apiPrefix = $this->config->item('url_prefix');
         
      
        $result = $this->ctlib->url($apiPrefix.'viewParentRoleMemberListFiltered/4');
        
    
        echo   $result;
    }
    
    
    public function List_Others()
    {
        
        $apiPrefix = $this->config->item('url_prefix');
         
      
        $result = $this->ctlib->url($apiPrefix.'viewParentRoleMemberListFiltered/5');
        
    
        echo   $result;
    }



    // VIEW CLUB DETAILS
    public function viewAllRoles()
    {
        $apiPrefix = $this->config->item('url_prefix');
         
        
        
        $result = $this->ctlib->url($apiPrefix.'AllRoles/0/0');
        //echo $result;

        $viewroles = json_decode($result, true);
        $count_of_roles = count($viewroles['RoleDetails']);

        $options = '';
        $options .=  '<option value="1">DG TEAM</option>';

        for ($j = 0; $j < $count_of_roles ; $j++) {

            $roleID  = $viewroles['RoleDetails'][$j]['roleID'];
            $rolesName = $viewroles['RoleDetails'][$j]['rolesName'];
            $options .= '<option value="'.$roleID.'">'.$rolesName.'</option>';
        }
        
        echo   $options;
        
        


    }





}