<?php include 'header-admin.php' ?>
				
				<div id="dahsboard-con">
					<div class="row">
						<div class="col-md-12 dashboard-left-cell">
							<div class="admin-content-con">
								<header class="clearfix">
									<b><h3  class="pull-left">Data Penemu</h3></b>
									<!--<a class="btn btn-xs btn-primary pull-right" href="#" role="button">Add Lost Item</a>-->
								</header>
								<div class="content-inner">
			<div class="row search-row">
				<div class="col-md-4">
					<div class="input-group">
					<?=form_open('admin/db')?>
						<input type="text" name="cari" class="form-control search-field" id="search" placeholder="Masukkan ID Barang">
						<span class="input-group-btn">
							
						<?=form_submit(['name'=>'submit','value'=>'Cari','class'=>'btn btn-primary go']);?>
            		
						</span>
					<?=form_close();?>
					</div>
				</div>
			</div>
								<table class="table table-striped">
									<thead>
										<div class="row">
						<div class="col-md-12 dashboard-left-cell">
						<?php foreach($fi as $a) :?>
							NPM/ID: <?=$a->id_user?><br>
							Nama: <?=$a->nama_user?><br>

							
							<hr>

										
										<th>SubKategori</th>
										<th>Tanggal</th>
										<th>Deskripsi</th>
										<th>lokasi</th>
										<th>Status</th>
										<th>actions</th>
									</thead>
									
									<tbody>
									
										<tr>
											
											<td><?=$a->kategori?></td>
											<td><?=$a->tgl_hilang?></td>
											<td><?=$a->deskripsi?></td>
											<td><?=$a->lokasi?></td>
											<td><?=$a->status?></td>
											<td>
												<a class="btn btn-xs btn-warning" href="<?=base_url('index.php/admin/db/edit_status_penemu/'.$a->id)?>" role="button">edit</a>
												<a class="btn btn-xs btn-danger" href="<?=base_url('index.php/admin/db/delete/'.$a->id)?>" role="button">del</a>
											</td>
										</tr>
						<?php endforeach;?>
										
										
									</tbody>
								</table>
								<!--<div class="clearfix">
									<a href="#" class="pull-right text-link">view all articles</a>
								</div>-->
							</div>
						</div>


							<div id="dahsboard-con">
					<div class="row">
						<div class="col-md-12 dashboard-left-cell">
							<div class="admin-content-con">
								<header class="clearfix">
									<b><h3 class="pull-left">Table User</h3></b>
									<center><a class="btn btn-xs btn-primary pull-center" href="<?=base_url('index.php/admin/db/create_user')?>" role="button">Add New User</a></center>
								</header>
								<table class="table table-striped">
									<thead>
										<th>Nama</th>
										<th>NPM</th>
										<th>Username</th>
										<th>Password</th>
										<th>Email</th>
										<th>No.Hanphone</th>
										<th>actions</th>
									</thead>
									
									<tbody>
									<?php foreach($usr as $a) :?>
										<tr>
											<td><?=$a->nama?></td>
											<td><?=$a->npm?></td>
											<td><?=$a->username?></td>
											<td><?=$a->password?></td>
											<td><?=$a->email?></td>
											<td><?=$a->no_tlp?></td>
											<td>
												<a class="btn btn-xs btn-warning" href="<?=base_url('index.php/admin/db/update_usr/'.$a->id)?>" role="button">edit</a>
												<a class="btn btn-xs btn-danger" href="<?=base_url('index.php/admin/db/delete_usr/'.$a->id)?>" role="button">del</a>
											</td>
										</tr>
									<?php endforeach;?>
										
									</tbody>
								</table>
								<div class="clearfix">
									<a href="#" class="pull-right text-link">view all articles</a>
								</div>
							</div>
						</div>


							<div id="dahsboard-con">
					<div class="row">
						<div class="col-md-12 dashboard-left-cell">
							<div class="admin-content-con">
								<header class="clearfix">
									<b><h3 class="pull-left">Table Admin</h3></b>
									<center><a class="btn btn-xs btn-primary pull-center" href="<?=base_url('index.php/admin/db/create_admin')?>" role="button">Add Admin</a></center>
								</header>
								<table class="table table-striped">
									<thead>
										<th>Nama</th>
										<th>Username</th>
										<th>Password</th>
										<th>Email</th>
										<th>actions</th>
									</thead>
									
									<tbody>
										<?php foreach($adm as $a) :?>
										<tr>
											<td><?=$a->nama?></td>
											
											<td><?=$a->username?></td>
											<td><?=$a->password?></td>
											<td><?=$a->email?></td>
											
											<td>
												<a class="btn btn-xs btn-warning" href="<?=base_url('index.php/admin/db/update_adm/'.$a->id)?>" role="button">edit</a>
												<a class="btn btn-xs btn-danger" href="<?=base_url('index.php/admin/db/delete_adm/'.$a->id)?>" role="button">del</a>
											</td>
										</tr>
										<?php endforeach;?>
										
									</tbody>
								</table>
								<div class="clearfix">
									<a href="#" class="pull-right text-link">view all articles</a>
								</div>
							</div>
						</div>
						
						<!-- <div class="col-md-6 dashboard-right-cell">
							<div class="admin-content-con">
								<header>
									<h5>Comments</h5>
								</header>
								<div class="comment-head-dash clearfix">
									<div class="commenter-name-dash pull-left">Reza Wisnu Wardhana</div>
									<div class="days-dash pull-right">2 days ago</div>
								</div>
								<p class="comment-dash">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec congue lectus. Pellentesque finibus massa in tincidunt pretium. Donec at hendrerit ex, malesuada posuere diam. Etiam efficitur neque ac accumsan rhoncus. Vivamus rutrum eros ullamcorper tellus venenatis sagittis. Proin ac ullamcorper neque. Quisque nec porttitor lorem. Integer quis ex at felis dignissim pretium et vel quam.
								</p>
								<small class="comment-date-dash">Today 5:10pm 24/03/2016</small>
								<hr>
								
								<div class="comment-head-dash clearfix">
									<div class="commenter-name-dash pull-left">Reza Wisnu Wardhana</div>
									<div class="days-dash pull-right">2 days ago</div>
								</div>
								<p class="comment-dash">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec congue lectus. Pellentesque finibus massa in tincidunt pretium. Donec at hendrerit ex, malesuada posuere diam. Etiam efficitur neque ac accumsan rhoncus. Vivamus rutrum eros ullamcorper tellus venenatis sagittis. Proin ac ullamcorper neque. Quisque nec porttitor lorem. Integer quis ex at felis dignissim pretium et vel quam.
								</p>
								<small class="comment-date-dash">Today 5:10pm 24/03/2016</small>
								<hr>
								
								<div class="clearfix">
									<a href="#" class="pull-right text-link">view all comments</a>
								</div>
							</div>
						</div> -->
					</div>
				</div>
				
				<!-- <div class="row">
					<div class="col-md-12">
						<div class="admin-content-con clearfix">
							<header>
								<h5>Commenters</h5>
							</header>
							
							<table class="table table-borederd">
								<thead>
									<tr>
										<th>#</th>
										<th>Full Name</th>
										<th>Email</th>
										<th>Status</th>
										<th>Created</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Reza Wisnu Wardhana</td>
										<td>rezawisnuwardhana358@gmail.com</td>
										<td><a href="#" class="label label-default">pending</a></td>
										<td>Today 05.30pm - 14/09/2016</td>
										<td><a href="#" class="label label-danger">Delete</a></td>
									</tr>
									<tr>
										<td>2</td>
										<td>Reza Wisnu Wardhana</td>
										<td>rezawisnuwardhana358@gmail.com</td>
										<td><a href="#" class="label label-success">active</a></td>
										<td>Today 05.30pm - 14/09/2016</td>
										<td><a href="#" class="label label-danger">Delete</a></td>
									</tr>
									<tr>
										<td>3</td>
										<td>Reza Wisnu Wardhana</td>
										<td>rezawisnuwardhana358@gmail.com</td>
										<td><a href="#" class="label label-success">active</a></td>
										<td>Today 05.30pm - 14/09/2016</td>
										<td><a href="#" class="label label-danger">Delete</a></td>
									</tr>
									<tr>
										<td>3</td>
										<td>Reza Wisnu Wardhana</td>
										<td>rezawisnuwardhana358@gmail.com</td>
										<td><a href="#" class="label label-success">active</a></td>
										<td>Today 05.30pm - 14/09/2016</td>
										<td><a href="#" class="label label-danger">Delete</a></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div> -->
				
				<?php include 'footer-admin.php' ?>