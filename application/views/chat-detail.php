<?php include 'header1.php' ?>


<br>
<br>
<br>
<br>

<div class="container">
	<ul class="collection">
    <li class="collection-item avatar">
      <i class="material-icons circle red">play_arrow</i>
      <span class="title">ADMIN</span><br>
    <?php foreach($komen as $a):?>
      <small><?=$a->tanggal?></small>
      <h5><?=$a->komen?></h5>
    <?php endforeach;?>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
  </ul>
</div>

<br>
<br>
<br>
<br>

<?php include 'footer.php' ?>