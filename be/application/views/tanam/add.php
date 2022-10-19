<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Tanam Add</h3>
			</div>
			<?php echo form_open('tanam/add'); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_komoditas" class="control-label">Komoditas</label>
						<div class="form-group">
							<select name="id_komoditas" class="form-control">
								<option value="">Pilih Komoditas</option>
								<?php foreach ($komoditases as $komoditas) {
									echo "<option value='" . $komoditas['id_komoditas'] . "'>" . $komoditas['nama_komoditas'] . "</option>";
								} ?>
							</select>
							<!-- <input type="text" name="id_komoditas" value="<?php echo $this->input->post('id_komoditas'); ?>" class="form-control" id="id_komoditas" /> -->
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_luasan" class="control-label">Luasan</label>
						<div class="form-group">
							<select name="id_luasan" class="form-control">
								<option value="">Pilih Luasan</option>
								<?php foreach ($luasanes as $luasan) {
									echo "<option value='" . $luasan['id_luasan'] . "'>" . $luasan['nama_luasan'] . "</option>";
								} ?>
							</select>
							<!-- <input type="text" name="id_luasan" value="<?php echo $this->input->post('id_luasan'); ?>" class="form-control" id="id_luasan" /> -->
						</div>
					</div>
					<div class="col-md-6">
						<label for="tanggal_tanam" class="control-label">Tanggal Tanam</label>
						<div class="form-group">
							<input type="date" name="tanggal_tanam" value="<?php echo $this->input->post('tanggal_tanam'); ?>" class="form-control" id="tanggal_tanam" />
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