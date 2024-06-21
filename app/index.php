<?php

use App\Uploader\UploaderClass;

require_once __DIR__ . "/vendor/autoload.php";


$uploader = new UploaderClass();
$uploader->uploaderFileBrowser();

header('Location:/');
exit;