<?php

$guruh = array (
    array('nomi' => '650-28', 'bola' => 25),
    array('nomi' => '651-18', 'bola' => 22),
    array('nomi' => '652-18', 'bola' => 23),
    array('nomi' => '653-18', 'bola' => 24),
    array('nomi' => '654-18', 'bola' => 27)
);

    // $e = array(
    //     'nomi' => 'Toshkent',
    //     'aholi' => '1000',
    //     'markaz' => 'Toshkent'
    // );
    //echo $e['nomi'];
    // foreach($e as $k => $q) {
    //     echo $k . " - " . $q ."<br>";
    // }

    // echo "<pre>";
    // print_r($guruh);
    // echo "</pre>";
    // echo $guruh[2]['bola'];
    // echo $guruh[3]['nomi'];
    foreach ($guruh as $g) {
        echo $g['nomi']. '=>';
        echo $g['bola'].'<br>';
        
    }
?>