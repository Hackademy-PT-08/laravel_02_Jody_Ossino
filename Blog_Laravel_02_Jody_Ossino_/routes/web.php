<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/about-information', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    $services = [
        ['id' => 1, 'name' => 'HTML', 'category' => 'Front-End', 'img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/640px-HTML5_logo_and_wordmark.svg.png'],
        ['id' => 2, 'name' => 'CSS', 'category' => 'Front-End', 'img' => 'https://upload.wikimedia.org/wikipedia/commons/d/d5/CSS3_logo_and_wordmark.svg'],
        ['id' => 3, 'name' => 'Javascript', 'category' => 'Front-End' , 'img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/1200px-Unofficial_JavaScript_logo_2.svg.png'],
        ['id' => 4, 'name' => 'Git', 'category' => 'N/D', 'img' =>'https://www.biteinteractive.com/wp-content/uploads/2021/05/git-vs-github.png'],
        ['id' => 5, 'name' => 'PHP', 'category' => 'Back-End' , 'img' =>'https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.svg.png'],
        ['id' => 6, 'name' => 'Laravel', 'category' => 'Back-End' , 'img' =>'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png'],
    ];
    return view('services', ['services' => $services] );
})->name('services');





Route::get('/details/{id}', function ($id) {
       
    $services = [
        ['id' => 1, 'name' => 'HTML', 'category' => 'Front-End', 'img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/640px-HTML5_logo_and_wordmark.svg.png'],
        ['id' => 2, 'name' => 'CSS', 'category' => 'Front-End', 'img' => 'https://upload.wikimedia.org/wikipedia/commons/d/d5/CSS3_logo_and_wordmark.svg'],
        ['id' => 3, 'name' => 'Javascript', 'category' => 'Front-End' , 'img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/1200px-Unofficial_JavaScript_logo_2.svg.png'],
        ['id' => 4, 'name' => 'Git', 'category' => 'N/D', 'img' =>'https://www.biteinteractive.com/wp-content/uploads/2021/05/git-vs-github.png'],
        ['id' => 5, 'name' => 'PHP', 'category' => 'Back-End' , 'img' =>'https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.svg.png'],
        ['id' => 6, 'name' => 'Laravel', 'category' => 'Back-End' , 'img' =>'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png'],
    ];
    
        foreach($services as $service){
            if($id == $service['id']){
                
                return view('details', ['service' => $service]);
            }
        }
    })->name('details');
    
    
