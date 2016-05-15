<?php

  function valstr () {

    $vowels = 'aeiouy';
    $str = "hello world";
    $new_str = '';
    $len_str = strlen($str);
    $len_vowels = strlen($vowels);

    for( $i = 0; $i <= $len_str; $i++ ) {
      if (!strstr($vowels, $str[$i])) {
        $new_str .= $str[$i];
      }
    }
  }
  valstr();

?>