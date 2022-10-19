<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Jurnal Kegiatan Add</h3>
            </div>
            <?php echo form_open('jurnal_kegiatan/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="nama_kegiatan" class="control-label">Nama Kegiatan</label>
						<div class="form-group">
							<input type="text" name="nama_kegiatan" value="<?php echo $this->input->post('nama_kegiatan'); ?>" class="form-control" id="nama_kegiatan" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="uraian" class="control-label">Uraian</label>
						<div class="form-group">
							<input type="text" name="uraian" value="<?php echo $this->input->post('uraian'); ?>" class="form-control" id="uraian" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tanggal_kegiatan" class="control-label">Tanggal Kegiatan</label>
						<div class="form-group">
							<input type="date" name="tanggal_kegiatan" value="<?php echo $this->input->post('tanggal_kegiatan'); ?>" class="form-control" id="tanggal_kegiatan" />
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>