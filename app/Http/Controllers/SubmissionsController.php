<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use App\Services\SubmissionsServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubmissionsController extends Controller{
    protected SubmissionsServices $submissionsServices;

    public function __construct(){
        $this->submissionsServices=new SubmissionsServices();
    }
    public function addSubmission(Request $request){
        $submissionData=[
            'answer_number'=>$request->input('answer_number'),
            'question_id'=>$request->input('question_id'),
            'ip' => $request->ip()
        ];
        $question=$this->submissionsServices->addSubmissions($submissionData);
        //izracunaj procente te procente saljes dalje
        $counter1=0;
        $counter2=0;

        $answerOneCount = Submission::where('question_id', $submissionData['question_id'])
                                      ->where('answer_number', 1)
                                      ->count();

        $answerTwoCount = Submission::where('question_id', $submissionData['question_id'])
                                      ->where('answer_number', 2)
                                      ->count();
        $totalAnswer = $answerOneCount+$answerTwoCount;

        $percentageOne = ($totalAnswer > 0) ? ($answerOneCount * 100) / $totalAnswer  : 0;
        $percentageTwo = ($totalAnswer > 0) ? ($answerTwoCount * 100) / $totalAnswer : 0;

        $data=[
            'percentageOne'=>$percentageOne,
            'percentageTwo'=>$percentageTwo
        ];
        return response()->json($data);
    }

}
