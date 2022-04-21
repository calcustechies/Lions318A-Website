var base_url = $('#base').val();
var activityID = $('#activityID').val();

$(document).ready(function () {
    
    
   
   $('.preview1, .preview2').hide();
   $.ajax({
                
            type: 'POST',
            url: base_url + "ContestRuleDetails/ViewOneActivity",
            data: {
                activityID : activityID ,
            },
            success: function (data) {
                
              
           
               result = JSON.parse(data);

                contestRuleName = result.ContestDetails[0]['contestRuleName'];
                contestRuleID = result.ContestDetails[0]['contestRuleID'];
                activityDescription = result.ContestDetails[0]['activityDescription'];
                FirstName = result.ContestDetails[0]['activityUploadedmemberFirstName'];
                FirstName = ((FirstName == null) ? '': FirstName);
                MiddleName = result.ContestDetails[0]['activityUploadedmemberMiddleName'];
                MiddleName = ((MiddleName == null) ? '': MiddleName);
                LastName = result.ContestDetails[0]['activityUploadedmemberLastName'];
                LastName = ((LastName == null) ? '': LastName);
                suffix = result.ContestDetails[0]['activityUploadedmemberNameSuffix'];
                suffix = ((suffix == null) ? '': suffix);
                activityUploadedTS = result.ContestDetails[0]['activityUploadedTS'];
                 club = result.ContestDetails[0]['clubName'];
                 image1 = result.ContestDetails[0]['activityPicture'];
                 image2 = result.ContestDetails[0]['activityPicture1'];
                 NoOfLions = result.ContestDetails[0]['NoOfLions'];
                 NoOfLionHrs = result.ContestDetails[0]['NoOfLionHrs'];
                 NoOfPpls = result.ContestDetails[0]['NoOfPpls'];
                 AmountSpent = result.ContestDetails[0]['AmountSpent'];
                region = result.ContestDetails[0]['regionName'];
                zone = result.ContestDetails[0]['zoneName'];
                 
                
                 
               url = "http://lci318d.in/Contestdetails/"+contestRuleID;
                 
                name = "Lion" +' '+FirstName+' '+MiddleName+' ' + LastName+' '+suffix;
                
                var d = new Date(activityUploadedTS);
                var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
                var date = d.getDate();
                var month = months[d.getMonth()];
                var year = d.getFullYear();
                date = date + ' ' + month + ' '+year;
                
                
                $('#contestRule').html(contestRuleName);
                $('#lions').html(NoOfLions);
                $('#time').html(NoOfLionHrs);
                $('#persons').html(NoOfPpls);
                AmountSpent = AmountSpent.replace(/(\d)(?=(\d\d)+\d$)/g, "$1,");
                $('#money').html(AmountSpent);
                $('#activityDescription').html(activityDescription);
                $('#postedBY').html(name);
                $('#date').html(date);
                $('#region').html(region);
                $('#zone').html(zone);
                $('#club').html(club);
                if(image1 != null)
                {
                     $('.preview1').show();
                     $('.image1').attr("src", 'http://controlpanel.lci318d.in/activityImages/'+ image1);
                     $('#link1').attr("href", 'http://controlpanel.lci318d.in/activityImages/'+ image1);
                }
               if(image2 != null)
                {
                     $('.preview2').show();
                     $('.image2').attr("src", 'http://controlpanel.lci318d.in/activityImages/'+ image2);
                     $('#link2').attr("href", 'http://controlpanel.lci318d.in/activityImages/'+ image2);
                }
                
                $('#url').attr('href',url);
               
                
                
                 
            }
             });
   
   
   
   
   
   
   
   
   
    
});