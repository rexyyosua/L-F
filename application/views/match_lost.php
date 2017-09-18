	<?php include 'header1.php' ?>
	<br>
    <div class="container">
        <div class="header-of-result center">
            <h5>Pencarian Kecocokan Kehilangan</h5>
            <p class="center-align">Silakan Masukkan Pencarian</p>
        </div>
        <div class="row">
            <div class="col s12">
                <div class="col s6">
            
            <br>
            <?=form_open('user/ml/getRecords')?>
            <select name="kategori">
                <option value="" disabled selected>Pilih Kategori</option>
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

            <select name="lokasi">
                <option value="" disabled selected>Lokasi Kampus</option>
                          <option value="Kampus D" data-icon="http://lorempixel.com/580/250/nature/2" class="circle">Kampus D</option>
                          <option value="Kampus E" data-icon="http://lorempixel.com/580/250/nature/3" class="circle">Kampus E</option>
                          <option value="Kampus F" data-icon="http://lorempixel.com/580/250/nature/5" class="circle">Kampus F</option>
                          <option value="Kampus G" data-icon="http://lorempixel.com/580/250/nature/5" class="circle">Kampus G</option>
                          <option value="Kampus H" data-icon="http://lorempixel.com/580/250/nature/5" class="circle">Kampus H</option>
            </select>

            <div class="form-group">
            <label for="date_lost" class="col-sm-2 control-label">Tanggal Kehilangan</label>
            <div class="col-sm-10">
            <input id="date_lost" name="tgl_hilang" type="date" >
            </div>
            </div>
                        
            <?=form_submit(['name'=>'submit','value'=>'Cari']);?>
            <?=form_close();?>
            <br>
            <hr>
            <br>    
            </div>
            </div>
            </div>
            </div>
              <?php include 'footer.php' ?>