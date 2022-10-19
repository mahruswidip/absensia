<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Petani Edit</h3>
            </div>
			<?php echo form_open('petani/edit/'.$petani['id_petani']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="jenis_kelamin" class="control-label">Jenis Kelamin</label>
						<div class="form-group">
							<select name="jenis_kelamin" class="form-control">
								<option value="">select</option>
								<?php 
								$jenis_kelamin_values = array(
									'Perempuan'=>'Perempuan',
								);

								foreach($jenis_kelamin_values as $value => $display_text)
								{
									$selected = ($value == $petani['jenis_kelamin']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama_petani" class="control-label">Nama Petani</label>
						<div class="form-group">
							<input type="text" name="nama_petani" value="<?php echo ($this->input->post('nama_petani') ? $this->input->post('nama_petani') : $petani['nama_petani']); ?>" class="form-control" id="nama_petani" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tanggal_lahir" class="control-label">Tanggal Lahir</label>
						<div class="form-group">
							<input type="date" name="tanggal_lahir" value="<?php echo ($this->input->post('tanggal_lahir') ? $this->input->post('tanggal_lahir') : $petani['tanggal_lahir']); ?>" class="form-control" id="tanggal_lahir" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nik" class="control-label">NIK</label>
						<div class="form-group">
							<input type="text" name="nik" value="<?php echo ($this->input->post('nik') ? $this->input->post('nik') : $petani['nik']); ?>" class="form-control" id="nik" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nomor_hp" class="control-label">Nomor Hp</label>
						<div class="form-group">
							<input type="text" name="nomor_hp" value="<?php echo ($this->input->post('nomor_hp') ? $this->input->post('nomor_hp') : $petani['nomor_hp']); ?>" class="form-control" id="nomor_hp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="alamat" class="control-label">Alamat</label>
						<div class="form-group">
							<textarea name="alamat" class="form-control" id="alamat"><?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $petani['alamat']); ?></textarea>
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