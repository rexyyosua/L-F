<?php include 'header-admin.php' ?>
<?php
	$id			= $product->id;
if($this->input->post('is_submitted')){
	 $status = set_value('sp');
}else{
	$status	= $product->status;
}
?>

	<div class="content">
		<header>
			<h2><h1 class="page_title">Ubah Status</h1></h2>
		</header>
					<?= form_open_multipart('admin/db/edit_status_penemu/'.$id,['class'=>'form-group']) ?>
					<div class="form-group">
					<div class="col-md-4">
					  <label for="sel1">Status:</label>
					  <select class="form-control" name="sp" id="sel1">
					  	<option value="sedang diproses"><?=$status?></option>
						<option value="sedang diproses">Sedang Diproses</option>
						<option value="Barang Diadmin">Barang Diadmin</option>
						<option value="Sudah Ditemukan">Sudah Ditemukan</option>
						<option value="Sudah Dikembalikan">Sudah Dikembalikan</option>
					  </select>
					</div>
					<br>
								<div class="clearfix">
									<button type="submit" class="btn btn-primary pull-left">Save</button></p>
								</div>
							</form>
						</div>
					</div>
				</div>
					</div>
					<?php include 'footer-admin.php' ?>