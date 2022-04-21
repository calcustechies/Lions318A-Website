//base_url global declaration
var base_url = $('#base').val();

$(document).ready(function() {
    //document.getElementById("endDate").value = "2021-30-06";
    //start_date = $('#start_date').val();
    //alert('hai');
   
   var fullDate = new Date()
     
   //convert month to 2 digits
   var twoDigitMonth = ((fullDate.getMonth().length+1) === 1)? (fullDate.getMonth()+1) : '0' + (fullDate.getMonth()+1);
    
   var currentDate = fullDate.getFullYear() + "/" + twoDigitMonth + "/" + fullDate.getDate();
   endDate = $('#endDate').val();
   visitTypeID  ='0';
   //console.log(fullDate.getFullYear());
   //alert(endDate);
    $("#visitdatatable").DataTable(
        {
    
    
            stateSave: true,
            fixedHeader: true,
            destroy: true,
            "ajax":
            {
                "url": base_url + "VisitCtrl/viewVisits",
                "type": 'POST',
                "data":
                {
                    visitStartDate      : currentDate,
                    visitEndDate        : endDate,
                    visitTypeID         : visitTypeID,
                    visitStatusID       : 0,
                    visitID             : 0
                   
                
                  
    
                }
            }
        });


});


//CHANGE VALUES
$('.visitdetails').on('change', function () {

    //alert('hai');
    visitStartDate = $('#start_date').val();
    visitEndDate = $('#endDate').val();
    visitTypeID = $('#visittype').val();
    
    //alert(visitEndDate);

    $("#visitdatatable").DataTable(
        {
    
    
            stateSave: true,
            fixedHeader: true,
            destroy: true,
            "ajax":
            {
                "url": base_url + "VisitCtrl/viewVisits",
                "type": 'POST',
                "data":
                {
                    visitStartDate  : visitStartDate,
                    visitEndDate    :   visitEndDate,
                    visitTypeID     :   visitTypeID
    
                }
            }
        });

});