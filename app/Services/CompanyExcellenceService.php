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
        $storeImage = $image->storeAs('images/company_excellences', $imageName, 'public');
        $imagePath = Storage::url($storeImage);

        return $imagePath;
    }

    public function checkFileExist($filePath)
    {
        return file_exists($filePath);
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

    public function updateCompanyExcellence(array $companyExcellenceData)
    {
        $companyExcellence = CompanyExcellence::find($companyExcellenceData['id']);
        $existingImageUrl = $companyExcellence->image_url;

        $updateData = [
            'title' => $companyExcellenceData['excellence-title'],
            'description' => $companyExcellenceData['excellence-description']
        ];

        if (isset($companyExcellenceData['excellence-img']) && $companyExcellenceData['excellence-img']->isValid()) {
            $newImageUrl = $this->uploadImage($companyExcellenceData['excellence-img']);
            $updateData['image_url'] = $newImageUrl;

            if ($existingImageUrl) {
                unlink(public_path($existingImageUrl));
            }
        }
        return $companyExcellence->update($updateData);
    }
}
