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
	<h1>Laporan Pengaduan</h1>

	<div id="body">

		<div class="cleaner_h10"></div>
		
		
	<table border="1" width="100%" style="border-collapse: collapse; font-size:12px;" cellpadding="5">

	
	</tr>
	<tr>
	<td align="center">No</td>

	<td align="center">Nama </td>

	<td align="center">Tanggal Dan Waktu</td>	

	<td align="center">Tempat Kejadian</td>	
	<td align="center">Bukti</td>	
	<td align="center">Keterangan</td>	
	
	</tr>
	
	<?php
    $no=0;
		foreach($ormas->result_array() as $d)
		{
      $no++;
		?>
			<tr>
			<td align="center"><?php echo $no; ?></td>	
			<td align="center"><?php echo $d['nama']; ?></td>	

	
			
			<td align="center"><?php echo $d['tgl_waktu']; ?></td>
			<td align="center"><?php echo $d['tempat']; ?></td>
			<td align="center"><img src='http://windi.kebangpol#kabname.site/gambar/<?php echo $d['bukti']; ?>'  height='42' width='42'></td>
			<td align="center"><?php echo $d['keterangan']; ?></td>

	

			
			</tr>
		<?php
		}
	?>
	
	</table>
	<?php
		echo $paginator;
	?>


	</div>
