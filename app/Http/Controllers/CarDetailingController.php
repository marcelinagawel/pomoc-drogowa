<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WebsiteFeatures\GalleryCreator;
use App\WebsiteFeatures\SliderCreator;
use App\WebsiteFeatures\CarDetailingCreator;

class CarDetailingController extends Controller
{
    public function index()
    {
        $slider = new SliderCreator('carDetailing','Car detailing');

        return view('carDetailing', ['carDetailing' => $slider->renderSlider()]);
    }
}
