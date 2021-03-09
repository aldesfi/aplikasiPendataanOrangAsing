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


	<div id="body">
		<?php
			echo $bio;
			echo $menu;
    	echo $menu2;
		?>
		<div class="cleaner_h10"></div>
		
			<h1>Daftar Organisasi Kemasyarakatan Yang Terdaftar Pada Badan Kesatuan Bangsa Dan Politik #KABNAME</h1>
	<table border="1" width="100%" style="border-collapse: collapse; font-size:12px;" cellpadding="5">

	<td colspan="12" align="center" bgcolor="#fff" style="text-transform:uppercase;"><strong></strong></td>
	</tr>
	<tr>
	<td align="center">No</td>
	<td align="center">Nama Ormas Yayasan</td>

	<td align="center">Personalia Kepengurusan</td>	
	<td align="center">No Dan Tanggal SKT</td>	
	<td align="center">Berakhirnya SKT</td>	
	<td align="center">Alamat Dan Nomor Telepon</td>	
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
			<td align="center"><?php echo $d['nama_ormas']; ?></td>	

			<td align="center">  <table><tr>
    <td>
       Ketua
    </td>
         <td>
       :
    </td>
            <td>
      <?php echo $d['ketua']; ?>
    </td>
        </tr>
        <tr>
      <td>
       Sekretaris
    </td>
         <td>
       :
    </td>
            <td>
    <?php echo $d['sek']; ?>
    </td>
          </tr>
        <tr>
        
          <td>
       Bendahara
    </td>
         <td>
       :
    </td>
            <td>
     <?php echo $d['bendahara']; ?>
    </td>
           
        
   </tr></table> </td>
			<td align="center"><?php echo $d['nama_pendiri']; ?></td>
			<td align="center"><?php echo $d['nama_pendiri']; ?></td>
			<td align="center"><?php echo $d['nama_pendiri']; ?></td>
			<td align="center"><?php echo $d['nama_pendiri']; ?></td>

	
			</tr>
		<?php
		}
	?>
	
	</table>
	<?php
		echo $paginator;
	?>


	</div>
