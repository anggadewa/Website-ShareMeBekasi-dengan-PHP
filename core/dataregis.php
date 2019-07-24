<?php

function regis($nik, $nama, $username, $password, $email){
  global $link;

  $query = "INSERT INTO user (nik, nama, username, password, email) VALUES ('$nik', '$nama', '$username', '$password', '$email')";

  if ( mysqli_query($link, $query) ) {
    return true;
  }else {
    return false;
  }

}


function uji($nik){
  global $link;
  $query = "SELECT * FROM user WHERE nik = '$nik' ";

  if ( $result = mysqli_query($link, $query) ) {
    if(mysqli_num_rows($result) == 0 ) return true;
    else return false;
  }
}

 ?>
