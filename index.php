<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

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
                <a href=""></a>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>