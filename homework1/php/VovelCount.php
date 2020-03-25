<?php
// check if value is empty
if (empty($_GET['word']))
  echo "string is empty";
else{
  $word = $_GET['word'];
  $vovels = 0;

  // iterate throgh text
  for ($i=0; $i < strlen($word) ; $i++) {

    // count vovels
    switch ($word[$i]) {
      case 'a':
      case 'i':
      case 'e':
      case 'o':
        ++$vovels;
        break;
    }
  }
  echo "Vovels in text: ".$vovels;
}
