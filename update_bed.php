<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bed_id = $_POST["bed_id"];
    $status = $_POST["status"];

    $sql = "UPDATE beds SET status = ? WHERE bed_number = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $status, $bed_id);

    if ($stmt->execute()) {
        echo json_encode(["message" => "อัปเดตสำเร็จ"]);
    } else {
        echo json_encode(["error" => "เกิดข้อผิดพลาด"]);
    }

    $stmt->close();
    $conn->close();
}
?>
