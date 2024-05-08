<?php

function validate_post_data($post_data): array
{
    global $conn;
    $sanitized_data = array();
    foreach ($post_data as $key => $value) {
        if (is_string($value)) {
            $sanitized_data[$key] = $conn->real_escape_string(trim($value));
        } else {
            $sanitized_data[$key] = $value;
        }
    }
    return $sanitized_data;
}


function getRows($condition, $tableName): array
{
    global $conn;
    $sql = !empty($condition) ? "SELECT * FROM $tableName WHERE $condition" : "SELECT * FROM $tableName";
    $result = $conn->query($sql);
    $rows = [];
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
    }
    return $rows;
}