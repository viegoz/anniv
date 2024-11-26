<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnniversaryController extends Controller
{
    public function index()
    {
        $main_title = "HAPPY ANNIVERSARY, Zahira & Viego";
        $paragraph = "Hari ini, aku ingin menyampaikan betapa bersyukurnya aku memiliki kamu di hidupku. Kamu adalah cahaya yang menerangi hari-hariku, dan aku berharap cinta ini terus tumbuh selamanya.";
        $photos = [
            'photo1.jpg', 'photo2.jpg', 'photo3.jpg', 'photo4.jpg', 'photo5.jpg',
            'photo6.jpg', 'photo7.jpg', 'photo8.jpg', 'photo9.jpg', 'photo10.jpg',
            'photo11.jpg', 'photo12.jpg'
        ];

        return view('anniversary', compact('main_title', 'paragraph', 'photos'));
    }
}
