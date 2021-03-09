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
			echo $bio;
			echo $menu;
		?>
		<div class="cleaner_h10"></div>
		
		
	<table border="1" width="100%" style="border-collapse: collapse; font-size:12px;" cellpadding="5">

	<td colspan="7" align="center" bgcolor="#fff" style="text-transform:uppercase;"><strong>DAFTAR ORANG ASING</strong></td>
	</tr>
	<tr>
	<td align="center">No</td>
	<td align="center">Nama</td>

	<td align="center">Tempat,Tgl Lahir</td>	
	<td align="center">Jenis Kelamin</td>	
	<td align="center">Perusahaan</td>	

	<td align="center">Mulai Bekerja Tanggal</td>	
	<td align="center">Status</td>	


	</tr>
	
	<?php
    $no=0;
		foreach($orang_asing->result_array() as $d)
		{
      $no++;
		?>
			<tr>
			<td align="center"><?php echo $no; ?></td>	
			<td align="center"><?php echo $d['nama']; ?></td>	

			<td align="center"> <?php echo $d['tempat_lahir']." / ".$d['tgl_lahir']; ?>  </td>
			<td align="center"><?php echo $d['jk']; ?></td>
        			<td align="center"><?php echo $d['perusahaan']; ?></td>
			<td align="center"><?php echo $d['mulai_bekerja']; ?></td>


			<td align="center"><?php echo $d['status']; ?></td>

			</tr>
		<?php
		}
	?>
	
	</table>
	<?php
		echo $paginator;
	?>


	</div>
