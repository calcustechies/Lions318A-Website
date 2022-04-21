<?php
defined('BASEPATH') OR exit('No direct script access allowed');
define('FPDF_FONTPATH', 'font/');
class ClubpointCtrl extends CI_Controller {


    

    

    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->library('Fpdf');
    // }

    // DISPLAY CLUB POINTS IN DATA TABLE
    public function DisplayClubPoints()
    {
        $ClubCategory    =$this->input->post('ClubCategory');
        $MonthID         =$this->input->post('MonthID');
        $apiPrefix = $this->config->item('url_prefix');
        $viewclubpoints = $this->ctlib->url($apiPrefix .'DisplayClubPoints?ClubCategory='.$ClubCategory.'&MonthID='.$MonthID);
         //echo $viewclubpoint;

         $draw = intval($this->input->get("draw"));
         // $start = intval($this->input->get("start"));
         // $length = intval($this->input->get("length"));
 
         //$HNDatas = $this->hospitallib->ViewHospitalNetworks();
         $viewclubpoint = json_decode($viewclubpoints, true);
         $countOfpoints= count($viewclubpoint['viewclubpoint']);
 
         
         $data = [];
         $k=1;
 
         for ($i = 0; $i < $countOfpoints; $i++) {
                        //   $activityStatus = $viewclubpoint['viewclubpoint'][$i]['activityStatusFlag'];
                           $clubID = $viewclubpoint['viewclubpoint'][$i]['clubID'];
                            $clubName = $viewclubpoint['viewclubpoint'][$i]['clubName'];
                        $clubInternationalID = $viewclubpoint['viewclubpoint'][$i]['clubInternationalID'];
            //   if($activityStatus == 0)
            //      {
                       
            //           $clubName = '<span  style="color:red">'.$clubName.'</span>';
                      
                     
            //      }
            
             $ClubCategory = $viewclubpoint['viewclubpoint'][$i]['ClubCategory'];
             $ActivityCount = $viewclubpoint['viewclubpoint'][$i]['ActivityCount'];
             $TotalPoints = $viewclubpoint['viewclubpoint'][$i]['TotalPoints'];
            //  $activityUploadedDate = $viewclubpoint['viewclubpoint'][$i]['activityUploadedDate'];
          
            
             $clubdetail = '<a href="'.base_url('Clubname/'.$clubID).'">'.$clubName.'</a>';
            
          
            if($ClubCategory== 1)
             {
                 $categorydetails ='<p>Category A</p>';
             }
              if($ClubCategory== 2)
             {
                 $categorydetails ='<p>Category B</p>';
             }
              if($ClubCategory== 3)
             {
                 $categorydetails ='<p>Category C</p>';
             }
              if($ClubCategory== 4)
             {
                 $categorydetails ='<p>Category D</p>';
             }
             if($ClubCategory== 5)
             {
                 $categorydetails ='<p>Category E</p>';
             }
             
 
            
 
             $data[] = array(
                 $k,
                 $clubInternationalID,
                 $clubdetail,
                 $categorydetails,
               
              
             );
                $k++;
         }
         $result = array(
             "draw" => $draw,
              "recordsTotal" => $countOfpoints,
              "recordsFiltered" => $countOfpoints,
              "data" => $data
          );
         echo json_encode($result);
         exit();
    }


    // VIEW CLUB DETAILS
    public function clubData()
    {
        $apiPrefix = $this->config->item('url_prefix');
         
        // $r = $this->input->post('mRegion');
        // $z = $this->input->post('mZone');

        $r = 0;
        $z = 0; 
        $result = $this->ctlib->url($apiPrefix.'AllClubs/'.$r.'/'.$z.'/0');
        
        

        $draw = intval($this->input->get("draw"));

      
        //$k=1;


        //Decode received data
        $viewClub= json_decode($result, true);
        $count_of_club = count($viewClub['ClubDetails']);

        $data = [];
        for ($j = 0; $j < $count_of_club; $j++) {

        $clubInternationalID = $viewClub['ClubDetails'][$j]['clubInternationalID'];
            $clubID = $viewClub['ClubDetails'][$j]['clubID'];
            $ClubMemberCount  = $viewClub['ClubDetails'][$j]['ClubMemberCount'];
            $clubName = $viewClub['ClubDetails'][$j]['clubName'];
            $ClubPresidentFirstName = $viewClub['ClubDetails'][$j]['ClubPresidentFirstName'];
            $ClubPresidentMiddleName = $viewClub['ClubDetails'][$j]['ClubPresidentMiddleName'];
            $ClubPresidentLastName = $viewClub['ClubDetails'][$j]['ClubPresidentLastName'];

            $ClubSecretaryFirstName = $viewClub['ClubDetails'][$j]['ClubSecretaryFirstName'];
            $ClubSecretaryMiddleName = $viewClub['ClubDetails'][$j]['ClubSecretaryMiddleName'];
            $ClubSecretaryLastName = $viewClub['ClubDetails'][$j]['ClubSecretaryLastName'];

            $ClubTreasurerFirstName = $viewClub['ClubDetails'][$j]['ClubTreasurerFirstName'];
            $ClubTreasurerMiddleName = $viewClub['ClubDetails'][$j]['ClubTreasurerMiddleName'];
            $ClubTreasurerLastName = $viewClub['ClubDetails'][$j]['ClubTreasurerLastName'];



            $ClubPresidentName = $ClubPresidentFirstName ." ". $ClubPresidentMiddleName ." ". $ClubPresidentLastName;

            $ClubSecretaryName = $ClubSecretaryFirstName ." ". $ClubSecretaryMiddleName ." ". $ClubSecretaryLastName;

            $ClubTreasurerName = $ClubTreasurerFirstName ." ". $ClubTreasurerMiddleName ." ". $ClubTreasurerLastName;
   
            $regionName = $viewClub['ClubDetails'][$j]['regionName'];
            $zoneName = $viewClub['ClubDetails'][$j]['zoneName'];
        
            // $memberStatus = $viewClub['ClubDetails'][$j]['memberStatus'];
            $ClubName = '<a id="view' . $clubID . '"   onclick="generatefpdf(this.id)" class="deletebtn" style="cursor: pointer;">'.$clubName.'</a>';
        


            $data[] = array(
                $clubInternationalID,
                $ClubName,
                $ClubPresidentName,
                $ClubSecretaryName,
                $ClubTreasurerName,
                $regionName,
                $zoneName
          
            );
            
        }

        $result = array(
            "draw" => $draw,
            "recordsTotal" =>  $count_of_club,
            "recordsFiltered" => $count_of_club,
            "data" => $data
        );
        echo json_encode($result);
        exit();
    }
        

    public function view_one_club_data()
    {
        
       
        $cID=$this->input->post('CID');
        $apiPrefix = $this->config->item('url_prefix');
        $r = 0;
        $z = 0; 
         $result = $this->ctlib->url($apiPrefix.'AllClubs/'.$r.'/'.$z.'/'.$cID);
        //$result = $this->ctlib->url($apiPrefix.'AllClubs/0/0/4');
        //$viewdata= $this->ctlib->url($apiPrefix .'DisplayOneClubDetails?clubID='.$cID.''); 

        //print_r($result);
        $viewClub= json_decode($result, true);
        // $count_of_club = count($viewClub['ClubDetails']);

            $date = date('d/m/Y');
            $clubID = $viewClub['ClubDetails'][0]['clubID'];
            //echo  $clubID;
            $clubInternationalID  = $viewClub['ClubDetails'][0]['clubInternationalID'];
            $clubName = $viewClub['ClubDetails'][0]['clubName'];
            $clubCharterDate = $viewClub['ClubDetails'][0]['clubCharterDate'];
            $ClubMemberCount = $viewClub['ClubDetails'][0]['ClubMemberCount'];

            $CharterDate=date('d-m-Y', strtotime($clubCharterDate ) );

            $SponsorClubName = $viewClub['ClubDetails'][0]['SponsorClubName'];
            $zoneName = $viewClub['ClubDetails'][0]['zoneName'];
            $regionName = $viewClub['ClubDetails'][0]['regionName'];
            $statusMasterName = $viewClub['ClubDetails'][0]['statusMasterName'];


            $ClubPresidentProfilePic = $viewClub['ClubDetails'][0]['ClubPresidentProfilePic'];
            $ClubSecretaryProfilePic = $viewClub['ClubDetails'][0]['ClubSecretaryProfilePic'];
            $ClubTreasurerProfilePic = $viewClub['ClubDetails'][0]['ClubTreasurerProfilePic'];
-
        $PresidentProfilePic = "http://controlpanel.lci318d.in/upload/" .$ClubPresidentProfilePic;
        $SecretaryProfilePic = "http://controlpanel.lci318d.in/upload/" .$ClubSecretaryProfilePic;
        $ClubTreasurerProfilePic = "http://controlpanel.lci318d.in/upload/" .$ClubTreasurerProfilePic;


            $ClubPresidentFirstName = $viewClub['ClubDetails'][0]['ClubPresidentFirstName'];
            $ClubPresidentMiddleName = $viewClub['ClubDetails'][0]['ClubPresidentMiddleName'];
            $ClubPresidentLastName = $viewClub['ClubDetails'][0]['ClubPresidentLastName'];

            $ClubSecretaryFirstName = $viewClub['ClubDetails'][0]['ClubSecretaryFirstName'];
            $ClubSecretaryMiddleName = $viewClub['ClubDetails'][0]['ClubSecretaryMiddleName'];
            $ClubSecretaryLastName = $viewClub['ClubDetails'][0]['ClubSecretaryLastName'];

            $ClubTreasurerFirstName = $viewClub['ClubDetails'][0]['ClubTreasurerFirstName'];
            $ClubTreasurerMiddleName = $viewClub['ClubDetails'][0]['ClubTreasurerMiddleName'];
            $ClubTreasurerLastName = $viewClub['ClubDetails'][0]['ClubTreasurerLastName'];
            
            $ClubPresidentInternationalID = $viewClub['ClubDetails'][0]['ClubPresidentInternationalID'];
            $ClubSecretaryInternationalID = $viewClub['ClubDetails'][0]['ClubSecretaryInternationalID'];
            $ClubTreasurerInternationalID = $viewClub['ClubDetails'][0]['ClubTreasurerInternationalID'];

            $ClubPresidentName = $ClubPresidentFirstName ." ". $ClubPresidentMiddleName ." ". $ClubPresidentLastName;

            $ClubSecretaryName = $ClubSecretaryFirstName ." ". $ClubSecretaryMiddleName ." ". $ClubSecretaryLastName;

            $ClubTreasurerName = $ClubTreasurerFirstName ." ". $ClubTreasurerMiddleName ." ". $ClubTreasurerLastName;

            $this->load->library('fpdf');

         $img1 = base_url('/images/lions/logos/NewLogo.png');
         $img2 = base_url('/images/lions/logos/lcilogo.png');

        


        if (!defined('FPDF_FONTPATH')) define('FPDF_FONTPATH', $this->config->item('fonts_path'));
        $this->fpdf = new FPDF('P', 'mm', 'A4', true, 'UTF-8', false);
        $this->fpdf->AliasNbPages();
        $this->fpdf->AddPage();


        
        $this->fpdf->SetFont('Arial', 'B', 20);
        $this->fpdf->Cell(10);
        $this->fpdf->SetTextColor(0, 128, 0);
        $this->fpdf->Image($img1, 5, 5,40);
        $this->fpdf->Cell(100);
        $this->fpdf->Image($img2, 165, 5,40);
        $this->fpdf->Ln(8);
        $this->fpdf->Cell(45);
        $this->fpdf->Cell(105, 10, 'LIONS CLUB INTERNATIONAL', 0, 0, 'L');
        
        $this->fpdf->Ln(10);
        $this->fpdf->SetFont('Arial', 'B', 15);
        $this->fpdf->SetTextColor(0, 0, 0);
        $this->fpdf->Cell(50);
        $this->fpdf->Cell(100, 10, 'DISTRICT 318D', 0, 0, 'C');
        $this->fpdf->Ln(10);
        $this->fpdf->SetFont('Arial', 'B', 12);
        $this->fpdf->SetTextColor(0, 0, 0);
        $this->fpdf->Cell(45);
        $this->fpdf->Cell(70, 10, 'CLUB  DETAILS', 0, 0, 'R');
        $this->fpdf->Ln(5);
        $this->fpdf->Ln(20);
        $this->fpdf->SetFont('Arial', 'B', 12);
        $this->fpdf->Cell(5);
        $this->fpdf->Cell(32, 10, "Club", 0, 0, 'L');
        $this->fpdf->Cell(100, 10, ": ".$clubName , 0, 0, 'L');
        $this->fpdf->Ln(10);
        
        $this->fpdf->Cell(5);
        $this->fpdf->Cell(32, 10, "International ID", 0, 0, 'L');
        $this->fpdf->Cell(50, 10, ": ".$clubInternationalID , 0, 0, 'L');
        
        // $l = $this->lablib->view_all_lab();
        // $view_labs=json_decode($l,true);
        // $count_of_labs = count($view_labs['view_all_lab']);
        $this->fpdf->Cell(30);
        $this->fpdf->Cell(35, 10, "Charter Date", 0, 0, 'C');
        $this->fpdf->Cell(50, 10, ":  ".$CharterDate, 0, 0, 'L');
        //$this->fpdf->Cell(25, 10, ": " . $date, 1, 0, 'L');
        // for($r=0;$r<$count_of_labs;$r++)
        // {
           
        //     $lab_id=$view_labs['Charter Dat'][$r]['$CharterDate'];
        //     $lab_name1=$view_labs['view_all_lab'][$r]['lab_name'];
        //     if($lab_id==$lab_id1)
        //     {
        //         $this->fpdf->Cell(30, 10, ": " .$lab_name1, 0, 0, 'L');
        //     }
      // }

        
        // $this->fpdf->Cell(10);
        // $this->fpdf->Cell(25, 10, "Charter Date", 0, 0, 'L');
        // $this->fpdf->Cell(50, 10, ": ".$clubCharterDate , 0, 0, 'L');
        $this->fpdf->Ln(5);
        $this->fpdf->Ln(5);
        $this->fpdf->Cell(160);
        $this->fpdf->SetFont('Arial', 'B', 12);
        $this->fpdf->Cell(100, 10, "________________________________________________________________________________________________________________________________________________", 0, 0, 'R');

        $this->fpdf->Ln(10);
        //$this->fpdf->Ln(5);
        // $this->fpdf->Cell(50);
        // $this->fpdf->Cell(70, 10, 'CLUB DETAILS', 0, 0, 'R');
        // $this->fpdf->Ln(1);
        // $this->fpdf->Cell(50);
        // $this->fpdf->Cell(70, 10, '______________', 0, 0, 'R');
        //$this->fpdf->Ln(10);

        $this->fpdf->Cell(35, 10, "Region", 0, 0, 'L');
        $this->fpdf->Cell(40,10,": ".$regionName ,0,0,'L');
        $this->fpdf->Cell(30);
        $this->fpdf->Cell(35, 10, "Zone", 0, 0, 'L');
        $this->fpdf->Cell(40, 10, ": ".$zoneName , 0, 0, 'L');
        $this->fpdf->Ln(5);
        $this->fpdf->Ln(5);
        $this->fpdf->Cell(35, 10, "Sponsor Club", 0, 0, 'L');
        $this->fpdf->Cell(40,10,": ".$SponsorClubName ,0,0,'L');
        $this->fpdf->Cell(30);
        $this->fpdf->Cell(35, 10, "Status", 0, 0, 'L');
        $this->fpdf->Cell(40, 10, ": ".$statusMasterName , 0, 0, 'L');
        $this->fpdf->Ln(5);
        $this->fpdf->Ln(5);
        $this->fpdf->Cell(35, 10, "Members", 0, 0, 'L');
        $this->fpdf->Cell(40,10,": ".$ClubMemberCount ,0,0,'L');
        $this->fpdf->Ln(10);
        $this->fpdf->Cell(70);
        $this->fpdf->Cell(100, 10, "________________________________________________________________________________________________________________________________________________", 0, 0, 'C');
        $this->fpdf->Ln(10);
        $this->fpdf->Cell(50);
        $this->fpdf->Cell(70, 10, 'CLUB  BEARERS', 0, 0, 'R');
        $this->fpdf->Ln(1);
        $this->fpdf->Cell(50);
        $this->fpdf->Cell(70, 10, '_______________', 0, 0, 'R');
        $this->fpdf->Ln(10);
        $this->fpdf->Cell(10);
        $this->fpdf->SetFont('Arial', 'B', 15);
        $this->fpdf->SetTextColor(0, 0, 255);
        $this->fpdf->Cell(40, 10, "President", 0, 0, 'C');
        $this->fpdf->Cell(75);
        $this->fpdf->Cell(40, 10, "Secretary", 0, 0, 'C');
        $this->fpdf->Image($PresidentProfilePic, 15, 155,40);
        
        $this->fpdf->Image($SecretaryProfilePic, 135, 155,40);
        $this->fpdf->Ln(55);
        $this->fpdf->SetTextColor(0, 0, 0);
        $this->fpdf->SetFont('Arial', 'B', 10);
        $this->fpdf->Cell(60,10,$ClubPresidentName.' (ID : '.$ClubPresidentInternationalID.')',0,0,'C');
        $this->fpdf->Cell(65);
        $this->fpdf->Cell(30, 10,$ClubSecretaryName.' (ID : '.$ClubSecretaryInternationalID.')' , 0, 0, 'L');
        //$this->fpdf->Cell(30);
        //  $this->fpdf->Ln(5);
        //  $this->fpdf->SetFont('Arial', 'B', 10);
        //  $this->fpdf->Cell(20, 10, "ID", 0, 0, 'C');
        //  $this->fpdf->Cell(60, 10, ": ".$ClubPresidentInternationalID, 0, 0, 'L');
         //$this->fpdf->Cell(40, 10, ": ".$ClubSecretaryName , 0, 0, 'L');
        $this->fpdf->Ln(5);
        $this->fpdf->Ln(5);
         $this->fpdf->Cell(10);

          $this->fpdf->SetTextColor(0, 0, 255);
          $this->fpdf->Cell(35, 10, "Treasurer", 0, 0, 'C');
          $this->fpdf->Image($ClubTreasurerProfilePic, 15,220,40);
          $this->fpdf->Ln(55);
          $this->fpdf->SetTextColor(0, 0, 0);
          $this->fpdf->Cell(50, 10,$ClubTreasurerName.' (ID : '.$ClubTreasurerInternationalID.')'  , 0, 0, 'C');
        
        // $this->fpdf->Cell(40);
        // $this->fpdf->Cell(30, 10, "Doctor Name", 0, 0, 'L');
        // $this->fpdf->Cell(50, 10, ": ".$clubID , 0, 0, 'L');
        $this->fpdf->Ln(5);
        $this->fpdf->Ln(5);

   
        ob_clean();
        $this->fpdf->Output($_SERVER['DOCUMENT_ROOT'] .'/generatepdf/test_receipt.pdf', 'F');
        //}
        echo true;

    }




    //}

}