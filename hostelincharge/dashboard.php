<html>
    <head>
        <title>GPMS - Gate Pass Management System</title>
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <link href="../style1.css" rel="stylesheet">
        <?php
           include('../connect.php');
           $sql=mysqli_query($con,"SELECT * FROM student");
        ?>
        <style>
            .chart{
                display:flex;
                width:100%;
            }
            .chart .charts{
                background-color:white;
                margin:2% 3%;
                padding:0px 20px 20px 20px;
            }
            h5{
                margin:30px 30px 0px 30px;
            }
            h2{
                margin:30px;
                color:#000;
                text-align:center;
            }
        </style>
    </head>
    <body>
        <section id="menu">
            <div class="head">
                <img src="../images/favicon.png">
                <h1>GPMS</h1>
            </div>
            
            <div class="pages">
                <li><i class='bx bxs-dashboard'></i><a href="dashboard.php">Dashboard</a></li>
                <li><i class='bx bxs-face'></i><a href="requests.php">Requests</a></li>
                <li><i class='bx bxs-face'></i><a href="studendetails.php">Add student</a></li>
                <li><i class='bx bx-git-pull-request'></i><a href="studentlist.php">Student Details</a></li>
                <li><i class='bx bxs-pie-chart'></i><a href="report.php">Reports</a></li>
                <li><i class='bx bx-brightness'></i><a href="../student/logout.php">Log Out</a></li>
            </div>
        </section>
        <section id="interface">
            <div class="navigation">
                <div class="n1">
                    <div class="search">
                        <i class='bx bx-search-alt-2'></i>
                        <input type="text" placeholder="search">
                    </div>
                </div>
                <div class="profile">
                    <i class='bx bx-bell'></i>
                    <img src="../images/profile.jpg">
                </div>
            </div>
            <h3 class="i-name">
                Dashboard
            </h3>
            <div class="values">
            <div class="val-box">
                    <i class='bx bx-git-pull-request'></i>
                    <div>
                        <h3><a href="studendetails.php">Add Student</a></h3>
                    </div>
                </div>
                <div class="val-box">
                    <i class='bx bxs-face'></i></i>
                    <div>
                        <h3><a href="requests.php">Gate Pass Requests</a></h3>
                    </div>
                </div>
                <div class="val-box">
                    <i class='bx bx-brightness'></i>
                    <div>
                        <h3><a href="report.php">Reports</a></h3>
                    </div>
                </div>
                <div class="val-box">
                    <i class='bx bxs-group'></i>
                    <div>
                        <h3><a href="../student/logout.php">Log Out</a></h3>
                    </div>
                </div>
            </div>
            <div>
            <h5></h5>
            <div class="chart">
                <div class="charts">
                  <div class="c-2">
                    <div class="chart-2">
                       <h2 class="card-title">Student Availability status</h2>
                       <canvas id="doughnutChart" style="height:250px"></canvas>
                    </div>
                  </div>
                </div>
                <div class="charts">
                   <div class="c-2">
                     <div class="chart-2">
                        <h2 class="card-title">Total Number Of Students</h2>
                        <canvas id="barChart" style="height:250px"></canvas>
                     </div>
                   </div>
                </div>
            </div>
        </section>
        <script src="../js1/vendor.bundle.base.js"></script>
        <script src="../js1/Chart.min.js"></script>
        <!-- End plugin js for this page -->
        <script src="../js1/chart.js"></script>
    </body>
</html>