<?php

namespace App\Services;

use App\Repositories\SubmissionsRepository;

class SubmissionsServices{
    protected SubmissionsRepository $submissionsRepository;
    public function __construct(){
        $this->submissionsRepository= new SubmissionsRepository();
    }

    public function  addSubmissions($submissionsData){
        return $this->submissionsRepository->addSubmission($submissionsData);
    }
}
