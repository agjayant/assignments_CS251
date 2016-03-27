<html>
	<head>
		<title>INSERT</title>
		<link rel="stylesheet" href="main.css">
	<head>
	<body>
 <?php
        $co=$_POST['course'];
        $roll=$_POST['roll'];
        $ass=$_POST['assignments'];
        $quiz=$_POST['quiz'];
        $mid=$_POST['mid'];
        $end=$_POST['end'];
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
      INSERT INTO Enrollment(RollNo, COURSE_ID,assignments,quiz,midsem,endsem) values($roll,"$co",$ass,$quiz,$mid,$end);
update Enrollment set aggregate=assignments+quiz+midsem+endsem;

update Enrollment set grade="F";
update Enrollment set grade="E" where aggregate>=25.0;
update Enrollment set grade="D" where aggregate>=40.0;
update Enrollment set grade="C" where aggregate>=50.0;
update Enrollment set grade="B" where aggregate>=70.0;
update Enrollment set grade="A" where aggregate>=80.0;
update Enrollment set grade="A*" where aggregate>=95.0;

EOF;

   $ret = $db->exec($sql);
   if(!$ret){
      echo "error2";
   }
        
   $db->close();    
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
                                <a class=\"goto\" id=\"ch\" href=\"enrollment.html\">insert</a>
                                <a class=\"goto\" href=\"enrollment_q.html\">Query</a>
                        </div>
                 </header>
    
                 <section class=\"form2\">    
                        <div class=\"subnav\">    
                                <a class=\"subgoto\" href=\"students.html\">STUDENTS</a>
                                <a class=\"subgoto\" href=\"faculty.html\">faculty</a>
                                <a class=\"subgoto\" href=\"courses.html\">courses</a>
                                <a class=\"subgoto\" id=\"ch\" href=\"enrollment.html\">ENROLLMENT</a>
                        </div>

			<p> Entry Successful !! </p>
                        <form action=\"enrollment.html\" method=\"post\" class=\"res\">
                        <fieldset>
                                <input type=\"submit\" name=\"n_search\" class=\"btn\" id=\"new\" value=\"New Entry\">
                         </fieldset>
                         </form>
                 </section>    
    
                 <footer class=\"table\">
                         <a class=\"result\" href=\"result.php\">Database</a>
                 </footer>



		";	
		?>

	</body>
</html>
