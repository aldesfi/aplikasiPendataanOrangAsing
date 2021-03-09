<link href="<?php echo base_url(); ?>asset/css/jquery.fancybox-1.3.4.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>asset/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>asset/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>asset/js/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript">
		$(document).ready(function() {
			$("a[rel=example_group]").fancybox({
				'height'			: '75%',
				'width'				: '70%',
				'transitionIn'		: 'fade',
				'transitionOut'		: 'fade',
				'overlayColor'		: '#000',
				'overlayOpacity'	: 0.9,
				'type'              : 'iframe',
				'showNavArrows'   : false,
				'hideOnOverlayClick': false,
				'onClosed'          : function() {
									  parent.location.reload(true);
									  }
			});});
</script>
<div id="container">
  <br>
  <center>
  <img src="#KABIMG" alt="#kabname" height="70" width="50"><br>
  <p class="w3-xlarge">
    <b>PEMERINTAH KABUPATEN #KABNAME</b><br>
    <b><font size="20">BADAN KESATUAN BANGSA DAN POLITIK</font></b><br>
    <b>KOMPLEK PERKANTORAN PEMERINTAH KABUPATEN #KABNAME</b><br>
  #CONTACT<br>
  
  
  
  </p>
  </center>
	<div id="body">
		<?php

			echo $menu;
		?>
		<div class="cleaner_h10"></div>
		
		
	<table border="1" width="100%" style="border-collapse: collapse; font-size:12px;" cellpadding="5">

	<td colspan="6" align="center" bgcolor="#fff" style="text-transform:uppercase;"><strong>DAFTAR ORANG ASING TIDAK BEKERJA</strong></td>
	
	</tr>
	<tr>
	<td align="center">No</td>


	<td align="center">Asal Negara</td>	




	<td align="center">Jumlah</td>	

	<td align="center" colspan="3">Aksi</td>


	</tr>
	
	<?php
    $no=0;
		foreach($orang_asing_tdk_bekerja->result_array() as $d)
		{
      $no++;
		?>
			<tr>
			<td align="center"><?php echo $no; ?></td>	
			<td><?php echo $d['asal_negara']; ?></td>	

        			<td align="center"><?php echo $d['jumlah']; ?></td>
        



			<td align="center" width="60">
			<?php
      	
			echo '

        
				<a href="'.base_url().'admin/orangasing?kode=tidak_bekerja"
				class="link" style="float:left;">Daftar Nama</a>';
			?>
			</td>	
			</tr>
		<?php
		}
	?>
	
	</table>
	<?php
		echo $paginator;
	?>
<br>
  <a href="<?php echo base_url().'admin/cetak_orastibek';?>" rel="example_group" class="link" style="float:left;">Cetak Data</a>
    <br>

	</div>
