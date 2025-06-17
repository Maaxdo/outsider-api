<?php

namespace App\Traits;

use Error;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

trait UploadFiles
{

    public function uploadFiles($documentFiles, $folder, $max = 4)
    {
        $documents = [];

        if (count($documentFiles) > $max) {
            throw new Error("Maximum of $max documents are allowed for upload");
        }

        foreach ($documentFiles as $file) {
            $fileName = $file->store($folder, 'public');
            array_push($documents, $fileName);
        }

        return $documents;
    }

    public function uploadFile($file, $folder)
    {
        return $file->store($folder, 'public');
    }

    public function getFilePath(?string $path)
    {

        if (!$path) {
            return null;
        }

        $filePath = asset('storage/' . $path);

        return $filePath;
    }
}
