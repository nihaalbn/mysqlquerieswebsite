<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body{
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
	</style>
</head>
<body>
	<h1>About the given query</h1>
<?php
$sql=$_POST['query'];
$link=mysqli_connect("localhost","id5754520_nihaal7397","nihaal","id5754520_nihaal");
if(mysqli_query($link,$sql))
{
	echo "query processed successfully";
}
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
