$(document).ready(function(){
    $('#sponsor').change(function(){
        var sponsor_id = $(this).val();
        if(sponsor_id !=''){
            var _token = $('input[name="_token"]').val();
            
            $.ajax({
                type:"POST",
                url:"/get_date",
                data:{sponsor_id:sponsor_id, _token:_token},
                success:function(data){
                    // var dates = data.split(',');
                    var dates = JSON.parse(data);
                    var start_date = dates[0];
                    var start_date = start_date.split('-');
                    var y = start_date[0];
                    var m = start_date[1];
                    var d = start_date[2];
                    var start_date = [m, d, y].join('/');
                    
                    var expire_date = dates[1];
                    var expire_date = expire_date.split('-');
                    var y = expire_date[0];
                    var m = expire_date[1];
                    var d = expire_date[2];
                    var expire_date = [m, d, y].join('/');
                    
                    $("#start_date").val(start_date);
                    $("#expire_date").val(expire_date);
                    // $('.select2').select2()
                }
            });
        }
    });
});