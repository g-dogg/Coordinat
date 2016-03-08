<?php

$address = array();

$address[0] = filter_input(INPUT_GET, 'zipcode', FILTER_VALIDATE_INT);
$address[1] = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_EMAIL, FILTER_VALIDATE_EMAIL);
$address[2] = filter_input(INPUT_GET, 'street', FILTER_SANITIZE_STRING);
$address[3] = (int)filter_input(INPUT_GET, 'build', FILTER_VALIDATE_INT);
!empty($_GET['housing']) ? $address[4] = $_GET['housing'] : $address[4] = '';

$zipSelect = $db->query("SELECT * FROM zipcodes", PDO::FETCH_ASSOC);

$stm1 = $db->prepare("SELECT * FROM zipcodes WHERE zipcode=:zip LIMIT 1");
$stm1->execute(array('zip'=>$address[0]));
$zipid = $stm1->fetch(PDO::FETCH_ASSOC);

if(!empty($zipid))
{
  $stm = $db->prepare("INSERT INTO coordinat.address (zipid, street, build, korp) VALUES (:z, :s, :b, :h)");
  $stm->execute(array('z'=>(int)$zipid['id'], 's'=>$address[2], 'b'=>(int)$address[3], 'h'=>$address[4]));
}
