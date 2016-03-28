<html>
	<head>
		<title>INSERT</title>
		<link rel="stylesheet" href="main.css">
	<head>
	<body>
<?php
        $que=$_POST["query"];
   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('cse.db');
      }
   }
   $db = new MyDB();
   if(!$db){
      echo "error1";
   }

   $sql =<<<EOF
        select * from faculty where $que;
EOF;

   $ret = $db->query($sql);
   if(!$ret){
      echo "error2";
   }
?>

		<?php echo "                 
		 <header class=\"head\">
                        <img src=\"logo1.png\" class=\"logo\">
                        <div class=\"heading\">
                                <h1 id=\"first\">DATABASE</h1>
                                <h2 id=\"second\">Department of Computer Science and Engineering</h2>
                                <h3 id=\"third\">IIT Kanpur</h3>
                         </div>
    
                         <div class=\"nav\">
                                <a class=\"goto\" href=\"home.html\">Home</a>
                                <a class=\"goto\" href=\"faculty.html\">insert</a>
                                <a class=\"goto\" id=\"ch\" href=\"faculty_q.html\">Query</a>
                        </div>
                 </header>
    
                 <section class=\"form2\">    
                        <div class=\"subnav\">    
                                <a class=\"subgoto\" href=\"students_q.html\">STUDENTS</a>
                                <a class=\"subgoto\" id=\"ch\" href=\"faculty_q.html\">faculty</a>
                                <a class=\"subgoto\" href=\"courses_q.html\">courses</a>
                                <a class=\"subgoto\" href=\"enrollment_q.html\">ENROLLMENT</a>
                        </div>
 ";?>
        <?php
	$count=1;
	$col="odd";
        echo "<table class=\"tabular\"><tr id=\"frow\"><td>ID</td><td>Name</td><td>Email</td><td>Dept</td></tr>" ;
while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
      if($count%2==0) $col="even";
      else $col="odd";
      echo "<tr class=$col><td>";
      echo $row['ID'] . "</td><td>";
      echo $row['Name'] ."</td><td>";
      echo $row['Email'] ."</td><td>";
      echo $row['Dept'] ."</td></tr>";
      $count=$count+1;

   }

   $db->close();
        ?>


        <?php echo " 

                        <form action=\"faculty_q.html\" method=\"post\" class=\"res\">
                        <fieldset>
                                <!--<label>Faculty ID<input type=\"number\" name=\"fac_id\" value= \"1\" disabled></label><br>
                                <label>Name<input type=\"text\" name=\"fac_name\" value= \"Full Name\" disabled></label><br>
                                <label>Username<input type=\"text\" name=\"fac_email\" value= \"Username\" disabled></label><br>
                                <label>Department<input type=\"text\" name=\"dept\" value= \"Department\" disabled></label><br>-->
                                <input type=\"submit\" name=\"insert\" class=\"btn\" id=\"new\" value=\" New Search\">
                         </fieldset>
                         </form>
                 </section>    
    
                 <!--<footer class=\"table\">
                         <a class=\"result\" href=\"result.php\">Database</a>
                 </footer>-->


		";	
		?>

	</body>
</html>
