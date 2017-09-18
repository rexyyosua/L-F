          
           <!--Klaim Penemuan Dari Halaman Kehilangan -->
            <?php foreach($cl as $a) : ?>
            <div id="claim" class="col s12 right">
                <br>
                <br>

                <div class="row">
                    <div class="col s4">
                        <ul>
                        <strong>Judul:<br> </strong><?=$a->judul?>  
                    <li><strong>Kategori:<br></strong><?=$a->kategori?></li>
                    <li><li><strong>Warna:<br></strong><?=$a->warna?></li>
                    <li><strong>Deskripsi :</strong><br><?=$a->deskripsi?></li>    
                        </ul>
                    </div>
                    <div class="col s4">
                        <ul>
                        <li><strong>Tanggal Ditemukan:<br></strong><?=$a->tgl_hilang?></li>
                            <li><strong>Lokasi:<br></strong><?=$a->lokasi?></li>
                            <li><strong>Lokasi Lengkap:<br></strong><?=$a->lokasi_lengkap?></li>
                        </ul>
                    </div>
                      <div class="col s4 valign-wrapper">
                                <figure class="center-block">
                                    <img src="<?=base_url()?>images/slider/<?=$a->gambar?>" class="responsive-img">
                                </figure>
                            </li>
                            <li>
                            </li>
                            </div>
                            </div>
                            
                                <div class="row">
                                    <div class="col s2">
                                        <a class="waves-effect waves-light btn-large" href="<?=base_url('index.php/user/cl/konfirm/'.$a->id)?>">Konfirmasi</a>
                                    </div>
                                    <div class="col s2">
                                        <a class="waves-effect waves-light btn-large" href="<?=base_url('index.php/user/cl/tolak/'.$a->id)?>">Tolak</a>
                                    </div>
                                    <!--<div class="col s6">
                                        <a class="right waves-effect waves-light btn-large" href="entry_spk.php">SPK</a>
                                    </div>-->
                                </div>
                            </li>
                        </ul>
                                <div>
                
                    </div>

        <?php endforeach;?>
            </div>
                </div>
