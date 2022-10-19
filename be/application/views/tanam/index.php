<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <div class="row justify-content-between">
                    <div class="col-md-9">
                        <h3 class="card-title ">Data Tanam</h3>
                    </div>
                    <div class="col-auto">
                        <a href="<?php echo site_url('tanam/add'); ?>" class="btn btn-success"><span class="fa fa-plus"></span></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>Komoditas</th>
                            <th>Luasan</th>
                            <th>Tanggal Tanam</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            <?php foreach ($tanam as $t) { ?>
                                <tr>
                                    <td><?php echo $t['nama_komoditas']; ?></td>
                                    <td><?php echo $t['nama_luasan']; ?></td>
                                    <td><?php echo $t['tanggal_tanam']; ?></td>
                                    <td>
                                        <a href="<?php echo site_url('tanam/edit/' . $t['id_tanam']); ?>" class="btn btn-info"><span class="fa fa-pencil"></span></a>
                                        <a href="<?php echo site_url('tanam/remove/' . $t['id_tanam']); ?>" class="btn btn-danger"><span class="fa fa-trash"></span></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="pull-right">
                        <?php echo $this->pagination->create_links(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>