	<?php include 'header1.php' ?>
	<br>
    <div class="container">
        <div class="header-of-result center">
            <h3> Hasil Pencarian Kecocokan </h3>
            <p class="center-align">  </p>
        </div>
        <div class="row">
            <div class="col s12">
                <div class="col s10">
                    <h5><p class="flow-text justify-align">Apabila tidak ada kecocokan barang serupa, daftarkan barang untuk menyimpan pencarian penelusuran dan laporan anda.</p>
                </div></h5>
                <div class="col s2">
                    <br>
                    <br>
                    <a id="posting-items" class="btn-large waves-effect waves-light right" href="<?=base_url('index.php/user/ml/')?>"></i>Cari Lagi</a>
                </div>
            </div>
            </div>
            <br>
             <br>
            <div class="container">
                <ul>
                    <li><?php foreach($records as $a):?>
                        <fieldset class="item-result">
                            <legend><h5></h5></legend>
                            <div class="row valign-wrapper">
                                <div class="col s6">
                                <h6><b><?=$a->judul?></b></h6>
                                    <figure>
                                        <img src="<?=base_url()?>images/slider/<?=$a->gambar?>" class="responsive-img">
                                        <figcaption><medium><b><?=$a->nama_user?> </center></medium></figcaption></b>
                                        <?=$a->tgl_hilang?>
                                        <figcaption><center><medium></center></medium></figcaption>

                                        <!-- Modal Trigger -->
                                    <a class="modal-close waves-effect waves-light btn" href="<?=base_url('index.php/user/cl/create/'.$a->id)?>">Klaim</a></td>
                                    </figure>
                                </div>
                                <div class="col s2">
                                    <p><b>
                                       <p>Subkategori:</p>
                                       <p>Tanggal:</p>
                                       <p>Lokasi:</p></b>
                                </div>
                                <div class="col s5">
                                    <p><?=$a->kategori?></p>
                                    <p><?=$a->tgl_hilang?></p>
                                    <p><?=$a->lokasi?></p>
                                </div>
                            </div>
                        </fieldset>
                    <?php endforeach?>
                    
                    <br>
                    
                    <br>
                </ul>
            </div>
        </div>
    </div>

  <?php include 'footer.php' ?>