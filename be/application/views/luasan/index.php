<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <div class="row justify-content-between">
                    <div class="col-md-9">
                        <h3 class="card-title ">Data Luasan</h3>
                    </div>
                    <div class="col-auto">
                        <a href="<?php echo site_url('luasan/add'); ?>" class="btn btn-success"><span class="fa fa-plus"></span></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>Nama Luasan</th>
                            <th>Luas</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            <?php foreach ($luasan as $l) { ?>
                                <tr>
                                    <td><?php echo $l['nama_luasan']; ?></td>
                                    <td><?php echo $l['luas']; ?></td>
                                    <td><?php echo $l['status']; ?></td>
                                    <td>
                                        <a href="<?php echo site_url('luasan/edit/' . $l['id_luasan']); ?>" class="btn btn-info"><span class="fa fa-pencil"></span></a>
                                        <a href="<?php echo site_url('luasan/remove/' . $l['id_luasan']); ?>" class="btn btn-danger"><span class="fa fa-trash"></span></a>
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