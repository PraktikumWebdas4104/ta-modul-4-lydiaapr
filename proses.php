<?php

<h2>GENRE FILM</h2>
<form action="" method="post">
<input type="checkbox" name="genre[]" value="horor">horor<br/>
<input type="checkbox" name="genre[]" value="action">action<br/>
<input type="checkbox" name="genre[]" value="anime">anime<br/>
<input type="checkbox" name="genre[]" value="thriller">thriller<br/>
<input type="checkbox" name="genre[]" value="animasi">animasi<br/>

<h2>TUJUAN WISATA</h2>
<form action="" method="post">
<input type="checkbox" name="tujuan[]" value="Bali">Bali<br/>
<input type="checkbox" name="tujuan[]" value="Raja Ampat">Raja Ampat<br/>
<input type="checkbox" name="tujuan[]" value="Pulau Derawan">Pulau Derawan<br/>
<input type="checkbox" name="tujuan[]" value="Bangka Belitung">Bangka Belitung<br/>
<input type="checkbox" name="tujuan[]" value="Labuan Bajo">Labuan Bajo<br/>


    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
    <input type="submit" name="enter" value="KIRIM"
 
  <?php 

if(isset($_POST['enter']))
	$data=$_POST["$data as $genre"];
 			foreach ($data as $genre){
 			echo $genre."<br/>";
 }




   ?>

?>
