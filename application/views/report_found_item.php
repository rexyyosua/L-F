<?php include 'header1.php' ?>
<div class="container">
        <br>
        <br>
        <h4 class="title-of-report section center">Bukti Laporan Penemuan Barang</h4>
        <br>
        <br>
        <div class="row">
            <div class="col s6">
                <img src="https://awesomewallpapers.files.wordpress.com/2010/02/ufo_report.jpg" class="responsive-img">
            </div>
            <div class="col s6">
                <p class="justify-align">
                    Cetak Bukti Laporan tersebut dan bawa barang penemuan anda kepada Admin. Admin akan mengkorfirmasi Laporan anda lewat Pesan.
                <p>Dan silakan cek Profile kamu sesering mungkin apabila pihak Kehilangan telah mengkonfirmasi maka kami akan memberitahu di profile kamu.

                </p>
                
                <br>
                <br>
                <br>
                <?php foreach ($ctk as $a):?> 
                <div class="row right">
                    <div class="col s6">
                       
                    <a class="waves-effect waves-light btn-large" href="<?=base_url('index.php/user/fi/cetak_found/'.$a->id)?>">Cetak</a>
               
                    </div>
                    <!--<div class="col s6">
                        <button class="btn-large waves-effect waves-light" type="submit" name="action">Simpan
                            <i class="material-icons right">send</i>
                        </button>
                    </div>-->
                </div>
            <?php endforeach;?>
            </div>
        </div>
        <br>
        <br>
        <br>
    </div>
	<?php include 'footer.php' ?>