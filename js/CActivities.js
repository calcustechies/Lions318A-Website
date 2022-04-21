var base_url = $('#base').val();
var adminUrl = "http://controlpanelapi.lci318d.in/";

$(document).ready(function () {
    
    
 
   pageNO = 1;
   limit_val = 9;
    
    
     
    
    
    
    $.ajax({

            type: 'GET',
            url: base_url + "CActivititesCtrl/contestRuleList",
            data: {
               
            },
            success: function (data) {
                
             
             
             $('#contestRuleList').html(data);
             
                $.ajax({

            type: 'POST',
            url: base_url + "CActivititesCtrl/CActivityData",
            data: {
                contestRuleID : 0 ,
                pageNO : (pageNO -1) *limit_val,
                limit_val  : limit_val ,
            },
            success: function (data) {


                result = JSON.parse(data);
                count = Object.keys(result.ActivityList).length;
                for(i=0;i<count;i++)
                {
                    if(i == 0)
                    {
                    contestRule_ID = result.ActivityList[0]['contestRuleID'];
                    $('#contestRuleList option[value='+ contestRule_ID +']').css('display','block').attr('selected','selected');
                     contestRuleID =$('#contestRuleList').val();
                     $.ajax({

                            type: 'POST',
                            url: base_url + "CActivititesCtrl/ViewCActivityPaginationLoad",
                            data: {
                                       contestRuleID : contestRuleID ,
                                       pageNO : (pageNO -1) *limit_val,
                                        limit_val  : limit_val ,
                                 },
                                         success: function (data) {
                
                
             
                                     $('#activityBlog').html(data);
                                     $.ajax({
                
                                            type: 'POST',
                                            url: base_url + "CActivititesCtrl/ViewCActivityPaginationCount",
                                            data:{
                                            contestRuleID : contestRuleID ,
                                            },
                                            success: function (data) {
                
                                                $('#pegination').html(data);
                                                $('#'+pageNO).css("background","#112E57");
                                                $('#'+pageNO).css("color","white");
                                              }
                                      });
                                     }
                               });
                                }
                            else
                           {
                                 contestRule_ID = result.ActivityList[i]['contestRuleID'];
                                 $('#contestRuleList option[value='+ contestRule_ID +']').css('display','block');
                            }
                    
                }
                
                
               
            }
     });
                
     
            }
    });
    
});

function activityData()
{
     contestRuleID =$('#contestRuleList').val();
     pageNO = 1;
     limit_val = 9;
     
            $.ajax({

            type: 'POST',
            url: base_url + "CActivititesCtrl/ViewCActivityPaginationLoad",
            data: {
                contestRuleID : contestRuleID ,
                pageNO : parseInt(pageNO -1) * parseInt(limit_val),
                limit_val  : limit_val ,
            },
            success: function (data) {
                
                
               
                 $('#activityBlog').html(data);
            }
             });
                
                
                $.ajax({
                
            type: 'POST',
            url: base_url + "CActivititesCtrl/ViewCActivityPaginationCount",
            data: {
                contestRuleID : contestRuleID ,
            },
            success: function (data) {
                
               
                // alert(data);
                 $('#pegination').html(data);
                 $('#'+pageNO).css("background","#112E57");
                 $('#'+pageNO).css("color","white");
            }
             });
                
    
        
    
}




function changepage(e)
{
     contestRuleID =$('#contestRuleList').val();
     pageNO = e;
     limit_val = 9;
     
     
            $.ajax({

            type: 'POST',
            url: base_url + "CActivititesCtrl/ViewCActivityPaginationLoad",
            data: {
                contestRuleID : contestRuleID ,
                pageNO : parseInt(pageNO -1) * parseInt(limit_val),
                limit_val  : limit_val ,
            },
            success: function (data) {
                
                
            
                 $('#activityBlog').empty().html(data);
                 
            $.ajax({
                
            type: 'POST',
            url: base_url + "CActivititesCtrl/ViewCActivityPaginationCount",
            data: {
                contestRuleID : contestRuleID ,
            },
            success: function (data) {
                
               
                // alert(data);
                 $('#pegination').empty().html(data);
                 $('#'+pageNO).css("background","#112E57");
                 $('#'+pageNO).css("color","white");
            }
             });
                
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
            }
             });
                
                
               
    
        
    
}

