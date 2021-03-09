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
    KONFIRMASI DATA ORMAS
  </h1>

 

<?php
	foreach($ormas->result_array() as $e)
	{
?>


  
  <form method="post" action="<?php echo base_url(); ?>daftar/simpan_ormas">

<table>

<tr>
<td width="180">Nama Organisasi</td>
<td width="50">:</td>
<td><input type="text" name="nama" size="50" class="input-read-only" value="<?php echo $e['nama_ormas']; ?>"/> (Di isi sesuai nama ormas yang tertuang dalam Anggaran Dasar)</td>
</tr>

<tr>
<td width="180">Bidang Kegiatan</td>
<td width="50">:</td>
<td><input type="text" size="50"  name="bidang" class="input-read-only" value="<?php echo $e['nama_ormas']; ?>" /> (Di isi sesuai dengan bidang kegiatan ormas)</td>
</tr>

<tr>
<td width="180">Alamat Kantor/Sekretariat</td>
<td width="50">:</td>
<td><input type="text" name="alamat" size="50" class="input-read-only" value="<?php echo $e['nama_ormas']; ?>"  /> (Sesuai Domisili Ormas)</td>
</tr>

<tr>
<td width="180">Tempat Dan Waktu Pendirian</td>
<td width="50">:</td>
<td><input type="text" size="50" name="tempat" class="input-read-only" value="<?php echo $e['nama_ormas']; ?>" /></td>
</tr>

<tr>
<td width="180">Asas Ciri Organisasi</td>
<td width="50">:</td>
<td><input type="text" name="asas" size="50" class="input-read-only" value="<?php echo $e['nama_ormas']; ?>" /></td>
</tr>

<tr>
<td width="180">Tujuan Organisasi</td>
<td width="50">:</td>
<td><input type="text" size="50" name="tujuan" class="input-read-only" value="<?php echo $e['nama_ormas']; ?>" /></td>
</tr>

<tr>
<td width="180">Nama Pendiri</td>
<td width="50">:</td>
<td><input type="text" name="pendiri" size="50" class="input-read-only" value="<?php echo $e['nama_ormas']; ?>" /></td>
</tr>

<tr>
<td width="180">Nama Pembina</td>
<td width="50">:</td>
<td><input type="text" name="pembina" size="50" class="input-read-only" value="<?php echo $e['nama_ormas']; ?>" /></td>
</tr>

<tr>
<td width="180">Nama Penasehat</td>
<td width="50">:</td>
<td><input type="text" name="penasehat" size="50" class="input-read-only" value="<?php echo $e['nama_ormas']; ?>" /></td>
</tr>

<tr>
<td width="180">    <br>Nama-Nama Pengurus    <br></td>
  <td width="50"></td>
<td></td>
  <tr>

  <tr><td width="180"><li>a. Ketua/Sederajat</td>
<td width="50">:</td>
<td><input type="text" name="ketua" size="50" class="input-read-only" value="<?php echo $e['nama_ormas']; ?>"  /></td>
</tr>
  <tr><td width="180"><li>b. Sekretaris/Sederajat</td>
<td width="50">:</td>
<td><input type="text" name="sekretaris" size="50" class="input-read-only" value="<?php echo $e['nama_ormas']; ?>"  /></td>
</tr>
  
  
   <tr><td width="180">   <li>c. Bendahara/Sederajat</td>
<td width="50">:</td>
<td><input type="text" name="bendahara" size="50" class="input-read-only"  value="<?php echo $e['nama_ormas']; ?>"  /></td>
</tr>
  
  
  
  
  <tr>
<td width="180">Masa Bhakti Kepengurusan</td>
<td width="50">:</td>
<td><input type="text" name="masa" size="50" class="input-read-only" value="<?php echo $e['nama_ormas']; ?>"  /></td>
</tr>
  
  
  
  
  
  
  
  
    <tr>
<td width="180">Keputusan Tertinggi Organisasi</td>
<td width="50">:</td>
<td><input type="text" name="keputusan" size="50" class="input-read-only" value="<?php echo $e['nama_ormas']; ?>"  /></td>
</tr>
  
  
      <tr>
<td width="180">Unit/Cabang/ Sayap Otonom Organisasi </td>
<td width="50">:</td>
<td><input type="text" name="unit" size="50" class="input-read-only" value="<?php echo $e['nama_ormas']; ?>"  /></td>
</tr>
  
  
  
  
   
      <tr>
<td width="180">Usaha Organisasi </td>
<td width="50">:</td>
<td><input type="text" name="usaha" size="50" class="input-read-only" value="<?php echo $e['nama_ormas']; ?>"  /></td>
</tr>
  
        <tr>
<td width="180">Sumber Keuangan</td>
<td width="50">:</td>
<td><input type="text" name="sumber" size="50" class="input-read-only" value="<?php echo $e['nama_ormas']; ?>" /></td>
</tr>
  
  
        <tr>
<td width="180">Lambang/Logo Organisasi</td>
<td width="50">:</td>
<td><img src="smiley.gif" alt="Lambang" height="100" width="100"></td>
</tr>
    
  
        <tr>
<td width="180">Bendera Organisasi </td>
<td width="50">:</td>
<td><img src="smiley.gif" alt="Bendera" height="100" width="100"></td>
</tr>  
  
  
<tr>
<td width="180"></td>
<td width="50"></td>
<td>
<input type="submit" value="Daftar" class="btn-kirim">
<input type="reset" value="Batal" class="btn-kirim">
<input type="hidden" name="stts" value="tambah"></td>
</tr>

</table>
<?php } ?>

  </form> 
     