<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front.master');
});
Route::get('/dashboard','BackController@dashboard')->name('dashboard');

Route::get('/slider','SliderController@slider')->name('slider');

Route::get('/resumePDF','ResumeController@resumePDF')->name('resumePDF');

Route::get('/about','AboutController@about')->name('about');

Route::get('/services','ServiceController@service')->name('service');

Route::get('/clients','ClientController@clients')->name('clients');

Route::get('/quotes','QuoteController@quotes')->name('quotes');

Route::get('/education','EducationController@education')->name('education');

Route::get('/experience','ExperienceController@experience')->name('experience');

Route::get('/skills','SkillController@skill')->name('skill');

Route::get('/courses','CourseController@course')->name('course');

Route::get('/seminar-workshop','SeminarController@seminar')->name('seminar');

Route::get('/achievements','AchievementController@achievement')->name('achievement');

Route::get('/portfolio-menu','PortfolioController@menu')->name('menu');

Route::get('/portfolio', 'PortfolioController@portfolio')->name('portfolio');

Route::get('/gallery','GalleryController@gallery')->name('gallery');

Route::get('/blog','BlogController@blog')->name('blog');

Route::get('/contact-info','ContactController@contactInfo')->name('contactInfo');

Route::get('/connected-link','ContactController@contactLink')->name('contactLink');