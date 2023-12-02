<?php

namespace App\Http\Traits;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;

Trait checkNewOrUpdatedRecordTraits
{ 
    function checkNewOrUpdatedRecord($model, $minutes = 1)
    {
        try {
            $true = 1;
            $false = 0;

            // Get the latest record's creation and update timestamps
            $latestRecord = $model::latest()->first();

            if (!$latestRecord) {
                // No records exist
                return $false;
            }

            $createdAt = $latestRecord->created_at;
            $updatedAt = $latestRecord->updated_at;

            // Check if a new record was added within the last $minutes
            if ($createdAt->gt(Carbon::now()->subMinutes($minutes))) {
                return $true;
            }

            // Check if any record was updated within the last $minutes
            if ($updatedAt->gt(Carbon::now()->subMinutes($minutes))) {
                return $true;
            }

            return $false;
        } catch (\Throwable $th) {
            // Handle exceptions if needed
            return $false;
        }
    }

}