$(document).ready(function(){
    $("#actionCorporate").change(function(e){
        console.log("slected");
        var corporate_id = $(this).val();
        console.log(corporate_id);
        
        if(corporate_id != ''){
            var _token = $('input[name="_token"]').val();
            console.log(_token);
            $.ajax({
                type:"POST",
                url:"/show_team",
                data:{corporate_id:corporate_id, _token:_token},
                success:function(data){
                    $("#showTeamAdmin").html(data);
                    $('.select2').select2()
                }
            });
        }
        
    });
   
    $(document).on('click', 'li', function(){  
        $('#fetchCorporateUser').val($(this).text());  
        $('#corporateuser_list').fadeOut();  
    }); 
    
    // Per User
    $('#showUser').change(function(){
        var id = $(this).val();
        if(id !=''){
            var _token = $('input[name="_token"]').val();
            // alert(_token);
            $.ajax({
                type:"POST",
                url:"/show_User",
                data:{id:id, _token:_token},
                success:function(data){
                    $("#showUser_html").html(data);
                    $('.select2').select2()
                }
            });
        }
    });

    // Coaching Report
    $('#coaching_report_user').change(function(){
        var id = $(this).val();
        if(id !=''){
            var _token = $('input[name="_token"]').val();
            // alert(_token);
            $.ajax({
                type:"POST",
                url:"/show_report_user",
                data:{id:id, _token:_token},
                success:function(data){
                    $("#show_report_user_html").html(data);
                    $('.select2').select2();
                    $('#reservationdate').datetimepicker({
                        format: 'L'
                    });
                }
            });
        }
    });

});


function fetchCorp(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    var query = $('#fetchCorporateUser').val(); 
    if(query != '')
    {
     var _token = $('input[name="_token"]').val(); 
     $.ajax({
      url:"/coporateuser/fetch",
      method:"POST",
      data:{query:query, _token:_token},
      success:function(data){
       $('#corporateuser_list').fadeIn();  
        $('#corporateuser_list').html(data);
      }
     });
    }
}

function addnewTeam(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var corporate_id = $('#new_corporate_id').val(); console.log(corporate_id+'111');
    var team_name = $('#new_team_name').val(); console.log(team_name+'222');
    var team_members = $('#new_team_members').val();console.log(team_members+'333');
    var _token = $('input[name="_token"]').val();console.log(_token+'444');
    var team_admin = $('#new_team_admin').val(); console.log(team_admin+'555');
   
    // debugger;
    $.ajax({
        
        url: "http://localhost/addnew_team",
        type: "POST",
        data: {corporate_id:corporate_id, 
            team_name:team_name, 
            team_members:team_members,
            team_admin:team_admin,
            _token:_token
        },
    });

}

