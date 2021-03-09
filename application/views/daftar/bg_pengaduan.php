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
<div id="container">
  
  
  	<div id="body">
      </br>
      </br>
  <h1>
    FORMULIR PENGADUAN
  </h1>




<br>
  <form method="post" action="<?php echo base_url(); ?>daftar/simpan_pengaduan" enctype="multipart/form-data">

<table>

<tr>
<td width="180">Nama </td>
<td width="50">:</td>
<td><input type="text" name="nama" size="50" class="input-read-only" value=""/> </td>
</tr>

<tr>
<td width="180">Tanggal Dan Waktu</td>
<td width="50">:</td>
<td><input type="date" size="50"  name="tgl" class="input-read-only" value="" /> </td>
</tr>

<tr>
<td width="180">Tempat Kejadian</td>
<td width="50">:</td>
<td><input type="text" name="tempat" size="50" class="input-read-only" value=""  /> </td>
</tr>
  
<tr>
<td width="180">Bukti
<td width="50">:</td>
<td><input type="file" name="bukti" size="50" class="input-read-only" value=""  /></td>
</tr>
  
<tr>
<td width="180">Keterangan</td>
<td width="50">:</td>
<td><input type="text" size="50" name="ket" class="input-read-only" value="" /></td>
</tr>


<tr>
<td width="180"></td>
<td width="50"></td>
<td>
<input type="submit" value="Kirim" class="btn-kirim">
<input type="reset" value="Batal" class="btn-kirim">
<input type="hidden" name="stts" value="tambah"></td>
</tr>

</table>


  </form> </br>
      </br></div></div>