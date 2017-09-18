<?php include 'header1.php' ?>

<div class="container">

<br>
<br>
<br>
<br>


<table class="highlight bordered centered section responsive-table" title="INBOX">
<div class="col s8">
                <ul class="tabs tabs-fixed-width tabs-icon">
                    <li class="tab col s4 disabled"><a class="blue-text text-darken-2 button-collapse" href="#" data-activates="slide-out"><i class="material-icons icons-height left">menu</i>My Profile</a></li>
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
                                <li><a href="<?=base_url('index.php/user/rpt')?>"><i class="material-icons right">play_arrow</i>Pesan</a></li>
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


</div>

        <center><h3>History Claim</h3></center>


        <hr>
        <br>
        <thead>

          <tr>
            <th>Judul</th>
            <th>Merek</th>
            <th>Warna</th>
            <th>Lokasi</th>
            <th>Lokasi Lengkap</th>
            <th>Deskripsi</th>
            <th></th>
          </tr>
        </thead>

        <tbody>
        <?php foreach($history as $a):?>
	          <tr>
	            <td><?=$a->judul?></td>
	            <td><?=$a->merek?></td>
	            <td><?=$a->warna?></td>
              <td><?=$a->lokasi?></td>
              <td><?=$a->lokasi_lengkap?></td>
              <td><?=$a->deskripsi?></td>
	            <td>
	            	<a class="modal-close waves-effect waves-light btn" href="<?=base_url('index.php/user/rpt/cetak_claim/'.$a->id)?>">Cetak</a></td>
	            </td>
	          </tr>
	    <?php endforeach;?>
         
        </tbody>
      </table>
</div>



<br>
<br>
<br>
<br>

<?php include 'footer.php' ?>