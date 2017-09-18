<?php include 'header-admin.php' ?>
	
	<div class="content">
		<header class="clearfix">
			<h4 class="page_title pull-left">Data Klaim</h4>
			<!--<button type="button" class="btn btn-xs btn-primary pull-right">Create new article</button>-->
		</header>
	
		<div class="content-inner">
			<div class="row search-row">
				<div class="col-md-4">
					<div class="input-group">
						<?=form_open('admin/db/confirm')?>
						<input type="text" name="cari" class="form-control search-field" id="search" placeholder="Masukkan ID Barang">
						<span class="input-group-btn">
							
						<?=form_submit(['name'=>'submit','value'=>'Cari','class'=>'btn btn-primary go']);?>
            		
						</span>
					<?=form_close();?>
					</div>
				</div>
			</div>
			
			<div class="row">
						<div class="col-md-12 dashboard-left-cell">
						<?php foreach($clm as $a) :?>
							NPM/ID: <?=$a->id?> <br>
							Nama: <?=$a->nama_user?><br>
							Alamat: <?=$a->alamat_user?><br>
							No.Hp: <?=$a->no_tlp_user?><br>
							<hr>

								<table class="table table-striped">
									<thead>
								
										<th>Nama Penemu</th>
										<th>Kategori</th>
										<th>Tanggal</th>
										<th>Deskripsi</th>
										<th>Lokasi</th>
										<th>Status</th>
										<th>actions</th>
									</thead>
									
									<tbody>
									        <th><?=$a->nama_user_f?></th>
											<td><?=$a->kategori_f?></td>
											<td><?=$a->nama_user_f?></td>
											<td><?=$a->deskripsi_f?></td>
											<td><?=$a->lokasi_f?></td>
											<td><?=$a->status_penerima?></td>
											<td>
												<a class="btn btn-xs btn-warning" href="<?=base_url('index.php/admin/db/edit_status_penerima/'.$a->id)?>" role="button">edit</a>
												<a class="btn btn-xs btn-danger" href="<?=base_url('index.php/admin/db/delete_cl/'.$a->id)?>" role="button">del</a>
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

		
			<br>
			<br<
			
	
			<hr>
			
		</div>
	</div>
	
<?php include 'footer-admin.php' ?>