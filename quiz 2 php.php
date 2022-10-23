<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (!empty($_POST)) {
    $ans1 = $_POST['ans1'];
    $ans2 = $_POST['ans2'];
    $ans3 = $_POST['ans3'];
    $ans4 = $_POST['ans4'];
    $ans5 = $_POST['ans5'];
    $correct = 0;
        if ($ans1 == soekarno) {
            $correct++;
        } else {
            echo"<p>You can't add!</p>";
        }
        if ($ans2 == jokowi) {
            $correct++;
        } else {
            echo"<p>You can't subtract!</p>";
        }
        if ($ans3 == 5) {
            $correct++;
        } else {
            echo"<p>You can't multiply!</p>";
        }
        if ($ans4 == 2) {
            $correct++;
        } else {
        echo"<p>You can't divide!</p>";
        }
        if ($ans5 == sapi) {
            $correct++;
        }else {
        echo "<p>Jawaban anda salah!</p>";
        }
        echo "<p>You got $correct correct!</p>";
        $grade = ($correct / 5) * 100;
        if ($correct == 0) {
            echo "<p>kamu tidak belajar ya.</p>";
        }elseif ($correct == 1) {
            echo "<p>kamu harus belajar lagi.</p>";
        }elseif ($correct == 2) {
            echo "<p> kamu harus belajar lagi.</p>";
        }elseif ($correct == 3) {
            echo "<p> tingkatkan lagi ya.</p>";
        }elseif ($correct == 4) {
            echo "<p> kecerdasanmu luar biasa.</p>";
        }
    } else {
        echo "<p>Please take the quiz.</p>";
    }
    ?>
    <from action="quiz.php" methode="post">
        <p>siapakah presiden pertama indonesia?</p>
        <input type="huruf" name="ans1">
        <p>siapakah presiden indonesia tahun 2022?</p>
        <input type="huruf" name="ans2">
        <p>berapakah hasil dari 2 + 3?</p>
        <input type="number" name="ans3">
        <p>berapakah hasil dari 1 + 1?</p>
        <input type="number" name="ans4">
        <p>hewan apakah yang di manfaatkan untuk susu?</p>
        <input type="huruf" name="ans5">
        <p>(Jika anda merasa jawaban anda benar silahkan submit)!</p>
        <input type="submit">
</body>
</html>