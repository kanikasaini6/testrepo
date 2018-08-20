<html>
<head>
<title> LET'S FILTER!! </title>
</head>
<body>
<php
$servername="root";
$username="abc";
$password="";
$dbname="stud";
$sql=sql_connect($servername,$username,$password,$dbname);
if($sql->connect_error)
{
   echo("COnnection to db error".connect_error);
}
echo("DATABASE CONNECTION ESTABLISHED!")
$sql="DELETE * FROM STUDENT WHERE PREV_SCORE<50";
if(query($sql))
{
  echo("TABLE UPDATED SUCCESSFULLY")
}
else
{
  echo("ERROR UPDATING THE TABLE");
}
?>
</body>
</html>

