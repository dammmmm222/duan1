
<html>
<head>
 
</head>

<body>
    <div id="myChart" style="width: 900px; height: 500px;"></div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Danh mục', 'Số lượng sản phẩm'],
            <?php
            $tongdm = count($listthongke);
            $i = 1;
            foreach ($listthongke as $thongke) {
                extract($thongke);
                if ($i == $tongdm) {
                    $dau = "";
                } else {
                    $dau = ",";
                }
                echo "['" . $thongke['tendm'] . "'," . $thongke['countsp'] . "]" . $dau;
                $i++;
            }
            ?>
        ]);

        var options = {
            title: 'Biểu đồ thống kê lượt mua sản phẩm theo danh mục '
        };
        var chart = new google.visualization.PieChart(document.getElementById('myChart'));
        chart.draw(data, options);
    }
</script>
</body>

</html>