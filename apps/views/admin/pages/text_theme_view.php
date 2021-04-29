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
            <?php $no = 1; ?>
            <?php foreach ($data['text'] as $key ) :?>
                <tr>
                    <th scope="row"><?= $no++ ?> </th>
                    <td><?= $key['uniqid'] ?></td>
                    <td><?= $key['judul'] ?></td>
                    <td><?= $key['content'] ?></td>
                </tr>
            <?php endforeach ; ?>
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
        <form id="text-form" enctype="multipart/form-data">   
            <div class="form-group mb-5">
                <div class="col-md">
                    <label for="judul"><span style="color: red;">*</span>Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" >
                </div>
            </div>
            <div class="form-group mb-5">
                <div class="col-md">
                    <label for="judul"><span style="color: red;">*</span>content</label>
                    <input type="text" class="form-control" id="content" name="content" >
                </div>
            </div>
            <button type="submit" class="btn btn-primary">save</button>
        </form>
    </div>
</div>
<!-- END TASKS Artikel Line -->

<script>
$(document).ready(function() {
    $('#textThemeTable').DataTable( {
        dom: 'Bfrtip',
		buttons: [
			'copy', 'csv', 'excel', 'pdf', 'print'
		]
    } );
} );
</script>
<script src="<?= BASEURL . 'public'; ?>/js/cms/theme.js"></script>