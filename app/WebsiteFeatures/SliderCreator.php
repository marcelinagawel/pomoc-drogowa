<?php

namespace App\WebsiteFeatures;

class SliderCreator
{
    public $imagesPath;
    public $alt;

    function __construct($imagesPath, $alt)
    {
        $this->imagesPath = $imagesPath;
        $this->alt = $alt;
    }

    public function renderSlider()
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
        $renderHtml[] = '<div class="row">';
        $renderHtml[] = '<div id="sliderControl" class="carousel slide" data-ride="carousel" data-wrap="true" data-interval="3000">';
        $renderHtml[] = '<div class="carousel-inner">';

        foreach ($images as $key => $image) {
            $imgPath = asset('img/'.$this->imagesPath.'/'.$image);
            if ($key == 0) {
                $renderHtml[] = '<div class="carousel-item active">
                                     <img src="'.$imgPath.'" alt="'.$this->alt.'" class="d-block w-100 slider-item">
                             </div>';
            } else {
                $renderHtml[] = '<div class="carousel-item">
                                     <img src="'.$imgPath.'" alt="'.$this->alt.'" class="d-block w-100 slider-item">
                             </div>';
            }
        }

        $renderHtml[] = '</div>';
        $renderHtml[] = ' <a class="carousel-control-prev" href="#sliderControl" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only"></span>
                        </a>
                        <a class="carousel-control-next" href="#sliderControl" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only"></span>
                        </a>';
        $renderHtml[] = '</div>';
        $renderHtml[] = '</div">';

        return $renderHtml;
    }

    public function getExtension($file)
    {
        $n = strrpos($file,"."); if($n===false) return "";return substr($file,$n+1);
    }
}
