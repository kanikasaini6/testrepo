<html>
<head>
    <title>DATABASE ACCESS </title>
</head>
<body>
   <php
     $servername="root";
     $username="abc";
     $password="";
     $dbname="stud"

     <!--  WE ASSUME THAT THE DATABASE IS ALREADY CREATED >

     $sql=sql_connect($servername,$username,$password,$dbname);
     if($sql->connect_error)
     {
        echo("COnnection to db error".connect_error);
     }
     echo("DATABASE CONNECTION ESTABLISHED!")
     $sql="CREATE TABLE STUDENT (S_NAME varchar(30),S_AGE int,S_BRANCH varchar(30),S_YEAR int,S_SEM int,PREV_SCORE int)";
     if(query(sql))
     {
       echo("TABLE SUCCESSFULLY CRAEATED!")
     }
    else
    {
        echo("TABLE CREATION ERROR!")
    }
    $name=$POST['S_NAME']
    $age=$POST['AGE']
    $branch=$POST['BRANCH']
    $year=$POST['YEAR']
    $semester=$POST['SEMESTER']
    $prev_score=$POST['PREV_SCORE']
    $sql="INSERT INTO STUDENT VALUES ($name,$age,$branch,$year,$semester,$prev_score) ";
    if(query($sql))
    {
       echo("INSERTED VALUES TO TABLE");
    }
   else
    {
       echo("INSERTION ERROR")
    }
   $sql="SELECT * FROM STUDENT";
   $result=query($sql)
  if($result->no_of_rows>0)
  {
      while($result->fetch_rows)
   {
      echo("STUDENT NAME:".$S_NAME." STUDENT AGE :".$S_AGE","STUDENT BRANCH:".$S_BRANCH"."STUDENT YEAR:".$S_YEAR."STUDENT SEMESTER:".$S_SEM."STUDENT PREVIOUS SCORE:".$PREV_SCORE);
   }
  }
  ?>
</body>
</html>

