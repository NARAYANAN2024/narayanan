<!DOCTYPE html>
<html>
<head>
<style>
.dbresult,.dbresult td,.dbresult th{
	boder:1px solid black;
	boder-collapse: collapse;
	padding:8px;
}
.dbresult {
	width:800px;
	margin:auto;
}
.dbresult tr:nth-child(odd) {
	background-color:#b2d0d6;
}
.dbresult tr:nth-child(even) {
	background-color:lightgreen;
}</style>
</head>
<body>
</body>
</html>


<?php
$link =mysqli_connect('localhost','root','','teacher');
if (!$link) {
	die('connection error'.mysqli_conect_error());
}
$query="SELECT * FROM marksheet";
$result=mysqli_query($link,$query);
$num_rows=mysqli_num_rows($result);
if ($num_rows>0) {
	echo '<table class = "dbresult">';
	echo '<tr>';
	echo '<th>Id</th>';
	echo '<th>Firstname</th>';
	echo '<th>Lastname</th>';
	echo '<th>English</th>';
	echo '<th>Tamil</th>';
	echo '<th>Maths</th>';
	echo '<th>Science</th>';
	echo '<th>Social</th>';
	echo '<th>Result</th>';
	echo '</tr>';
	
	while($row=mysqli_fetch_assoc($result)) {
		
		echo '<tr>';
		echo '<pre>';
		echo '<td>'. $row['Id']. '</td>';
		echo '<td>'. $row['Firstname']. '</td>';
		echo '<td>'. $row['Lastname']. '</td>';
		echo '<td>'. $row['English']. '</td>';
		echo '<td>'. $row['Tamil']. '</td>';
		echo '<td>'. $row['Maths']. '</td>';
		echo '<td>'. $row['Science'].'</td>';
		echo '<td>'. $row['Social'].'</td>';
		echo '<td>'. $row['Result']. '</td>';
		echo '</pre>';
		echo '</tr>';
	}
		echo '</table>';
} 
?>