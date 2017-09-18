<!-- Modal Structure -->
<?php foreach($ml as $a) :?>
  <div id="modal1-items" class="modal modal-fixed-footer">
    <div class="modal-content">
        <div class="row">
            <span class="flow-text">Nama Barang Ditemukan</span>
                <hr>
            <div class="col s5">
                <ul>
                    <li><p><strong>Kategori:</strong></p></li>
                    <li><p><?=$a->kategori?></p></li>
                    <li><p><strong>Sub Kategori:</strong></p></li>
                    <li><p><?=$a->kategori?></p></li>
                </ul>
            </div>
            <div class="col s4">
                <ul>
                    <li><p><strong>Tanggal Kehilangan:</strong></p></li>
                    <li><p><?=$a->tgl_hilang?></p></li>
                    <li><p><strong>Lokasi:</strong></p></li>
                    <li><p><?=$a->lokasi?></p></li>
                </ul>
            </div>
            <div class="col s3">
                <div class="section">
                    <a class="waves-effect waves-light btn" href="#"><i class="material-icons left">share</i>Share</a>
                </div>
                <div class="section">
                    <a class="modal-close waves-effect waves-light btn" href="<?=base_url('index.php/cl/create')?>.php"><i class="material-icons left">system_update_alt</i>Claim</a>
                </div>
            </div>
            <figure>
                <img src="http://www.intrawallpaper.com/static/images/hd-computer-wallpapers_xaxbYxf.jpg" class="responsive-img">
                <div class="left">
                    <figcaption><small>Diposting oleh <?=$a->nama_user?></small></figcaption>
                    <figcaption><small><?=$a->tgl_hilang?></small></figcaption>
                    
                </div>

                </li><?php endforeach?>
            </figure>
        </div>
    </div>
  </div>    