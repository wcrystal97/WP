<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
</head>
<link href="test.css" rel="stylesheet">
<body>
	<div class="instruction">
		<p>Important:</p>
			<a>The character type description provided by MBTI is 
		only for the tester to determine their own character type. There is 
		no good or bad personality type, only different. Each personality 
		trait has its value and advantages, as well as shortcomings and 
		points that need attention. A clear understanding of your own 
		character strengths and weaknesses is conducive to better use of 
		your strengths, and as much as possible to avoid your own weaknesses 
		in dealing with others, get along with others better, and make 
		important decisions better.
			</a>
	</div>

	<div class="results">
	<?php
	$E=$I=$S=$N=$T=$F=$J=$P=0;
	if($_POST["Q1"]=="A"){
		$J++;
			//echo "J=".$J;
	}elseif ($_POST["Q1"]=="B") {
		$P++;
			//echo "P=".$P;
		}/*else
		echo "error";*/
		if($_POST["Q2"]=="A"){
			$P++;
		}elseif ($_POST["Q2"]=="B") {
			$J++;
		}	
		if($_POST["Q3"]=="A"){
			$S++;
		}elseif ($_POST["Q3"]=="B") {
			$N++;
		}
		if($_POST["Q4"]=="A"){
			$E++;
		}elseif ($_POST["Q4"]=="B") {
			$I++;
		}
		if($_POST["Q5"]=="A"){
			$S++;
		}elseif ($_POST["Q5"]=="B") {
			$N++;
		}
		if($_POST["Q6"]=="A"){
			$E++;
		}elseif ($_POST["Q6"]=="B") {
			$I++;
		}
		if($_POST["Q7"]=="A"){
			$F++;
		}elseif ($_POST["Q7"]=="B") {
			$T++;
		}
		if($_POST["Q8"]=="A"){
			$F++;
		}elseif ($_POST["Q8"]=="B") {
			$T++;
		}
		if($_POST["Q9"]=="A"){
			$J++;
		}elseif ($_POST["Q9"]=="B") {
			$P++;
		}
		if($_POST["Q10"]=="A"){
			$N++;
		}elseif ($_POST["Q10"]=="B") {
			$S++;
		}
		if($_POST["Q11"]=="A"){
			$F++;
		}elseif ($_POST["Q11"]=="B") {
			$T++;
		}
		if($_POST["Q12"]=="A"){
			$P++;
		}elseif ($_POST["Q12"]=="B") {
			$J++;
		}
		if($_POST["Q13"]=="A"){
			$I++;
		}elseif ($_POST["Q13"]=="B") {
			$E++;
		}
		if($_POST["Q14"]=="A"){
			$I++;
		}elseif ($_POST["Q14"]=="B") {
			$E++;
		}
		if($_POST["Q15"]=="A"){
			$N++;
		}elseif ($_POST["Q15"]=="B") {
			$S++;
		}
		if($_POST["Q16"]=="A"){
			$T++;
		}elseif ($_POST["Q16"]=="B") {
			$F++;
		}
		//echo "e".$E."i".$I."s".$S."n".$N."t".$T."f".$F."j".$J."p".$P;
		$personality="";
		if ($E>$I) {
			$personality .= "E"; 
		}else{
			$personality .= "I";
		}
		if ($S>$N) {
			$personality .= "S"; 
		}else{
			$personality .= "N";
		}
		if ($T>$F) {
			$personality .= "T"; 
		}else{
			$personality .= "F";
		}
		if ($J>$P) {
			$personality .= "J"; 
		}else{
			$personality .= "P";
		}
		//echo $personality; 
	?>	
	
	<p>
		<?php
		echo "Your Result:";
		if ($personality=="INTJ") {
			echo "Analysts: Architect (INTJ) – Imaginative and strategic thinkers, with a plan for everything";
		}
		if ($personality=="INTP") {
			echo "Analysts: Logician (INTP) – Innovative inventors with an unquenchable thirst for knowledge";
		}
		if ($personality=="ENTJ") {
			echo "Analysts: Commander (ENTJ) – Bold, imaginative and strong-willed leaders, always finding a way – or making one";
		}
		if ($personality=="ENTP") {
			echo "Analysts: Debater (ENTP) – Smart and curious thinkers who cannot resist an intellectual challenge";
		}
		if ($personality=="INFJ") {
			echo "Diplomats: Advocate (INFJ) – Quiet and mystical, yet very inspiring and tireless idealists";
		}
		if ($personality=="INFP") {
			echo "Diplomats: Mediator(INFP)- Poetic, kind and altruistic people, always eager to help a good cause";
		}
		if ($personality=="ENFJ") {
			echo "Diplomats: Protagonist (ENFJ) – Charismatic and inspiring leaders, able to mesmerize their listeners";
		}
		if ($personality=="ENFP") {
			echo "Diplomats: Campaigner (ENFP) – Enthusiastic, creative and sociable free spirits, who can always find a reason to smile";
		}
		if ($personality=="ISTJ") {
			echo "Sentinels: Logistician (ISTJ) – Practical and fact-minded individuals, whose reliability cannot be doubted.";
		}
		if ($personality=="ISFJ") {
			echo "Sentinels: Defender (ISFJ) – Very dedicated and warm protectors, always ready to defend their loved ones";
		}
		if ($personality=="ESTJ") {
			echo "Sentinels: Executive (ESTJ) – Excellent administrators unsurpassed at managing things or people.";
		}
		if ($personality=="ESFJ") {
			echo "Sentinels: Consul (ESFJ) – Extraordinarily caring, social and popular people, always eager to help";
		}
		if ($personality=="ISTP") {
			echo "Explorer: Virtuoso (ISTP) – Bold and practical experimenters, masters of all kinds of tools";
		}
		if ($personality=="ISFP") {
			echo "Explorer: Adventurer (ISFP) – Flexible and charming artists, always ready to explore and experience something new";
		}
		if ($personality=="ESTP") {
			echo "Explorer: Entrepreneur (ESTP) – Smart, energetic and very perceptive people, who truly enjoy living on the edge.";
		}
		if ($personality=="ESFP") {
			echo "Explorer: Entertainer (ESFP) – Spontaneous, energetic and enthusiastic people – life is never boring around them";
		}
		?>
	</p>
	
	</div>

	</body>
	</html>