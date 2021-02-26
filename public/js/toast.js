
$(document).ready(function(){
    $(".actionDelete").click(function(e) {
    e.preventDefault();

    var element = $(this);
    var id     = element.attr('data-url');
    var form    = $(element).parents('form');

    element.blur();

    swal(
        {   title: "Are you sure?",
            type: "warning",
            showLoaderOnConfirm: true,
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes",
            cancelButtonText: "No",
            closeOnConfirm: false,
        },
        function(isConfirm){
            if (isConfirm) {
                form.submit();
                //$('#form' + id).submit();
            }
        });
    });

    
})   

