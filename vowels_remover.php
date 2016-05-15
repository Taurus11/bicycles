<?php

  function valstr () {

    $vowels[] = 'aeiouy';
    $str = "hello world";
    $new_str = '';
    $len_str = strlen($str);

    for( $i = 0; $i < $len_str; $i++ ) {
      if (!in_array($str[$i], $vowels)) {
        $new_str .= $str[$i];
      }
    }
    echo ($new_str);
  }
  valstr();

?>