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
<!doctype html>
<html>
	<head>
		
		<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
		
		<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
		
	</head>
	<body>
	<?php $this->load->view('header1')?>
		<div class="row">
			<div  class="col-sm-1"></div>
			<div class="col-sm-10">
				<h4>Edit a Found item</h4>
				<hr>
				<div><?=validation_errors() ?></div>
				<?= form_open_multipart('user/li/update/'.$id,['class'=>'form-horizontal']) ?>



				<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Judul</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" name="judul" placeholder="" value="<?=$judul?>">
						</div>
					  </div>

					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Kategori</label>
						<div class="col-sm-10">
						   <select class="form-control" name="kategori">
						    <option value="" disabled selected><?=$kategori?></option>
                            <optgroup label="Kartu">  
                                <option value="blngko">Blangko</option>
                                <option value="debit/kredit">Debit/Kredit</option>
                                <option value="kartu_ilab">Kartu Ilab</option>
                                <option value="krs">KRS</option>
                                <option value="ktm">KTM</option>
                                <option value="ktp">KTP</option>
                                <option value="sim">SIM</option>
                                <option value="stnk">STNK</option>
                                <option value="kartu_lainnya">Kartu Lainnya</option>
                            </optgroup>
                            <optgroup label="Elektronik">
                                <option value="charger">Charger</option>
                                <option value="flashdisk">Flashdisk</option>
                                <option value="gadget">Gadget</option>
                                <option value="harddisk">Hardisk</option>
                                <option value="laptop">Laptop</option>
                                <option value="elektronik_lainnya">Elektronik Lainnya</option>
                            </optgroup>
                            <optgroup label="Buku">
                                <option value="buku_modul">Buku Modul</option>
                                <option value="Buku_Paket">Buku Paket</option>
                                <option value="Binder">Binder</option>
                                <option value="Novel">Novel</option>
                                <option value="Komik">Komik</option>
                                <option value="Buku_Lainnya">Buku Lainnya</option>
                            </optgroup>
                             <optgroup label="Aksesoris Pribadi">
                                <option value="Dompet">Dompet</option>
                                <option value="Jam_Tangan">Jam Tangan</option>
                                <option value="Kacamata">Kacamata</option>
                                <option value="Kunci">Kunci</option>
                                <option value="Pakaian">Pakaian</option>
                                <option value="Perhiasan">Perhiasan</option>
                                <option value="Sepatu">Sepatu</option>
                                <option value="Tas">Tas</option>
                                <option value="Uang">Uang</option>
                                <option value="Aksesoris_Lainnya">Aksesoris Lainnya</option>
                              </optgroup>
						  </select>
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Deskripsi</label>
						<div class="col-sm-10">
						  <textarea class="form-control" name="deskripsi"><?=$deskripsi?></textarea>
						</div>
					  </div>

					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Merek</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" name="merek" placeholder="" value="<?=$merek?>">
						</div>
					  </div>

					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Lokasi</label>
						<div class="col-sm-10">
						   <select class="form-control" name="lokasi">
						    <option value="" disabled selected><?=$lokasi?></option>
                          <option value="Kampus D" data-icon="http://lorempixel.com/580/250/nature/2" class="circle">Kampus D</option>
                          <option value="Kampus E" data-icon="http://lorempixel.com/580/250/nature/3" class="circle">Kampus E</option>
                          <option value="Kampus F" data-icon="http://lorempixel.com/580/250/nature/5" class="circle">Kampus F</option>
                          <option value="Kampus G" data-icon="http://lorempixel.com/580/250/nature/5" class="circle">Kampus G</option>
                          <option value="Kampus H" data-icon="http://lorempixel.com/580/250/nature/5" class="circle">Kampus H</option>
						  </select>
						</div>
					  </div>

					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Lokasi Lengkap</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" name="lokasi_lengkap" placeholder="" value="<?=$lokasi_lengkap?>">
						</div>
					  </div>

					  <div class="form-group">
					  	<label for="date_lost" class="col-sm-2 control-label">Tanggal Kehilangan</label>
					  	<div class="col-sm-10">
               		 	<input id="date_lost" name="tgl_hilang"  type="date" class="datepicker"  required>
               	   	 	</div>
               	   	 	</div>

					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Warna</label>
						<div class="col-sm-10">
						   <select class="form-control" name="warna">
						   <option value="" disabled selected><?=$warna?></option>
			               <option value="Putih" data-icon="images/sample-1.jpg" class="left circle">Putih</option>
			               <option value="Hitam" data-icon="images/office.jpg" class="left circle">Hitam</option>
			               <option value="Merah" data-icon="images/yuna.jpg" class="left circle">Merah</option>
			               <option value="Biru" data-icon="images/yuna.jpg" class="left circle">Biru</option>
			               <option value="Kuning" data-icon="images/yuna.jpg" class="left circle">Kuning</option>
			               <option value="Cokelat" data-icon="images/yuna.jpg" class="left circle">Cokelat</option>
			               <option value="Abu-Abu" data-icon="images/yuna.jpg" class="left circle">Abu-Abu</option>
			               <option value="Ungu" data-icon="images/yuna.jpg" class="left circle">Ungu</option>
			               <option value="merah Muda" data-icon="images/yuna.jpg" class="left circle">Merah Muda</option> 
			               <option value="Oren" data-icon="images/yuna.jpg" class="left circle">Oren</option>
			               <option value="Toska" data-icon="images/yuna.jpg" class="left circle">Toska</option>
			               <option value="Gold" data-icon="images/yuna.jpg" class="left circle">Gold</option>
			               <option value="Silver" data-icon="images/yuna.jpg" class="left circle">Silver</option>
			               <option value="Transparant" data-icon="images/yuna.jpg" class="left circle">Transparant</option>
			               <option value="Tidak Terdefinisi" data-icon="images/yuna.jpg" class="left circle">Tidak Terdefinisi</option>
			              <option value="Multicolor" data-icon="images/yuna.jpg" class="left circle">Multicolor</option>

						  </select>
						</div>
					  </div>



					  
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Gambar</label>
						<div class="col-sm-10">
						  <input type="file" class="form-control" name="userfile">
						</div>
					  </div>
					  
					  <div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
						  <button type="submit" class="btn btn-primary">Save</button>
						</div>
					  </div>
					
				<?= form_close() ?>








			</div>
			<div class="col-sm-1"></div>
		
		
		<script>
			$(document).ready(function(){
				$('#myTable').DataTable();
			});
		</script>
	</body>
</html>