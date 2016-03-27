<html>
	<head>
		<title>INSERT</title>
		<link rel="stylesheet" href="main.css">
	<head>
	<body>
 <?php
        $fac1=$_POST['fac_id'];
        $fac2=$_POST['fac_name'];
        $fac3=$_POST['fac_email'];
        $dep=$_POST['dept'];
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
      INSERT INTO faculty(ID, Name, Email,Dept) values($fac1,"$fac2","$fac3","$dep");
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
                                <a class=\"goto\" id=\"ch\" href=\"faculty.html\">insert</a>
                                <a class=\"goto\" href=\"faculty_q.html\">Query</a>
                        </div>
                 </header>
    
                 <section class=\"form2\">    
                        <div class=\"subnav\">    
                                <a class=\"subgoto\" href=\"students.html\">STUDENTS</a>
                                <a class=\"subgoto\" id=\"ch\" href=\"faculty.html\">faculty</a>
                                <a class=\"subgoto\" href=\"courses.html\">courses</a>
                                <a class=\"subgoto\" href=\"enrollment.html\">ENROLLMENT</a>
                        </div>

			<p> Entry Successful !! </p>
                        <form action=\"faculty.html\" method=\"post\" class=\"res\">
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
