<?php 
    require 'core/JsonReader.php';

    $obj = new JsonReader('data/sdata.json');

    var_dump($obj->getAllData());
    var_dump($obj->getDataByNodeName('DP90'));