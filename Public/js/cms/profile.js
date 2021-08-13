$(document).ready(function () {
    $("#profile-update").submit(function (e) { 
        e.preventDefault();
        update_profile();
    });
    $("#password-update").submit(function (e) { 
        e.preventDefault();
        reset_password();
    });
});

function update_profile() {
    let id = $('#id').val();
    let nama = $('#nama').val();
    let username = $('#username').val();
    let password = $('#password').val();
    let deskripsi = CKEDITOR.instances.deskripsi.getData()


    console.log(deskripsi);

    datas = new FormData();
    datas.append('id', id);
    datas.append('nama', nama);
    datas.append('username', username);
    datas.append('password', password);
    datas.append('deskripsi', deskripsi);
    // handle ajax type file / multi part
    jQuery.each(jQuery('#foto')[0].files, function(i, file) {
        datas.append('foto', file);
    });

    $.ajax({
        type: "POST",
        url: api_profile_update,
        data: datas,
        dataType: "JSON",
        processData: false,
        contentType: false,
        success: function (response) {
            if (response.success == true) {
                berhasil_login(response.message)
            } else if (response.success == false){
                gagal_login(response.message);
            }
            console.log(response.message);
        },
        error: function (e) {
            console.log(e.message);
        }
    });
}

function reset_password()
{
    // reset password here
    swal("password-update");
}