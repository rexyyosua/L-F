
    <br>
    <br>
    <div class="container">
        <div class="header-of-result center" class="col s12">
            <h4>Hasil Pencarian</h4>
            <p class="center-align"></p>
        </div>
      
            <div class="container">
                <ul>
                    <li>
                    <?php foreach($records as $a):?>
                        <fieldset class="item-result">
                            <legend><h6></h6></legend>
                            <div class="row valign-wrapper">
                                <div class="col s6">
                                    <br>
                                    <figure>
                                     <b><p>Kategori:<br></b>
                                        <?=$a->kategori?> </p>
                                    <b><p>Lokasi:<br></b>
                                        <?=$a->lokasi?> </p>
                                    <b><p>Diposting:<br></b>
                                        <?=$a->tgl_update?></p>
                                        <!-- Modal Trigger -->
                        <a class="waves-effect waves-light btn" href="<?=base_url('index.php/user/cl/create/'.$a->id)?>">Klaim</a>
                                    </figure>
                                </div>
                                <div class="col s6">
                                    <b>Tanggal Ditemukan:<br></b>
                                        <?=$a->tgl_hilang?></p>
                                    <b>Warna:<br></b>
                                         <?=$a->warna?></p>
                                    <b>Ditemukan Oleh:<br></b>
                                         <?=$a->nama_user?></p>
                                </div>
                            </div>
                        </fieldset>
                    <?php endforeach;?>
                    </li>
                    <br>
        </div>
    </div>
  </div>
  