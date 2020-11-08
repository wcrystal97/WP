<!DOCTYPE html>
<html>
<head>
	<title>MBTI personality test</title>
	 <link href="style.css" rel="stylesheet">
</head>
<body>
	<?php

	session_start();
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){//prevent user logout already, but still go to this page
		header("location: login.php");
		exit;
	}
	//print_r($_SESSION);

	?>
	<nav>
       <a href="logout.php">Logout</a>
       
   </nav>
	<h1>Hi, <b><?php echo $_SESSION["username"]; ?></b>. Welcome to our site. </h1>
	
  	 <div class="title">
            16 Personalities Test
        </div>
        <div class="instruction">
            <p>A free personality test</p>
            <a>Instruction:</a><br>
            <a>1.Finish within 12min</a><br>
            <a>2.Answer honestly(even you don't like the answer)</a><br>
            <a>3.Don't overthink questions</a>
        </div>

        <form action="result.php" method="POST">
            <div class="questions">
            	<p>I. Which option is more appropriate to expression your feelings and behavior?</p>
                <strong>1. When you planning on go out for a whole day</strong><br>
                <input type="radio" id="Q1" name="Q1" value="A" required>
                <label for="A">Plan carefully when and where you're going</label><br>
                <input type="radio" id="Q1" name="Q1" value="B">
                <label for="B">Just go</label><br>
            
                <strong>2. You consider yourself as</strong><br>
                <input type="radio" id="Q2" name="Q2" value="A" required>
                <label for="A">Go with the flow</label><br>
                <input type="radio" id="Q2" name="Q2" value="B">
                <label for="B">Well organized</label><br>

                <strong>3. If you're a teacher, you'd teach</strong><br>
                <input type="radio" id="Q3" name="Q3" value="A" required>
                <label for="A">Course based on facts</label><br>
                <input type="radio" id="Q3" name="Q3" value="B">
                <label for="B">Course more theory oriented</label><br>
                
                <strong>4. You are</strong><br>
                <input type="radio" id="Q4" name="Q4" value="A" required>
                <label for="A">Good at social skills</label><br>
                <input type="radio" id="Q4" name="Q4" value="B">
                <label for="B"> More introvert, quite type</label><br>

                <strong>5. You would like to get along with</strong><br>
                <input type="radio" id="Q5" name="Q5" value="A" required>
                <label for="A">People full of imagination</label><br>
                <input type="radio" id="Q5" name="Q5" value="B">
                <label for="B">Realistic people</label><br>

                <strong>6. Are you a person</strong><br>
                <input type="radio" id="Q6" name="Q6" value="A" required>
                <label for="A">Easy to understand</label><br>
                <input type="radio" id="Q6" name="Q6" value="B">
                <label for="B">Hard to understand</label><br>
                  
                <strong>7. You often</strong><br>
                <input type="radio" id="Q7" name="Q7" value="A" required>
                <label for="A">Let your emotions dominate your sanity</label><br>
                <input type="radio" id="Q7" name="Q7" value="B">
                <label for="B">Let your sanity dominate your emotions</label><br>

                <strong>8. You tend to</strong><br>
                <input type="radio" id="Q8" name="Q8" value="A" required>
                <label for="A">Emphasize emotions more than logic</label><br>
                <input type="radio" id="Q8" name="Q8" value="B">
                <label for="B">Emphasize logic more than emotions</label><br>

                <p>II. Look at the following pairs of words, which words fit you?</p>
                <ol>
                <li> <input type="radio" id="Q9" name="Q9" value="A" required>
                <label for="A">Planned</label>
                <input type="radio" id="Q9" name="Q9" value="B">
                <label for="B">Freewheeling</label></li><br>
        
                <li><input type="radio" id="Q10" name="Q10" value="A" required>
                <label for="A">Abstract</label>
                <input type="radio" id="Q10" name="Q10" value="B">
                <label for="B">Concrete</label></li><br>

                <li><input type="radio" id="Q11" name="Q11" value="A" required>
                <label for="A">Gentle</label>
                <input type="radio" id="Q11" name="Q11" value="B">
                <label for="B">Strong</label></li><br>

                <li><input type="radio" id="Q12" name="Q12" value="A" required>
                <label for="A">Impulse</label>
                <input type="radio" id="Q12" name="Q12" value="B">
                <label for="B">Thoughtful</label></li><br>

                <li><input type="radio" id="Q13" name="Q13" value="A" required>
                <label for="A">Introvert</label>
                <input type="radio" id="Q13" name="Q13" value="B">
                <label for="B">Outgoing</label></li><br>

                <li><input type="radio" id="Q14" name="Q14" value="A" required>
                <label for="A">Silent</label>
                <input type="radio" id="Q14" name="Q14" value="B">
                <label for="B">Conversable</label></li><br>

                <li><input type="radio" id="Q15" name="Q15" value="A" required>
                <label for="A">Imaginative</label>
                <input type="radio" id="Q15" name="Q15" value="B">
                <label for="B">Rigid</label></li><br>

                <li><input type="radio" id="Q16" name="Q16" value="A" required>
                <label for="A">Rationality</label>
                <input type="radio" id="Q16" name="Q16" value="B">
                <label for="B">Sensibility</label></li><br>

            </div>

            <div class="button">
                <input type="submit" value="Submit">
            </div>
        </form>

</body>
</html>