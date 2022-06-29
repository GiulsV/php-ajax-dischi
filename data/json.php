<?php

include(__DIR__ . '/data.php');

header('Content-Type: application/json');

    echo json_encode($discs);
    
    //json raggiungibile qui /php-ajax-dischi/data/data.php

?>