
					<?php include 'header-admin.php' ?>
				
				<div class="content">
					<header>
						<h2 class="page_title">Add User</h2>
					</header>
					
					<div class="content-inner">
						<div class="form-wrapper">
							<?= form_open_multipart('admin/db/create_user/',['class'=>'form-horizontal']) ?>
				<div style="margin-top: 10px;">
				<div>
					<input type="text" name="name" placeholder="Nama" class="lg" required/>
				</div>

				<div style="margin-top: 10px;">
				<div>
					<input type="text" name="npm" placeholder="NPM" class="lg" required/>
				</div>
				<div style="margin-top: 10px;">
					<input type="text" name="username" placeholder="Username" class="lg" required/>
				</div>
				<div style="margin-top: 10px;">
					<input type="password" name="password" placeholder="Passsword" class="lg" required/>
				</div>
				<div style="margin-top: 10px;">
					<input type="password" name="password1" placeholder="Retype Passsword" class="lg" required/>
				</div>

				<div style="margin-top: 10px;">
					<input type="text" name="email" placeholder="Email" class="lg" required/>
				</div>
				<div style="margin-top: 10px;">
					<input type="text" name="no_tlp" placeholder="No Handphone" class="lg" required/>
								<!--<div class="form-group">
									<label class="sr-only">Judul</label>
									<input type="text" class="form-control" id="title" placeholder="Judul">
								</div>

								<div class="form-group">
								  <label class="sr-only">Kategori</label>
								  <select data-placeholder="Kategori" multiple name="Kategori" class="form-control chosen-select">
								    <option>Kartu</option>
								    <option>Elektronik</option>
								    <option>Buku</option>
								    <option>Aksesoris Pribadi</option>
								  </select>
								</div>
								
								<div class="form-group">
									<label class="sr-only">Sub Kategori</label>
									<select data-placeholder="Sub Kategori" multiple name="Kategoti" class="form-control chosen-select">
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
									<input type="text" class="form-control" id="merk" placeholder="Merek/Model/Jenis">
								</div>
								<div class="form-group">
									<label class="sr-only">Deskripsi</label>
									<input type="text" class="form-control" id="deskripsi" placeholder="Deskripsi Lengkap">
								</div>
								<div class="form-group">
									<label class="sr-only">Warna</label>
									<input type="text" class="form-control" id="deskripsi" placeholder="Warna">
								</div>

								<div class="form-group">
									<label class="sr-only">Tanggal</label>
									<input type="text" class="form-control" id="deskripsi" placeholder="Tanggal">
								</div>

								<div class="form-group">
								  <label class="sr-only">Lokasi Kampus</label>
								  <select data-placeholder="Lokasi Kampus" multiple name="Lokasi" class="form-control chosen-select">
								    <option>Kampus D</option>
								    <option>Kampus E</option>
								    <option>Kampus G</option>
								    <option>Kampus H</option>
								    <option>Kampus F5</option>
								  </select>
								</div>
						
								<div class="form-group">
									<label class="sr-only">Lokasi Lengkap</label>
									<input type="text" class="form-control" id="deskripsi" placeholder="Lokasi Lengkap">
								</div>

								<!--<div class="form-group">
									<label class="sr-only">Article</label>
									<textarea class="form-control summernote" placeholder="Article" name="article"></textarea>
								</div>-->
								
								<!--<div class="checkbox">
									<label>
										<input type="checkbox">publish lost item when i click on save
									</label>
								</div>-->
								<p>
								<div class="clearfix">
									<button type="submit" class="btn btn-primary pull-left">Save </button></p>
								</div>
							</form>
						</div>
					</div>
				</div>
				
				<div class="row">
					<footer id="admin-footer" class="clearfix">
						<div class="pull-left">
							<b>Copyright </b>&copy; 2017
						</div>
						<div class="pull-right">
							admin system
						</div>
					</footer>
				</div>
		<?php include 'footer-admin.php' ?>