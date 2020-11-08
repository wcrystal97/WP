<!DOCTYPE html>
<html lang="english">
    <header>
        <title>MBTI personality test</title>
    </header>
    <link href="test.css" rel="stylesheet">
    <body>
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
                <strong>When you planning on go out for a whole day</strong><br>
                <input type="radio" id="Q1" name="Q1" value="A">
                <label for="A">Plan carefully when and where you're going</label><br>
                <input type="radio" id="Q1" name="Q1" value="B">
                <label for="B">Just go</label><br>
            
                <strong>You consider yourself as</strong><br>
                <input type="radio" id="Q2" name="Q2" value="A">
                <label for="A">Go with the flow</label><br>
                <input type="radio" id="Q2" name="Q2" value="B">
                <label for="B">Well organized</label><br>

                <strong>If you're a teacher, you'd teach</strong><br>
                <input type="radio" id="Q3" name="Q3" value="A">
                <label for="A">Course based on facts</label><br>
                <input type="radio" id="Q3" name="Q3" value="B">
                <label for="B">Course more theory oriented</label><br>
                
                <strong>You are</strong><br>
                <input type="radio" id="Q4" name="Q4" value="A">
                <label for="A">Good at social skills</label><br>
                <input type="radio" id="Q4" name="Q4" value="B">
                <label for="B">Well organized</label><br>

                <strong>Usually you're better with</strong><br>
                <input type="radio" id="Q5" name="Q5" value="A">
                <label for="A">People full of imagination</label><br>
                <input type="radio" id="Q5" name="Q5" value="B">
                <label for="B">Realistic people</label><br>

                <strong>You often times</strong><br>
                <input type="radio" id="Q6" name="Q6" value="A">
                <label for="A">Let your emotions rule intellect</label><br>
                <input type="radio" id="Q6" name="Q6" value="B">
                <label for="B">Intellect rules your emotions</label><br>
                
                <strong>On problem solving</strong><br>
                <input type="radio" id="Q7" name="Q7" value="A">
                <label for="A">Do whatever comes in mind first</label><br>
                <input type="radio" id="Q7" name="Q7" value="B">
                <label for="B">Go with the plan</label><br>

                <strong>Are you someone</strong><br>
                <input type="radio" id="Q8" name="Q8" value="A">
                <label for="A">Easy to understand</label><br>
                <input type="radio" id="Q8" name="Q8" value="B">
                <label for="B">Hard to understand</label><br>

                <strong>Work strictly on plan makes you</strong><br>
                <input type="radio" id="Q9" name="Q9" value="A">
                <label for="A">Feel well fitted</label><br>
                <input type="radio" id="Q9" name="Q9" value="B">
                <label for="B">Feel restricted</label><br>
        
                <strong>When you have a special task</strong><br>
                <input type="radio" id="Q10" name="Q10" value="A">
                <label for="A">Carefully plan beforehands</label><br>
                <input type="radio" id="Q10" name="Q10" value="B">
                <label for="B">Collect materials as work along</label><br>
            </div>

            <div class="button">
                <input type="submit" value="Submit">
            </div>
        </form>
    </body>
</html>