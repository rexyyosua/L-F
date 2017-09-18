<?php $this->load->view('header1')?>
<div class="container">
         <br>
         <br>
         <br>
         <br>
         <h5>Posting Penemuan</h5>
         <br>
         <div class="row">
           <?= form_open_multipart('user/fi/create',['class'=>'col s12']) ?>
                <div class="row">
                    <div class="input-field col s12">
                      <input placeholder="Masukkan Judul" value="<?=set_value('judul')?>" type="text" class="validate" required>
                      <label for="judul">Judul</label>
                      <span class="help-block"><?php echo form_error('name');?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
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
                                <option value="harddisk">Harddisk</option>
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
                        <label>Kategori Barang</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6">
                      <input  name="merek" type="text" class="validate" value="<?=set_value('merek')?>" placeholder="Masukkan Merk/Model/Jenis" required>
                      <label for="brand">Merek/Model</label>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="input-field col s12">
                      <textarea name="deskripsi" class="materialize-textarea" placeholder="Masukkan Deskripsi Barang" value="<?=set_value('deskripsi')?>"></textarea>
                      <label for="specification">Deskripsi Lengkap</label>
                    </div>
               
                <div class="input-field col s12 m6">
                <select class="icons" name="warna">
                <option value="" disabled selected>Pilih Warna</option>
               <option value="Putih" data-icon="<?base_url()?>images/sample-1.jpg" class="left circle">Putih</option>
               <option value="Hitam" data-icon="<?base_url()?>images/office.jpg" class="left circle">Hitam</option>
               <option value="Merah" data-icon="<?base_url()?>images/yuna.jpg" class="left circle">Merah</option>
               <option value="Biru" data-icon="<?base_url()?>images/yuna.jpg" class="left circle">Biru</option>
               <option value="Kuning" data-icon="<?base_url()?>images/yuna.jpg" class="left circle">Kuning</option>
               <option value="Cokelat" data-icon="<?base_url()?>images/yuna.jpg" class="left circle">Cokelat</option>
               <option value="Abu-Abu" data-icon="<?base_url()?>images/yuna.jpg" class="left circle">Abu-Abu</option>
               <option value="Ungu" data-icon="<?base_url()?>images/yuna.jpg" class="left circle">Ungu</option>
               <option value="Merah Muda" data-icon="<?base_url()?>images/yuna.jpg" class="left circle">Merah Muda</option>
               <option value="Oren" data-icon="<?base_url()?>images/yuna.jpg" class="left circle">Oren</option>
               <option value="Toska" data-icon="<?base_url()?>images/yuna.jpg" class="left circle">Toska</option>
                <option value="Gold" data-icon="<?base_url()?>images/yuna.jpg" class="left circle">Gold</option>
               <option value="Silver" data-icon="<?base_url()?>images/yuna.jpg" class="left circle">Silver</option>
               <option value="Transparant" data-icon="<?base_url()?>images/yuna.jpg" class="left circle">Transparant</option>
               <option value="Tidak Terdefinisi" data-icon="<?base_url()?>images/yuna.jpg" class="left circle">Tidak Terdefinisi</option>
              <option value="Multicolor" data-icon="<?base_url()?>images/yuna.jpg" class="left circle">Multicolor</option>

               <select>
                <label>Warna</label>
                </div>
                </div>
                <br>
                <label for="date_lost">Tanggal Kehilangan</label>
                <input type="date" name="" class="datepicker"  required>
                <br>
    
                <div class="row">
                    <div class="input-field col s12">
                        <select class="icons" name="lokasi">
                          <option value="" disabled selected>Lokasi Kampus</option>
                          <option value="Kampus D" data-icon="http://lorempixel.com/580/250/nature/2" class="circle">Kampus D</option>
                          <option value="Kampus E" data-icon="http://lorempixel.com/580/250/nature/3" class="circle">Kampus E</option>
                          <option value="Kampus F" data-icon="http://lorempixel.com/580/250/nature/5" class="circle">Kampus F</option>
                          <option value="Kampus G" data-icon="http://lorempixel.com/580/250/nature/5" class="circle">Kampus G</option>
                          <option value="Kampus H" data-icon="http://lorempixel.com/580/250/nature/5" class="circle">Kampus H</option>
                        </select>
                        <label>Pilih Lokasi Kampus</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                      <textarea name="lokasi_lengkap" class="materialize-textarea" value="<?=set_value('lokasi_lengkap')?>"></textarea>
                      <label for="description">Lokasi Lengkap</label>
                    </div>
                </div>

                <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Gambar</label>
            <div class="col-sm-10">
              <input type="file" class="form-control" name="userfile">
            </div>
            </div>
                <br>
                <br>

                 <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </div>
          
          </form>
                </div>
            
         
    </div>
	<?php include 'footer.php' ?>