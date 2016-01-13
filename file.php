<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
define('path', __DIR__);
/*include 'fileSort.php';

$indFile = path . '/indexes.txt';
//$indFile = path . '/ndx.txt';

echo var_dump($indFile);

$ndx = new fileSort;


$mas = $ndx->fileRead($indFile);




echo var_dump($mas);*/

$indFile = path . '/indexes.txt';

$handler = fopen($indFile, 'r');

if($handler)
{
  while(!feof($handler))
  {
    $readed[] = fgets($handler);
  }
}

//echo var_dump($readed);

fclose($handle);

sort($readed);
//echo var_dump($readed);
//$sorted[] = $readed[0];
for ($i=0; $i <= count($readed); $i++)
{
  if($readed[$i] != $readed[$i+1])
  {
    $sorted[] = $readed[$i];
  }
}

echo var_dump($sorted);