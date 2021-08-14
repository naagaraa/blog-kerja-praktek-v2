<!-- TASKS Artikel line -->
<div class="panel">
    <div class="panel-body">
        <h3>Theme text</h3>
        <br>
        <table id="textThemeTable" class="table table-striped table-dark" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">uniqid</th>
                    <th scope="col">Judul</th>
                    <th scope="col">content</th>
                </tr>
            </thead>
            <tbody>
            <?php $no = 1;?>
            <?php foreach ($data['text'] as $key): ?>
                <tr>
                    <th scope="row"><?=$no++?> </th>
                    <td><?=$key['uniqid']?></td>
                    <td><?=$key['judul']?></td>
                    <td><?=$key['content']?></td>
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
        <form id="text-form">
            <div class="form-group mb-5">
                <div class="col-md">
                    <label for="judul"><span style="color: red;">*</span>Judul</label>
                    <input type="text" class="form-control" id="judul">
                </div>
            </div>
            <div class="form-group mb-5">
                <div class="col-md">
                    <label for="content"><span style="color: red;">*</span>content</label>
                    <input type="text" class="form-control" id="content">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">save</button>
        </form>
    </div>
</div>
<!-- END TASKS Artikel Line -->

<script>
$(document).ready(function() {
    // datatables
    $('#textThemeTable').DataTable( {
        dom: 'Bfrtip',
		buttons: [
			'copy', 'csv', 'excel', 'pdf', 'print'
		]
    } );

    // crud
    $('#text-form').submit(function (e) {
        e.preventDefault();
        insert_text();
    });
} );

// function insert text
function insert_text(){
    // code here
    let judul = $('#judul').val();
    let content = $('#content').val()

    if (judul !== '' && content !== '') {
        datas = new FormData();
        datas.append('judul', judul);
        datas.append('content', content);

        $.ajax({
        type: "POST",
        url: api_text_post,
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
    } else if (judul !== '' && content == ''){
        data_gagal("form content content belum di isi cuy")
    } else if (judul == '' && content !== ''){
        data_gagal("form content judul belum di isi cuy")
    }else {
        data_gagal("form belum ada yang di isi cuy")
    }
}
</script>