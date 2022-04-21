//base_url global declaration
var base_url = $('#base').val();

$(document).ready(function() {
    //alert('hai');

    $("#datatabledata").DataTable(
        {
    
    
            stateSave: true,
            fixedHeader: true,
            destroy: true,
            "ajax":
            {
                "url": base_url + "ClubpointCtrl/DisplayClubPoints",
                "type": 'POST',
                "data":
                {
                    ClubCategory : 0,
                    MonthID : 0
                  
    
                }
            }
        });


});


 //CHANGE CATEGORY AN
 $('.clubpointdetails').on('change', function () {

    //alert('hai');
    categoryID = $('#categoryID').val();
    monthID = $('#monthID').val();

    $("#datatabledata").DataTable(
        {
    
    
            stateSave: true,
            fixedHeader: true,
            destroy: true,
            "ajax":
            {
                "url": base_url + "ClubpointCtrl/DisplayClubPoints",
                "type": 'POST',
                "data":
                {
                    ClubCategory : categoryID,
                    MonthID :   monthID
                  
    
                }
            }
        });

});
