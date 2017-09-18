<?php $this->load->view('header1')?>
<div class="container">
        <br>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col s12">
              <ul class="tabs">
                <li class="tab col s3"><a href="#test2">Lost Items</a></li>
                <li class="tab col s3"><a href="#test3">Found Items</a></li>
              </ul>
            </div>
            <?php include 'lost_items.php' ?>
            <?php include 'found_items.php' ?>
        </div>
        <br>
        <br>
        <br>
        <br>
    </div>
<?php include 'footer.php' ?>