<?php
session_start();
if ($_SESSION['session_id'] == '') {
   echo "<meta http-equiv='refresh' content='1;URL=log-in.php'>";
} elseif ($_SESSION['status'] !=1) {
  echo "<meta http-equiv='refresh' content='1;URL=log-in.php'>";
} else {

}
?>


<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">



    <title>Nurse Room Management Information System</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/col.css" rel="stylesheet">

    <!-- Icon  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=”col-lg-6”>
                <h1> โรงเรียนพัฒนาศาสตร์มูลนิธิ  </h1></div>

            <!-- Collect the nav links, forms, and other content for toggling -->

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


    <div class="row">
        <table width="100%">
            <td>
                <h1 class="page-header">  <i class="material-icons" style="font-size:48px">person_outline </i> Admin&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;    </td><td>  <p align = right><font size = "2"><a href="log-in.php"> log out</a></p></font >
      </td>     <small></small>
         </h1>
       </table> </div>



        <!-- Page Content -->
        <div class="container">

            <!-- Page Header -->

            <!-- /.row -->

            <!-- Projects Row -->
            <div class="row">
                <div class="row">
                    <div class="col-*-*"></div>
                </div>
                <div class="col-md-4 portfolio-item">
                    <h4 class=>ข้อมูลนักเรียน</h4>
                    <h5>
                  <i class="material-icons">person_add</i>&nbsp;<a href="addstudents.php">เพิ่มข้อมูลนักเรียน</a>
                </h5>
                    <h5>
                    <i class="material-icons">people</i>&nbsp;<a href="studantsdata.php">ข้อมูลนักเรียนทั้งหมด</a>
                </h5>
                    <h5>
                    <i class="material-icons">face</i>&nbsp;<a href="#">ข้อมูลการรักษาทั้งหมด</a>
                </h5>

                </div>
                <div class="col-md-4 portfolio-item">
                    <h4 class=>ข้อมูลยา</h4>
                    <h5>
                  <i class="fa fa-plus-square" style="font-size:24px"></i>&nbsp;&nbsp;<a href="addmedicine.php">เพิ่มข้อมูลยา</a>
                </h5>
                    <h5>
                <i class="fa fa-user-md" style="font-size:24px"></i>&nbsp;&nbsp;<a href="#">ข้อมูลจ่ายยา</a>
              </h5>
                    <h5>
                  <i class="fa fa-medkit"style="font-size:24px"></i>&nbsp;<a href="alldrug.php">ข้อมูลยาทั้งหมด</a>
                </h5>

                </div>
                <div class="col-md-4 portfolio-item">
                    <h4 class=>รายงาน</h4>
                    <h5>
                  <i class="fa fa-file-text" style="font-size:24px"></i>&nbsp;<a href="reportusingroom.php">รายงานข้อมูลนักเรียนที่ใช้บริการห้องพยาบาล</a>
                </h5>
                    <h5>
                    <i class="fa fa-file-text-o" style="font-size:24px"></i>&nbsp;<a href="reportsickness.php">รายงานข้อมูลตามอาการ</a>
                </h5>
                    <h5>
                    <i class="fa fa-file-o" style="font-size:24px"></i>&nbsp;<a href="reportdrug.php">รายงานข้อมูลยาทั้งหมด</a>
                </h5>
                    <h5>
                <i class="fa fa-ambulance" style="font-size:24px"></i>&nbsp;<a href="reporthospital.php">รายงานส่งโรงพยาบาล</a>
                </h5>

                </div>
            </div>
            <!-- /.row -->


            <hr>

            <!-- Footer -->
      <!--   โค้ด footer   <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <h1><p> ไอบูมโง่ Hi hihi</p></h1>
                        <h1><p>ต้องใช้ควายกี่ฝูงถึงจะโง่เท่าบูม หุหุ</p></h1>
                        <h1><p>อย่าถามเยอะนะ หนูไม่รู้จีๆ</p></h1>
                    </div>
                </div>
                <!-- /.row -->
            </footer>

        </div>
        <!-- /.container -->

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

</body>

</html>
