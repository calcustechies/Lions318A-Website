
//base_url global declaration
var base_url = $('#base').val();

$(document).ready(function() {
    //alert('hai');


    region = '0';
    zone = '0';
    club = '0';

     $("#memberTable").DataTable(
        {
            stateSave: true,
            fixedHeader: true,
            responsive: true,
            details: false,
            destroy: true,
            "columns": [
                { "width": "10%" },
                { "width": "20%" },
                null,
                null
                
              ],
            "ajax":
            {
                "url": base_url + "MemberCtrl/viewMember",
                "type": 'POST',
                "data":
                {
                    mRegion: region,
                    mZone: zone,
                    mClub: club

                }
            }
        });




$.ajax({

        type: 'POST',
        url: base_url + "MemberCtrl/regionData",
        data: {},
        success: function (data) {

            $('#regiondata').html(data);

            

         }
     });




});

// view region based zone
$('#regiondata').change(function () {

   //$('#clubdata').attr('disabled');
   $('#clubdata').prop("disabled", true);
//   $('input[id=clubdata]').val(0);

    selRegion = $(this).val();
    //alert(selRegion);
    selzone = '0';
    selclub = '0';

    //$(".zoneList").prop("disabled", false);
    $.ajax({

        type: 'POST',
        url: base_url + "MemberCtrl/zoneData",
        data: {
            Region: selRegion
        },
        success: function (data) {
                //alert(data);
                $('#zonedata').html(data);
                $('#zonedata').removeAttr("disabled")
        var dropStatusAct = '<option value="0">choose club</option>';
        $('#clubdata').html(dropStatusAct);
        }
    });
});


// VIEW REGION AND ZONE BASED CLUB
$('#zonedata').change(function () {

    selRegion = $('#regiondata').val();
    selZone = $(this).val();
    // selclub = '0';

    $.ajax({

        type: 'POST',
        url: base_url + "MemberCtrl/clubData",
        data: {
            upRegion: selRegion,
            upZone: selZone
        },
        success: function (data) {

            //alert(data);
            $('#clubdata').html(data);
            $('#clubdata').removeAttr("disabled")
            

        }
    });
});




// filter member in data table
$('.memberdetails').change(function () {

    region  =  $('#regiondata').val();
    zone    =  $('#zonedata').val();
    club    =  $('#clubdata').val();

     $("#memberTable").DataTable(
        {
            stateSave: true,
            fixedHeader: true,
            responsive: true,
            destroy: true,
            "columns": [
                { "width": "10%" },
                { "width": "20%" },
                null,
                null
                
              ],
            "ajax":
            {
                "url": base_url + "MemberCtrl/viewMember",
                "type": 'POST',
                "data":
                {
                    mRegion: region,
                    mZone: zone,
                    mClub: club

                }
            }
        });
});




// region based members
function viewRegionBasedmember() 
{

    region  =  $('#regiondata').val();
    zone    =  0;
    club    =  0;
    //alert(club);

     $("#memberTable").DataTable(
        {
            stateSave: true,
            fixedHeader: true,
            responsive: true,
            destroy: true,
            "ajax":
            {
                "url": base_url + "MemberCtrl/viewMember",
                "type": 'POST',
                "data":
                {
                    mRegion: region,
                    mZone: zone,
                    mClub: club

                }
            }
        });
}

// REGION AND ZONE BASED MEMBERS
function viewzonebasedmember() 
{

    region  =  $('#regiondata').val();
    zone    =  $('#zonedata').val();
    club    =  0;
    //alert(club);

     $("#memberTable").DataTable(
        {
            stateSave: true,
            fixedHeader: true,
            responsive: true,
            destroy: true,
            "columns": [
                { "width": "10%" },
                { "width": "20%" },
                null,
                null
                
              ],
            "ajax":
            {
                "url": base_url + "MemberCtrl/viewMember",
                "type": 'POST',
                "data":
                {
                    mRegion: region,
                    mZone: zone,
                    mClub: club

                }
            }
        });
}
