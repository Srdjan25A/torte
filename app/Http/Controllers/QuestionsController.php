<?php


namespace App\Http\Controllers;

use App\Models\Question;
use App\Services\QuestionsServices;
use Illuminate\Http\Request;

class QuestionsController extends Controller{
    protected QuestionsServices $questionsServices;
    public function __construct(QuestionsServices $questionsServices){
        $this->questionsServices= new QuestionsServices();
    }

    public function showAnswerscountPerQuestion(){
        $answersPerQuestion=$this->questionsServices->countAnswer();

        return view('qustions_answers_count',compact('answersPerQuestion'));
    }
    public function addQuestions(Request $request){
        $questionData = [
            'title'=>$request->input('title'),
            'offered_answer1'=>$request->input('offered_answer1'),
            'offered_answer2'=>$request->input('offered_answer2')
        ];
        $question=$this->questionsServices->addQuestions($questionData);

        return redirect()->route('show-question.add');
    }
    public function showAddQuestions(){
        return view('questons');
    }
    public function showQuestionsAll()
    {
        $questions = Question::all();
        return view('questions-all', compact('questions'));
    }
    public function showQuestionActive(){
        $activeQuestions = Question::where('active', 1)->first();
        return view('welcome', compact('activeQuestions'));
    }
    public function updateActiveQuestion(Request $request){
        $activeQuestion = Question::where('active', '=', 1)
            ->get()
            ->first();
        $activeQuestion->active = 0;
        $activeQuestion->save();

        $questionId = $request->input('question_id');
        $question = Question::find($questionId);

        if ($question) {
            $question->active = 1;
            $question->save();
            return response()->json(['success' => true, 'message' => 'Pitanje uspešno ažurirano!']);
        }

        return response()->json(['success' => false, 'message' => 'Pitanje nije pronađeno.'], 404);
    }
}
