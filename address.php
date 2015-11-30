<?php

include 'db.php';
$address = array();

$address[] = filter_input(INPUT_GET, 'zipcode', FILTER_VALIDATE_INT);
$address[] = $_GET['street'];
$address[] = filter_input(INPUT_GET, 'build', FILTER_VALIDATE_INT);
!empty($_GET['housing']) ? $address[] = $_GET['housing'] : $address[] = NULL;

$STM = $DBH->query("SELECT * FROM zip WHERE zipcode={$address[0]} LIMIT 1");
$row = $STM->fetch(PDO::FETCH_ASSOC);
echo $STM->debugDumpParams() . "\n\r";
$STM = NULL;
$DBH = NULL;
$zipQ = (int)$row['zipid'];

/*if(!empty($zipQ))
{*/  
        $opt = array('zipid'=>(int)$row['zipid'], 'street'=>$address[1], 'build'=>$address[2], 'housing'=>$address[3]);
        echo var_dump($opt);
        $STM1 = $DBH->prepare("INSERT INTO address (zipid, street, build, housing) VALUES (:zipid, :street, :build, :housing)");
        $STM1->execute($opt);
        echo $STM1->debugDumpParams();
    
    
 /*
     
}
else
{
    echo "not work!";
    try
    {
        $stmnt = $DBH->prepare("INSERT INTO zip (zipcode) VALUES (:zip)");
        $stmnt->execute(array('zip'=>address[0]));
        $lastID = $DBH->lastInsertId();
        $stmnt2 = $DBH->prepare("INSERT INTO address (zipid, street, build, housing) VALUES (:zip, :str, :bld, :hsng)");
        $stmnt2 -> execute(array('zip'=>$lastID, 'str'=>$address[1], 'bld'=>$address[2], 'hsng'=>$address[3]));
    }
    catch (PDOException $ex)
    {
        echo "Хьюстон, у нас проблемы.";  
        echo $ex->getMessage(); 
    }
}*/