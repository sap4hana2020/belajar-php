<?php

$menu = 'a';

switch($menu){
  case 'a':
     $pesan = "akses menu a";
     break;
  case 'b' :
     $pesan = "akses menu b";
     break;
  default :
     $pesan = "ANDA belum akses menu";
}
Echo $pesan;

?>
