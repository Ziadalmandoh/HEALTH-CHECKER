<?php


global $score;

increaseScore($_POST['checkVom']);
increaseScore($_POST['checknausea']);
increaseScore($_POST['checkurine']);
increaseScore($_POST['checksleeping']);
increaseScore($_POST['checkappetite']);
increaseScore($_POST['checkitching']);
increaseScore($_POST['checkfamily']);
increaseScore($_POST['checkdiabetes']);
increaseScore($_POST['checkblood']);
increaseScore($_POST['checkkidney']);


$link = 'Location:result4.php?score=' . $GLOBALS['score']  ."'";
if ($score >= 70) {
    header('Location:result4.php?score=' . $GLOBALS['score']);
}elseif ($score >= 50) {
    header('Location:result3.php?score=' . $GLOBALS['score']);
}elseif ($score >= 20) {
    header('Location:result2.php?score=' . $GLOBALS['score']);
}elseif ($score >= 0) {
    if ($score == "") {
        $score = 0;
    }
    header('Location:result.php?score=' . $GLOBALS['score']);
}












function increaseScore($q) {
    if ($q){
        $GLOBALS['score'] += 10;
    }
}

