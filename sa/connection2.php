<!DOCTYPE html>
<html>
<head>
	<title>Table with the given query</title>
	<style type="text/css">
		table{
			border-collapse: collapse;
			width: 100%;
			color: #588c7e;
			font-family: monospace;
			font-size: 25px;
			text-align: center;
		}
		h1{
			border-collapse: collapse;
			width: 100%;
			color: #588c7e;
			font-family: monospace;
			font-size: 25px;
			text-align: center;
		}
		a{
        color:white;
        border:3px solid white;padding:10px;
        background:green;
        }
		tr:nth-child(even){
			background-color: #f2f2f2;
		}
	</style>
</head>
<body>
<h1>Table with the given query</h1>
<?php
$sql=$_POST['query2'];
$link=mysqli_connect("localhost","id5754520_nihaal7397","nihaal","id5754520_nihaal");
if($result=mysqli_query($link,$sql))
{
	echo "<table>";
	while($row=mysqli_fetch_array($result))
	{
		echo "<tr>";
		$size=sizeof($row);
		$size=$size/2;
		for($i=0;$i<$size;$i++)
		{
			if($row[$i]!=null){
			echo "<td>".$row[$i]."</td>";
			}
		}
		echo "</tr>";
	}
	echo "</table>";
	mysqli_free_result($result);}
else
{
echo mysqli_error($link);
}
mysqli_close($link);
?>
<br/><br/>
<a href="practice.html" target="_parent">back</a>
</body>
</html>
