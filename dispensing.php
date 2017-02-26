<?php
session_start();

if($_SESSION['session_id'] == '') {
	echo "<meta http-equiv='refresh' content='1;URL=log-in.php'>";
}

elseif ($_SESSION['status'] != 1) {
		echo "<meta http-equiv='refresh' content='1;URL=log-in.php'>";
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


<!-- table -->
<link href="css/dataTables.bootstrap.min.css" rel="stylesheet">


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

<br>
    <div class="row">

      <table width="100%">   <td> <h1 class="page-header">  <i class="fa fa-user-md" style="font-size:36px"></i> ข้อมูลจ่ายยา&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;    </td><td>  <p align = right><font size = "2"><a href="logout.php"> log out</a></p></font >
      </td>     <small></small>
         </h1>
  </table>
    </div>

    <div class="container">
      <table class="table table-striped table-bordered table table-hover" id="mydata">
        <thead>
            <tr>
              <th>รหัสยา</th>
                <th>ชื่อยา/อุปกรณ์ปฐมพยาบาล</th>
                <th>วันที่</th>
                <th>จำนวนที่ใช้ไป</th>
                <th>หน่วย</th>
                <th>จำนวนคงเหลือ</th>
                <th>หน่วย</th>

            </tr>
        </thead>
        <tfoot>

        </tfoot>
        <tbody><center>
          <tr>
            <td>C02-11</td>
            <td>Hydroxycine</td>
            <td>5-10-59</td>
            <td>2</td>
            <td>เม็ด</td>
            <td>30</td>
            <td>เม็ด</td>


          </tr>
          <tr>
            <td>C03-11</td>
            <td>Paracetamon</td>
            <td>8-07-59</td>
            <td>2</td>
            <td>เม็ด</td>
            <td>80</td>
            <td>เม็ด</td>

          </tr><tr>
            <td>C02-11</td>
            <td>Hydroxycine</td>
            <td>8-07-59</td>
            <td>2</td>
            <td>เม็ด</td>
            <td>100</td>
            <td>เม็ด</td>

          </tr>
        </tbody></center>
</table>





            <br>
            <center>

                 <a href="index.php"><button type="button" class="btn btn-primary" name="back" value="back">ย้อนกลับ</button></a>

        </div>
      </center>
<br><br>




        <!-- เส้นtable    <  <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
            text-align: left;
        }
        </style> -->





<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--table-->
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<script>
$('#mydata').dataTable();
</script>
</body>
</html>
