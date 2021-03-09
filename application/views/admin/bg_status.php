<!DOCTYPE html>
<style>
a{
text-decoration:none;
color:#fff;
padding:5px;
border:1px solid #333333;
float:left;
background-color:#000;
}
a:hover{
text-decoration:none;
color:#fff;
padding:5px;
border:1px solid #333333;
float:left;
background-color:#666666;
}
body{
font-size:12px;
font-family:Tahoma,Arial;
margin:30px;
}
.input-read-only {
border: 1px solid #D0D0D0;
padding: 10px;
width:500px;
}
.btn-kirim {
font-size: 12px;
background-color: #f9f9f9;
border: 1px solid #D0D0D0;
padding: 9px 10px 9px 10px;
color:#000;
cursor:pointer; 
-moz-border-radius: 6px; 
border-radius: 6px;
}
</style>

      </br>
      </br>
  <h1>
   INPUT NO SKT
  </h1>

 

<?php
	foreach($ormas->result_array() as $e)
	{
?>


  
  <form method="post" action="<?php echo base_url(); ?>admin/simpan_ormas">

<table>


<tr>
<td width="180">Nama Organisasi</td>
<td width="50">:</td>
<td><?php echo $e['nama_ormas']; ?></td>
</tr>

<tr>
<td width="180">Bidang Kegiatan</td>
<td width="50">:</td>
<td><?php echo $e['bidang_kegiatan']; ?></td>
</tr>

<tr>
<td width="180">Alamat Kantor/Sekretariat</td>
<td width="50">:</td>
<td><?php echo $e['alamat']; ?></td>
</tr>

<tr>
<td width="180">Tempat Dan Waktu Pendirian</td>
<td width="50">:</td>
<td><?php echo $e['tempat_berdiri']; ?></td>
</tr>

<tr>
<td width="180">Asas Ciri Organisasi</td>
<td width="50">:</td>
<td><?php echo $e['asas']; ?></td>
</tr>

<tr>
<td width="180">Tujuan Organisasi</td>
<td width="50">:</td>
<td><?php echo $e['nama_ormas']; ?></td>
</tr>

<tr>
<td width="180">Nama Pendiri</td>
<td width="50">:</td>
<td><?php echo $e['pendiri']; ?></td>
</tr>

<tr>
<td width="180">Nama Pembina</td>
<td width="50">:</td>
<td><?php echo $e['pembina']; ?></td>
</tr>

<tr>
<td width="180">Nama Penasehat</td>
<td width="50">:</td>
<td><?php echo $e['penasehat']; ?></td>
</tr>

<hr>
  
  
   <tr><td width="180">   No SKT</td>
<td width="50">:</td>
<td><input type="text" name="noskt" size="50" class="input-read-only"  value=""  /></td>
</tr>
  
    <tr><td width="180">   Tanggal SKT</td>
<td width="50">:</td>
<td><input type="date" name="tgl_skt" size="50" class="input-read-only"  value=""  /></td>
</tr>
  
  
   <tr><td width="180">   Berakhir SKT</td>
<td width="50">:</td>
<td><input type="date" name="exp_skt" size="50" class="input-read-only"  value=""  /></td>
</tr>
  
     <tr><td width="180">   Keterangan</td>
<td width="50">:</td>
<td><input type="text" name="ket" size="50" class="input-read-only"  value=""  /></td>
</tr>

  
<tr>
<td width="180"></td>
<td width="50"></td>
<td>
<input type="submit" value="Simpan" class="btn-kirim">
<input type="reset" value="Batal" class="btn-kirim">
<input type="hidden" name="stts" value="updateskt">
<input type="hidden" name="id_ormas" value="<?php echo $e['id_ormas']; ?>">
  
  </td>
</tr>

</table>
<?php } ?>

  </form> 
     