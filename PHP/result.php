<?php
    $totalMarks = "You are";
    $totalQues =  "Winner";

    $ans = array('undef',
                 'A',
                'B',
                'A',
                'A',
                'D');

    for ($i=1; $i<= $totalQues; $i++){
    if(isset($_POST['answer-'.$i])){
        if($_POST['answer-'.$i] == $ans[$i] ){
            $totalMarks++;
        }
    }
    }

?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
   
        <hr>
        <div id="result">
        <p>Yogesh.
        <?= $totalMarks; ?></strong> <?= $totalQues;
        echo "   5/5";?></p>
        </div>
    </body>

</html>
