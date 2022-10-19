<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <div class="row justify-content-between">
                    <div class="col-md-9">
                        <h3 class="card-title ">Data Jurnal Kegiatan</h3>
                    </div>
                    <div class="col-auto">
                        <a href="<?php echo site_url('jurnal_kegiatan/add'); ?>" class="btn btn-success"><span class="fa fa-plus"></span></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>Tanggal Kegiatan</th>
                            <th>Nama Kegiatan</th>
                            <th>Uraian</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            <?php foreach ($jurnal_kegiatan as $j) { ?>
                                <tr>
                                    <td><?php echo $j['tanggal_kegiatan']; ?></td>
                                    <td><?php echo $j['nama_kegiatan']; ?></td>
                                    <td><?php echo $j['uraian']; ?></td>
                                    <td>
                                        <a href="<?php echo site_url('jurnal_kegiatan/edit/' . $j['id_jurnal']); ?>" class="btn btn-info"><span class="fa fa-pencil"></span></a>
                                        <a href="<?php echo site_url('jurnal_kegiatan/remove/' . $j['id_jurnal']); ?>" class="btn btn-danger"><span class="fa fa-trash"></span></a>
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