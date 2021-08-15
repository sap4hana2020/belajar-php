<?php

$menu = 'b';

switch($menu){
  case 'a':
     $pesan = "akses menu a";
     break;
  case 'b' :
     $pesan = "akses menu b";
     break;
  case 'c' : 
      $pesan = "akses menu c";
      break;
  default :
     $pesan = "ANDA belum akses menu";
}
Echo $pesan;
?>
