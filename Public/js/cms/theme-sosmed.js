$(document).ready(function () {
    $('#sosmed-form').submit(function (e) { 
        e.preventDefault();
        insert_sosmed();
    });
});

function insert_sosmed() {
    // code here
    let sosmed = $('#sosmed-input').val();
    let link = $('#link-input').val()

    if (sosmed !== '' && link !== '') {
        data_sukses("berhasil di tambahkan")
    } else if (sosmed !== '' && link == ''){
        data_gagal("form link link belum di isi cuy")
    } else if (sosmed == '' && link !== ''){
        data_gagal("form link sosmed belum di isi cuy")
    }else {
        data_gagal("form belum ada yang di isi cuy")
    }
}

function update_sosmed() {
    //code here
}

function delete_sosmed() {
    // code here
}