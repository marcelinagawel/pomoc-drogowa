<?php

namespace App\WebsiteFeatures;

class CarDetailingCreator
{
    public $imagesPath;
    public $alt;

    function __construct($imagesPath, $alt)
    {
        $this->imagesPath = $imagesPath;
        $this->alt = $alt;
    }

    public function renderCarDetailing()
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

        $imagesToRender = [];
        foreach ($images as $key => $image) {
            $explodedImage = explode('.', $image);
            if (array_search($explodedImage[0].'_po.'.$explodedImage[1], $images)) {
                $imagesToRender[$image] = $explodedImage[0].'_po.'.$explodedImage[1];
            }
        }


        $i = 1;
        foreach ($imagesToRender as $key => $item) {
            $imgBefore = asset('img/'.$this->imagesPath.'/'.$key);
            $imgAfter = asset('img/'.$this->imagesPath.'/'.$item);
            $renderHtml[] = '<div class="row">';
            $renderHtml[] = '<div class="col-lg-6 col-md-12"> <img class="img-detailing floated-image-detailing" src="'.$imgBefore.'" alt="'.$this->alt.'"> </div>';
            $i++;
            $renderHtml[] = '<div class="col-lg-6 col-md-12"> <img class="img-detailing" src="'.$imgAfter.'" alt="'.$this->alt.'"> </div>';
            $renderHtml[] = '</div>';
            $i++;
        }


        return $renderHtml;
    }

    public function getExtension($file)
    {
        $n = strrpos($file,"."); if($n===false) return "";return substr($file,$n+1);
    }
}
