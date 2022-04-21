var base_url = $('#base').val();

$(document).ready(function () {
    
   
    
    $.ajax({

            type: 'POST',
            url: base_url + "MemberCtrl/viewMembersimage",
            data: {
                detailId    :1
            },
            success: function (data) {
                
             result = JSON.parse(data);
             count = result.RoleMemberList.length;
             
             for(j=0; j< count ;j++)
             {
                 
                // photo = result.RoleMemberList[j]['rolesName'];
                 firstName = result.RoleMemberList[j]['memberFirstName'];
                 firstName = ((firstName == null) ? ' ': firstName);
                 middleName = result.RoleMemberList[j]['memberMiddleName'];
                 middleName = ((middleName == null) ? ' ': middleName);
                 lastName = result.RoleMemberList[j]['memberLastName'];
                 lastName = ((lastName == null) ? ' ': lastName);
                 suffix = result.RoleMemberList[j]['memberNameSuffix'];
                 suffix = ((suffix == null) ? ' ': suffix);
                 picName = result.RoleMemberList[j]['memberProfilePic'];
                 id = result.RoleMemberList[j]['memberInternationalID'];
                 clubName = result.RoleMemberList[j]['clubName'];
                 roleName = result.RoleMemberList[j]['rolesName'];
                 
                 name = 'Lion' + ' ' + firstName + ' '+middleName + ' '+ lastName + ' '+suffix;
                 url = 'http://controlpanel.lions318a.com/upload/' +picName;
                
                $('#title').append('<figure><figcaption id="caption1">'+roleName+'</figcaption><img src="'+ url +'" id="img1" ><figcaption id="caption2">'+name+'</figcaption><p><figcaption id="caption3">International  ID-'+'<span id="IntID">'+id+'</span>'+'</figcaption></p><p><figcaption id="caption4">H C-'+'<span id="clubdata">'+clubName+'</span>'+'</figcaption></p></figure>');
                
               
                 
             }
               
            }
        });
            

    // $('#roleList').click(function(){
        
    //      //$('#dg_team').attr("selected","selected");
    //      var detailId = $('#roleList').val();
    //     $('#title').empty();
    //     $.ajax({

    //         type: 'GET',
    //         url: base_url + "MemberCtrl/viewMembersimage",
    //         data: {
    //             detailId    :   detailId
    //         },
    //         success: function (data) {
                
              
                
    //          result = JSON.parse(data);
    //          count = result.RoleMemberList.length;
             
    //          for(j=0; j<= count ;j++)
    //          {
    //              roleName1 = result.RoleMemberList[j]['rolesName'];
    //              //photo = result.RoleMemberList[j]['rolesName'];
    //              firstName = result.RoleMemberList[j]['memberFirstName'];
    //              firstName = ((firstName == null) ? ' ': firstName);
    //              middleName = result.RoleMemberList[j]['memberMiddleName'];
    //              middleName = ((middleName == null) ? ' ': middleName);
    //              lastName = result.RoleMemberList[j]['memberLastName'];
    //              lastName = ((lastName == null) ? ' ': lastName);
    //              suffix = result.RoleMemberList[j]['memberNameSuffix'];
    //              suffix = ((suffix == null) ? ' ': suffix);
    //              picName = result.RoleMemberList[j]['memberProfilePic'];
    //              id = result.RoleMemberList[j]['memberInternationalID'];
                 
                 
    //              name = 'Lion' + ' ' + firstName + ' '+middleName + ' '+ lastName + ' '+suffix;
    //              url = 'http://controlpanel.lci318d.in/upload/' +picName;
                
    //             $('#title').append('<figure><figcaption id="caption1">'+roleName1+'</figcaption><img src="'+ url +'" id="img1" ><figcaption id="caption2">'+name+'</figcaption><p><figcaption id="caption3">International  ID-'+'<span id="IntID">'+id+'</span>'+'</figcaption></p></figure>');
                
               
                 
    //          }
               
    //         }
    //     });
        
    // });
    
    // $('#CPAM').click(function(){
    //     $(this).attr("selected","selected");
    //     $('#title').empty();
    //     $.ajax({

    //         type: 'GET',
    //         url: base_url + "MemberCtrl/List_CPAM",
    //         data: {
    //         },
    //         success: function (data) {
                
              
                
    //          result = JSON.parse(data);
    //          count = result.RoleMemberList.length;
             
    //          for(j=0; j<= count ;j++)
    //          {
    //              roleName = result.RoleMemberList[j]['rolesName'];
    //              photo = result.RoleMemberList[j]['rolesName'];
    //              firstName = result.RoleMemberList[j]['memberFirstName'];
    //              firstName = ((firstName == null) ? ' ': firstName);
    //              middleName = result.RoleMemberList[j]['memberMiddleName'];
    //              middleName = ((middleName == null) ? ' ': middleName);
    //              lastName = result.RoleMemberList[j]['memberLastName'];
    //              lastName = ((lastName == null) ? ' ': lastName);
    //              suffix = result.RoleMemberList[j]['memberNameSuffix'];
    //              suffix = ((suffix == null) ? ' ': suffix);
    //              picName = result.RoleMemberList[j]['memberProfilePic'];
    //              id = result.RoleMemberList[j]['memberInternationalID'];
                 
                 
    //              name = 'Lion' + ' ' + firstName + ' '+middleName + ' '+ lastName + ' '+suffix;
    //              url = 'http://controlpanel.lci318d.in/upload/' +picName;
                
    //             $('#title').append('<figure><figcaption id="caption1">'+roleName+'</figcaption><img src="'+ url +'" id="img1" ><figcaption id="caption2">'+name+'</figcaption><p><figcaption id="caption3">International  ID-'+'<span id="IntID">'+id+'</span>'+'</figcaption></p></figure>');
                
               
                 
    //          }
               
    //         }
    //     });
        
    // });
    
    
    // $('#AAS').click(function(){
    //     $('#title').empty();
    //     $.ajax({

    //         type: 'GET',
    //         url: base_url + "MemberCtrl/List_AAS",
    //         data: {
    //         },
    //         success: function (data) {
                
              
                
    //          result = JSON.parse(data);
    //          count = result.RoleMemberList.length;
             
    //          for(j=0; j<= count ;j++)
    //          {
    //              roleName = result.RoleMemberList[j]['rolesName'];
    //              photo = result.RoleMemberList[j]['rolesName'];
    //              firstName = result.RoleMemberList[j]['memberFirstName'];
    //              firstName = ((firstName == null) ? ' ': firstName);
    //              middleName = result.RoleMemberList[j]['memberMiddleName'];
    //              middleName = ((middleName == null) ? ' ': middleName);
    //              lastName = result.RoleMemberList[j]['memberLastName'];
    //              lastName = ((lastName == null) ? ' ': lastName);
    //              suffix = result.RoleMemberList[j]['memberNameSuffix'];
    //              suffix = ((suffix == null) ? ' ': suffix);
    //              picName = result.RoleMemberList[j]['memberProfilePic'];
    //              id = result.RoleMemberList[j]['memberInternationalID'];
                 
                 
    //              name = 'Lion' + ' ' + firstName + ' '+middleName + ' '+ lastName + ' '+suffix;
    //              url = 'http://controlpanel.lci318d.in/upload/' +picName;
                
    //             $('#title').append('<figure><figcaption id="caption1">'+roleName+'</figcaption><img src="'+ url +'" id="img1" ><figcaption id="caption2">'+name+'</figcaption><p><figcaption id="caption3">International  ID-'+'<span id="IntID">'+id+'</span>'+'</figcaption></p></figure>');
                
               
                 
    //          }
               
    //         }
    //     });
        
    // });
    
    
    // $('#ACS').click(function(){
    //     $('#title').empty();
    //     $.ajax({

    //         type: 'GET',
    //         url: base_url + "MemberCtrl/List_ACS",
    //         data: {
    //         },
    //         success: function (data) {
                
              
                
    //          result = JSON.parse(data);
    //          count = result.RoleMemberList.length;
             
    //          for(j=0; j<= count ;j++)
    //          {
    //              roleName = result.RoleMemberList[j]['rolesName'];
    //              photo = result.RoleMemberList[j]['rolesName'];
    //              firstName = result.RoleMemberList[j]['memberFirstName'];
    //              firstName = ((firstName == null) ? ' ': firstName);
    //              middleName = result.RoleMemberList[j]['memberMiddleName'];
    //              middleName = ((middleName == null) ? ' ': middleName);
    //              lastName = result.RoleMemberList[j]['memberLastName'];
    //              lastName = ((lastName == null) ? ' ': lastName);
    //              suffix = result.RoleMemberList[j]['memberNameSuffix'];
    //              suffix = ((suffix == null) ? ' ': suffix);
    //              picName = result.RoleMemberList[j]['memberProfilePic'];
    //              id = result.RoleMemberList[j]['memberInternationalID'];
                 
                 
    //              name = 'Lion' + ' ' + firstName + ' '+middleName + ' '+ lastName + ' '+suffix;
    //              url = 'http://controlpanel.lci318d.in/upload/' +picName;
                
    //             $('#title').append('<figure><figcaption id="caption1">'+roleName+'</figcaption><img src="'+ url +'" id="img1" ><figcaption id="caption2">'+name+'</figcaption><p><figcaption id="caption3">International  ID-'+'<span id="IntID">'+id+'</span>'+'</figcaption></p></figure>');
                
               
                 
    //          }
               
    //         }
    //     });
        
    // });
    
    // $('#Others').click(function(){
    //     $('#title').empty();
    //     $.ajax({

    //         type: 'GET',
    //         url: base_url + "MemberCtrl/List_Others",
    //         data: {
    //         },
    //         success: function (data) {
                
              
                
    //          result = JSON.parse(data);
    //          count = result.RoleMemberList.length;
             
    //          for(j=0; j<= count ;j++)
    //          {
    //              roleName = result.RoleMemberList[j]['rolesName'];
    //              photo = result.RoleMemberList[j]['rolesName'];
    //              firstName = result.RoleMemberList[j]['memberFirstName'];
    //              firstName = ((firstName == null) ? ' ': firstName);
    //              middleName = result.RoleMemberList[j]['memberMiddleName'];
    //              middleName = ((middleName == null) ? ' ': middleName);
    //              lastName = result.RoleMemberList[j]['memberLastName'];
    //              lastName = ((lastName == null) ? ' ': lastName);
    //              suffix = result.RoleMemberList[j]['memberNameSuffix'];
    //              suffix = ((suffix == null) ? ' ': suffix);
    //              picName = result.RoleMemberList[j]['memberProfilePic'];
    //              id = result.RoleMemberList[j]['memberInternationalID'];
                 
                 
    //              name = 'Lion' + ' ' + firstName + ' '+middleName + ' '+ lastName + ' '+suffix;
    //              url = 'http://controlpanel.lci318d.in/upload/' +picName;
                
    //             $('#title').append('<figure><figcaption id="caption1">'+roleName+'</figcaption><img src="'+ url +'" id="img1" ><figcaption id="caption2">'+name+'</figcaption><p><figcaption id="caption3">International  ID-'+'<span id="IntID">'+id+'</span>'+'</figcaption></p></figure>');
                
               
                 
    //          }
               
    //         }
    //     });
        
    // });
    


});


    


















function viewdatas() {
        //  alert(e);
        //$('#dg_team').attr("selected","selected");
         var detailId = $('#roleList').val();
          
        $('#title').empty();
        
        
                LeoPresident = 'http://lci318d.in/assets/LeoPST/LeoPresident.jpg';
                LeoSecretary = 'http://lci318d.in/assets/LeoPST/LeoSecretary.jpg';
                LeoTreasurer = 'http://lci318d.in/assets/LeoPST/LeoTreasurer.jpg';
        
        
        if(detailId == 10)
             {
                 
            //  d1 ='<figure><figcaption id="caption1">'+'Leo President'+'</figcaption><img src="'+ LeoPresident +'" id="img1" ><figcaption id="caption2">'+'Leo Davis Titus'+'</figcaption><p>'+'</figcaption></p><p><figcaption id="caption4">H C-'+'<span id="clubdata">'+'Leo Club of Mala'+'</span>'+'</figcaption></p></figure>'+'<figure><figcaption id="caption1">'+'Leo Secretary'+'</figcaption><img src="'+ LeoSecretary +'" id="img1" ><figcaption id="caption2">'+' Leo Aparna Suresh '+'</figcaption><p>'+'</figcaption></p><p><figcaption id="caption4">H C-'+'<span id="clubdata">'+'Leo Club of Trichur City'+'</span>'+'</figcaption></p></figure>'+'<figure><figcaption id="caption1">'+'Leo Treasurer'+'</figcaption><img src="'+ LeoTreasurer +'" id="img1" ><figcaption id="caption2">'+'Leo Chris Bioy'+'</figcaption><p>'+'</figcaption></p><p><figcaption id="caption4">H C-'+'<span id="clubdata">'+' Leo Club of Amala Nagar'+'</span>'+'</figcaption></p></figure>';
                 
                 d1 = ' ';
              $('#title').empty().html(d1);
                 
             }   
        $.ajax({

            type: 'post',
            url: base_url + "MemberCtrl/viewMembersimage",
            data: {
                detailId    :   detailId
            },
            success: function (data) {
              
                
                
                result = JSON.parse(data);
             count = result.RoleMemberList.length;
             
             for(j=0; j< count ;j++)
             {
                 
                //  photo = result.RoleMemberList[j]['memberProfilePic'];
                 firstName = result.RoleMemberList[j]['memberFirstName'];
                 firstName = ((firstName == null) ? ' ': firstName);
                 middleName = result.RoleMemberList[j]['memberMiddleName'];
                 middleName = ((middleName == null) ? ' ': middleName);
                 lastName = result.RoleMemberList[j]['memberLastName'];
                 lastName = ((lastName == null) ? ' ': lastName);
                 suffix = result.RoleMemberList[j]['memberNameSuffix'];
                 suffix = ((suffix == null) ? ' ': suffix);
                 picName = result.RoleMemberList[j]['memberProfilePic'];
                 id = result.RoleMemberList[j]['memberInternationalID'];
                 clubName = result.RoleMemberList[j]['clubName'];
                 zoneName = result.RoleMemberList[j]['zoneName'];
                 regionName = result.RoleMemberList[j]['regionName'];
                 roleID = result.RoleMemberList[j]['roleID'];
                  clubID = result.RoleMemberList[j]['clubID'];
                  roleName = result.RoleMemberList[j]['rolesName'];
                  secondRoleName = result.RoleMemberList[j]['senondRoleName'];
                 
                 name = 'Lion' + ' ' + firstName + ' '+middleName + ' '+ lastName + ' '+suffix;
                 
                 
                 url = 'http://controlpanel.lci318d.in/upload/' +picName;
                 
                 
                 url1 = 'http://lci318d.in/assets/LadyPSTandAreaCoordinators/Lady Circle President.jpg';
                 url2 = 'http://lci318d.in/assets/LadyPSTandAreaCoordinators/Lady Circle Secretary.jpg';
                 url3 = 'http://lci318d.in/assets/LadyPSTandAreaCoordinators/Lady Cirlce Treasurer.jpg';
                 url4 = 'http://lci318d.in/assets/LadyPSTandAreaCoordinators/AC-Region1.jpg';
                 url5 = 'http://lci318d.in/assets/LadyPSTandAreaCoordinators/AC-Region2.jpg';
                 url6 = 'http://lci318d.in/assets/LadyPSTandAreaCoordinators/';
                 url7 = 'http://lci318d.in/assets/LadyPSTandAreaCoordinators/AC-Region4.jpg';
                 url8 = 'http://lci318d.in/assets/LadyPSTandAreaCoordinators/AC-Region5.jpg';
                 url9 = 'http://lci318d.in/assets/LadyPSTandAreaCoordinators/AC-Region6.jpg';
                 url10 = 'http://lci318d.in/assets/LadyPSTandAreaCoordinators/AC-Region7.jpg';
                 url11 = 'http://lci318d.in/assets/LadyPSTandAreaCoordinators/AC-Region8.jpg';
                 url12 = 'http://lci318d.in/assets/LadyPSTandAreaCoordinators/AC-Region9.jpg';
                 url13 = 'http://lci318d.in/assets/LadyPSTandAreaCoordinators/AC-Region10.jpg';
                 url14 = 'http://lci318d.in/assets/LadyPSTandAreaCoordinators/AC-Region11.jpg';
                 url15 = 'http://lci318d.in/assets/LadyPSTandAreaCoordinators/AC-Region12.jpg';
                 url16 = 'http://lci318d.in/assets/LadyPSTandAreaCoordinators/AC-Region13.jpg';
                 url17 = 'http://lci318d.in/assets/LadyPSTandAreaCoordinators/AC-Region14.jpg';
                 url18 = 'http://lci318d.in/assets/LadyPSTandAreaCoordinators/AC-Region15.jpg';
                 url19 = 'http://lci318d.in/assets/LadyPSTandAreaCoordinators/AC-Region16.jpg';
                 url20 = 'http://lci318d.in/assets/LadyPSTandAreaCoordinators/AC-Region17.jpg';
                 url21 = 'http://lci318d.in/assets/LadyPSTandAreaCoordinators/AC-Region18.jpg';
                url22 = 'http://lci318d.in/assets/LadyPSTandAreaCoordinators/AC-Region19.jpg';
                url23 = 'http://lci318d.in/assets/LadyPSTandAreaCoordinators/AC-Region20.jpg';
                

                 
                 
             
          
            if(detailId ==7)
            { 
                
                if(roleID ==15)
                {
                   
                   $('#title').append('<figure2><figcaption id="caption1">'+roleName+'</figcaption><img src="'+ url +'" id="img1" ><figcaption id="caption2">'+name+'</figcaption><p><figcaption id="caption3">International  ID-'+'<span id="IntID">'+id+'</span>'+'</figcaption></p><p><figcaption id="caption4">H C-'+'<span id="clubdata">'+clubName+'</span>'+'</figcaption></p><p><figcaption id="caption4">REGION-'+'<span id="clubdata">'+regionName+'</span>'+'</figcaption></p></figure2>'); 
                }
                else
                {
                
                $('#title').append('<figure2><figcaption id="caption1">'+roleName+'</figcaption><img src="'+ url +'" id="img1" ><figcaption id="caption2">'+name+'</figcaption><p><figcaption id="caption3">International  ID-'+'<span id="IntID">'+id+'</span>'+'</figcaption></p><p><figcaption id="caption4">H C-'+'<span id="clubdata">'+clubName+'</span>'+'</figcaption></p><p><figcaption id="caption4">REGION-'+'<span id="clubdata">'+regionName+'</span>'+'</figcaption></p><p><figcaption id="caption4">ZONE-'+'<span id="clubdata">'+zoneName+'</span>'+'</figcaption></p></figure2>');
                }
            }
            

             
             
             else if(detailId ==9)
            {
                
               d ='<figure><figcaption id="caption1">'+'District Lady Circle President'+'</figcaption><img src="'+ url1 +'" id="img1" ><figcaption id="caption2">'+'Ln Nirmala Muraleedharan'+'</figcaption><p><figcaption id="caption3">International  ID-'+'<span id="IntID">'+'4981447'+'</span>'+'</figcaption></p><p><figcaption id="caption4">H C-'+'<span id="clubdata">'+'Thrissur Sakthan Thampuran'+'</span>'+'</figcaption></p></figure>'+'<figure><figcaption id="caption1">'+' District Lady Circle Secretary'+'</figcaption><img src="'+ url2 +'" id="img1" ><figcaption id="caption2">'+' Ln Geetha Sasikumar '+'</figcaption><p><figcaption id="caption3">International  ID-'+'<span id="IntID">'+'4421285'+'</span>'+'</figcaption></p><p><figcaption id="caption4">H C-'+'<span id="clubdata">'+'Cherpulassery'+'</span>'+'</figcaption></p></figure>'+'<figure><figcaption id="caption1">'+'District Lady Circle Treasurer'+'</figcaption><img src="'+ url3 +'" id="img1" ><figcaption id="caption2">'+'Lioness Selin James'+'</figcaption><p><figcaption id="caption3">International  ID-'+'<span id="IntID">'+'-'+'</span>'+'</figcaption></p><p><figcaption id="caption4">H C-'+'<span id="clubdata">'+' Mala'+'</span>'+'</figcaption></p></figure>'+'<figure><figcaption id="caption1">'+'Area Coordinator – Region 1'+'</figcaption><img src="'+ url4 +'" id="img1" ><figcaption id="caption2">'+'Ln Jessy Poulose'+'</figcaption><p><figcaption id="caption3">International  ID-'+'<span id="IntID">'+'5054927'+'</span>'+'</figcaption></p><p><figcaption id="caption4">H C-'+'<span id="clubdata">'+' Kuttikkad'+'</span>'+'</figcaption></p></figure>'+'<figure><figcaption id="caption1">'+'Area Coordinator – Region 2 '+'</figcaption><img src="'+ url5 +'" id="img1" ><figcaption id="caption2">'+' Lioness Lissy Saji'+'</figcaption><p><figcaption id="caption3">International  ID-'+'<span id="IntID">'+'-'+'</span>'+'</figcaption></p><p><figcaption id="caption4">H C-'+'<span id="clubdata">'+'Kalletumkara'+'</span>'+'</figcaption></p></figure>'+'<figure><figcaption id="caption1">'+'Area Coordinator – Region 3'+'</figcaption><img src="'+ url16 +'" id="img1" ><figcaption id="caption2">'+'Ln Jyothi Kishore'+'</figcaption><p><figcaption id="caption3">International  ID-'+'<span id="IntID">'+'4498745'+'</span>'+'</figcaption></p><p><figcaption id="caption4">H C-'+'<span id="clubdata">'+'Perinjanam'+'</span>'+'</figcaption></p></figure>'+'<figure><figcaption id="caption1">'+'Area Coordinator – Region 4'+'</figcaption><img src="'+ url7 +'" id="img1" ><figcaption id="caption2">'+'Lioness Sanila Sidharthan '+'</figcaption><p><figcaption id="caption3">International  ID-'+'<span id="IntID">'+'-'+'</span>'+'</figcaption></p><p><figcaption id="caption4">H C-'+'<span id="clubdata">'+'S N Puram'+'</span>'+'</figcaption></p></figure>'+'<figure><figcaption id="caption1">'+' Area Coordinator – Region 5 '+'</figcaption><img src="'+ url8 +'" id="img1" ><figcaption id="caption2">'+'Ln Sangeetha Shabumon'+'</figcaption><p><figcaption id="caption3">International  ID-'+'<span id="IntID">'+'4974048'+'</span>'+'</figcaption></p><p><figcaption id="caption4">H C-'+'<span id="clubdata">'+'Peruvanam '+'</span>'+'</figcaption></p></figure>'+'<figure><figcaption id="caption1">'+'Area Coordinator – Region 6'+'</figcaption><img src="'+ url9 +'" id="img1" ><figcaption id="caption2">'+'Ln Nisha Suresh Babu'+'</figcaption><p><figcaption id="caption3">International  ID-'+'<span id="IntID">'+'4441785'+'</span>'+'</figcaption></p><p><figcaption id="caption4">H C-'+'<span id="clubdata">'+'Kodannur'+'</span>'+'</figcaption></p></figure>'+'<figure><figcaption id="caption1">'+'Area Coordinator – Region 7'+'</figcaption><img src="'+ url10 +'" id="img1" ><figcaption id="caption2">'+'Ln Bindu Komalkumar'+'</figcaption><p><figcaption id="caption3">International  ID-'+'<span id="IntID">'+'4137705'+'</span>'+'</figcaption></p><p><figcaption id="caption4">H C-'+'<span id="clubdata">'+'Trichur Ayyanthole '+'</span>'+'</figcaption></p></figure>'+'<figure><figcaption id="caption1">'+' Area Coordinator – Region 8 '+'</figcaption><img src="'+ url11 +'" id="img1" ><figcaption id="caption2">'+' Lioness Pournami Jinesh'+'</figcaption><p><figcaption id="caption3">International  ID-'+'<span id="IntID">'+'--'+'</span>'+'</figcaption></p><p><figcaption id="caption4">H C-'+'<span id="clubdata">'+'Thrissur Sakthan  Thamburan'+'</span>'+'</figcaption></p></figure>'+'<figure><figcaption id="caption1">'+' Area Coordinator – Region 9'+'</figcaption><img src="'+ url12 +'" id="img1" ><figcaption id="caption2">'+' Ln Shirly Thomas '+'</figcaption><p><figcaption id="caption3">International  ID-'+'<span id="IntID">'+'4426194'+'</span>'+'</figcaption></p><p><figcaption id="caption4">H C-'+'<span id="clubdata">'+'Thrissur City'+'</span>'+'</figcaption></p></figure>'+'<figure><figcaption id="caption1">'+' Area Coordinator – Region 10 '+'</figcaption><img src="'+ url13 +'" id="img1" ><figcaption id="caption2">'+' Ln Manju Raphael'+'</figcaption><p><figcaption id="caption3">International  ID-'+'<span id="IntID">'+'4423972'+'</span>'+'</figcaption></p><p><figcaption id="caption4">H C-'+'<span id="clubdata">'+'Thrissur East  Fort '+'</span>'+'</figcaption></p></figure>'+'<figure><figcaption id="caption1">'+'  Area Coordinator – Region 11'+'</figcaption><img src="'+ url14 +'" id="img1" ><figcaption id="caption2">'+' Ln Thilakam Ramakrishnan '+'</figcaption><p><figcaption id="caption3">International  ID-'+'<span id="IntID">'+'4450411'+'</span>'+'</figcaption></p><p><figcaption id="caption4">H C-'+'<span id="clubdata">'+'Choondal'+'</span>'+'</figcaption></p></figure>'+'<figure><figcaption id="caption1">'+' Area Coordinator – Region 12'+'</figcaption><img src="'+ url15 +'" id="img1" ><figcaption id="caption2">'+' Lioness Serin Dani '+'</figcaption><p><figcaption id="caption3">International  ID-'+'<span id="IntID">'+'-'+'</span>'+'</figcaption></p><p><figcaption id="caption4">H C-'+'<span id="clubdata">'+'Mundur'+'</span>'+'</figcaption></p></figure>'+'<figure><figcaption id="caption1">'+'Area Coordinator – Region 13'+'</figcaption><img src="'+ url16 +'" id="img1" ><figcaption id="caption2">'+'Ln Jerry Thomas'+'</figcaption><p><figcaption id="caption3">International  ID-'+'<span id="IntID">'+'4426214'+'</span>'+'</figcaption></p><p><figcaption id="caption4">H C-'+'<span id="clubdata">'+' Wadakkanchery – Cochin'+'</span>'+'</figcaption></p></figure>'+'<figure><figcaption id="caption1">'+'Area Coordinator – Region 14'+'</figcaption><img src="'+ url17 +'" id="img1" ><figcaption id="caption2">'+' Lioness Sneha Babu '+'</figcaption><p><figcaption id="caption3">International  ID-'+'<span id="IntID">'+'-'+'</span>'+'</figcaption></p><p><figcaption id="caption4">H C-'+'<span id="clubdata">'+'Manjery'+'</span>'+'</figcaption></p></figure>'+'<figure><figcaption id="caption1">'+'Area Coordinator – Region 15'+'</figcaption><img src="'+ url18 +'" id="img1" ><figcaption id="caption2">'+' Ln Prof. Sapna Sreekumar'+'</figcaption><p><figcaption id="caption3">International  ID-'+'<span id="IntID">'+'4947193'+'</span>'+'</figcaption></p><p><figcaption id="caption4">H C-'+'<span id="clubdata">'+' Angadipuram'+'</span>'+'</figcaption></p></figure>'+'<figure><figcaption id="caption1">'+'Area Coordinator – Region 16 '+'</figcaption><img src="'+ url19 +'" id="img1" ><figcaption id="caption2">'+'Ln Anjaly Suresh'+'</figcaption><p><figcaption id="caption3">International  ID-'+'<span id="IntID">'+'5258720'+'</span>'+'</figcaption></p><p><figcaption id="caption4">H C-'+'<span id="clubdata">'+'Malappuram'+'</span>'+'</figcaption></p></figure>'+'<figure><figcaption id="caption1">'+' Area Coordinator – Region 17'+'</figcaption><img src="'+ url20 +'" id="img1" ><figcaption id="caption2">'+'Lionss Dr Kharauneesa Rauf'+'</figcaption><p><figcaption id="caption3">International  ID-'+'<span id="IntID">'+'-'+'</span>'+'</figcaption></p><p><figcaption id="caption4">H C-'+'<span id="clubdata">'+'Thirurangadi '+'</span>'+'</figcaption></p></figure>'+'<figure><figcaption id="caption1">'+' Area Coordinator – Region 18'+'</figcaption><img src="'+ url21 +'" id="img1" ><figcaption id="caption2">'+'Ln Lissy Rajan'+'</figcaption><p><figcaption id="caption3">International  ID-'+'<span id="IntID">'+' 4602565'+'</span>'+'</figcaption></p><p><figcaption id="caption4">H C-'+'<span id="clubdata">'+' Walayar Valley'+'</span>'+'</figcaption></p></figure>'+'<figure><figcaption id="caption1">'+'Area Coordinator – Region 19'+'</figcaption><img src="'+ url22 +'" id="img1" ><figcaption id="caption2">'+'Ln Chithra Parthasarathi '+'</figcaption><p><figcaption id="caption3">International  ID-'+'<span id="IntID">'+'5209531'+'</span>'+'</figcaption></p><p><figcaption id="caption4">H C-'+'<span id="clubdata">'+'Palakakd Green City'+'</span>'+'</figcaption></p></figure>'+'<figure><figcaption id="caption1">'+' Area Coordinator – Region 20'+'</figcaption><img src="'+ url23 +'" id="img1" ><figcaption id="caption2">'+' Ln Mini Kabeer'+'</figcaption><p><figcaption id="caption3">International  ID-'+'<span id="IntID">'+'4528110'+'</span>'+'</figcaption></p><p><figcaption id="caption4">H C-'+'<span id="clubdata">'+'Manjery   Pattambi'+'</span>'+'</figcaption></p></figure>';
               $('#title').html(d);
              
                
            }
             else if(detailId ==13)
            {
            
                var roles = ["Club President", "Club Secretary", "Club Treasurer"];
                var r = roles.includes(roleName);
                if(r == false)
                {
                    roleName = "Club President";
                }
                
                $('#title').append('<figure><figcaption id="caption1">'+roleName+'</figcaption><img src="'+ url +'" id="img1" ><figcaption id="caption2">'+name+'</figcaption><p><figcaption id="caption3">International  ID-'+'<span id="IntID">'+id+'</span>'+'</figcaption></p><p><figcaption id="caption4">H C-'+'<span id="clubdata">'+clubName+'</span>'+'</figcaption></p></figure>');
              
                
            }
            else if(detailId ==12)
            {
            
                // var roles = ["Club President", "Club Secretary", "Club Treasurer"];
                // var r = roles.includes(roleName);
                // if(r == false)
                // {
                //     roleName = "Club President";
                // }
                
                $('#title').append('<figure><figcaption id="caption1">'+secondRoleName+'</figcaption><img src="'+ url +'" id="img1" ><figcaption id="caption2">'+name+'</figcaption><p><figcaption id="caption3">International  ID-'+'<span id="IntID">'+id+'</span>'+'</figcaption></p><p><figcaption id="caption4">H C-'+'<span id="clubdata">'+clubName+'</span>'+'</figcaption></p></figure>');
              
                
            }
            
            else
            {
               
               $('#title').append('<figure><figcaption id="caption1">'+roleName+'</figcaption><img src="'+ url +'" id="img1" ><figcaption id="caption2">'+name+'</figcaption><p><figcaption id="caption3">International  ID-'+'<span id="IntID">'+id+'</span>'+'</figcaption></p><p><figcaption id="caption4">H C-'+'<span id="clubdata">'+clubName+'</span>'+'</figcaption></p></figure>');
               
                
            }
            
            
            }
               
                 
             }
                
                
                         
            //}
        });
    }