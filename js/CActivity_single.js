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

                contestRuleName = result.ActivityList[0]['contestRuleName'];
                activityDescription = result.ActivityList[0]['activityDescription'];
                FirstName = result.ActivityList[0]['activityUploadedmemberFirstName'];
                FirstName = ((FirstName == null) ? '': FirstName);
                MiddleName = result.ActivityList[0]['activityUploadedmemberMiddleName'];
                MiddleName = ((MiddleName == null) ? '': MiddleName);
                LastName = result.ActivityList[0]['activityUploadedmemberLastName'];
                LastName = ((LastName == null) ? '': LastName);
                suffix = result.ActivityList[0]['activityUploadedmemberNameSuffix'];
                suffix = ((suffix == null) ? '': suffix);
                activityUploadedTS = result.ActivityList[0]['activityUploadedTS'];
                 club = result.ActivityList[0]['clubName'];
                 image1 = result.ActivityList[0]['activityPicture'];
                 image2 = result.ActivityList[0]['activityPicture1'];
                 NoOfLions = result.ActivityList[0]['NoOfLions'];
                 NoOfLionHrs = result.ActivityList[0]['NoOfLionHrs'];
                 NoOfPpls = result.ActivityList[0]['NoOfPpls'];
                 AmountSpent = result.ActivityList[0]['AmountSpent'];
                region = result.ActivityList[0]['regionName'];
                zone = result.ActivityList[0]['zoneName'];
                 
                
                 
               
                 
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
                
               
                
                
                 
            }
             });
   
   
   
   
   
   
   
   
   
    
});