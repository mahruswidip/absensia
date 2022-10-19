<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Luasan Add</h3>
            </div>
            <?php echo form_open('luasan/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					  <div class="col-md-6">
						  <label for="nama_luasan" class="control-label">Nama Luasan</label>
						  <div class="form-group">
							  <input type="text" name="nama_luasan" value="<?php echo $this->input->post('nama_luasan'); ?>" class="form-control" id="nama_luasan" />
							</div>
						</div>
						<div class="col-md-6">
							<label for="luas" class="control-label">Luas</label>
							<div class="form-group">
								<input type="text" name="luas" value="<?php echo $this->input->post('luas'); ?>" class="form-control" id="luas" />
							</div>
						</div>
						<div class="col-md-6">
							<label for="status" class="control-label">Status</label>
							<div class="form-group">
								<select name="status" class="form-control">
									<option value="">Pribadi / Sewa</option>
									<?php 
									$status_values = array(
										'Pribadi'=>'Pribadi',
										'Sewa'=>'Sewa',
									);
	
									foreach($status_values as $value => $display_text)
									{
										$selected = ($value == $this->input->post('status')) ? ' selected="selected"' : "";
	
										echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
									} 
									?>
								</select>
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