<?php include 'header1.php' ?>
<div class="container">
         <br>
         <br>
         <br>
         <b><center><h6>Masukkan Pencarian Barang Hilang Kamu</h6></center></b>
         <br>
         <div class="row">
            <?=form_open('user/ml',['class'=>'col s12'])?>
                <div class="row">
                    <div class="input-field col s4">
                         <select name="kategori">
                            <option value="" disabled selected>Pilih Kategori</option>
                              <optgroup label="Kartu">  
                                  <option value="blangko">Blangko</option>
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

                <div class="row">
                    <div class="input-field col s3">
                        <select name="lokasi" class="icons">
                            <option value="" disabled selected>Lokasi Kampus</option>
                            <option value="Kampus D" data-icon="http://lorempixel.com/580/250/nature/2" class="circle">Kampus D</option>
                            <option value="Kampus E" data-icon="http://lorempixel.com/580/250/nature/3" class="circle">Kampus E</option>
                            <option value="Kampus F" data-icon="http://lorempixel.com/580/250/nature/5" class="circle">Kampus F</option>
                            <option value="Kampus G" data-icon="http://lorempixel.com/580/250/nature/5" class="circle">Kampus G</option>
                            <option value="Kampus H" data-icon="http://lorempixel.com/580/250/nature/5" class="circle">Kampus H</option>
                        </select>    
                    </div>

                    <div class="row">
                    <div class="input-field col s2">
                <input id="date_lost" name="tgl_hilang" type="date" >
                </div>
            
               <div class="row">
              <div class="input-field col s3">
                <select name="warna" class="icons" name="warna">
                 <option value="" disabled selected>Pilih Warna</option>
                 <option value="putih" data-icon="images/sample-1.jpg" class="left circle">Putih</option>
                 <option value="hitam" data-icon="images/office.jpg" class="left circle">Hitam</option>
                 <option value="merah" data-icon="images/yuna.jpg" class="left circle">Merah</option>
                 <option value="biru" data-icon="images/yuna.jpg" class="left circle">Biru</option>
                 <option value="kuning" data-icon="images/yuna.jpg" class="left circle">Kuning</option>
                 <option value="coklat" data-icon="images/yuna.jpg" class="left circle">Cokelat</option>
                 <option value="abu-abu" data-icon="images/yuna.jpg" class="left circle">Abu-Abu</option>
                 <option value="ungu" data-icon="images/yuna.jpg" class="left circle">Ungu</option>
                 <option value="meah muda" data-icon="images/yuna.jpg" class="left circle">Merah Muda</option> 
                 <option value="oren" data-icon="images/yuna.jpg" class="left circle">Oren</option>
                 <option value="toska" data-icon="images/yuna.jpg" class="left circle">Toska</option>
                 <option value="gold" data-icon="images/yuna.jpg" class="left circle">Gold</option>
                 <option value="silver" data-icon="images/yuna.jpg" class="left circle">Silver</option>
                 <option value="transparant" data-icon="images/yuna.jpg" class="left circle">Transparant</option>
                 <option value="tidak terdefinisi" data-icon="images/yuna.jpg" class="left circle">Tidak Terdefinisi</option>
                 <option value="multicolor" data-icon="images/yuna.jpg" class="left circle">Multicolor</option>
              </select> 
                </div>
                </div>
                </div>
                </div>
                </button>
            <?=form_submit(['name'=>'submit','value'=>'Cari','class'=>'btn-large waves-effect waves-light center']);?>
            <?=form_close();?>
         </div>
         </div>
          </div>
         
    <?php include 'match_found_a.php' ?>
 

	<?php include 'footer.php' ?>
