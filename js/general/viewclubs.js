//base_url global declaration
var base_url = $('#base').val();

$(document).ready(function() {


//alert(base_url);

    // region = '0';
    // zone = '0';
    // club = '0';

     $("#viewallclubdetails").DataTable(
        {
            stateSave: true,
            fixedHeader: true,
            destroy: true,
            "columns": [
                { "width": "10%" },
                { "width": "20%" },
                null,
                null,
                null,
                null,
                null
                
              ],
            "ajax":
            {
                "url": base_url + "ClubpointCtrl/clubData",
                "type": 'POST',
                "data":
                {
                   

                }
            }
        });

});


function generatefpdf(e)
{
     var c=e.substring(4)
     //alert(c);

        $.ajax({
        type:"POST",
        url:  base_url + "ClubpointCtrl/view_one_club_data",
        data:{
            CID     :   c                   
        },            
        success: function(data)
        {
              window.open(base_url + 'generatepdf/test_receipt.pdf');
        }    
    
    });



}





