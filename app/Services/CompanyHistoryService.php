<?php

namespace App\Services;

use App\Models\CompanyHistory;

class CompanyHistoryService
{
    public function createCompanyHistory(array $companyHistory): CompanyHistory
    {
        $companyHistoryData = CompanyHistory::create([
            'description' => $companyHistory['description'],
            'image_url' => $companyHistory['image_url'],
        ]);

        return $companyHistoryData;
    }

    public function updatecompanyHistory(array $companyHistoryData)
    {
        $companyHistory = companyHistory::find($companyHistoryData['id']);
        $existingImageUrl = $companyHistory->image_url;

        $updateData = [
            'description' => $companyHistoryData['description'],
        ];

        if (isset($companyProfileData['history_image']) && $companyProfileData['history_image']->isValid()) {
            $newImageUrl = $this->uploadImage($companyProfileData['history_image'], $this->imgPath);
            $updateData['image_url'] = $newImageUrl;

            if ($existingImageUrl) {
                unlink(public_path($existingImageUrl));
            }
        }

        return $companyHistory->update($updateData);
    }
}
