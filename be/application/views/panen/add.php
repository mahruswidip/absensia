<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Panen Add</h3>
			</div>
			<?php echo form_open('panen/add'); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_komoditas" class="control-label">Id Komoditas</label>
						<div class="form-group">
							<select name="id_komoditas" class="form-control">
								<option value="">Pilih Komoditas</option>
								<?php foreach ($komoditases as $komoditas) {
									echo "<option value='" . $komoditas['id_komoditas'] . "'>" . $komoditas['nama_komoditas'] . "</option>";
								} ?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_luasan" class="control-label">Id Luasan</label>
						<div class="form-group">
							<select name="id_luasan" class="form-control">
								<option value="">Pilih Luasan</option>
								<?php foreach ($luasanes as $luasan) {
									echo "<option value='" . $luasan['id_luasan'] . "'>" . $luasan['nama_luasan'] . "</option>";
								} ?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="hasil_panen" class="control-label">Hasil Panen</label>
						<div class="form-group">
							<input type="text" name="hasil_panen" value="<?php echo $this->input->post('hasil_panen'); ?>" class="form-control" id="hasil_panen" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tanggal_panen" class="control-label">Tanggal Panen</label>
						<div class="form-group">
							<input type="date" name="tanggal_panen" value="<?php echo $this->input->post('tanggal_panen'); ?>" class="form-control" id="tanggal_panen" />
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