<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class UploadFiles
{

    public static function saveFile($file, $type, $path, $query)
    {
        $url = $file->store('public/' . $path);
        $save = $query->uploads()->create([
            'url' => substr($url, 7),
            'type' => $type
        ]);
        if ($save) return true;
    }

    public static function updateFile($file, $path, $query, $queryFile)
    {
        $url = $file->store('public/' . $path);

        if (self::deleteFile($queryFile))
            $queryFile->url = substr($url, 7);

        if ($query->uploads()->save($queryFile))
            return true;
    }

    public static function deleteFile($queryFile)
    {
        Storage::delete('public/' . $queryFile->url);
        $queryFile->delete();
        return true;
    }
}
