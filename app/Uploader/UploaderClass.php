<?php

namespace App\Uploader;

use Exception;

class UploaderClass
{
    private $fileName = 'photo_check';
    private $uploaderDir = 'images/';
    private $uploadFileName;

    // upload file
    public function uploaderFileBrowser() {
        
        try {
            move_uploaded_file($_FILES["$this->fileName"]['tmp_name'], 
            $_FILES["$this->fileName"]['name']);
        } catch (Exception $exeption) {
            echo $exeption->getMessage();
        }
    }

    // moving file in directory of images and rename file uniqu name
    private function movingFile() {
        $this->uploadFileName = uniqid() . '.png';
    }
}