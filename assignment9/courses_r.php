<html>
	<head>
		<title>INSERT</title>
		<link rel="stylesheet" href="main.css">
	<head>
	<body>

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
                                <a class=\"goto\" href=\"courses.html\">insert</a>
                                <a class=\"goto\" id=\"ch\" href=\"courses_q.html\">Query</a>
                        </div>
                 </header>
    
                 <section class=\"form2\">    
                        <div class=\"subnav\">    
                                <a class=\"subgoto\" href=\"students_q.html\">STUDENTS</a>
                                <a class=\"subgoto\" href=\"faculty_q.html\">faculty</a>
                                <a class=\"subgoto\" id=\"ch\" href=\"courses_q.html\">courses</a>
                                <a class=\"subgoto\" href=\"enrollment_q.html\">ENROLLMENT</a>
                        </div>

                        <form action=\"courses_q.html\" method=\"post\" class=\"res\">
                        <fieldset>
                                <label>COURSE ID<input type=\"text\" name=\"course\" value= \"CS251\"  disabled></label><br>
                                <label>COURSE NAME<input type=\"text\" name=\"course_name\"  value = \"Course Name\"  disabled></label><br>
                                <label>INSTRUCTOR ID<input type=\"number\" name=\"fac_id\" value= \"1\" disabled></label><br>
                                <label>INSTRUCTOR NAME<input type=\"text\" name=\"fac_name\" value=\"Instructor Full Name\"  disabled></label><br>
                                <label>SEMESTER<input type=\"number\" name=\"sem\" value=\"1\" disabled></label><br>
                                <label>CREDITS<input type=\"number\" name=\"credits\" value=\"12\" disabled></label><br>
                                <input type=\"submit\" name=\"insert\" class=\"btn\" id=\"new\" value=\" New Search\">
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
