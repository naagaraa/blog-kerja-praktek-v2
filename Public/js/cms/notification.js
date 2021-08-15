// notification menggunakan sweet alert

function berhasil_login(message) 
{
swal({
    title: "login berhasil !",
    text: message,
    button : false,
    icon: "success",
    timer: 2500,
    });
    location.reload()
}


function gagal_login(message) 
{
swal({
    title: "Login Gagal",
    text: message,
    icon: "warning",
    button: "back",
    });
}

function data_sukses(message) 
{
swal({
    title: message,
    text: message,
    button : false,
    icon: "success",
    timer: 2500,
    });
}
function data_gagal(message) 
{
swal({
    title: "warning",
    button : false,
    text : message,
    icon: "warning",
    // timer: 2500,
    });
}


function konfirmasi() 
{
swal({
    title: "Login Gagal",
    text: message,
    icon: "warning",
    button: "back",
    });
}