<?php

$(document).ready(function(){
  $('#myTable').DataTable();
});
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Show MySQL DB Data</title>
<script type="text/javascript" src="/path/to/jquery-latest.js"></script>
<script type="text/javascript" src="/path/to/jquery.tablesorter.js"></script>
</head>

<body>


  <table id="myTable" class="tablesorter">
    <thead>
      <tr>
       <th>Last Name</th>
       <th>First Name</th>
       <th>Email</th>
       <th>Due</th>
       <th>Web Site</th>
     </tr>
    </thead>
    <tbody>
     <tr>
       <td>Smith</td>
       <td>John</td>
       <td>jsmith@gmail.com</td>
       <td>$50.00</td>
       <td>http://www.jsmith.com</td>
     </tr>
     <tr>
       <td>Bach</td>
       <td>Frank</td>
       <td>fbach@yahoo.com</td>
       <td>$50.00</td>
       <td>http://www.frank.com</td>
     </tr>
     <tr>
       <td>Doe</td>
       <td>Jason</td>
       <td>jdoe@hotmail.com</td>
       <td>$100.00</td>
       <td>http://www.jdoe.com</td>
     </tr>
     <tr>
       <td>Conway</td>
       <td>Tim</td>
       <td>tconway@earthlink.net</td>
       <td>$50.00</td>
       <td>http://www.timconway.com</td>
     </tr>
     </tbody>
  </table>
</body>
</html>