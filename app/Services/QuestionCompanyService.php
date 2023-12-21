<?php

namespace App\Services;

use App\Models\QuestionCompany;

class QuestionCompanyService
{
    public function createQuestionCompany(array $questionCompanyData)
    {
        $questionCompany = QuestionCompany::create([
            'user_id' => $questionCompanyData['user_id'],
            'body' => $questionCompanyData['body'],
            'phone_number' => $questionCompanyData['phone_number'],
        ]);

        return $questionCompany;
    }
}
