//base_url global declaration
var base_url = $('#base').val();

$(document).ready(function() {
    //document.getElementById("endDate").value = "2021-30-06";
    //start_date = $('#start_date').val();
   // alert(start_date);
   
   var fullDate = new Date()
     
   //convert month to 2 digits
   var twoDigitMonth = ((fullDate.getMonth().length+1) === 1)? (fullDate.getMonth()+1) : '0' + (fullDate.getMonth()+1);
    
   var currentDate = fullDate.getFullYear() + "/" + twoDigitMonth + "/" + fullDate.getDate();
   endDate = $('#endDate').val();
   eventTypeID  ='0';
   //console.log(fullDate.getFullYear());
   //alert(endDate);
    $("#eventdatatable").DataTable(
        {
    
    
            stateSave: true,
            fixedHeader: true,
            destroy: true,
            "ajax":
            {
                "url": base_url + "EventCtrl/EventViewdetails",
                "type": 'POST',
                "data":
                {
                    eventStartDate      : currentDate,
                    eventEndDate        : endDate,
                    eventTypeID         : eventTypeID,
                    eventStatusID       : 0,
                    eventID             : 0
                   
                
                  
    
                }
            }
        });
        
        


});


//CHANGE VALUES
$('.eventdetails').on('change', function () {

    //alert('hai');
    eventStartDate = $('#start_date').val();
    eventEndDate = $('#endDate').val();
    eventTypeID = $('#eventtype').val();

    $("#eventdatatable").DataTable(
        {
    
    
            stateSave: true,
            fixedHeader: true,
            destroy: true,
            "ajax":
            {
                "url": base_url + "EventCtrl/EventViewdetails",
                "type": 'POST',
                "data":
                {
                    eventStartDate  :   eventStartDate,
                    eventEndDate    :   eventEndDate,
                    eventTypeID     :   eventTypeID
    
                }
            }
        });

});