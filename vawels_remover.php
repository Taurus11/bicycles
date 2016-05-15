<?php

  function valstr () {

    $vowels = 'aeiouy';
    $str = "hello world";
    $new_str = '';
    $len_str = strlen($str);
    $len_vowels = strlen($vowels);

    for( $i = 0; $i <= $len_str; $i++ ) {
      for( $j = 0; $j <= $len_vowels; $j++) {
        if($str[$i] != $vowels[$j]) {
          $new_str .= $str[$i];
          }
        }
      }
    print_r($new_str);
    }

  valstr();

?>