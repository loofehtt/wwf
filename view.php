<?php
include './reuse/header.php';
$filename = $_GET['file'];
$fp = fopen($filename, "r"); //mở file ở chế độ đọc
$contents = fread($fp, filesize($filename)); //toàn bộ nội dung của file

//? take info file
$list = explode("\n\n", $contents); //? cắt chuỗi khi có 2 lần enter liên tục trả về list
$items = explode("\n", $list[0]); //? cắt lấy từng dòng của list ở vị trí 0
$name = explode(':', $items[1])[1]; //? cắt lấy tên chưa sắp xếp
$full_name = explode(',', $name)[1] . explode(',', $name)[0]; //? sắp xếp lại tên
$mark = explode(':', $items[4])[1];

//? take info from filename
$info = explode('_', $filename);
$id = $info[3]; //? get id
$date = explode('-', $info[4]);
$date_fixed = $date[2] . '-' . $date[1] . '-' . $date[0];
$time = $info[5];
?>

<!-- display header -->

<div class="wrapper p-0 m-0 mt-4" style="font-family: serif;">
    <div class="row">
        <div class="ms-5">
            <p class="mb-0 ms-2">BỘ NN & PTNT</p>
        </div>
        <div class="fw-bold ms-1">
            <p>TRƯỜNG ĐẠI HỌC THUỶ LỢI</p>
        </div>
    </div>

    <div class="row text-center">
        <h4 class="fw-bold">KẾT QUẢ BÀI THI ỨNG DỤNG CÔNG NGHỆ THÔNG TIN</h4>
    </div>
    <div class="d-flex flex-row p-0">
        <div class="me-5">
            <p class="fw-bold">Số báo danh: <?php echo $id ?> </p>
        </div>
        <div class="me-5">
            <p class="fw-bold"> Họ và tên: <?php echo $full_name ?> </p>
        </div>
        <div class="me-5">
            <p class="fw-bold"> Điểm: <?php echo $mark ?></p>
        </div>
    </div>

    <div class="d-flex flex-row p-0">
        <div class="me-1">
            <p class=" fw-bold">Mã tệp tin bài làm:</p>
        </div>
        <div>
            <p><?php echo $filename ?></p>
        </div>
    </div>

    <div class="d-flex flex-row p-0">
        <div class="me-1">
            <p class=" fw-bold">Ngày thi:</p>
        </div>
        <div class="me-5">
            <p><?php echo $date_fixed ?></p>
        </div>
        <div class="ms-3">
            <p class=" fw-bold">Giờ nộp bài:</p>
        </div>
        <div class="ms-1">
            <p><?php echo $time ?></p>
        </div>
    </div>

    <div class="container">
        <div class="row align-items-start text-center">
            <div class="col border border-dark pb-5">
                <p>Thí sinh</p>
            </div>
            <div class="col border border-dark pb-5">
                <p>Giám thị 1</p>
            </div>
            <div class="col border border-dark pb-5">
                <p>Giám thị 2</p>
            </div>
        </div>

    </div>
</div>

<!--display table -->

<table class="table table-bordered border-dark mt-3">
    <thead>
        <tr class="text-center table-dark">
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

            $mark = explode(":", $items[1])[1]; //? cắt awarded points làm 2 và gán mark = giá trị sau :

            $response = explode(":", $items[3])[1]; //? cắt đáp án làm 2 và gán response = giá trị sau :

            echo "<tr>";
            echo '<td class="text-center">' . $i . '</td>';
            echo "<td>$items[0]</td>"; //? items[0] = dòng 1 trong 4 dòng tức câu hỏi
            echo '<td class="text-center">' . $mark . '</td>';
            echo "<td>$response</td>";
            echo "</tr>";
        }
        ?>

    </tbody>

    <?php include './reuse/footer.php'; ?>