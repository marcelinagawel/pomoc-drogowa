<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WebsiteFeatures\GalleryCreator;
use App\WebsiteFeatures\SliderCreator;

class RoadsideAssistanceController extends Controller
{
    public function index()
    {
        $gallery = new GalleryCreator('assistanceGallery', 'Pomoc drogowa');
        $slider = new SliderCreator('assistanceGallery', 'Pomoc drogowa');
        return view('roadsideAssistance', ['gallery' => $slider->renderSlider()]);
    }
}
