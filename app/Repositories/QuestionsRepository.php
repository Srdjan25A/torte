<?php


namespace App\Repositories;

use App\Models\Question;
use Illuminate\Support\Facades\Log;

class QuestionsRepository
{
    public function addQuestions($questionsRepositoryData)
    {
        try {
            return Question::create($questionsRepositoryData);
        } catch (\Exception $e) {
            Log::error('Can\'t add questions' . $e->getMessage());
        }
    }

}
