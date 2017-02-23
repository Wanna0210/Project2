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
                <h1 class="page-header">  <i class="material-icons" style="font-size:36px">person_add </i> เพิ่มมูลนักเรียน&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;    </td><td>  <p align = right><font size = "2"><a href="login.php"> log out</a></p></font >
      </td>     <small></small>
         </h1>
       </table> </div>



        <div class="container">

            <form name="form1" method="post" action="" OnReset="JavaScript:fncAlert();">  <!--ล้างข้อมูล-->

<table> <br>
                  <tr><td> <h4>รหัสนักเรียน :&nbsp; &nbsp;&nbsp;</h4></td><td colspan="2"><input type="text" name="id_med" value="" size="20" maxlength="10"/><br></td></tr>
<td><br></td>

<table>
                  <tr><td><h4>  คำนำหน้า : &nbsp;  &nbsp; &nbsp;&nbsp; </h4></td>
                    <td><div class="col-xs-13"><select class="form-control" name="prov2" id="prov2" data-width="fit">
<option value="เด็กชาย">เด็กชาย</option>
<option value="เด็กหญิง">เด็กหญิง</option>
<option value="นาย">นาย</option>
<option value="นางสาว">นางสาว</option>
</select></td><td><h4>&nbsp;  &nbsp;  ชื่อ : &nbsp;  <input type="text" name="firstname" value="" size="20" maxlength="15"/>&nbsp; นามสกุล : &nbsp;
  <input type="text" name="lastname" value="" size="20" maxlength="15"/></td></tr></table><table>
<td><br></td>
<tr>
        <td><h4>วันเกิด :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h4></td>
        <td colspan="2">
            <div class="form-group"><input type="date" id="birthDate" class="form-control"></div></td>
            <td><h4>&nbsp;  &nbsp;  หมู่เลือด :&nbsp;
        <form><label class="radio-inline"><input type="radio" name="optradio" id="A">A</label>
            <label class="radio-inline"><input type="radio" name="optradio" id="B">B</label>
            <label class="radio-inline"><input type="radio" name="optradio" id="AB">AB</label>
            <label class="radio-inline"><input type="radio" name="optradio" id="O">O</label>
            <label class="radio-inline"><input type="radio" name="optradio" id="NA">N/A</label></h4>
          </form>
            </td>
</tr>
<tr><td><td></td><td></td></td></tr>
</table>

<table>
  <td><br></td>
<tr>
    <td valign="top"><h4>โรคประจำตัว :&nbsp;&nbsp;</h4></td>
    <td><textarea name="text" rows="3" cols="40" wrap="physical"></textarea></td>
    <td valign="top"><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;โรคประจำตัว :&nbsp;&nbsp;</h4></td>
    <td><textarea name="text" rows="3" cols="40" wrap="physical"></textarea></td>
</tr>

</table>
        </div>

    </center>
<br><br>


                <script language="javascript"></script>
  <center>
                <button type="button" class="btn btn-primary" name="save" value="save">บันทึก</button> &nbsp;
                <button type="reset" class="btn btn-primary" name="reset" value="Reset">ล้าง</button> &nbsp;
                <a href="index.php"><button type="button" class="btn btn-primary" name="back" value="back">ย้อนกลับ</button></a>
                </form>
        </div>
        </center>
        <br><br>



    <!--  <style>
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
