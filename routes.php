<?php

use Symfony\Component\Finder\Finder;

Route::get('/', function(){
//    $files = Finder::create()->in(app_path())
//                             ->name('*, txt'))
//                               ->contains('{example-key}');
//    foreach ($files as $file) {
//         $contents = File::get($file->getRealPath());
//         $updated = str_replace('{example-key}', 'UPDATED!', $contents);
//         File::put($file->getRealPath(), $updated);
      return view ('welcome');

});

Route::get('that was a bug', function(){
// here

});

Route::resourse('reports', 'RepostsController');

// Whatever logic to add