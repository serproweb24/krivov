$(document).ready(function () {
   
    var baseUrl  = window.location.origin;

    function loadTable(){
        
        $('body').find("#task-table tbody").empty().load(baseUrl+'/table');
        
    }

    loadTable();
    
    $('#formForAdd').submit(function (event) {

        event.preventDefault();

        var name = $('input[name="name"]').val();
        var latitude = $('input[name="latitude"]').val();
        var longitude = $('input[name="longitude"]').val();
        var populations = $('input[name="populations"]').val();

        $.ajax({
            headers : {'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')},
            type: "POST",
            url: baseUrl+"/add/",
            data: {name:name, latitude:latitude, longitude:longitude, populations:populations},
            dataType: "json",
            success: function (response) {
                if(response.success==='успех'){
                    $("form").trigger("reset");
                    $('.content-message').empty().append("<div class='alert alert-success text-white'>"+response.success+"</div>");
                    loadTable();
                }
                else{
                    $('.content-message').empty().append("<div class='alert alert-danger text-white'>"+response.error+"</div>");
                }
            }
        });
    });

});