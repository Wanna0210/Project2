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

    <!-- datepicker-->


    <!-- selected  -->


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
                <h1 class="page-header"> <i class="material-icons" style="font-size:36px"> people</i> ข้อมูลนักเรียนทั้งหมด&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;    </td><td>  <p align = right><font size = "2"><a href="login.php"> log out</a></p></font >
      </td>     <small></small>
         </h1>
       </table> </div>



        <div class="container">
<center>
  <form name="frmSearch" method="get" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">

  <table >

  <tr>

  <th>เงื่อนไขการค้นหา :

  <td><div class="col-xs-12"><select class="form-control" name="prov2" id="prov2" data-width="fit">
<option value="all">ทั้งหมด</option>
<option value="m1">มัธยมศึกษาปีที่ 1</option>
<option value="m2">มัธยมศึกษาปีที่ 2</option><option value="m3">มัธยมศึกษาปีที่ 3</option><option value="m4">มัธยมศึกษาปีที่ 4</option>
</select></td><td> <input name="txtKeyword" type="text" id="txtKeyword" value="">   <button type="search" class="btn btn-primary" name="search" value="Search">ค้นหา</button></td>

</th>

  </tr>

  </table>

  </form>









</center>
        </div>
<br><br>




        </div>




  <!-- <style>
            table,
            th,
            td {
                border: 1px solid black;
                border-collapse: collapse;
            }

            th,
            td {
                padding: 5px;
                text-align: left;
            }
        </style> -->





</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




</html>
