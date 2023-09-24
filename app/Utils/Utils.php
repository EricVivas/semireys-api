<?php

namespace App\Utils;

class Utils
{
    public static function saveFile($document, $path): string
    {
        $document_path = $document->store($path);
        $document_path = str_replace("public", "storage", $document_path);
        $document_path = ENV('APP_URL') . $document_path;
        return $document_path;
    }
}