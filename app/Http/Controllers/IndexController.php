<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WebsiteFeatures\GalleryCreator;
use App\WebsiteFeatures\SliderCreator;

class IndexController extends Controller
{
    public function index()
    {
        $slider = new SliderCreator('carTrade', 'Auto handel');

        return view('index',['slider' => $slider->renderSlider()]);
    }
}
