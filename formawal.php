<?php
<html>
<head>
    <title> SILAHKAN LOGIN </title> 
</head>
    <tr>
      <td>Username</td>
      <td><input type="text" name="username"></td>
    </tr>
    <tr>
       <td>Password</td>
       <td><input type="password" name="password"></td>
    </tr>
    <tr>
       <td></td>
       <td><input type="submit" name="login" value="Log In"></td>
       </tr>
  </table>
 </form>

<?php 

if(isset($_POST['login'])){
  $username=$_POST['username'];
  $user=$_POST['password'];

  if($user=="admin"&&$pass="admin"){
    echo "LOGIN BERHASIL";
?>


<a href="proses.php" > lanjut ke proses </a>
<?php

  }else{
    echo "LOGIN GAGAL";
  }

}



?>




?>
