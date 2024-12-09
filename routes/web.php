<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('Home');

Route::get('/paramecia' , function(){
    $cards = [
        [
            'title' => "Ope Ope no Mi",
            'img' => "./media/Ope_Ope_no_Mi.webp"
        ],
        [
            'title' => "Hana Hana no Mi",
            'img' => "./media/Hana_Hana_no_Mi.webp"
        ],
        [
            'title' => "Horo Horo no Mi",
            'img' => "./media/Horo_Horo_no_Mi.webp"
        ],
        [
            'title' => "Ito Ito no Mi",
            'img' => "./media/Ito_Ito_no_Mi.webp"
        ],
        [
            'title' => "Yomi Yomi no Mi",
            'img' => "./media/Yomi_Yomi_no_Mi.webp"
        ],
    ];
    return view('paramecia' , ['cards' => $cards]);
})->name('Paramecia');

Route::get('/zoan' , function(){
    $cards = [
        [
            'title' => "Hito Hito no Mi, Model: Nika",
            'img' => "./media/Gomu_Gomu_no_Mi_Infobox.webp"
        ],
        [
            'title' => "Uo Uo no Mi, Model: Seiryu",
            'img' => "./media/Uo_Uo_no_Mi_Model_Seiryu_Infobox.webp"
        ],
        [
            'title' => "Neko Neko no Mi, Model: Leopard",
            'img' => "./media/Neko_Neko_no_Mi_Model_Leopard_Infobox.webp"
        ],
        [
            'title' => "Inu Inu no Mi, Model: Okuchi no Makami",
            'img' => "./media/Inu_Inu_no_Mi_Model_Okuchi_no_Makami_Infobox.webp"
        ],
        [
            'title' => "Hito Hito no Mi",
            'img' => "./media/Hito_Hito_no_Mi_Infobox.webp"
        ],
    ];
    return view('zoan' , ['cards' => $cards]);
})->name('Zoan');

Route::get('/logia' , function(){
    $cards = [
        [
            'title' => "Moku Moku no Mi",
            'img' => "./media/Moku Moku no Mi.webp"
        ],
        [
            'title' => "Suna Suna no Mi",
            'img' => "./media/Suna Suna no Mi.webp"
        ],
        [
            'title' => "Mera Mera no Mi",
            'img' => "./media/Mera Mera no Mi.webp"
        ],
        [
            'title' => "Goro Goro no Mi",
            'img' => "./media/Goro Goro no Mi.webp"
        ],
        [
            'title' => "Yami Yami no Mi",
            'img' => "./media/Yami Yami no Mi.webp"
        ],
    ];
    return view('logia' , ['cards' => $cards]);
})->name('Logia');