<?php include './reuse/header.php' ?>
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
        <h4 class="fw-bold">DANH SÁCH TỔNG HỢP BÀI THI CỦA THÍ SINH</h4>
    </div>
</div>

<div class="container">
    <table class="table table-bordered border-dark mt-3">
        <thead>
            <tr class="text-center table-dark">
                <th scope="col">Số thứ tự</th>
                <th scope="col">Số báo danh</th>
                <th scope="col">Mã bài thi</th>
                <th scope="col">Ngày thi</th>
                <th scope="col">Giờ bài nộp</th>
                <th scope="col">Điểm thi</th>
                <th scope="col">Tệp kết quả</th>
                <th scope="col">Kí tên</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $file = scandir('./result');
            for ($i = 2; $i < count($file); $i++) {
                $items = explode('_', $file[$i]);
                $label = $items[2];
                $id = $items[3];
                $date = $items[4];
                $time = $items[5];
                $mark = explode('.', $items[6])[0];

                echo '<tr class="text-center">';
                echo "<td>" . ($i - 1) . "</td>";
                echo "<td>$id</td>";
                echo "<td>$label</td>";
                echo "<td>$date</td>";
                echo "<td>$time</td>";
                echo "<td>$mark</td>";
                echo '<td><a href="view.php?file=result/' . $file[$i] . '">' . $file[$i] . '</a></td>';
                echo "<td></td>";
                echo "</tr>";
            }
            ?>

        </tbody>
    </table>
</div>


<?php include './reuse/footer.php' ?>