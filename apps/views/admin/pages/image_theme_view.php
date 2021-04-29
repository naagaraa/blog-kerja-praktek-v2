<!-- TASKS Artikel line -->
<div class="panel">
    <div class="panel-body">
        <h3>Theme image</h3><br>
        <table id="imageThemeTable" class="table table-striped table-dark" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">uniqid</th>
                    <th scope="col">Judul</th>
                    <th scope="col">image</th>
                </tr>
            </thead>
            <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data['image'] as $key ) :?>
                <tr>
                    <th scope="row"><?= $no++ ?> </th>
                    <td><?= $key['uniqid'] ?></td>
                    <td><?= $key['judul'] ?></td>
                    <td><?= $key['image'] ?></td>
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
        <form id="image-form" enctype="multipart/form-data">   
            <div class="form-group mb-5">
                <div class="custom-file mb-3">
                    <label class="custom-file-label" for="cover"><span style="color: red;">*</span>image :
                    </label>
                    <input type="file" class="custom-file-input" id="image" name="image">
                </div>
            </div>
            <div class="form-group mb-5">
                <div class="col-md">
                    <label for="judul"><span style="color: red;">*</span>Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" >
                </div>
            </div>
            <button type="submit" class="btn btn-primary">save</button>
        </form>
    </div>
</div>
<!-- END TASKS Artikel Line -->
<script>
$(document).ready(function() {
    $('#imageThemeTable').DataTable( {
        dom: 'Bfrtip',
		buttons: [
			'copy', 'csv', 'excel', 'pdf', 'print'
		]
    } );
} );
</script>
<script src="<?= BASEURL . 'public'; ?>/js/cms/theme.js"></script>