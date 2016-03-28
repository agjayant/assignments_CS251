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
        select * from enrollment where $que;
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
                                <a class=\"goto\" href=\"enrollment.html\">insert</a>
                                <a class=\"goto\" id=\"ch\" href=\"enrollment_q.html\">Query</a>
                        </div>
                 </header>
    
                 <section class=\"form2\">    
                        <div class=\"subnav\">    
                                <a class=\"subgoto\" href=\"students_q.html\">STUDENTS</a>
                                <a class=\"subgoto\" href=\"faculty_q.html\">faculty</a>
                                <a class=\"subgoto\" href=\"courses_q.html\">courses</a>
                                <a class=\"subgoto\" id=\"ch\" href=\"enrollment_q.html\">ENROLLMENT</a>
                        </div>
 ";?>
        <?php
$count=1;
$col="odd";
        echo "<table class=\"tabular\"><tr id=\"frow\"><td>RollNo</td><td>COURSE_ID</td><td>Assignments</td><td>Quiz</td><td>Midsem</td><td>Endsem</td><td>Aggregate</td><td>Grade</td></tr>" ;
while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
if($count%2==0) $col="even";
else $col="odd";
echo "<tr class=$col><td>";
      echo $row['RollNo'] . "</td><td>";
      echo $row['COURSE_ID'] ."</td><td>";
      echo $row['assignments'] ."</td><td>";
      echo $row['quiz'] ."</td><td>";
      echo $row['midsem'] ."</td><td>";
      echo $row['endsem'] ."</td><td>";
      echo $row['aggregate'] ."</td><td>";
      echo $row['grade'] ."</td></tr>";
$count=$count+1;

   }

   $db->close();
        ?>


        <?php echo "  
                        <form action=\"enrollment_q.html\" method=\"post\" class=\"res\">
                        <fieldset>
                                <!--<label>COURSE ID<input type=\"text\" name=\"course\" value= \"CS251\" disabled></label><br>
                                <label>Roll No<input type=\"number\" name=\"roll\"  value = \"14282\" disabled></label><br>
                                <label>Assignment Marks<input type=\"number\" name=\"assignments\" value= \"95\" disabled></label><br>
                                <label>Quiz Marks<input type=\"number\" name=\"quiz\" value=\"78\" disabled></label><br>
                                <label>Midsem Marks<input type=\"number\" name=\"mid\" value=\"89\" disabled></label><br>
                                <label>Endsem Marks<input type=\"number\" name=\"end\" value=\"85\" disabled></label><br>-->
                                <input type=\"submit\" name=\"insert\" class=\"btn\" id=\"new\" value=\"New Search\">
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
