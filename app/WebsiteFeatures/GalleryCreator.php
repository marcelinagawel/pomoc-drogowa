<?php

namespace App\WebsiteFeatures;

class GalleryCreator
{
    public $imagesPath;
    public $alt;

    function __construct($imagesPath, $alt)
    {
        $this->imagesPath = $imagesPath;
        $this->alt = $alt;
    }

    public function renderGallery()
    {

        $files = scandir(public_path().'/img/'.$this->imagesPath);
        $images = [];

        foreach ($files as $key => $file) {
            if ($file == "." || $file == "..") {
                continue;
            }
            $extension = $this->getExtension($file);
            if ($extension == 'jpg' || $extension == "webp" || $extension == "png" || $extension == "PNG") {
                $images[] = $file;
            }
        }
        $renderHtml = [];
        foreach ($images as $key => $image) {
            $imgPath = asset('img/'.$this->imagesPath.'/'.$image);

            $renderHtml[] = '<div class="col">
                                 <a href="'.$imgPath.'" data-lightbox="roadtrip">
                                     <img src="'.$imgPath.'" alt="'.$this->alt.'" class="foto">
                                 </a>
                             </div>';
//            if ($key == 20) {
//                return $renderHtml;
//            }
        }



        return $renderHtml;
    }

    public function getExtension($file)
    {
        $n = strrpos($file,"."); if($n===false) return "";return substr($file,$n+1);
    }
}
