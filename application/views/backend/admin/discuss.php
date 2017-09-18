<?php include 'header-admin.php' ?>
				
<div class="main_section">
  <div class="chat_container">
	 <div class="col-sm-3 chat_sidebar">
	 <div class="row">
		<div id="custom-search-input">
		   <div class="input-group col-md-12">
			  <input type="text" class="  search-query form-control" placeholder="Conversation" />
			  <button class="btn btn-danger" type="button">
			  <span class=" glyphicon glyphicon-search"></span>
			  </button>
		   </div>
		</div>
		<div class="dropdown all_conversation">
		   <button class="dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		   <i class="fa fa-weixin" aria-hidden="true"></i>
		   All Conversations
		   <span class="caret pull-right"></span>
		   </button>
		   <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
			  
		    <?php foreach($usr as $a):?>
			  <li><a href="<?=base_url('index.php/admin/db/message_filter/'.$a->id)?>"><?=$a->username?></a></li>
			  <?php endforeach?>
			  
		   </ul>
		</div>
		</div>
	 </div>
	 <!--chat_sidebar-->
	 
	 
	<div class="col-sm-9 message_section">
	 <div class="row">
		 <div class="new_message_head">
			 <div class="pull-left">
				<button><i class="fa fa-plus-square-o" aria-hidden="true"></i> New Message</button>
			 </div>
			 <div class="pull-right">
				<div class="dropdown">
				  <button class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-cogs" aria-hidden="true"></i>  Setting
					<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
					<li><a href="#">Action</a></li>
					<li><a href="#">Profile</a></li>
					<li><a href="#">Logout</a></li>
				  </ul>
				</div>
			 </div>
		 </div><!--new_message_head-->
	 
		<div class="chat_area">
			<ul class="list-unstyled">
			<?php foreach($msg as $a) :?>
				<li class="left clearfix">
					 <span class="chat-img1 pull-left">
					 <img src="https://lh6.googleusercontent.com/-y-MY2satK-E/AAAAAAAAAAI/AAAAAAAAAJU/ER_hFddBheQ/photo.jpg" alt="User Avatar" class="img-circle">
					 </span>
					 <div class="chat-body1 clearfix">
					 	<p><?=$a->nama_user?></p>
						<p><?=$a->komen?></p>
						<div class="chat_time pull-right"><?=$a->tanggal?></div>
					 </div>
				</li>
			<?php endforeach?>
				
		</div><!--chat_area-->


		<?= form_open_multipart('admin/db/send_msg',['class'=>'form-group']) ?>
			<div class="form-group">
			<div class="col-md-4">
			  <label for="sel1">Send To:</label>
			  <select class="form-control" name="user" id="sel1">
			  <?php foreach($usr as $a) :?>
			  	<option value="<?=$a->id?>"><?=$a->username?></option>
			  <?php endforeach;?>
			  </select>

			</div>
			<br>
		 <div class="message_write">
			 <textarea class="form-control" name="komen" placeholder="type a message"></textarea>
			 <div class="clearfix"></div>
			 <div class="chat_bottom">
				<button type="submit" class="pull-right btn btn-success">Send</button>
				
			 </div>
		 </div>
	  </div>
	</div> <!--message_section-->
  </div>
</div>
				
<?php include 'footer-admin.php' ?>