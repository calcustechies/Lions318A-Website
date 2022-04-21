<!DOCTYPE html>
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<html lang="en-US">

<?php 
$contestID=$this->uri->segment('2');
//echo $contestID;
?>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <title>Lions Club International - District 318D</title>
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

    <link rel="shortcut icon" href="<?php echo base_url();?>images/lions/logos/lcilogo.ico" type="image/x-icon" />
    <link rel='stylesheet' href='<?php echo base_url();?>css/cform.css' type='text/css' media='all' />
    <link rel='stylesheet' href='<?php echo base_url();?>revslider/rs-plugin/css/settings.css' type='text/css' media='all' />
    <link rel='stylesheet' href='<?php echo base_url();?>css/mmenu.css' type='text/css' media='all' />
    <link rel='stylesheet' href='<?php echo base_url();?>css/bootstrap.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='<?php echo base_url();?>css/prettyPhoto.css' type='text/css' media='all' />
    <link rel='stylesheet' href='<?php echo base_url();?>css/animate.css' type='text/css' media='all' />
    <link rel='stylesheet' href='<?php echo base_url();?>css/font-awesome.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='<?php echo base_url();?>css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='<?php echo base_url();?>css/responsive.css' type='text/css' media='all' />
    <link rel='stylesheet' href='<?php echo base_url();?>css/masterslider.main.css' type='text/css' media='all' />
    <link rel='stylesheet' href='<?php echo base_url();?>css/master-custom.css' type='text/css' media='all' />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


 

    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Montserrat%3A400%2C400italic%2C500%2C600%2C700%7CMontserrat%3A400%2C400italic%2C500%2C600%2C700%7CMontserrat%3A400%2C400italic%2C500%2C600%2C700%7CMontserrat%3A400%2C400italic%2C500%2C600%2C700%7CRoboto%3A400%2C400italic%2C500%2C600%2C700&amp;subset&amp;ver=4.2.2'
        type='text/css' media='all' />

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="http://cdn.datatables.net/responsive/1.0.2/css/dataTables.responsive.css"/>
    
     <link rel="stylesheet" href="<?php echo base_url();?>lightbox/css/lightbox.css">
     <style>
         .i1
         {
             width:50px;
             height:40px;
         }
         
       

 
  .active, .btn:hover {

  color: white;
}




#img1 {
  height:150px !important;
    width:150px !important;
}

.card
{
position:relative;
min-width:0;word-wrap:break-word;
background-color:#fff;background-clip:border-box;
border:1px solid #FFCF01;
border-radius:.25rem
    
}

.card-body {
    -ms-flex: 1 1 auto;
    overflow : hidden;
    padding: 1.25rem;
    height : 60px;
}

.blog-body
{
    height:90px;
    /*overflow : hidden !important;*/
    text-overflow: ellipsis;
    padding: 1.25rem;
    display:inline-block;
    /*white-space: nowrap;*/

    
}

.img-body
{
    min-height:250px;
    min-width:250px;
    border:1px;
}

.img1
{
    width:100%;
    height:250px;
}

#b1
{
    float:right;
    position:relative;
    margin-top:-50px;
    background:#112E57;
    padding:10px;
    color:white;
     min-width:110px;
}
/*#img2 {*/
/*  height:200px !important;*/
/*    width:150px !important;*/
/*}*/

#title
{
    position: relative;
    left:5%;

}
#IntID
{
    color:black;
    font-weight:2px;
}

#clubdata
{
    color:black;
    font-weight:2px;
}
#caption5
{
    font-size: 10px;
    color:#337ab7;
    font-weight:1px;
}


.blog-post-area .pegination {
    margin-top: 60px;
    margin-bottom: 60px;
}

.blog-post-area .pegination .nav-links {
    margin: 0;
    padding: 0;
    text-align: center;
}

.blog-post-area .pegination .nav-links .page-numbers {
    border: 1px solid #112E57;
    border-radius: 50%;
    color: #112E57;
    display: inline-block;
    font-family: "Roboto", sans-serif;
    font-size: 15px;
    font-weight: 400;
    height: 45px;
    line-height: 45px;
    list-style: outside none none;
    margin-right: 5px;
    text-align: center;
    width: 45px;
}

.blog-post-area .blog-post-area-style {
    margin: 0 20px 0 40px;
}

.blog-post-area .pegination .nav-links .page-numbers.current {
    background: #112E57;
    color: #fff;
}

.blog-post-area .pegination .nav-links .page-numbers:hover {
    background: #112E57;
    color: #fff;
}

.blog-post-area .pegination .nav-links a {
    text-decoration: none;
}

hr
{
display: block;
margin-top: 0;
margin-bottom: 0;
margin-left: 10px;
margin-right: 10px;
border-style: dotted;
border-color:grey;
padding :1px;
}

@media  (min-width: 768px) {
  .card {
    min-width: 300px;
  }
}
     

     </style>
</head>

<body id="one-page-home" class="page page-id-8 page-template page-template-template-onepage page-template-template-onepage-php custom-background _masterslider _msp_version_2.9.12 waves-pagebuilder menu-fixed header-transparent theme-full">

    <div id="theme-layout">

        <!-- Start Header -->
        <div class="header-container">
            <header id="header" class="header-large clearfix" style="background-color: #112E57;">
                <div class="show-mobile-menu clearfix">
                    <a href="#" class="mobile-menu-icon">
                        <span></span><span></span><span></span><span></span>
                    </a>
                </div>
                <div class="tw-logo">
                    <a class="logo" href="<?php echo base_url('Index');?>"><img class="logo-img" src="<?php echo base_url();?>images/lions/logos/NewLogo.png" alt="Lions Club - District 318D" /></a>
                </div>
                <nav class="menu-container clearfix">
                    <div class="tw-menu-container">
                        <ul id="menu" class="sf-menu">
                            <li class="menu-item"><a href="<?php echo base_url('Index');?>">Home</a>
                            </li>
                            <li class="menu-item "><a href="<?php echo base_url('Pointtable');?>">Points Table</a></li>
                            <li class="menu-item"><a href="<?php echo base_url('Events');?>">Events</a></li>
                            <li class="menu-item"><a href="<?php echo base_url('Visits');?>">Visits</a></li>
                            <li class="menu-item"><a href="<?php echo base_url('Gallery');?>">Gallery</a></li>
                            <li class="menu-item"><a href="<?php echo base_url('Districtmembers');?>">District Members</a></li>
                          <li class="menu-item  "><a href="<?php echo base_url('OurProjects');?>" style="font-size=12px;" target="_blank" >Contest Rule</a> 
                            
                            <li class="menu-item btn btn-primary"><a href="http://controlpanel.lci318d.in">Login</a></li>
                            <!-- <button class="btn btn-primary" style="margin: 10px;">LOGIN</button> -->
                    <div class="tw-logo" style="margin-top: 5px;">
                    <a class="logo" href="<?php echo base_url('Index');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;<img class="<?php echo base_url();?>logo-img" src="<?php echo base_url();?>images/lions/logos/lcilogo.png" alt="Lions Club - District 318D" /></a>
                </div>
                        </ul>
                    </div>
                </nav>
                
                 <nav id="mobile-menu">
                    <ul id="menu-one-page-new" class="clearfix">
                        <li class="menu-item tw-menu-active"><a href="<?php echo base_url('Index');?>">Home</a>
                        </li>
                        <li class="menu-item"><a href="<?php echo base_url('Pointtable');?>">Points Table</a></li>
                        <li class="menu-item"><a href="<?php echo base_url('Events');?>">Events</a></li>
                        <li class="menu-item"><a href="<?php echo base_url('Visits');?>">Vists</a></li>
                        <li class="menu-item"><a href="<?php echo base_url('Gallery');?>">Gallery</a></li>
                    <li class="menu-item  "><a href="<?php echo base_url('OurProjects');?>" style="font-size=12px;" target="_blank">Contest Rule</a> 
                        <li class="menu-item btn btn-primary"><a href="http://controlpanel.lci318d.in">Login</a></li>
                        <!-- <button class="btn btn-primary" style="margin: 10px;">LOGIN</button> --> 
                       
                    </ul>
                </nav>

            </header>
            <div class="header-clone">
            </div>
        </div>
        <!-- End Header -->



        <!-- Start Main -->
        <section id="main">
            <div id="page" style="padding-top: 50px;">
                <div class="col-md-12">
                    <h4 class="text-center" style="background-color:#FFCF01;padding:10px;margin-top:10px;color:#112E57">CONTEST RULE
                    </h4>
                </div>
               
                <div class="row" style="margin: 20px;">
                    <div class="col-md-4 col-sm-4" >
                    <!--<label style="font-size: 15px;">Contest RuleName:</label>-->
                    <!--<input class=" form-control eventdetails" value="<?php //echo $contestRuleName;?>"  type="text" >-->
                    
                          

                        </div>
               
                 <div class="col-md-04">
                      
                    
                </div> 
                <div class="col-md-4 col-sm-4">
                
               
               <input class=" form-control"  type="text" readonly id="contestRuleName">
               
                </div>

                <div class="col-md-4 col-sm-4">
                <!--<label style="font-size: 15px;">contest RuleDate:</label>-->
                <!--<input class="form-control eventdetails" value="2021-06-30"  type="date" id="endDate">-->

                </div>

                </div>

                <div class="row" style="margin: 20px;" id="">

            <section class="blog-post-area">
            <div class="container">
                <div class="row">
                    <div class="blog-post-area-style " id="ContestRuleData">
                          
                            
                            
                            
                            
                            
                           
                    </div>
                </div>
            </div>
            <div class="pegination" >
              


                <div class="nav-links" id="pagination">
                   
               
                    
                </div>
            </div>
        </section>


                </div>
                <!-- end row -->
        </section>

        <!-- Storing Base URL in Hidden Input -->
  <input type="hidden" id="base" value="<?php echo base_url(); ?>">
  <input type="hidden" id="contestRuleID" value="<?php echo $i;?>">
  <script src="<?php echo base_url();?>js/general/contestRuleDetails.js"></script>

        <!-- End Main -->
        <footer id="footer" style="position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;">
            <!-- Start Container -->
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <p class="copyright">
                            © 2020 <a href='#' title='Lions Club Internation - District 318D'>LCI - District 318D |
                                Developed By </a><a href='http://calcus.in' target="_blank" title='Calcus Technologies' style="color: #000;">Calcus Technologies Pvt.Ltd</a>
                        </p>

                        </a>
                    </div>
                    <div class="col-md-4">
                        <div class="" style="text-align: right;">
                            <img src="https://raw.githubusercontent.com/bradleytaunt/html5-valid-badge/master/html5-validator-badge-blue.png" alt="" height="50px" width="70px">
                            <a href="http://www.w3.org/html/logo/">
                                <img src="https://www.w3.org/html/logo/badge/html5-badge-h-connectivity-css3-device-performance-semantics.png" height="50px" width="100px" alt="HTML5 Powered with Connectivity / Realtime, CSS3 / Styling, Device Access, Performance &amp; Integration, and Semantics"
                                    title="HTML5 Powered with Connectivity / Realtime, CSS3 / Styling, Device Access, Performance &amp; Integration, and Semantics">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Container -->
        </footer>
        </div>
        <a id="scrollUp" title="Scroll to top"><i class="fa fa-chevron-up"></i></a>
      <!-- DATE PICKER -->
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <link href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" />

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src='<?php echo base_url(); ?>js/jquery.js'></script>
        <script src='<?php echo base_url(); ?>js/jquery-migrate.min.js'></script>
        <script src='<?php echo base_url(); ?>revslider/rs-plugin/js/jquery.themepunch.tools.min.js'></script>
        <script src='<?php echo base_url(); ?>revslider/rs-plugin/js/jquery.themepunch.revolution.min.js'></script>
        <script src='<?php echo base_url(); ?>js/jquery.form.min.js'></script>
        <script src='<?php echo base_url(); ?>js/contact-form.js'></script>
        <script src='<?php echo base_url(); ?>js/scripts.js'></script>
        <script src='<?php echo base_url(); ?>js/waves-script.js'></script>
        <script src='<?php echo base_url(); ?>js/themewaves.js'></script>
        <!-- <script src='js/smoothscroll.js'></script> -->
        <script src='https://maps.googleapis.com/maps/api/js'></script>
        <script src='<?php echo base_url(); ?>js/jquery.jplayer.min.js'></script>
        <script src='<?php echo base_url(); ?>js/jquery.easy-pie-chart.js'></script>
        <script src='<?php echo base_url(); ?>js/Chart.min.js'></script>
        <script src='<?php echo base_url(); ?>js/jquery.parallax.js'></script>
        <script src='<?php echo base_url(); ?>js/jquery.jplayer.min.js'></script>
        <script src='<?php echo base_url(); ?>js/jquery.isotope.min.js'></script>
         <script src="<?php echo base_url();?>lightbox/js/lightbox.js"></script>
        
       

        <!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

        <script src="<?php echo base_url(); ?>js/general/events.js"></script>

        <script>
            $(document).ready(function() {
                $('#contestdatatable').DataTable();
            });
        </script>



        <script>
            /* <![CDATA[ */
            var waves_script_data = {
                "home_uri": "http:\/\/themes.themewaves.com\/lion",
                "menu_padding": "33",
                "menu_wid_margin": "30",
                "blog_art_min_width": "230",
                "pageloader": "0",
                "header_height": "80"
            };
            /* ]]> */
        </script>
        <script>
            var ms_grabbing_curosr = 'common/grabbing.cur',
                ms_grab_curosr = 'wp-content/plugins/masterslider/public/assets/css/common/grab.cur';
        </script>

<script>
// function myFunction() {
//   document.getElementById("endDate").value = "2021-30-06";
// }
</script>
</body>


</html>


