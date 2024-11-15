<?php

namespace App\Repositories;

use App\Models\Submission;
use Illuminate\Support\Facades\Log;

class SubmissionsRepository{
    public function addSubmission($submissionsRepositoryData){
            try{
                return Submission::create($submissionsRepositoryData);
            }catch(\Exception $e){
                Log::error('Can\'t add submissions' . $e->getMessage());
            }
    }

}
