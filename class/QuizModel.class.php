<?php

// use QuizModel as GlobalQuizModel;

include_once('./database/DB.php');

// class QuizModel extends DB
// {

//     public function getAllQuestions()
//     {
//         // $sql = "SELECT q.question,
//         // MAX(CASE WHEN a.id = (q.id*4)-3 THEN a.answer END) AS answer_1,MAX(CASE WHEN a.id = (q.id*4)-3 THEN a.type END) AS type1,
//         // MAX(CASE WHEN a.id = (q.id*4)-2 THEN a.answer END) AS answer_2,MAX(CASE WHEN a.id = (q.id*4)-2 THEN a.type END) AS type2,
//         // MAX(CASE WHEN a.id = (q.id*4)-1 THEN a.answer END) AS answer_3,MAX(CASE WHEN a.id = (q.id*4)-1 THEN a.type END) AS type3,
//         // MAX(CASE WHEN a.id = (q.id*4) THEN a.answer END) AS answer_4,MAX(CASE WHEN a.id = (q.id*4) THEN a.type END) AS type4
//         // FROM questions q
//         // JOIN answers a ON q.id = a.question_id
//         // GROUP BY q.id;";
//         $sql = "SELECT * FROM questions";
//         $statement = $this->Connect()->prepare($sql);
//         $statement->execute();
//         $res = $statement->fetchAll();
//         // $data = json_encode($res, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
//         // echo $data;
//         // file_put_contents('data.json', $data);
//         echo json_encode($res[0]);
//     }
// }
// (new QuizModel)->getAllQuestions();

class QuizModel extends DB
{
    public function getAllQuestions()
    {
        try {
            $sql = "SELECT answer , question_id FROM answers,questions
            WHERE answers.question_id = questions.id" ;
            $a_stmt = $this->connect()->prepare($sql);

            // $sql = "SELECT question-id, id, content FROM options";
            // $o_stmt = $this->connect()->prepare($sql);

            $sql = "SELECT id , question FROM questions";
            $stmt = $this->connect()->prepare($sql);

            if ($stmt->execute()) {

                $obj = new stdClass;
                $obj->title = "AWS - Quiz";
                $obj->description = "AWS Certified Cloud Practitioner (CLF-C01) Sample Exam Questions";
                // $obj = (object)$stmt->fetch();

                $questions_array = [];


                while ($question = $stmt->fetch()) {
                    // $options_array = [];
                    $answers_array = [];
                    // $o_stmt->execute();
                    $a_stmt->execute();
                    // while ($option = $o_stmt->fetch()) {
                    //     if ($option['question-id'] == $question['id']) {
                    //         $options_array[] = (object)$option;
                    //     }
                    // }
                    while ($answer = $a_stmt->fetch()) {
                        if ($answer['question_id'] == $question['id']) {
                            $answers_array[] = (object)$answer;
                        }
                    }
                    $Q = (object)$question;
                    // $Q->options = $options_array;
                    $Q->answer = $answers_array;
                    $questions_array[] = $Q;
                    // print_r($questions_array);
                }



                $obj->questions = $questions_array;
                return json_encode($obj, JSON_PRETTY_PRINT);
                // echo $tt;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "ERROR: Could not prepare/execute query: $sql. " . $e->getMessage();
            return false;
        }
    }
}
