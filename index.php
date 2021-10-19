<?php include './reuse/header.php' ?>
<div class="wrapper">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Stt</th>
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
                $label = explode('.', $items[2])[0];
                $date = explode('.', $items[4])[0];
                $time = explode('.', $items[5])[0];
                $mark = explode('.', $items[6])[0];

                echo "<tr>";
                echo "<td>" . ($i - 1) . "</td>";
                echo "<td>chy01024</td>";
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