<?php

require_once 'helpers.php';
require_once 'DB.php';

if (isset($_POST['city'])) {
    $input = clean($_POST);
    
    $city = $input['city'];

    $sql = "SELECT * FROM `providers` WHERE city=?";
    $stmt = DB::query($sql, [
        $city
    ]);

    $providers = $stmt->fetchAll(PDO::FETCH_OBJ);

    if (count($providers) > 0) {
        echo json_encode($providers);
    } else {
        echo '{"failed": true }';
    }
}
