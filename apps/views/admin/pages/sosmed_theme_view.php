<!-- TASKS Artikel line -->
<div class="panel">
    <div class="panel-body">
        <h3>Theme sosmed</h3>
        <br>
        <table id="sosmedThemeTable" class="table table-striped table-dark" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">uniqid</th>
                    <th scope="col">sosmed</th>
                    <th scope="col">link</th>
                </tr>
            </thead>
            <tbody>
            <?php $no = 1;?>
            <?php foreach ($data['sosmed'] as $key): ?>
                <tr>
                    <th scope="row"><?=$no++?> </th>
                    <td><?=$key['uniqid']?></td>
                    <td><?=$key['sosmed']?></td>
                    <td><?=$key['link']?></td>
                </tr>
            <?php endforeach;?>
            </tfoot>
        </table>
    </div>
</div>
<!-- END TASKS Artikel Line -->
<!-- TASKS Artikel line -->
<div class="panel">
    <div class="panel-body">
        <h3>Tambah data</h3>
        <br>
        <form id="sosmed-form" >
        <div class="form-group mb-5">
                <div class="col-md">
                    <label for="judul"><span style="color: red;">*</span>sosmed</label>
                    <input type="text" class="form-control" id="sosmed-input" name="sosmed" >
                </div>
            </div>
            <div class="form-group mb-5">
                <div class="col-md">
                    <label for="judul"><span style="color: red;">*</span>link</label>
                    <input type="text" class="form-control" id="link-input" name="link" >
                </div>
            </div>
            <button type="submit" class="btn btn-primary">save</button>
        </form>
    </div>
</div>
<!-- END TASKS Artikel Line -->
<script>
$(document).ready(function() {
    // data tables
    $('#sosmedThemeTable').DataTable( {
        dom: 'Bfrtip',
		buttons: [
			'copy', 'csv', 'excel', 'pdf', 'print'
		]
    } );

    // crud ajax
    $('#sosmed-form').submit(function (e) {
        e.preventDefault();
        insert_sosmed();
    });
} );

// function crud
function insert_sosmed() {
    // code here
    let sosmed = $('#sosmed-input').val();
    let link = $('#link-input').val()

    if (sosmed !== '' && link !== '') {

        datas = new FormData();
        datas.append('sosmed', sosmed);
        datas.append('link', link);

        // ajax method
    $.ajax({
        type: "POST",
        url: api_sosmed_post,
        data: datas,
        dataType: "JSON",
        processData: false,
        contentType: false,
        success: function (response) {
            if (response.success == true) {
                data_sukses(response.message)
                location.reload();
            } else if (response.success == false){
                data_gagal(response.message);
                location.reload();
            }
            console.log(response.message);
        },
        error: function (e) {
            console.log(e.message);
        }
    });
    } else if (sosmed !== '' && link == ''){
        data_gagal("form link link belum di isi cuy")
    } else if (sosmed == '' && link !== ''){
        data_gagal("form link sosmed belum di isi cuy")
    }else {
        data_gagal("form belum ada yang di isi cuy")
    }
}
</script>