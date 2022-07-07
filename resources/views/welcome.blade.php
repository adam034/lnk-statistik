<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/css/bootstrap-select.min.css">
</head>

<body>
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <center><b>Statistik Visitor</b></center>
                </div>
                <div class="panel-body">
                    <canvas id="canvas" width="100" height="400" aria-label="Hello ARIA World" role="img"></canvas>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/js/bootstrap-select.min.js"
            charset="utf-8"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js" charset="utf-8"></script>

        <script>
        const ctx = document.getElementById('canvas').getContext('2d');
        var url = 'http://localhost:3001/api/v1/statistik'
        let newData = []
        $(document).ready(() => {
            $.get(url, (response) => {
                response.data.map((stat) => {
                    newData.push({
                        x: stat.fullname,
                        y: stat.visited
                    })
                })
                console.log(newData)
                const myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        datasets: [{
                            label: 'Waktu visitor (menit)',
                            barThickness: 40,
                            maxBarThickness: 40,

                            data: newData
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                    }
                });
            })


        })
        </script>
    </div>
</body>

</html>