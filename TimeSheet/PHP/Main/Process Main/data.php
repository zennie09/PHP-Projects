<?php

require '../../dp.php';

if (isset($_POST['occ_id'])) {
    $db = new DBConnect();
    $conn = $db->connect();
    $sql = 'SELECT * FROM clients WHERE Client_Work_Title_id = '.$_POST['occ_id'];
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $clients = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($clients);
}

function loadOcc()
{
    $db = new DBConnect();
    $conn = $db->connect();

    $stmt = $conn->prepare('SELECT * FROM worktitle');
    $stmt->execute();
    $occupations = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $occupations;
}
