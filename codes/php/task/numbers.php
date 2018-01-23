<?php

for($tens = 0; $tens <= 9; $tens++) {
  for($ones = 0; $ones <= 9; $ones++) {
    echo "$tens$ones". (($ones === 9)? "\n": ' ');
  }
}
