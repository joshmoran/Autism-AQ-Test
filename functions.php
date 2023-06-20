<?php
$errors = array();
$questions = array();
$noOfQuestions = 80;

$_SESSION['input'] = array();

if (isset($_POST['testMe'])) {
    $count = 0;

    for ($a = 1; $a <= $noOfQuestions; $a++) {
        if (isset($_POST['q' . $a])) {
            $count  += $_POST['q' . $a];
            $_SESSION['input'][$a] = $_POST['q' . $a];
        } else {
            $errors[] = 'Please answer question ' . $a . ' to get a result';
        }
    }

    var_dump($_SESSION['input']);
    echo $count;
} else {
    for($b = 1; $b <= $noOfQuestions; $b++){
        
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST[''])) {
        echo $_POST['q1'];
    }
}
