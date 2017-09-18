<!DOCTYPE html>
<html lang="en">

<body>

    <?php $this->load->view('header/header')?>

    <!-- Page Content -->
    <div class="container">

    <?php foreach($berita as $a):?>

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <small><a href="#"></a>
                    </small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url()?>">Home</a>
                    </li>
                    <li class="active"><?=$a->judul_berita?></li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!-- Blog Post -->

                <hr>

                <!-- Date/Time -->

                <p><i class="fa fa-clock-o"></i> Posted on <?php echo $a->tanggal_berita?></p>

                <hr>

                <!-- Preview Image -->
                <img class="img-responsive" src="<?php echo base_url()?>images/slider/<?php echo $a->gambar_berita ?>" style = ' max-width:100%; max-height:100%; height:400px; width:900px' alt="">

                <hr>

                <!-- Post Content -->
                <p class="lead"><?php echo $a->judul_berita ?></p>
                <p><?php echo nl2br($a->deskripsi_berita)?></p>

                <hr>
                <?php endforeach ?>




                <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Available Room</h3>
            </div>

            <?php foreach($kamarr as $a):?>
            <div class="col-sm-3 col-xs-6">
                <a href="<?=base_url()?>">
                    <img class="img-responsive portfolio-item" src="<?=base_url()?>/images/slider/<?=$a->gambar?>" alt="">
                </a>
            </div>
            <?php endforeach ?>


            </div>
        <!-- /.row -->

        <hr>




                <!-- Blog Comments -->
                 <?php foreach($berita as $a):?>
                <!-- Comments Form -->
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <?= form_open('cek/cek_komen/'.$a->id_berita)?>
                        <div class="form-group">
                            <textarea class="form-control"  placeholder="" name="komen"></textarea>
                        </div>
                       <button type="SUBMIT" name="SUBMIT" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                  <?php endforeach ?>
                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->
                <?php foreach($komen as $a):?>
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="images/team/" alt="">
                    </a>
                    <div class="media-body">
                        <h5 class="media-heading"><?php echo $a->nama_user?>
                            <small><?php echo $a->tanggal ?></small>
                        </h5>
                        <?php echo $a->komen ?>
                    </div>
                </div>
            <?php endforeach ?>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">




                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>List Available Room</h4>
                    <div class="row">
                        <div class="col-lg-9">
                        <?php foreach($kamar as $a): ?>
                            <ul class="list-unstyled">
                                <li>
                                    <?=anchor('welcome/detail_kamar/'.$a->id, $a->kamar)?>
                                </li>
                        <?php endforeach ?>

                            </ul>
                        </div>

                    </div>
                    <!-- /.row -->
                </div>




            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->

    </div>
    <?php $this->load->view('footer/footer')?>
    <!-- /.container -->
</body>

</html>
