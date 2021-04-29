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
            <?php $no = 1; ?>
            <?php foreach ($data['sosmed'] as $key ) :?>
                <tr>
                    <th scope="row"><?= $no++ ?> </th>
                    <td><?= $key['uniqid'] ?></td>
                    <td><?= $key['sosmed'] ?></td>
                    <td><?= $key['link'] ?></td>
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
    $('#sosmedThemeTable').DataTable( {
        dom: 'Bfrtip',
		buttons: [
			'copy', 'csv', 'excel', 'pdf', 'print'
		]
    } );
} );
</script>
<script src="<?= BASEURL . 'public'; ?>/js/cms/theme-sosmed.js"></script>