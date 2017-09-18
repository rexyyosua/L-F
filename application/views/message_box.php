<?php include 'header1.php' ?>
	<div class="container">
        <br>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col s12">
                <ul class="tabs tabs-fixed-width tabs-icon">
                    <li class="tab col s3 disabled"><a class="blue-text text-darken-2 button-collapse" href="#" data-activates="slide-out"><i class="material-icons icons-height left">menu</i>Profile Saya</a></li>
                    <li class="tab col s3"><a class="active" href="#message"><i class="material-icons icons-height left">label</i>Tulis Pesan</a></li>
                    <li class="tab col s3"><a class="active" href="#inbox"><i class="material-icons icons-height left">label</i>Pesan Masuk Barang</a></li>
                    <li class="tab col s3"><a href="#outbox"><i class="material-icons icons-height left">label</i>Pesan Keluar<?php if($ntf>0){?><span class="notification-badge"><?=$ntf;?></span></a> <?php } ?></li>
                </ul>
                <ul id="slide-out" class="side-nav">
                    <li>
                        <div class="user-view">
                          <div class="theme">
                            <img src="images/background.jpg" class="responsive-img">
                          </div>
                          <a href="#!user"><img src="http://68.media.tumblr.com/d508e5863450004ec121f14ffa814aae/tumblr_nkkkjkRa7p1u64qrco1_500.jpg" class="circle responsive-img"></a>
                          
                        </div>
                    </li>
                    <li><a href="#!"><i class="material-icons">person_pin</i>Selamat datang <?=$this->session->userdata('username')?></a></li>
                    <li><a href="#!"></a></li>
                    <li><div class="divider"></div></li>
                    <li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
                          <li>
                            <a class="waves-effect collapsible-header">Informasi Terbaru<i class="material-icons">arrow_drop_down</i></a>
                            <div class="collapsible-body">
                               <ul>
                                <li><a href="<?=base_url('index.php/user/fi')?>"><i class="material-icons right">play_arrow</i>Penemuan Barang</a></li>
                                <li><a href="<?=base_url('index.php/user/li')?>"><i class="material-icons right">play_arrow</i>Kehilangan Barang</a></li>
                                <li><a href="<?=base_url('index.php/user/rpt')?>"><i class="material-icons right">play_arrow</i>Laporan & Tulis Pesan</a></li>
                                <li><a href="<?=base_url('index.php/user/rpt/inbox')?>"><i class="material-icons right">play_arrow</i>Inbox <?php if($msg>0){?><span class="notification-badge"><?=$msg;?></span></a> <?php }; ?></span></a></li>
                                <li><a href="<?=base_url('index.php/user/rpt/outbox')?>"><i class="material-icons right">play_arrow</i>Outbox</a></li>
                                <li><a href="<?=base_url('index.php/user/rpt/history')?>"><i class="material-icons right">play_arrow</i>History Claim <?php if($hst>0){?><span class="notification-badge"><?=$hst;?></span></a> <?php } ?></span></a></li>
                              </ul>
                            </div>
                          </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <!-- Tabs Profile Found -->
            <div id="found" class="col s8 right">
                <br>
                <br>
                 <div class="fixed-action-btn horizontal fab-position">
                    <a class="btn-floating btn-large red" href="<?=base_url('index.php/user/fi/create')?>">
                      <i class="large material-icons">add</i>
                    </a>
                    <ul>
                      <li><a class="btn-floating purple"><i class="material-icons">insert_chart</i></a></li>
                      <li><a class="btn-floating yellow"><i class="material-icons">format_quote</i></a></li>
                      <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
                      <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
                    </ul>
                </div>
                <br>
                <br>
                
               

               <?php foreach($fi as $a) : ?>
                <div class="row">
                    <div class="col s4">
                        <ul><strong><?=$a->judul?></strong>
                            <li><?=$a->kategori?></li>
                            <li><?=$a->lokasi?></li>
                            <li><?=$a->warna?></li>
                            <li><?=$a->tgl_hilang?></li>
                            <li><?=$a->lokasi_lengkap?></li>
                        </ul>
                    </div>
                    <div class="col s3">
                        <ul>
                            <li><strong>Deskripsi :</strong></li>
                            <?=$a->deskripsi?>
                        </ul>
                    </div>
                    <div class="col s6 valign-wrapper">
                        <figure class="center-block">
                            <img src="<?=base_url()?>images/slider/<?=$a->gambar?>" class="responsive-img">
                        </figure>
                    </div>
                </div>


                        

                <div class="row">
                    <div class="col s3">
                        <?=anchor('user/fi/update/'.$a->id,'Edit',['class'=>'waves-effect waves-light btn-large'])?>
                    </div>
                    <div class="col s3">
                        <?=anchor('user/fi/cetak_found/'.$a->id,'cetak',['class'=>'waves-effect waves-light btn-large'])?>
                    </div>
                    <div class="col s3">
                        <?=anchor('user/fi/delete/'.$a->id,'Delete',['class'=>'waves-effect waves-light btn-large','onclick'=>'return conlirm(\'Apakah Anda Yakin ??\')'])?>
                    </div>
                    
                </div>
                <hr>
                <?php endforeach;?>
            </div>

            <?php include 'profile_claim.php' ?>
        </div>
        <br>
        <br>
        <br>
        <br>
    </div>
<?php include 'footer.php' ?>