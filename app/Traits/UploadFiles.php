<?php

namespace App\Traits;

use Error;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd;

trait UploadFiles
{

    private const IMAGE_EXTENSIONS = ['jpg', 'jpeg', 'png', 'gif'];

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
        if (in_array($file->extension(), self::IMAGE_EXTENSIONS)) {

            $manager = new ImageManager(
                new GD\Driver()
            );
            $image = $manager->read($file)->toWebp(30);
            $filename = uniqid() . '.webp';
            $filePath = "$folder/" . $filename;
            $path = "public/" . $filePath;
            Storage::put($path, (string) $image);

            return $filePath;
        }

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
