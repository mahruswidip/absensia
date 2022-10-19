<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <div class="row justify-content-between">
                    <div class="col-md-9">
                        <h3 class="card-title ">Data Siswa</h3>
                    </div>
                    <div class="col-auto">
                        <a href="<?php echo site_url('petani/add'); ?>" class="btn btn-success"><span class="fa fa-plus"></span></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>NIK</th>
                            <th>Nomor Hp</th>
                            <th>Alamat</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            <?php foreach ($petani as $p) { ?>
                                <tr>
                                    <td><?php echo $p['nama_petani']; ?></td>
                                    <td><?php echo $p['jenis_kelamin']; ?></td>
                                    <td><?php echo $p['tanggal_lahir']; ?></td>
                                    <td><?php echo $p['nik']; ?></td>
                                    <td><?php echo $p['nomor_hp']; ?></td>
                                    <td><?php echo $p['alamat']; ?></td>
                                    <td>
                                        <a href="<?php echo site_url('petani/edit/' . $p['id_petani']); ?>" class="btn btn-info"><span class="fa fa-pencil"></span></a>
                                        <a href="<?php echo site_url('petani/remove/' . $p['id_petani']); ?>" class="btn btn-danger"><span class="fa fa-trash"></span></a>
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