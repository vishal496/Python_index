<?php
  //1. Create a database connection
  $dbhost = "localhost";
  $dbuser = "python_enquiry";
  $dbpass = "parash496";
  $dbname = "python";
  $connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
  // Test if connection occured.
  if(mysqli_connect_errno()){
    die("Database connection failed: ".
	    mysqli_connect_error().
		" (".mysqli_connect_errno().")"
	);
  }
?>
<?php
if(isset($_POST['submit'])){ 
 // Often these are form values in $_POST
  $firstname = isset($_POST['first_name'])? $_POST['first_name']:"";
  $lastname = isset($_POST['last_name'])? $_POST['last_name']:"";
  $email = isset($_POST['email'])? $_POST['email']:"";
  $phone = isset($_POST['phone_no'])? $_POST['phone_no']:"";
  $course =isset($_POST['course'])? $_POST['course']:"";
  //2. Perform database query
  $query = "INSERT INTO enquiry(First_Name, Last_Name, Email, Phone_no, Course) VALUES ('{$firstname}','{$lastname}','{$email}','{$phone}','{$course}')";
  $result = mysqli_query($connection,$query);
  // Test if there was a query error
  if($result && mysqli_affected_rows($connection) == 1){
    // Success
	// redirect_to("somepage.php");
  } else {
    // Failure
    // $message = "Subject creation failed";
    die("Database query failed.". mysqli_error($connection));
	}
} 
?>

<!DOCTYPE html>
<html>
<head>
     <title> PYTHON </title>
	 <link rel="stylesheet"  href="main.css" />
</head>
<body>
    <div class="container">
	<header>
	      <image src="python-logo.png" alt="python logo" class="logo" />
		  <nav class="nav">
		    <ul>
			   <li><a href=""> HOME </a></li>
			   <li><a href=""> TUTORIAL </a></li>
			   <li><a href=""> ABOUT </a></li>
			   <li><a href=""> CONTACT </a></li>
			</ul>
		  </nav>
		  <div class="clear"></div>
	</header>
    <section class="left_side">
	    <article>
	        <header>
		        <h1> PYTHON </h1>
			</header>	    
			        <p>Python is a widely used general-purpose, high-level programming language.Its design philosophy emphasizes code readability, and its syntax allows programmers to express concepts in fewer lines of code than would be possible in languages such as C++ or Java.The language provides constructs intended to enable clear programs on both a small and large scale.

                   Python supports multiple programming paradigms, including object-oriented, imperative and functional programming or procedural styles. It features a dynamic type system and automatic memory management and has a large and comprehensive standard library.</p>
            <header>    
			    <h3> WHY STUDY PYTHON...?? </h3>
            </header>
        			<p>1. Easy-to-Learn </p>
                    <p>2. Your Stepping Stone </p>	
                    <p>3. How About Some Raspberry Pi </p>
                    <p>4. Money Money Money </p>
                    <p>5. It Works Online Too </p>
			<div>
		    <image src="graph.jpg" alt="programming graph" class="graph" />
		    </div>
		</article>
	</section>
	<aside class="right_side">
	    <div>
		    <h1> SOCIAL LINKS </h1>
			<ul>
			    <li><a href="https://www.facebook.com/"> FACEBOOK </a></li>
			    <li><a href="https://twitter.com/"> TWITTER </a></li>
			    <li><a href="https://www.google.co.in/"> GOOGLE </a> </li>
			    <li><a href="https://www.python.org/"> PYTHON.ORG </a> </li>
			</ul>
		</div>
		
		<div>
	        <h1> STUDY MATERIAL </h1>
			<ul>
			    <li><a href="https://docs.python.org/2/tutorial/"> Python Docs </a></li>
			    <li><a href="https://www.edx.org/"> edX Online </a></li>
			</ul>
		</div>
		<div>
		    <form action="python_index.php" method="post">
			    <fieldset class="entries">
				    <h2>ENQUIRY:</h2>
				    <br><label for="first_name">First Name:</label> <input type="text" name="first_name"  id="first_name" /></br>
				    <br><label for="last_name">Last Name:</label> <input type="text" name="last_name" id="last_name" /></br>
				    <br><label for="email">Email:</label> <input type="text" name="email"  id="email" /></br>
				    <br><label for="phone">Phone No.:</label> <input type="text" name="phone_no"  id="phone" /></br>
					</br>
					Course:
					    <select name="course">
						    <option value="b.tech">B.TECH</option>
						    <option value="b.e">B.E</option>
						    <option value="M.tech">M.TECH</option>
						    <option value="b.c.a">B.C.A</option>
						    <option value="m.c.a">M.C.A</option>
						</select>
					</br></br>
					<input type="submit" name="submit" value="submit" />					
					<input type="reset" value="reset" />					
			    </fieldset>
			</form>	
		</div>
	</aside>
	
	<footer class="page_footer">
	    &copy Copyright PARASHAR
	</footer>
	</div>
</body>
</html>

<?php
  //5. Close database connection
  mysqli_close($connection);
?>    	 