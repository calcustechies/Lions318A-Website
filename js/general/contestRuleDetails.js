var base = $('#base').val();
var CID = $('#contestRuleID').val();


$(document).ready(function(){


   contestRuleID = CID;
   activityID = 0;
   pageNo = 1;
   pageLimit = 9;
  
   
    $.ajax({

            type: 'POST',
            url: base_url + "ContestRuleDetails/PaginationData",
            data: {
                
               contestRuleID : contestRuleID,
               activityID :activityID,
               pageNo : parseInt(pageNo -1) * parseInt(pageNo),
               pageLimit : pageLimit,
               
               
            },
            success: function (data) {
                
                result = JSON.parse(data);
                contestRuleName = result.contestRuleName;
                ContestRuleData = result.ContestRuleData;
               
             
               
                $('#ContestRuleData').html(ContestRuleData);
                $('#contestRuleName').val(contestRuleName);
                
                      $.ajax({
                
                                            type: 'POST',
                                            url: base_url + "ContestRuleDetails/PaginationCount",
                                            data:{
                                            contestRuleID : contestRuleID ,
                                            activityID : activityID
                                            
                                            },
                                            success: function (data) {
                                                
                                                
                                                $('#pagination').html(data);
                                                $('#'+pageNo).css("background","#112E57");
                                                $('#'+pageNo).css("color","white");
                                              }
                                      });
                
                
                
                
            }
            });
            
   
   

});



function changepage(e)
{
    
     contestRuleID = CID;
     activityID = 0;
     pageNo = e;
     pageLimit = 9;
  
     
     
            $.ajax({

            type: 'POST',
            url: base_url + "ContestRuleDetails/PaginationData",
            data: {
                
               contestRuleID : contestRuleID,
               activityID :activityID,
               pageNo : parseInt(e -1) * parseInt(pageNo),
               pageLimit : pageLimit,
               
               
            },
            success: function (data) {
                
               
                
                result = JSON.parse(data);
                contestRuleName = result.contestRuleName;
                ContestRuleData = result.ContestRuleData;
               
             
               
                $('#ContestRuleData').html(ContestRuleData);
                $('#contestRuleName').val(contestRuleName);
                
                      $.ajax({
                
                                            type: 'POST',
                                            url: base_url + "ContestRuleDetails/PaginationCount",
                                            data:{
                                            contestRuleID : contestRuleID ,
                                            activityID : activityID
                                            
                                            },
                                            success: function (data) {
                
                                                $('#pagination').html(data);
                                                $('#'+pageNo).css("background","#112E57");
                                                $('#'+pageNo).css("color","white");
                                              }
                                      });
                
                
                
                
            }
            });
                
               
    
        
    
}