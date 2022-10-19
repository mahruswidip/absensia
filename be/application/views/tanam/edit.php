<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Tanam Edit</h3>
			</div>
			<?php echo form_open('tanam/edit/' . $tanam['id_tanam']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_komoditas" class="control-label">Id Komoditas</label>
						<div class="form-group">
							<select name="id_komoditas" class="form-control">
								<option value="">Pilih Komoditas</option>
								<?php foreach ($komoditases as $komoditas) {
									$selected = "";
									if ($komoditas['id_komoditas'] == $tanam['id_komoditas']) {
										$selected = 'selected="selected"';
										echo "<option value='" . $komoditas['id_komoditas'] . "'$selected>" . $komoditas['nama_komoditas'] . "</option>";
									}
								} ?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_luasan" class="control-label">Id Luasan</label>
						<div class="form-group">
							<select name="id_komoditas" class="form-control">
								<option value="">Pilih Luasan</option>
								<?php foreach ($luasanes as $luasan) {
									$selected = "";
									if ($luasan['id_luasan'] == $tanam['id_luasan']) {
										$selected = 'selected="selected"';
										echo "<option value='" . $luasan['id_luasan'] . "'$selected>" . $luasan['nama_luasan'] . "</option>";
									}
								} ?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tanggal_tanam" class="control-label">Tanggal Tanam</label>
						<div class="form-group">
							<input type="date" name="tanggal_tanam" value="<?php echo ($this->input->post('tanggal_tanam') ? $this->input->post('tanggal_tanam') : $tanam['tanggal_tanam']); ?>" class="form-control" id="tanggal_tanam" />
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