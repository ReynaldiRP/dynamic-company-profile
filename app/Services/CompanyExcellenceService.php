<?php

namespace App\Services;

use App\Models\CompanyExcellence;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class CompanyExcellenceService
{

    public function uploadImage(UploadedFile $image): string
    {
        $imageName = time() . '.' . $image->extension();
        $storeImage = $image->storeAs('images', $imageName, 'public');
        $imagePath = Storage::url($storeImage);

        return $imagePath;
    }

    public function createCompanyExcellence(array $companyExcellenceData): CompanyExcellence
    {
        $companyExcellence = CompanyExcellence::create([
            'title' => $companyExcellenceData['excellence-title'],
            'description' => $companyExcellenceData['excellence-description'],
            'image_url' => $this->uploadImage($companyExcellenceData['excellence-img'])
        ]);

        return $companyExcellence;
    }

    public function updateCompanyExcellence()
    {
    }
}
