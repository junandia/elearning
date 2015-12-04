<div class="panel panel-default">
    <div class="panel-body">
        <?php echo button_create('pages/add', 'Halaman Baru') ?>

        <hr>

        <table class="table table-hover table-bordered" id="article">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Judul</th>
                    <th>Waktu</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pages as $row): ?>
                <tr>
                    <td><?php echo $row->id ?></td>
                    <td><?php echo $row->title ?></td>
                    <td><?php echo $row->date ?></td>
                    <td>
                        <?php echo button_edit('pages/edit/' . $row->id) ?>
                        <?php echo button_delete('pages/delete/' . $row->id) ?>
                    </td>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#article').DataTable();
    } );
</script>
