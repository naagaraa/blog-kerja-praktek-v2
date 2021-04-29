$(document).ready(function () {
   $('#login').submit(function (e) { 
       e.preventDefault();
       login();
   });
});


function login() 
{
    let username, passowrd;
    username = $('#username').val();
    passowrd = $('#password').val();

    // form validation dengan jquery javascript
    if (username !== '' && passowrd !== '') {
        datas = new FormData();
        datas.append('username', username);
        datas.append('password', passowrd);

        $.ajax({
            url: auth,
            type: "POST",
            data: datas,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function (response) {
                if (response.success == true) {
                    berhasil_login(response.message)
                } else if (response.success == false){
                    gagal_login(response.message);
                }
            },
            error: function (e) {
                console(e.message);
            }
        });
    }else if (username == "" || password == "") 
    {
        gagal("plese fill form")
    }else if(username !== '' && passowrd == "")
    {
        gagal("please fill password")
    }else if(username == '' && passowrd !== "")
    {
        gagal("please fill username")
    }
}