<?= $this->extend('layouts/main'); ?>


<?= $this->section('styles'); ?>

<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>

<!-- PAGE-HEADER -->
<div class="page-header">
    <div>
        <h1 class="page-title">Dashboard</h1>
    </div>
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('/all-client') ?>">All Clients</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('/all-client') ?>">Clients</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Dashboard</a></li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

<!-- ROW-1 OPEN -->
<div class="row">
    <div class="col-lg-8 col-md-12">
        <div class="card">
            <div class="card-header border-bottom">
                <h3 class="card-title">Overall Progress</h3>
            </div>
            <div class="card-body">
                <div id="client_chart" class="chartsh"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <!-- <div class="card-header border-bottom">
                <h3 class="card-title">Combination of Line & Bar Chart</h3>
            </div> -->
            <div class="card-body">
                <p>Filter by -</p>
                <form action="">
                    <div class="form-group">
                        <label for="" class="d-block"><b>Gender:</b></label>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" id="inlineCheckbox1" value="male" class="form-check-input">
                            <label for="inlineCheckbox1" class="form-check-label">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" id="inlineCheckbox2" value="female" class="form-check-input">
                            <label for="inlineCheckbox2" class="form-check-label">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" id="inlineCheckbox3" value="other" class="form-check-input">
                            <label for="inlineCheckbox3" class="form-check-label">Other</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="d-block"><b>Entity type:</b></label>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" id="employeeCheckbox1" value="employee" class="form-check-input">
                            <label for="employeeCheckbox1" class="form-check-label">Employee</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" id="employeeCheckbox2" value="tenant" class="form-check-input">
                            <label for="employeeCheckbox2" class="form-check-label">Tenant</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" id="employeeCheckbox3" value="business" class="form-check-input">
                            <label for="employeeCheckbox3" class="form-check-label">Business Associate</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="d-block"><b>Current profile status:</b></label>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" id="draftCheckbox" value="draft" class="form-check-input">
                            <label for="draftCheckbox" class="form-check-label">Draft</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" id="activeCheckbox" value="active" class="form-check-input">
                            <label for="activeCheckbox" class="form-check-label">Active</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" id="inactiveCheckbox" value="inactive" class="form-check-input">
                            <label for="inactiveCheckbox" class="form-check-label">Inactive(Terminated)</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="d-block"><b>Employment type:</b></label>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" id="fulltimeCheckbox" value="fulltime" class="form-check-input">
                            <label for="fulltimeCheckbox" class="form-check-label">Full time</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" id="parttimeCheckbox" value="parttime" class="form-check-input">
                            <label for="parttimeCheckbox" class="form-check-label">Part time</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" id="contractorCheckbox" value="contractor" class="form-check-input">
                            <label for="contractorCheckbox" class="form-check-label">Contractor</label>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- ROW-1 CLOSED -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
<script>
    // Use the Fetch API to get data from the CodeIgniter controller
    fetch('<?= base_url('DashboardController/fetchData'); ?>')
        .then(response => response.json())
        .then(data => {
            // Handle the retrieved data
            console.log('Data from CodeIgniter:', data);

            // Use the data as needed, e.g., update the DOM
            document.getElementById('output').innerText = `Name: ${data.name}, Age: ${data.age}`;
        })
        .catch(error => console.error('Error fetching data:', error));
</script>
<script>
    $(function(e) {
        /*----- Line Chart-01 ----*/
        var chart = document.getElementById("client_chart");
        // var chart  = echarts.init(document.querySelector('#echart1'), null);

        var chartdata = [{
                name: "green cases",
                type: "bar",
                data: [20, 15, 9, 18, 10, 15],
            },
            {
                name: "yellow cases",
                type: "bar",
                // smooth: true,
                data: [8, 5, 25, 10, 10],
            },
            {
                name: "red cases",
                type: "bar",
                data: [10, 14, 10, 15, 9, 25, 30],
            },
        ];

        var barChart = echarts.init(chart);
        var option = {
            grid: {
                top: "6",
                right: "0",
                bottom: "17",
                left: "25",
            },
            xAxis: {
                data: ["2024", "2025", "2026", "2027"],
                axisLine: {
                    lineStyle: {
                        color: "rgba(119, 119, 142, 0.2)",
                    },
                },
                axisLabel: {
                    fontSize: 10,
                    color: "#9ba6b5",
                },
            },
            tooltip: {
                show: true,
                showContent: true,
                alwaysShowContent: true,
                triggerOn: "mousemove",
                trigger: "axis",
                axisPointer: {
                    label: {
                        show: false,
                    },
                },
            },
            yAxis: {
                splitLine: {
                    lineStyle: {
                        color: "rgba(119, 119, 142, 0.2)",
                    },
                },
                axisLine: {
                    lineStyle: {
                        color: "rgba(119, 119, 142, 0.2)",
                    },
                },
                axisLabel: {
                    fontSize: 10,
                    color: "#9ba6b5",
                },
            },
            series: chartdata,
            color: ["#b7dd88", "#f0db97", "#ffb0c1"],
        };
        barChart.setOption(option);
        window.addEventListener("resize", function() {
            barChart.resize();
        });
    })
</script>
<!-- ECHART JS -->
<script src="<?php echo base_url('assets/plugins/echarts/echarts.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/echarts.js'); ?>"></script>

<!-- COLOR THEME JS -->
<script src="<?php echo base_url('assets/js/themeColors.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>