<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<style type="text/css">
	table { 
  width: 100%; 
  border-collapse: collapse; 
}
/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #eee; 
}
th { 
  background: #333; 
  color: white; 
  font-weight: bold; 
}
td th{ 
  padding: 6px; 
  border: 1px solid #ccc; 
  text-align: left; 
}


</style>

 <body>
<img src="logo.jpg" width="500"><br><br>
<table>
	<thead>
		<tr>
			<th style="width: 15%;"><center> sr.no.</center></th>
			<th style="width: 15%;"><center>Exam ID</center></th>
			<th style="width: 15%;"><center>Student ID</center></th>
			<th style="width: 25%;"><center>Student Name</center></th>
			<th style="width: 20%;"><center>Marks</center></th>
			<th style="width: 10%;"><center>Department ID</center></th><br>
			</tr>
	</thead>
	<tbody>
		<?php $i=1 ?>
		@foreach($res_pdf as $key =>$res)
		<tr>
			
			<td><center>{{$i++}}</center></td>
			<td><center>{{$res -> exam_id}}</center></td>
			<td><center>{{$res -> stu_id}}</center></td>
			<td><center>{{$res -> stu_name}}</center></td>
			<td><center>{{$res -> stu_marks}}</center></td>
			<td><center>{{$res -> dept_id}}</center></td>
			@endforeach
		</tr>
		
	</tbody>
</table>




</body>
</html>