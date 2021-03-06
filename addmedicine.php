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
                <h1 class="page-header"><i class="fa fa-plus-square custom" style="font-size:36px"></i> เพิ่มประเภทยา&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;    </td><td>  <p align = right><font size = "2"><a href="login.php"> log out</a></p></font >
      </td>     <small></small>
         </h1>
        </table </div>

        <div class="container">
            <form name="form1" method="post" action="" OnReset="JavaScript:fncAlert();"><!--ล้างข้อมูล-->
			<form name="addtypemed" method="post" action="addmedsave.php">
                
                <center>
						<h4>รหัสประเภทยา <input type="text" id="id_med" name="id_med" value="" size="20" maxlength="30"/>
						&nbsp; &nbsp;&nbsp;&nbsp;
						ชื่อประเภทยา <input type="text" id="typename_med" name="typename_med" value="" size="20" maxlength="30"/>    &nbsp; &nbsp;&nbsp;&nbsp;
						<button type="button" class="btn btn-primary" name="save" value="Save">บันทึก</button> 
						</h4>
						<div class="col-md-12 portfolio-item"></div>

                </center>
                
        </div>


        <div class="row">
            <h1 class="page-header"><i class="material-icons" style="font-size:36px">add_circle</i> เพิ่มข้อมูลยา</h1>
            <div class="container">
                <center>
                    <div class="col-md-6" style=";">

                        <h:body>
                            <h:form>
                                <table width="80%">
                                    <tr>
                                        <td valign="top">
                                            <h4>ประเภทยา :</td>
                          <td colspan="2"><select>
                            <option value="volvo">เลือกประเภทยา</option>
                            <option value="กรุงเทพฯ">C1 ยาสามัญ</option>
<option value="volvo">C2 ยาภายนอก</option>
<option value="volvo">C3 อุปกรณ์ปฐมพยาบาล</option>
</select></h4></td>


                                    </tr>


                                    <tr>
                                        <td valign="top">
                                            <h4>  รหัสยา : </td>
                          <td colspan="2"><input type="text" name="id_med" value="" size="1" maxlength="10" disabled="disabled" /> - <input type="text" name="name_med" value="" size="20" maxlength="30"/> </h4></td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <h4>ชื่อยา :</td>
                            <td colspan="2"><input type="text" name="name_med" value="" size="28" maxlength="30"/></h4></td>

                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <h4>วันหมดอายุ :&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</h4></td>
                                        <td colspan="2">
                                            <div class="form-group"><input type="date" id="birthDate" class="form-control"></div>
                                        </td>
                                    </tr>


                    </div>
                    </table>






                    <table width="80%">
                        <tr>
                            <td valign="top">
                                <h4>ขนาดบรรจุภัณฑ์ :</td>
                          <td colspan="1"><input type="text" name="name_med" value="" size="5" maxlength="4"/></h4></td>
                            <td><select class="form-control" name="prov2" id="prov2" data-width="fit">
                                  <option value="หน่วย">หน่วย</option>
                                  <option value="กล่อง">กล่อง</option>
                                  <option value="กระปุก">กระปุก</option>
                                  <option value="ขวด">ขวด</option>
                                  <option value="แผง">แผง</option>
                                  <option value="สมุทรปราการ">แผ่น</option>
                                </select></td>
                            <td>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        </tr>




                        <tr>
                            <td ALIGN=left valign="top">
                                <h4>บรรจุ :</td>
                                      <td colspan="1"><input type="text" name="name_med" value="" size="5" maxlength="4"/></h4> </td>
                            <td>
                                <select class="form-control" name="prov2" id="prov2">
                                  <option value="">หน่วย</option>
                                  <option value="กล่อง">กล่อง</option>
                                  <option value="กระปุก">กระปุก</option>
                                  <option value="ขวด">ขวด</option>
                                  <option value="แผง">แผง</option>
                                  <option value="สมุทรปราการ">แผ่น</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td valign="top"><h4>คงเหลือ :</td>
								<td><input type="text" name="name_med" value="" size="5" maxlength="4"/></h4></td>
								<td>
										<select class="form-control" id="sel1">
													<option value="">หน่วย</option>
													<option value="กล่อง">กล่อง</option>
													<option value="กระปุก">กระปุก</option>
													<option value="ขวด">ขวด</option>
													<option value="แผง">แผง</option>
													<option value="สมุทรปราการ">แผ่น</option>
                                      	</select>


								</td>
                        </tr>


                    </table>
                    </h:form>
                    </h:body>
            </div>


            <div class="col-md-6" style=";">
                <h:body>
                    <h:form>
                        <table>
                            <tr>
                                <td valign="top">วิธีใช้ :</td>
                                <td><textarea name="text" rows="6" cols="40" wrap="physical"></textarea></td>
                            </tr>
                            <tr>
                                <td valign="top">สรรพคุณ :</td>
                                <td><textarea name="text" rows="5" cols="30" wrap="physical"></textarea></td>
                            </tr>
                            <tr>
                                <td valign="top">คำเตือน :</td>
                                <td><textarea name="text" rows="2" cols="30" wrap="physical"></textarea></td>
                            </tr>
                            <tr>
                                <td valign="top">หมายเหตุ :</td>
                                <td><textarea name="text" rows="2" cols="30" wrap="physical"></textarea></td>
                            </tr>
                        </table>
                    </h:form>
                    <br><br>
                </h:body>
                </center>
            </div>
            <br>
            <center>
			
                <script language="javascript">
                </script>

                <button type="button" class="btn btn-primary" name="save" value="save">บันทึก</button> &nbsp;
                <button type="reset" class="btn btn-primary" name="reset" value="Reset">ล้าง</button> &nbsp;
                <a href="index.php"><button type="button" class="btn btn-primary" name="back" value="back">ย้อนกลับ</button></a>
                </form>
        </div>
			</center>
        <br><br>



<!--        <style>
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



 ?>
</html>
