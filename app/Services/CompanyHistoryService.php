<?php

namespace App\Services;

use App\Models\CompanyHistory;
use App\Traits\HasImage;

class CompanyHistoryService
{
    use HasImage;
    private $imgPath = 'company_history';
    public function createCompanyHistory(array $companyHistoryData): CompanyHistory
    {
        $companyHistory = CompanyHistory::create([
            'description' => $companyHistoryData['histories-description'],
            'image_url' => $this->uploadImage($companyHistoryData['histories-img'], $this->imgPath),
        ]);

        return $companyHistory;
    }

    public function updatecompanyHistory(array $companyHistoryData)
    {
        $companyHistory = companyHistory::find($companyHistoryData['id']);
        $existingImageUrl = $companyHistory->image_url;

        $updateData = [
            'description' => $companyHistoryData['histories-description'],
        ];

        if (isset($companyProfileData['histories-img']) && $companyProfileData['histories-img']->isValid()) {
            $newImageUrl = $this->uploadImage($companyProfileData['histories-img'], $this->imgPath);
            $updateData['image_url'] = $newImageUrl;

            if ($existingImageUrl) {
                unlink(public_path($existingImageUrl));
            }
        }

        return $companyHistory->update($updateData);
    }
}
