<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $grade = $_POST['grade'];

        if($grade === null || $grade < 0 || $grade >100){
            $message = "<span style = 'color: red';>ERROR: Invalid Grade. Please Enter a grade between 0 and 100.</span>";
        }else{
            if($grade >= 96 && $grade <= 100){
                $universitygrade =  "The grade is <span style='color:green;'>$grade</span>, and the university grade is <span style='color: green;'>1.0. Execellent Job!</span>";
            }elseif($grade >= 94 && $grade <= 95){
                $universitygrade = "The grade is <span style = 'color:green';>$grade</span>, and the university grade is <span style = 'color: green';>1.25. Very Good!</span>";
            }elseif($grade >= 91 && $grade <= 93){
                $universitygrade = "The grade is <span style = 'color:green';>$grade</span>, and the university grade is <span style = 'color: green';>1.5. Very Good!</span>";
            }elseif($grade >= 88 && $grade <= 90){
                $universitygrade = "The grade is <span style = 'color:green';>$grade</span>, and the university grade is <span style = 'color: green';>1.75. Good Job!</span>";
            }elseif($grade >= 85 && $grade <= 87){
                $universitygrade = "The grade is <span style = 'color:green';>$grade</span>, and the university grade is 2.0. Good Job!";
            }elseif($grade >= 83 && $grade <= 84){
                $universitygrade = "The grade is <span style = 'color:green';>$grade</span>, and the university grade is 2.25. Good Job!";
            }elseif($grade >= 80 && $grade <= 82){
                $universitygrade = "The grade is <span style = 'color:green';>$grade</span>, and the university grade is 2.5. Fair";
            }elseif($grade >= 78 && $grade <= 79){
                $universitygrade = "The grade is <span style='color:red;'> $grade</span>, and the university grade is <span style = 'color: red;'>2.75. Fair</span>";
            }elseif($grade >= 75){
                $universitygrade = "The grade is <span style='color:red;'> $grade</span>, and the university grade is <span style = 'color: red;'>3.0. Pass</span>";
            }else{
                $universitygrade = "The grade is <span style='color:red;'> $grade</span>, and the university grade is <span style = 'color: red;'>5.0</span>";
            }
            $message = $universitygrade;
        }
    }   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo.jpg" type="image/.jpg">
    <link rel="stylesheet" href="style/style.css">
    <title>University Grading System</title>
</head>
<body>
    <form action="#" method="post">
            <div class="content">
                <div class="header">
                    <img src="logo-removebg-preview.png" alt="">
                    <label for="#">University Grading System</label>
                </div>
                <div class="grade-input">
                    <label for="#">Enter the Grade:</label>
                    <input type="number" name="grade" id="" required>
                </div>
                <div class="grade-button">
                    <button type="submit">Submit</button>
                </div>
                
                <div class="output <?php echo isset($message) ? 'show' : ''; ?>">
                    <?php if (isset($message)) { ?>
                        <p><?php echo $message; ?></p>
                    <?php } ?>
            </div>
            </div>
    </form>
</body>
</html>
