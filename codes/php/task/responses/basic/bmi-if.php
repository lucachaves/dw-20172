<?php

$height = 1.5;
$weight = 60.0;
$bmiValue = $weight / $height ** 2;
$bmiValue = round($bmiValue, 1);
$bmiStatus;

if($bmiValue < 18.5)
  $bmiStatus = 'Underweight';
elseif($bmiValue >= 18.5 && $bmiValue <= 24.9)
  $bmiStatus = 'Normal weight';
elseif($bmiValue >= 25 && $bmiValue <= 29.9)
  $bmiStatus = 'Overweight';
else
  $bmiStatus = 'Obesity';

// echo 'BMI - value: '.$bmiValue.' status: '.$bmiStatus;
// echo "BMI - value: $bmiValue status: $bmiStatus";
echo "BMI - value: ${bmiValue} status: ${bmiStatus}";
