@extends('layouts.admin_dashboard')

@section('admin_content')
    <style>
        #pie_chart {
            width: 200px;
            height: 200px;
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <div class="row">
        <div class="col-lg-6">
            <div class="pie-chart">
                <div class="Chart card">
                    <div class="card-body">
                        <h4 class="header-title d-flex justify-content-center" style="text-align: center">Pie Chart (Count department wise payment)</h4>
                        <div class="d-flex justify-content-center">
                            <div class="mt-4 chartjs-chart" style="height: 420px; width:420px; position:relative">
                                <canvas id="pie_chart"
                                    style="display: block; box-sizing: border-box; height: 420px; width: 420px;"
                                    width="420" height="420"></canvas>
                            </div>
                        </div>
                    </div> <!-- end card-body-->
                </div>
                </canvas>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="donut-chart">
                <div class="Chart card">
                    <div class="card-body">
                        <h4 class="header-title d-flex justify-content-center" style="text-align: center">Donut Chart (Count department wise Registration Form)</h4>
                        <div class="d-flex justify-content-center">
                            <div class="mt-4 chartjs-chart" style="height: 420px; width:420px; position:relative">
                                <canvas id="donut_chart"
                                    style="display: block; box-sizing: border-box; height: 420px; width: 420px;"
                                    width="420" height="420"></canvas>
                            </div>
                        </div>
                    </div> <!-- end card-body-->
                </div>
                </canvas>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="bar-chart">
                <div class="Chart card">
                    <div class="card-body">
                        <h4 class="header-title d-flex justify-content-center" style="text-align: center">Bar Chart (Applied form according to month)</h4>
                        <div class="d-flex justify-content-center">
                            <div class="mt-4 chartjs-chart" style="height: 420px; width:420px; position:relative">
                                <canvas id="bar_chart"
                                    style="display: block; box-sizing: border-box; height: 420px; width: 420px;"
                                    width="420" height="420"></canvas>
                            </div>
                        </div>
                    </div> <!-- end card-body-->
                </div>
                </canvas>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="bar-chart">
                <div class="Chart card">
                    <div class="card-body">
                        <h4 class="header-title d-flex justify-content-center">Line Chart</h4>
                        <div class="d-flex justify-content-center">
                            <div class="mt-4 chartjs-chart" style="height: 420px; width:420px; position:relative">
                                <canvas id="line-chart"
                                    style="display: block; box-sizing: border-box; height: 420px; width: 420px;"
                                    width="420" height="420"></canvas>
                            </div>
                        </div>
                    </div> <!-- end card-body-->
                </div>
                </canvas>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"
        integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <script>
        var xValues = ["CSE", "EEE", "BBA"];
        var yValues = [{{$CSE_payment_count}}, {{$EEE_payment_count}}, {{$BBA_payment_count}}];
        var barColors = [
            "#b91d47",
            "#00aba9",
            "#2b5797",
            "#e8c3b9",
            "#1e7145"
        ];

        new Chart("pie_chart", {
            type: "pie",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                title: {
                    display: true,
                    text: "World Wide Wine Production 2018"
                }
            }
        });
    </script>


<script>
    var xValues = ["CSE", "EEE", "BBA"];
    var yValues = [{{$CSE_count}}, {{$EEE_count}}, {{$BBA_count}},];
    var barColors = [
      "#b91d47",
      "#00aba9",
      "#2b5797",
      "#e8c3b9",
      "#1e7145"
    ];

    new Chart("donut_chart", {
      type: "doughnut",
      data: {
        labels: xValues,
        datasets: [{
          backgroundColor: barColors,
          data: yValues
        }]
      },
      options: {
        title: {
          display: true,
          text: "World Wide Wine Production 2018"
        }
      }
    });
    </script>



    <script>
        var xValues = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

        var yValues = [
            {{ $month_count[0] }}, {{ $month_count[1] }}, {{ $month_count[2] }}, {{ $month_count[3] }}, {{ $month_count[4] }}, {{ $month_count[5] }}, {{ $month_count[6] }}, {{ $month_count[7] }}, {{ $month_count[8] }}, {{ $month_count[9] }}, {{ $month_count[10] }}, {{ $month_count[11] }}];
        var barColors = ["red", "green","blue","orange","brown"];

        new Chart("bar_chart", {
          type: "bar",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            legend: {display: false},
            title: {
              display: true,
              text: "World Wine Production 2018"
            }
          }
        });
        </script>

    <script>
        $.ajax({
            type: "GET",
            url: "/get/line",
            success: function(data) {
                var barkeys = Object.keys(data);
                // console.log(barkeys);
                var lineArray = [];
                console.log(data);
                for (var i = 1; i <= 12; i++) {
                    if (i < 10) {
                        var check = '0' + i;
                        check = check.toString();
                    } else {
                        var check = i;
                        check = check.toString();
                    }

                    if (data[check] !== undefined) {
                        lineArray.push(data[check]);
                    } else {
                        lineArray.push(0);
                    }
                }

                const ctx = document.getElementById('line-chart');
                const myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct',
                            'Nov', 'Dec'
                        ],
                        datasets: [{
                            label: 'Total Number of Registered User',
                            data: lineArray,
                            backgroundColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                    }
                });
            }
        });
    </script>
@endsection
