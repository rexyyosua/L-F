 <?php include 'header1.php' ?>
 <div class="container">
        <br>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col s12">
                <ul class="tabs tabs-fixed-width tabs-icon">
                    <li class="tab col s4 disabled"><a class="blue-text text-darken-2 button-collapse" href="#" data-activates="slide-out"><i class="material-icons icons-height left">menu</i>My Profile</a></li>
                    <li class="tab col s4"><a class="active" href="#report"><i class="material-icons icons-height left">label</i>Report Status</a></li>
                    <li class="tab col s4"><a href="#message"><i class="material-icons icons-height left">label</i>Message</a></li>
                </ul>
                <ul id="slide-out" class="side-nav">
                    <li>
                        <div class="user-view">
                          <div class="theme">
                            <img src="images/background.jpg" class="responsive-img">
                          </div>
                          <a href="#!user"><img src="http://68.media.tumblr.com/d508e5863450004ec121f14ffa814aae/tumblr_nkkkjkRa7p1u64qrco1_500.jpg" class="circle responsive-img"></a>
                          <a href="#!name"><span class="white-text name">John Doe</span></a>
                          <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
                        </div>
                    </li>
                    <li><a href="#!"><i class="material-icons">person_pin</i>Welcome <?=$this->session->userdata('username')?></a></li>
                    <li><a href="#!">News Information</a></li>
                    <li><div class="divider"></div></li>
                    <li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
                          <li>
                            <a class="waves-effect collapsible-header">Categories<i class="material-icons">arrow_drop_down</i></a>
                            <div class="collapsible-body">
                              <ul>
                                <li><a href="<?=base_url('index.php/user/fi')?>"><i class="material-icons right">play_arrow</i>Penemuan Barang</a></li>
                                <li><a href="<?=base_url('index.php/user/li')?>"><i class="material-icons right">play_arrow</i>Kehilangan Barang</a></li>
                                <li><a href="<?=base_url('index.php/user/rpt')?>"><i class="material-icons right">play_arrow</i>Laporan & Tulis</a></li>
                                <li><a href="<?=base_url('index.php/user/rpt/inbox')?>"><i class="material-icons right">play_arrow</i>Inbox <?php if($msg>0){?><span class="notification-badge"><?=$msg;?></span></a> <?php } ?></span></a></li>
                                <li><a href="<?=base_url('index.php/user/rpt/outbox')?>"><i class="material-icons right">play_arrow</i>Outbox</a></li>
                                <li><a href="<?=base_url('index.php/user/rpt/history')?>"><i class="material-icons right">play_arrow</i>History Claim <?php if($hst>0){?><span class="notification-badge"><?=$hst;?></span></a> <?php } ?></span></a></li>
                              </ul>
                            </div>
                          </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <!-- Tabs Profile Report -->
           
            <div id="report" class="col s8 right">
                <br>
                <br>
                <div class="header-of-result center">
                    <h5>Bukti Laporan Status</h5>
                </div>
                <br>
                <br>
                 <?php foreach($rpt as $a) : ?>
                <div class="row">
                    <div class="col s6">
                        <ul>
                            <li><p><strong>Pihak Penemu :</strong></p></li>
                            <li><p><strong>subkategori :</strong></p></li>
                            <li><p><strong>Merek/Brand:</strong></p></li>
                            <li><p><strong>Deskripsi:</strong></p></li>
                            <li><p><strong>Lokasi Lengkap:</strong></p></li>
                            <li><p><strong>Status Penemu:</strong></p></li>
                            <li><p><strong>Pihak Kehilangan:</strong></p></li>
                            <li><p><strong>subkategori :</strong></p></li>
                            <li><p><strong>Merek/Brand:</strong></p></li>
                            <li><p><strong>Deskripsi:</strong></p></li>
                            <li><p><strong>Lokasi Lengkap:</strong></p></li>
                            <li><p><strong>Status Penerima:</strong></p></li>
                            
                        </ul>
                    </div>
                    <div class="col s6">
                        <ul>
                            <li><p><?=$a->nama_user?></p></li>
                            <li><p><?=$a->kategori?></p></li>
                            <li><p><?=$a->merek?></p></li>
                            <li><p><?=$a->deskripsi?></p></li>
                            <li><p><?=$a->lokasi_lengkap?></p></li>
                            <li><p><?=$a->status_penemu?>..</p></li>
                            <li><p><?=$a->nama_user_f?></p></li>
                            <li><p><?=$a->kategori_f?></p></li>
                            <li><p><?=$a->merek_f?></p></li>
                            <li><p><?=$a->deskripsi_f?></p></li>
                            <li><p><?=$a->lokasi_lengkap_f?></p></li>
                            <li><p><?=$a->status_penerima?>..</p></li>
                        </ul>

                    </div>

                </div>
                <?php if($a->status =='lost'){?>
                <center><a class="waves-effect waves-light btn-large" href="<?=base_url('index.php/user/rpt/cetak/'.$a->id)?>">Cetak</a></center><?php };?>
                <hr>
                <br>
                <?php endforeach;?>
            </div>
       

            <?php include 'profile_message.php' ?>
        </div>
        <br>
        <br>
        <br>
        <br>
    </div>
		<?php include 'footer.php' ?>