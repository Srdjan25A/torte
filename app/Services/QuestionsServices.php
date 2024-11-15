<?php

namespace App\Services;


use App\Models\Question;
use App\Repositories\QuestionsRepository;

class QuestionsServices{
    protected QuestionsRepository $questionsRepository;
    public function __construct()
    {
        $this->questionsRepository = new QuestionsRepository();
    }
    public function addQuestions($questionsData){
        return $this->questionsRepository->addQuestions($questionsData);
    }

    public function countAnswer(){
            $questions = Question::with('submissions')->get();

            $result= [];

            foreach ($questions as $question){
                $countAnswer1 = 0;
                $countAnswer2 = 0;

                foreach($question->submissions as $submission){
                    if($submission->answer_number == 1){
                        $countAnswer1++;
                    }elseif($submission->answer_number == 2){
                        $countAnswer2++;
                    }
                }
                $result[] = [
                    'question' => $question->title, // Naziv pitanja
                    'answer_1_count' => $countAnswer1, // Broj odgovora 1
                    'answer_2_count' => $countAnswer2, // Broj odgovora 2
                ];
            }
            return $result;
    }
}
