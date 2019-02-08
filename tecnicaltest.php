<?php

function solution($N) {
      $bilangan = array();

      $mid = $N /2;
      //0= genap , 1 = ganjil
      $midType = $N % 2;
      $batas = $mid -1;
      if ($midType == 0 ){
              for ($i = 0; $i < $batas; $i++) {
                              $bil1 = $bil1 - 1;
                              array_push($bilangan,$bil1);
                          }
              array_push($bilangan,0,0);
              for ($i = 0; $i < $batas; $i++) {
                              $bil2 = $bil2 + 1;
                              array_push($bilangan,$bil2);
                          }       
          }else{
              for ($i = 0; $i < $batas; $i++) {
                              $bil1 = $bil1 - 1;
                              array_push($bilangan,$bil1);
                          }
              array_push($bilangan,0);
              for ($i = 0; $i < $batas; $i++) {
                              $bil2 = $bil2 + 1;
                              array_push($bilangan,$bil2);
                          } 
          }

                
  return $bilangan;
}

print_r( solution(5));

?>
