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
                                <a class=\"goto\" href=\"students.html\">insert</a>
                                <a class=\"goto\" id=\"ch\" href=\"students_q.html\">Query</a>
                        </div>
                 </header>
    
                 <section class=\"form2\">    
                        <div class=\"subnav\">    
                                <a class=\"subgoto\" id=\"ch\" href=\"students_q.html\">STUDENTS</a>
                                <a class=\"subgoto\" href=\"faculty_q.html\">faculty</a>
                                <a class=\"subgoto\" href=\"courses_q.html\">courses</a>
                                <a class=\"subgoto\" href=\"enrollment_q.html\">ENROLLMENT</a>
                        </div>

                        <form action=\"students_q.html\" method=\"post\" class=\"res\">
                        <fieldset>
                                <label>Roll No<input type=\"number\" name=\"roll\"  value = \"14282\" disabled></label><br>
                                <label>Name<input type=\"text\" name=\"name\" value = \"Full Name\" disabled></label><br>
                                <label>Username<input type=\"text\" name=\"email\"  value = \"Username\" disabled></label><br>
                                <input type=\"submit\" name=\"n_search\" class=\"btn\" id=\"new\" value=\"New Search\">
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
