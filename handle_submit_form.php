<?php
require_once('config.php');
require_once('global.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $post = validate_post_data($_POST);
    $fields = "id INT AUTO_INCREMENT PRIMARY KEY, ";
    foreach($post as $key => $value) {
        if(is_array($post[$key])) {
            $fields.= "$key TEXT(5000), ";
        } else {
            $fields.= "$key TEXT(3000), ";
        }
    }


    $sql = "CREATE TABLE IF NOT EXISTS form_records (" . $fields . "date TIMESTAMP DEFAULT CURRENT_TIMESTAMP)";

    $result = mysqli_query($conn, $sql);
    if(!$result) {
        die("Error creating table: ". mysqli_error($conn));
    }
}