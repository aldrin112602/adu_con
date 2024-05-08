<?php
require_once('config.php');
require_once('global.php');
$success_msg = null;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $post = validate_post_data($_POST);
    $fields = "id INT AUTO_INCREMENT PRIMARY KEY, ";
    $keys = [];
    foreach ($post as $key => $value) {
        if (is_array($post[$key])) {
            $fields .= "$key TEXT(5000), ";
        } else {
            $fields .= "$key TEXT(3000), ";
        }

        $keys[] = $key;
    }


    $sql = "CREATE TABLE IF NOT EXISTS form_records (" . $fields . "date TIMESTAMP DEFAULT CURRENT_TIMESTAMP)";

    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die("Error creating table: " . mysqli_error($conn));
        exit;
    }


    // insert sql
    $insertSql = "INSERT INTO form_records (" . implode(", ", $keys) . " ) VALUES (";
    $i =  0;
    $length = count($keys);
    foreach ($post as $key => $value) {
        if (is_array($post[$key])) {
            $insertSql .= "'" . trim(implode(", ", $post[$key])) . "'";
        } else {
            $insertSql .= "'" . trim($post[$key]) . "'";
        }
        $i++;
        if ($i < $length) {
            $insertSql .= ", ";
        }
    }

    $insertSql .= ")";

    $result = mysqli_query($conn, $insertSql);
    if (!$result) {
        die("Error inserting data: " . mysqli_error($conn));
        exit;
    }

    $success_msg = "Form submitted successfully";
    
}
