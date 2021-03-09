<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">


  <div >
<a href="http://windi.diadeveloper.com" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Beranda</a>
		<?php echo form_open('web/login'); ?>
		<div id="bg-line">
      		<p>Silahkan Masukkan Username Dan Password </p>
		Username : 
		<?php echo form_input($username); ?>
		Password : 
		<?php echo form_input($password); ?>
		<?php echo form_submit('submit', 'Masuk', ' ');?> 
		<?php echo form_reset('submit', 'Hapus',' ');?>
		</div>
		<?php echo form_close(); ?>
	</div>
	</div>
