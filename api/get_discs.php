<?php 

    header('Content-Type: application/json');

    $discsData = file_get_contents('../data/discs.json');
    $discs = json_decode($discsData, true);

    echo json_encode($discs);

?>
