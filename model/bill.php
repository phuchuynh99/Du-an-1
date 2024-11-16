<?php
include_once "../model/connect.php";

function get_bill() {
    $db = new ConnectModel();
    $sql = "SELECT * FROM bill";
    return $db->get_all($sql);
}

function getOneBillById($id) {
    $db = new ConnectModel();
    $sql = "SELECT * FROM bill WHERE id = ?";
    return $db->get_one($sql, [$id]);
}

function updateBill($id, $status) {
    $db = new ConnectModel();
    $sql = "UPDATE bill SET status = ? WHERE id = ?";
    $db->update($sql, [$status, $id]);
}



