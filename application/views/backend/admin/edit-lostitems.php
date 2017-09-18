<?php include 'header-admin.php' ?>

<?php
	$id			= $product->id;
if($this->input->post('is_submitted')){
	 $kategori = set_value('kategori');
	 $lokasi = set_value('lokasi');
	 $lokasi_lengkap =set_value('lokasi_lengkap');
	 $warna = set_value('warna');
	 $merek = set_value('merek');
	 $judul = set_value('judul');
	 $deskripsi = set_value('deskripsi');
	 $tgl_hilang = set_value('tgl_hilang');
	
}else{
	$kategori 		= $product->kategori;
	$lokasi 		= $product->lokasi;
	$lokasi_lengkap = $product->lokasi_lengkap;
	$warna 			= $product->warna;
	$merek 			= $product->merek;
	$judul 			= $product->judul;
	$deskripsi 		= $product->deskripsi;
	$tgl_hilang 	= $product->tgl_hilang;

	
}
?>
	<div class="content">
		<header>
			<h2 class="page_title">Edit Lost Items</h2>
		</header>
		
			<div class="content-inner">
						<div class="form-wrapper">
							<?= form_open_multipart('admin/db/update_li/'.$id,['class'=>'form-horizontal']) ?>
								<div class="form-group">
									<label class="sr-only">Judul</label>
									<input type="text" class="form-control" id="title" name="judul" placeholder="Judul" value="<?=$judul?>">
								</div>
								
								<div class="form-group">
									<label class="sr-only">Kategori</label>
									<select data-placeholder="<?=$kategori?>" multiple name="kategori" class="form-control chosen-select">
										<option></option>
										<option>KTP</option>
										<option>KRS</option>
										<option>Blanko</option>
										<option>KTM</option>
										<option>SIM</option>
										<option>STNK</option>
										<option>Kartu Ilab</option>
										<option>Debit/Kredit</option>
										<option>Kartu Lainnya</option>
										<option>Handphone</option>
										<option>Laptop</option>
										<option>Charger</option>
										<option>Hardisk</option>
										<option>Flashdisk</option>
										<option>Headset</option>
										<option>Elektronik Lainnya</option>
										<option>Buku Paket</option>
										<option>Buku Modul</option>
										<option>Binder</option>
										<option>Novel</option>
										<option>Buku Lainnya</option>
										<option>Uang</option>
										<option>Dompet</option>
										<option>Tas</option>
										<option>Jam Tangan</option>
										<option>Kacamata</option>
										<option>Jaket</option>
										<option>Pakaian</option>
										<option>Sepatu</option>
										<option>Perhiasan</option>
										<option>Kunci</option>
										<option>Aksesoris Lainnya</option>
									</select>
								</div>
								<div class="form-group">
									<label class="sr-only">Merk/Model/Jenis</label>
									<input type="text" class="form-control" id="merk" name="merek" value="<?=$merek?>" placeholder="Merek/Model/Jenis">
								</div>
								<div class="form-group">
									<label class="sr-only">Deskripsi</label>
									<input type="text" class="form-control" id="deskripsi" value="<?=$deskripsi?>" name="deskripsi" placeholder="Deskripsi Lengkap">
								</div>
								<div class="form-group">
									<label class="sr-only">Warna</label>
									<input type="text" class="form-control" id="deskripsi" name="warna" value="<?=$warna?>">
								</div>

								<div class="form-group">
									<label class="sr-only">Tanggal</label>
									<input type="text" class="form-control" id="deskripsi" name="tgl_hilang" value="<?=$tgl_hilang?>" placeholder="Tanggal">
								</div>

								<div class="form-group">
								  <label class="sr-only">Lokasi Kampus</label>
								    <select class="form-control" name="lokasi">
						    <option value="<?=$lokasi?>" disabled selected><?=$lokasi?></option>
                          <option value="Kampus D" >Kampus D</option>
                          <option value="Kampus E" >Kampus E</option>
                          <option value="Kampus F" >Kampus F</option>
                          <option value="Kampus G" >Kampus G</option>
                          <option value="Kampus H" >Kampus H</option>
						  </select>
								</div>
						
								<div class="form-group">
									<label class="sr-only">Lokasi Lengkap</label>
									<input type="text" class="form-control" id="deskripsi" name="lokasi_lengkap" value="<?=$lokasi_lengkap?>">
								</div>
					
					<div class="form-group">
						<input type="file" name="userfile" class="file">
						<div class="input-group col-xs-12">
						  <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
						  <input type="text" class="form-control input-lg" name="userfile" disabled placeholder="Upload Image">
						  <span class="input-group-btn">
							<button class="browse btn btn-primary input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
						  </span>
						</div>
					 </div>
					
					<br>
					<br>
					<br>
					<div class="clearfix">
						<button type="submit" class="btn btn-primary pull-right">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php include 'footer-admin.php' ?>