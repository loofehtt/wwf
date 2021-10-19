<?php
include './reuse/header.php';
$filename = $_GET['file'];
$fp = fopen($filename, "r"); //mở file ở chế độ đọc
$contents = fread($fp, filesize($filename));

//! demo
// $list = explode("\n\n", $contents); //? cắt chuỗi khi có 2 lần enter liên tục trả về list
// $items = explode("\n", $list[1]); //? cắt lấy từng dòng của list ở vị trí 1 
// echo $items[1] . "<br>"; //? lấy ra item ở vị trí số 1 tức là dòng award points
// echo $items[3] . "<br>";

// $mark = explode(":", $items[1]); //? cắt award points phân cách bằng :
// $response = explode(":", $items[3]);
// echo $mark[1] . "<br>"; //? lấy ra chuỗi sau :
// echo $response[1] . "<br>"; //? lấy ra chuỗi sau :
?>

<table class="table table-bordered ">
    <thead>
        <tr class="text-center table-primary">
            <th class="col" scope="col">Stt</th>
            <th class="col-6" scope="col">Nội dung câu hỏi</th>
            <th class="col-1" scope="col">Điểm đạt</th>
            <th class="col-6" scope="col">Đáp án đã chọn</th>
        </tr>
    </thead>

    <tbody>
        <?php

        $list = explode("\n\n", $contents);
        for ($i = 1; $i < count($list) - 1; $i++) {
            $items = explode("\n", $list[$i]); //? cắt từng dòng của tất cả các list

            $mark = explode(":", $items[1]); //? cắt awarded points làm 2

            $response = explode(":", $items[3]); //? cắt đáp án làm 2

            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>$items[0]</td>";
            echo "<td>$mark[1]</td>";
            echo "<td>$response[1]</td>";
            echo "</tr>";
        }
        ?>

    </tbody>

    <?php include './reuse/header.php'; ?>