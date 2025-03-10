<?php
$data = json_decode(file_get_contents("php://input"), true);

if (isset($data['id']) && isset($data['status'])) {
    $beds = json_decode(file_get_contents("beds.json"), true);
    
    foreach ($beds as &$bed) {
        if ($bed['id'] == $data['id']) {
            $bed['status'] = $data['status'];
            break;
        }
    }

    file_put_contents("beds.json", json_encode($beds, JSON_PRETTY_PRINT));

    echo json_encode(["message" => "อัปเดตสำเร็จ"]);
} else {
    echo json_encode(["message" => "ข้อมูลไม่ถูกต้อง"]);
}
?>
