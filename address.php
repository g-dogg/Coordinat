<?php

$address = array();

$address[0] = $_GET['zipcode']; //filter_input(INPUT_GET, 'zipcode', FILTER_VALIDATE_INT);
$address[1] = (string)$_GET['street'];
$address[2] = (int)$_GET['build'];//filter_input(INPUT_GET, 'build', FILTER_VALIDATE_INT);
!empty($_GET['housing']) ? $address[3] = $_GET['housing'] : $address[3] = '';

//echo var_dump($address);

$zipSelect = $db->query("SELECT * FROM zipcodes", PDO::FETCH_ASSOC);
/*
$stm1 = $db->prepare("SELECT * FROM zipcodes WHERE zipcode=:zip LIMIT 1");
$stm1->execute(array('zip'=>$address[0]));
$zipid = $stm1->fetch(PDO::FETCH_ASSOC);
if(!empty($zipid))
{
  $stm = $db->prepare("INSERT INTO coordinat.address (zipid, street, build, korp) VALUES (:z, :s, :b, :h)");
$stm->execute(array('z'=>$zipid['id'], 's'=>$address[1], 'b'=>$address[2], 'h'=>$address[3]));
}*/
