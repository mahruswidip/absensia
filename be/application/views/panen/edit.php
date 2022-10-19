<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Panen Edit</h3>
			</div>
			<?php echo form_open('panen/edit/' . $panen['id_panen']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_komoditas" class="control-label">Komoditas</label>
						<div class="form-group">
							<select name="id_komoditas" class="form-control">
								<option value="">Pilih Komoditas</option>
								<?php foreach ($komoditases as $komoditas) {
									$selected = "";
									if ($komoditas['id_komoditas'] == $panen['id_komoditas']) {
										$selected = 'selected="selected"';
										echo "<option value='" . $komoditas['id_komoditas'] . "'$selected>" . $komoditas['nama_komoditas'] . "</option>";
									}
								} ?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_luasan" class="control-label">Luasan</label>
						<div class="form-group">
							<select name="id_komoditas" class="form-control">
								<option value="">Pilih Luasan</option>
								<?php foreach ($luasanes as $luasan) {
									$selected = "";
									if ($luasan['id_luasan'] == $panen['id_luasan']) {
										$selected = 'selected="selected"';
										echo "<option value='" . $luasan['id_luasan'] . "'$selected>" . $luasan['nama_luasan'] . "</option>";
									}
								} ?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="hasil_panen" class="control-label">Hasil Panen</label>
						<div class="form-group">
							<input type="text" name="hasil_panen" value="<?php echo ($this->input->post('hasil_panen') ? $this->input->post('hasil_panen') : $panen['hasil_panen']); ?>" class="form-control" id="hasil_panen" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tanggal_panen" class="control-label">Tanggal Panen</label>
						<div class="form-group">
							<input type="date" name="tanggal_panen" value="<?php echo ($this->input->post('tanggal_panen') ? $this->input->post('tanggal_panen') : $panen['tanggal_panen']); ?>" class="form-control" id="tanggal_panen" />
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