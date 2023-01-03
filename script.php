<?php
require_once './class/QuizModel.class.php';

header("Content-Type:application/json");

try {
    $question = new QuizModel();
    echo $question->getAllQuestions();
} catch (Exception $e) {
    die("ERROR: " . $e->getMessage());
}