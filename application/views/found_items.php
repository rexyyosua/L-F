<div id="test3" class="col s12">
                <br>
                <br>
                <div class="row">
                    <div class="col s3">
                        <div class="collapsible-wrapper">
                            <ul class="collapsible z-depth-3" data-collapsible="accordion">
                                <div class="collapsible-header collapse-headcolor"><h5><?=anchor('welcome/category','Kategori Barang')?></h5></div>
                               <li class="collapse-list">
                                  <div class="collapsible-header"><i class="material-icons">book</i>Kartu</div>
                                  <div class="collapsible-body">
                                      <ul class="table-of-contents">
                                            <li class="collapse-hover"><?=anchor('welcome/categoory/blangko','Blangko')?></li>
                                        <li class="collapse-hover"><?=anchor('welcome/categoory/debit/kredit','Debit/Kredit')?></li>
                                        <li class="collapse-hover"><?=anchor('welcome/categoory/kartu_ilab','Kartu Ilab')?></li>
                                        <li class="collapse-hover"><?=anchor('welcome/categoory/krs','KRS')?></li>
                                        <li class="collapse-hover"><?=anchor('welcome/categoory/ktm','KTM')?></li>
                                        <li class="collapse-hover"><?=anchor('welcome/categoory/ktp','KTP')?></li>
                                        <li class="collapse-hover"><?=anchor('welcome/categoory/sim','SIM')?></li>
                                        <li class="collapse-hover"><?=anchor('welcome/categoory/stnk','STNK')?></li>
                                        <li class="collapse-hover"><?=anchor('welcome/categoory/kartu_lainnya','Kartu Lainnya')?></li>
                                      </ul>
                                  </div>
                                </li>
                                <li class="collapse-list">
                                  <div class="collapsible-header"><i class="material-icons">smartphone</i>Elektronik</div>
                                  <div class="collapsible-body">
                                      <ul class="table-of-contents">
                                        <li class="collapse-hover"><?=anchor('welcome/categoory/charger','Charger')?></li>
                                        <li class="collapse-hover"><?=anchor('welcome/categoory/flashdisk','Flashdisk')?></li>
                                        <li class="collapse-hover"><?=anchor('welcome/categoory/gadget','Gadget')?></li>
                                        <li class="collapse-hover"><?=anchor('welcome/categoory/harddisk','Harddisk')?></li>
                                        <li class="collapse-hover"><?=anchor('welcome/categoory/laptop','Laptop')?></li>
                                        <li class="collapse-hover"><?=anchor('welcome/categoory/elektronik_lainnya','Elektronik Lainnya')?></li>
                                      </ul>
                                  </div>
                                </li>
                                <li class="collapse-list">
                                  <div class="collapsible-header"><i class="material-icons">note</i>Buku</div>
                                  <div class="collapsible-body">
                                      <ul class="table-of-contents">
                                        <li class="collapse-hover"><?=anchor('welcome/categoory/buku_modul','Buku Modul')?></li>
                                        <li class="collapse-hover"><?=anchor('welcome/categoory/Buku_Paket','Buku Paket')?></li>
                                        <li class="collapse-hover"><?=anchor('welcome/categoory/Binder','Binder')?></li>
                                        <li class="collapse-hover"><?=anchor('welcome/categoory/Novel','Novel')?></li>
                                        <li class="collapse-hover"><?=anchor('welcome/categoory/Komik','Komik')?></li>
                                        <li class="collapse-hover"><?=anchor('welcome/categoory/Buku_Lainnya','Buku Lainnya')?></li>
                                      </ul>
                                  </div>
                                </li>
                                <li class="collapse-list">
                                  <div class="collapsible-header"><i class="material-icons">person</i>Aksesoris Pribadi</div>
                                  <div class="collapsible-body">
                                      <ul class="table-of-contents">
                                        <li class="collapse-hover"><?=anchor('welcome/categoory/Dompet','Dompet')?></li>
                                        <li class="collapse-hover"><?=anchor('welcome/categoory/Jam_Tangan','Jam Tangan')?></li>
                                        <li class="collapse-hover"><?=anchor('welcome/categoory/Kacamata','Kacamata')?></li>
                                        <li class="collapse-hover"><?=anchor('welcome/categoory/Kunci','Kunci')?></li>
                                        <li class="collapse-hover"><?=anchor('welcome/categoory/Pakaian','Pakaian')?></li>
                                        <li class="collapse-hover"><?=anchor('welcome/categoory/Perhiasan','Perhiasan')?></li>
                                        <li class="collapse-hover"><?=anchor('welcome/categoory/Sepatu','Sepatu')?></li>
                                        <li class="collapse-hover"><?=anchor('welcome/categoory/Tas','Tas')?></li>
                                        <li class="collapse-hover"><?=anchor('welcome/categoory/Uang','Uang')?></li>
                                        <li class="collapse-hover"><?=anchor('welcome/categoory/Aksesoris_Pribadi_Lainnya','Aksesoris Pribadi Lainnya')?></li>
                                      </ul>
                                  </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col s9">
                        <table class="bordered responsive-table">
                            <span class="left flow-text blue-text text-accent-3">Daftar Barang Ditemukan</span>
                            <thead>
                                <tr>
                                    <div class="menu-button z-depth-3 right">
                                        <a class="waves-effect waves-light btn" href="<?=base_url('index.php/user/mf')?>">
                                            <i class="medium material-icons right">playlist_add</i>Pencarian Kecocokan Barang
                                        </a>
                                    </div>
                                    <br>
                                    <br>
                                    <br>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                   
                                    <th>Judul</th>
                                    <th>Nama</th>
                                    <th>Sub Kategori</th>
                                    <th>Time</th>
                                    <th>Lokasi Kampus</th>
                                    <th></th>
                                </tr>
                                <?php foreach($nemu as $a) : ?>
                                <tr>
                                    
                                    <td><?=$a->judul?><br><small><?=$a->tgl_update?></small></td>
                                    <td><?=$a->nama_user?></td>
                                    <td><?=$a->kategori?></td>
                                    <td><?=$a->tgl_hilang?></td>
                                    <td><?=$a->lokasi?></td>
                                     <td class="lost-list">
                                        <a class="modal-close waves-effect waves-light btn" href="<?=base_url('index.php/user/clm/create/'.$a->id)?>">Klaim</a></td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>