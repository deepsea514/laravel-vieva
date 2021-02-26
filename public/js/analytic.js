$(document).ready(function(){
    // Client fetch
    $("#corporate_sel").change(function(){
        console.log("slected");
        var corporate_id = $(this).val();
        console.log(corporate_id);
        
        if(corporate_id != ''){
            var _token = $('input[name="_token"]').val();
            console.log(_token);
            $.ajax({
                type:"POST",
                url:"/show_client",
                data:{corporate_id:corporate_id, _token:_token},
                success:function(data){
                    $("#client_html").html(data);
                    $('.reservation').daterangepicker();
                }
            });
        }
        
        

    });
    // Per user Fetch
    $('#showPeruser').change(function(){
        var id = $(this).val();
        if(id !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/show_peruser",
                data:{id:id, _token:_token},
                success:function(data){
                    $("#user_html").html(data);
                    $('.reservation').daterangepicker();
                }
            });
        }
    });

    //Team
    $('#showGroup').change(function(){
        var group_id = $(this).val();
        if(group_id !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/show_group",
                data:{group_id:group_id, _token:_token},
                success:function(data){
                    $("#group_html").html(data);
                    $('.reservation').daterangepicker();
                }
            });
        }
    });
    //Per member
    $('#showMember').change(function(){
        var member_id = $(this).val();
        if(member_id !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/show_member",
                data:{member_id:member_id, _token:_token},
                success:function(data){
                    $("#member_html").html(data);
                    $('.reservation').daterangepicker();
                }
            });
        }
    }); 
    ///////////////////// Superadmin //////////////////////
    //////////////////////// General Calender ///////////////////////////
    //  Engagement Calendar
    $('#showGeneral_engage').change(function(){
        var date = $(this).val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/super_engage_general",
                data:{date:date, _token:_token},
                success:function(data){
                    $("#engageGeneral").html(data);
                }
            });
        }
    });
    
   
    //  Weekly Calendar
    $('#showGeneral_week').change(function(){
        var date = $(this).val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/super_weekly_general",
                data:{date:date, _token:_token},
                success:function(data){
                    $("#weekGeneral").html(data);
                }
            });
        }
    });
    //  Monthly Calendar
    $('#showGeneral_month').change(function(){
        var date = $(this).val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/super_monthly_general",
                data:{date:date, _token:_token},
                success:function(data){
                    $("#monthGeneral").html(data);
                }
            });
        }
    });
    //  Population Calendar
    $('#showGeneral_population').change(function(){
        var date = $(this).val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/cor_population_general_chart",
                data:{date:date, _token:_token},
                success:function(data){

                    console.log("data",data);
                    //$("#populationGeneral").html(data);
                }
            });
        }
    });
    //  Coaching Calendar
    $('#showGeneral_coaching').change(function(){
        var date = $(this).val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/super_coaching_general",
                data:{date:date, _token:_token},
                success:function(data){
                    $("#coachingGeneral").html(data);
                }
            });
        }
    });
    ///////////////////// Superadmin //////////////////////
    ///////////////////////// Client Calender ////////////////////////////
    //  Engagement Calendar 000000000000
    $('#showClient_engage').change(function(){
        var date = $(this).val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/super_engage_client",
                data:{date:date, _token:_token},
                success:function(data){
                    $("#engageClient").html(data);
                }
            });
        }
    });
    // Engagement Calendar 1111111111111
    $("#client_html").delegate('#client_engage', 'change', function(){
        var date = $('#client_engage').val();
        var client_id = $('#client_id').val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/client_engage",
                data:{date:date, client_id:client_id, _token:_token},
                success:function(data){
                    $("#client_engage_html").html(data);
                }
            });
        }
    });
    //  Weekly Calendar 0000000000000000
    $('#showClient_week').change(function(){
        var date = $(this).val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/super_weekly_client",
                data:{date:date, _token:_token},
                success:function(data){
                    $("#weekClient").html(data);
                }
            });
        }
    });
    //  Weekly Calendar 11111111111111111

    $("#client_html").delegate('#client_week', 'change', function(){
        var date = $('#client_week').val();
        var client_id = $('#client_id').val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/client_week",
                data:{date:date, client_id:client_id, _token:_token},
                success:function(data){
                    $("#client_week_html").html(data);
                }
            });
        }
    });
    //  Monthly Calendar 0000000000000000
    $('#showClient_month').change(function(){
        var date = $(this).val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/super_monthly_client",
                data:{date:date, _token:_token},
                success:function(data){
                    $("#monthClient").html(data);
                }
            });
        }
    });
    //  Monthly Calendar 1111111111111111
    $("#client_html").delegate('#client_month', 'change', function(){
        var date = $('#client_month').val();
        var client_id = $('#client_id').val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/client_month",
                data:{date:date, client_id:client_id, _token:_token},
                success:function(data){
                    $("#client_month_html").html(data);
                }
            });
        }
    });
    //  Population Calendar 0000000000000
    $('#showClient_population').change(function(){
        var date = $(this).val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/super_population_client",
                data:{date:date, _token:_token},
                success:function(data){
                    $("#populationClient").html(data);
                }
            });
        }
    });
    //  Population Calendar 11111111111111
    $("#client_html").delegate('#client_population', 'change', function(){
        var date = $('#client_population').val();
        var client_id = $('#client_id').val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/client_population",
                data:{date:date, client_id:client_id, _token:_token},
                success:function(data){
                    $("#client_population_html").html(data);
                }
            });
        }
    });
    //  Coaching Calendar 00000000000000
    $('#showClient_coaching').change(function(){
        var date = $(this).val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/super_coaching_client",
                data:{date:date, _token:_token},
                success:function(data){
                    $("#coachingClient").html(data);
                }
            });
        }
    });
    //  Coaching Calendar 1111111111111111
    $("#client_html").delegate('#client_coaching', 'change', function(){
        var date = $('#client_coaching').val();
        var client_id = $('#client_id').val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/client_coaching",
                data:{date:date, client_id:client_id, _token:_token},
                success:function(data){
                    $("#client_coaching_html").html(data);
                }
            });
        }
    });
    ///////////////////// Superadmin //////////////////////
    ///////////////////////// User Calender ////////////////////////////
    //  Engagement Calendar 0000000000000000
    $('#showUser_engage').change(function(){
        var date = $(this).val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/super_engage_user",
                data:{date:date, _token:_token},
                success:function(data){
                    $("#engageUser").html(data);
                }
            });
        }
    });
    //  Engagement Calendar 11111111111111111
    $("#user_html").delegate('#user_engage', 'change', function(){
        var date = $('#user_engage').val();
        var user_id = $('#user_id').val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/user_engage",
                data:{date:date, user_id:user_id, _token:_token},
                success:function(data){
                    $("#user_engage_html").html(data);
                }
            });
        }
    });
    //  Weekly Calendar 00000000000000000
    $('#showUser_week').change(function(){
        var date = $(this).val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/super_weekly_user",
                data:{date:date, _token:_token},
                success:function(data){
                    $("#weekUser").html(data);
                }
            });
        }
    });
    //  Weekly Calendar 11111111111111111
    $("#user_html").delegate('#user_week', 'change', function(){
        var date = $('#user_week').val();
        var user_id = $('#user_id').val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/user_week",
                data:{date:date, user_id:user_id, _token:_token},
                success:function(data){
                    $("#user_week_html").html(data);
                }
            });
        }
    });
    //  Monthly Calendar 000000000000000
    $('#showUser_month').change(function(){
        var date = $(this).val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/super_monthly_user",
                data:{date:date, _token:_token},
                success:function(data){
                    $("#monthUser").html(data);
                }
            });
        }
    });
    //  Monthly Calendar 1111111111111111111
    $("#user_html").delegate('#user_month', 'change', function(){
        var date = $('#user_month').val();
        var user_id = $('#user_id').val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/user_month",
                data:{date:date, user_id:user_id, _token:_token},
                success:function(data){
                    $("#user_month_html").html(data);
                }
            });
        }
    });
    //  Coaching Calendar 000000000000
    $('#showUser_coaching').change(function(){
        var date = $(this).val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/super_coaching_user",
                data:{date:date, _token:_token},
                success:function(data){
                    $("#coachingUser").html(data);
                }
            });
        }
    });
    //  Coaching Calendar 1111111111111111
    $("#user_html").delegate('#user_coaching', 'change', function(){
        var date = $('#user_coaching').val();
        var user_id = $('#user_id').val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/user_coaching",
                data:{date:date, user_id:user_id, _token:_token},
                success:function(data){
                    $("#user_coaching_html").html(data);
                }
            });
        }
    });
    ///////////////////// Corporate //////////////////////
    ///////////////////////// General Calender ////////////////////////////
    //  Engagement Calendar
    $('#corGeneral_engage').change(function(){
        var date = $(this).val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/cor_engage_general",
                data:{date:date, _token:_token},
                success:function(data){
                    $("#cor_engageGeneral").html(data);
                }
            });
        }
    });
    //  Weekly Calendar
    $('#corGeneral_week').change(function(){
        var date = $(this).val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/cor_weekly_general",
                data:{date:date, _token:_token},
                success:function(data){
                    $("#cor_weekGeneral").html(data);
                }
            });
        }
    });
    //  Monthly Calendar
    $('#corGeneral_month').change(function(){
        var date = $(this).val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/cor_monthly_general",
                data:{date:date, _token:_token},
                success:function(data){
                    $("#cor_monthGeneral").html(data);
                }
            });
        }
    });
    //  Population Calendar
    $('#corGeneral_population').change(function(){
        var date = $(this).val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/cor_population_general",
                data:{date:date, _token:_token},
                success:function(data){
                    $("#cor_populationGeneral").html(data);
                }
            });
        }
    });
    //  Coaching Calendar
    $('#corGeneral_coaching').change(function(){
        var date = $(this).val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/cor_coaching_general",
                data:{date:date, _token:_token},
                success:function(data){
                    $("#cor_coachingGeneral").html(data);
                }
            });
        }
    });
    ///////////////////// Corporate //////////////////////
    ///////////////////////// Team Calender ////////////////////////////
    //  Engagement Calendar 000000000000000
    $('#teamGeneral_engage').change(function(){
        var date = $(this).val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/team_engage_general",
                data:{date:date, _token:_token},
                success:function(data){
                    $("#team_engageGeneral").html(data);
                }
            });
        }
    });
    //  Engagement Calendar 1111111111111
    $('#group_html').delegate('#team_engage', 'change', function(){
        var date = $(this).val();
        var group_id = $('#group_id').val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/team_engage",
                data:{date:date, group_id:group_id, _token:_token},
                success:function(data){
                    $("#team_engage_html").html(data);
                }
            });
        }
    });
    
    //  Weekly Calendar 00000000000
    $('#teamGeneral_week').change(function(){
        var date = $(this).val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/team_weekly_general",
                data:{date:date, _token:_token},
                success:function(data){
                    $("#team_weekGeneral").html(data);
                }
            });
        }
    });
    //  Weekly Calendar 11111111111111
    $('#group_html').delegate('#team_week', 'change', function(){
    
        var date = $(this).val();
        var group_id = $('#group_id').val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/team_week",
                data:{date:date, group_id:group_id, _token:_token},
                success:function(data){
                    $("#team_week_html").html(data);
                }
            });
        }
    });
    //  Monthly Calendar 000000000000000
    $('#teamGeneral_month').change(function(){
        var date = $(this).val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/team_monthly_general",
                data:{date:date, _token:_token},
                success:function(data){
                    $("#team_monthGeneral").html(data);
                }
            });
        }
    });
    //  Monthly Calendar 11111111111111
    $('#group_html').delegate('#team_month', 'change', function(){
  
        var date = $(this).val();
        var group_id = $('#group_id').val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/team_month",
                data:{date:date, group_id:group_id, _token:_token},
                success:function(data){
                    $("#team_month_html").html(data);
                }
            });
        }
    });
    //  Population Calendar 00000000000000
    $('#teamGeneral_population').change(function(){
        var date = $(this).val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/cor_population_general",
                data:{date:date, _token:_token},
                success:function(data){
                    $("#team_populationGeneral").html(data);
                }
            });
        }
    });
    //  Population Calendar 1111111111111
    $('#group_html').delegate('#team_risk', 'change', function(){
   
        var date = $(this).val();
        var group_id = $('#group_id').val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/team_risk",
                data:{date:date, group_id:group_id, _token:_token},
                success:function(data){
                    $("#team_risk_html").html(data);
                }
            });
        }
    });
    //  Coaching Calendar 00000000000
    $('#teamGeneral_coaching').change(function(){
        var date = $(this).val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/team_coaching_general",
                data:{date:date, _token:_token},
                success:function(data){
                    $("#team_coachingGeneral").html(data);
                }
            });
        }
    });
    //  Coaching Calendar 1111111111111111
    $('#group_html').delegate('#team_coach', 'change', function(){
    
        var date = $(this).val();
        var group_id = $('#group_id').val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/team_coach",
                data:{date:date, group_id:group_id, _token:_token},
                success:function(data){
                    $("#team_coach_html").html(data);
                }
            });
        }
    });
    ///////////////////// Teamadmin //////////////////////
    ///////////////////////// My team Calender ////////////////////////////
    //  Engagement Calendar
    $('#myteamGeneral_engage').change(function(){
        var date = $(this).val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/myteam_engage_general",
                data:{date:date, _token:_token},
                success:function(data){
                    $("#myteam_engageGeneral").html(data);
                }
            });
        }
    });
    //  Weekly Calendar
    $('#myteamGeneral_week').change(function(){
        var date = $(this).val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/myteam_weekly_general",
                data:{date:date, _token:_token},
                success:function(data){
                    $("#myteam_weekGeneral").html(data);
                }
            });
        }
    });
    //  Monthly Calendar
    $('#myteamGeneral_month').change(function(){
        var date = $(this).val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/myteam_monthly_general",
                data:{date:date, _token:_token},
                success:function(data){
                    $("#myteam_monthGeneral").html(data);
                }
            });
        }
    });
    //  Population Calendar
    $('#myteamGeneral_population').change(function(){
        var date = $(this).val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/myteam_population_general",
                data:{date:date, _token:_token},
                success:function(data){
                    $("#myteam_populationGeneral").html(data);
                }
            });
        }
    });
    //  Coaching Calendar
    $('#myteamGeneral_coaching').change(function(){
        var date = $(this).val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/myteam_coaching_general",
                data:{date:date, _token:_token},
                success:function(data){
                    $("#myteam_coachingGeneral").html(data);
                }
            });
        }
    });
    ///////////////////// Teamadmin //////////////////////
    ///////////////////////// Per Member Calender ////////////////////////////
    //  Engagement Calendar
    $('#memberGeneral_engage').change(function(){
        var date = $(this).val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/member_engage_general",
                data:{date:date, _token:_token},
                success:function(data){
                    $("#member_engageGeneral").html(data);
                }
            });
        }
    });
    //  Weekly Calendar
    $('#memberGeneral_week').change(function(){
        var date = $(this).val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/member_weekly_general",
                data:{date:date, _token:_token},
                success:function(data){
                    $("#member_weekGeneral").html(data);
                }
            });
        }
    });
    //  Monthly Calendar
    $('#memberGeneral_month').change(function(){
        var date = $(this).val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/member_monthly_general",
                data:{date:date, _token:_token},
                success:function(data){
                    $("#member_monthGeneral").html(data);
                }
            });
        }
    });
    //  Coaching Calendar
    $('#memberGeneral_coaching').change(function(){
        var date = $(this).val();
        console.log(date);
        if(date !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type:"POST",
                url:"/member_coaching_general",
                data:{date:date, _token:_token},
                success:function(data){
                    $("#member_coachingGeneral").html(data);
                }
            });
        }
    });
});