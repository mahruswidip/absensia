<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <div class="row justify-content-between">
                    <div class="col-md-9">
                        <h3 class="card-title ">Data Panen</h3>
                    </div>
                    <div class="col-auto">
                        <a href="<?php echo site_url('panen/add'); ?>" class="btn btn-success"><span class="fa fa-plus"></span></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>Komoditas</th>
                            <th>Luasan</th>
                            <th>Hasil Panen</th>
                            <th>Tanggal Panen</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            <?php foreach ($panen as $p) { ?>
                                <tr>
                                    <td><?php echo $p['nama_komoditas']; ?></td>
                                    <td><?php echo $p['nama_luasan']; ?></td>
                                    <td><?php echo $p['hasil_panen']; ?></td>
                                    <td><?php echo $p['tanggal_panen']; ?></td>
                                    <td>
                                        <a href="<?php echo site_url('panen/edit/' . $p['id_panen']); ?>" class="btn btn-info"><span class="fa fa-pencil"></span></a>
                                        <a href="<?php echo site_url('panen/remove/' . $p['id_panen']); ?>" class="btn btn-danger"><span class="fa fa-trash"></span></a>
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