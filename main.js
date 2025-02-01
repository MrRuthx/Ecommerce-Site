$('#signup_btn').click(function(e){
    e.preventDefault();
    $.ajax({
        url: "register.php",
        method: "POST",
        data: $("form").serialize(),
        success: function(data){
            $("#err_msg").html(data);
            $("form").trigger("reset");
        }
    })
})

$("#login").click(function(event){
    event.preventDefault();
    var email=$('#email').val();
    var pwd=$('#password').val();
    console.log(pwd);
    $.ajax({
        url: "login.php",
        method: "POST",
        data: {userLogin:1,email:email, pwd:pwd},
        success: function(data){
            if(data=="true"){
                window.location.href="profile.php";
            }
        }
    })
})