<?php
$filename = $_GET['file'];

$fp = fopen($filename, "r"); //mở file ở chế độ đọc
$contents = fread($fp, filesize($filename));
$items = explode("\n\n", $contents);
$item = explode("\n", $items[9]);
$mark = explode(":", $item[1]);
echo $mark[1];
// echo $items[1]; //in nội dung của file ra màn hình
?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Stt</th>
            <th scope="col">Nội dung câu hỏi</th>
            <th scope="col">Điểm đạt</th>
            <th scope="col">Đáp án đã chọn</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $items = explode("\n\n", $contents);
        for ($i = 1; $i <= count($items); $i++) {
            $item = explode("\n", $items[$i]);
            $mark = explode(":", $item[$i]);

            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>$item[0]</td>";
            echo "<td>$mark[1]</td>";
            echo "<td>$item[3]</td>";
            echo "</tr>";
        }
        ?>

    </tbody>