<?php

session_start();

function viewData(array $data) {
    return $data ?? [];
}

$resp = $_SESSION['data'] ?? [];

$newData = viewData($resp);