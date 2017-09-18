<?php include 'header2.php' ?>
<div class="container">
         <br>
         <br>
         <br>
         <h5>Posting Kehilangan</h5>
         <br>
         <div class="row">
            <form action="match_lost.php" class="col s12">
                <div class="row">
                    <div class="input-field col s7">
                      <input placeholder="Masukkan Judul" id="judul" type="text" class="validate" required>
                      <label for="judul">Judul</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s7">
                        <select>
                            <option value="" disabled selected>Pilih Kategori</option>
                            <optgroup label="Kartu">  
                                <option value="1">Blangko</option>
                                <option value="2">Debit/Kredit</option>
                                <option value="3">Kartu Ilab</option>
                                <option value="4">KRS</option>
                                <option value="5">KTM</option>
                                <option value="6">KTP</option>
                                <option value="7">SIM</option>
                                <option value="8">STNK</option>
                                <option value="9">Kartu Lainnya</option>
                            </optgroup>
                            <optgroup label="Elektronik">
                                <option value="10">Charger</option>
                                <option value="11">Flashdisk</option>
                                <option value="12">Gadget</option>
                                <option value="13">Hardisk</option>
                                <option value="14">Laptop</option>
                                <option value="15">Elektronik Lainnya</option>
                            </optgroup>
                            <optgroup label="Buku">
                                <option value="16">Buku Modul</option>
                                <option value="17">Buku Paket</option>
                                <option value="18">Binder</option>
                                <option value="19">Novel</option>
                                <option value="20">Komik</option>
                                <option value="21">Buku Lainnya</option>
                            </optgroup>
                             <optgroup label="Aksesoris Pribadi">
                                <option value="21">Dompet</option>
                                <option value="22">Jam Tangan</option>
                                <option value="23">Kacamata</option>
                                <option value="24">Kunci</option>
                                <option value="25">Pakaian</option>
                                <option value="26">Perhiasan</option>
                                <option value="27">Sepatu</option>
                                <option value="28">Tas</option>
                                <option value="29">Uang</option>
                                <option value="30">Aksesoris Lainnya</option>
                              </optgroup>
                        </select>
                        <label>Kategori Barang</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6">
                      <input id="brand" type="text" class="validate" placeholder="Masukkan Merk/Model/Jenis" required>
                      <label for="brand">Merek/Model</label>
                    </div>
                    <div class="file-field input-field col s12 m6">
                      <div class="btn">
                        <span>Browse</span>
                        <input type="file">
                      </div>
                      <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="Upload Foto Barang">
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s8">
                      <textarea id="specification" class="materialize-textarea" placeholder="Masukkan Deskripsi Barang"></textarea>
                      <label for="specification">Deskripsi Lengkap</label>
                    </div>
               
                <div class="input-field col s12 m6">
                <select class="icons">
                <option value="" disabled selected>Pilih Warna</option>
               <option value="" data-icon="images/sample-1.jpg" class="left circle">Putih</option>
               <option value="" data-icon="images/office.jpg" class="left circle">Hitam</option>
               <option value="" data-icon="images/yuna.jpg" class="left circle">Merah</option>
               <option value="" data-icon="images/yuna.jpg" class="left circle">Biru</option>
               <option value="" data-icon="images/yuna.jpg" class="left circle">Kuning</option>
               <option value="" data-icon="images/yuna.jpg" class="left circle">Cokelat</option>
               <option value="" data-icon="images/yuna.jpg" class="left circle">Abu-Abu</option>
               <option value="" data-icon="images/yuna.jpg" class="left circle">Ungu</option>
               <option value="" data-icon="images/yuna.jpg" class="left circle">Merah Muda</option> 
               <option value="" data-icon="images/yuna.jpg" class="left circle">Oren</option>
               <option value="" data-icon="images/yuna.jpg" class="left circle">Toska</option>
                <option value="" data-icon="images/yuna.jpg" class="left circle">Gold</option>
               <option value="" data-icon="images/yuna.jpg" class="left circle">Silver</option>
               <option value="" data-icon="images/yuna.jpg" class="left circle">Transparant</option>
               <option value="" data-icon="images/yuna.jpg" class="left circle">Tidak Terdefinisi</option>
              <option value="" data-icon="images/yuna.jpg" class="left circle">Multicolor</option>

               <select>
                <label>Warna</label>
                </div>
                </div>
                
                <label for="date_lost">Tanggal Kehilangan</label>
                <input id="date_lost" type="date" class="datepicker"  required>
                <br>
    
                <div class="row">
                    <div class="input-field col s6">
                        <select class="icons">
                          <option value="" disabled selected>Lokasi Kampus</option>
                          <option value="" data-icon="http://lorempixel.com/580/250/nature/2" class="circle">Kampus D</option>
                          <option value="" data-icon="http://lorempixel.com/580/250/nature/3" class="circle">Kampus E</option>
                          <option value="" data-icon="http://lorempixel.com/580/250/nature/5" class="circle">Kampus F</option>
                          <option value="" data-icon="http://lorempixel.com/580/250/nature/5" class="circle">Kampus G</option>
                          <option value="" data-icon="http://lorempixel.com/580/250/nature/5" class="circle">Kampus H</option>
                        </select>
                        <label>Pilih Lokasi Kampus</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s8 ">
                      <textarea id="description" class="materialize-textarea"></textarea>
                      <label for="description">Lokasi Lengkap</label>
                    </div>
                </div>
                <br>
                <br>
                <button class="btn-large waves-effect waves-light right" type="submit" name="action">Simpan
                    <i class="material-icons right">send</i>
                </button>
            </form>
         </div>
    </div>
	<?php include 'footer.php' ?>