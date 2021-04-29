$(document).ready(function () {
    $("#profile-update").submit(function (e) { 
        e.preventDefault();
        update_profile();
    });
});

function update_profile() {
    let id = $('#id').val();
    let nama = $('#nama').val();
    let username = $('#username').val();
    let password = $('#password').val();
    let deskripsi = $('#deskripsi').val();
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
            console.log(response);
            location.reload();
        },
        error: function (e) {
            console.log(e.message);
        }
    });
  }