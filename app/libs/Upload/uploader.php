<?php

/**
 * @author Ondřej Dočkal <www.dockycode.eu>
 * e-mail docky0@email.cz
 */

namespace App\Libs\Upload;
use Nette\Utils\Image;

/**
 * HomepagePresenter
 * @package App\Modules\FrontModule\Presenters
 */
class Uploader {

    private $file;

    public function __construct($file) {
        $this->file = $file;
    }
    
    public function save($dir, $name = null, $width = null, $height = null) {

    }

    public function getWidth() {

    }

    public function getHeight() {

    }

}
