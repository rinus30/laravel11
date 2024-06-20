<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Kuirinus']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [   
            'id'    => '1',
            'slug'  => 'judul-artikel-1',
            'title' => 'Judul artikel 1',
            'author' => 'Kuirinus Ole',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione, nam! Deleniti ex nihil laboriosam laudantium impedit perferendis non error temporibus enim expedita quas nesciunt aperiam est necessitatibus, soluta deserunt! Rerum?'

        ],
        [   
            'id'    => '2',
            'slug'  => 'judul-artikel-2',
            'title' => 'Judul artikel 2',
            'author' => 'Kuirinus Ole',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque nisi impedit voluptatum molestiae deserunt illum id, vitae quibusdam, facilis voluptatibus eius? Nihil optio accusantium quidem officiis at sequi, voluptatem, explicabo commodi in aliquid, perferendis iste.'
            
        ]
    ]]);
});

Route::get('/posts/{id}', function($slug){
    $posts = [
        [   
            'id'    => '1',
            'slug'  => 'judul-artikel-1',
            'title' => 'Judul artikel 1',
            'author' => 'Kuirinus Ole',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione, nam! Deleniti ex nihil laboriosam laudantium impedit perferendis non error temporibus enim expedita quas nesciunt aperiam est necessitatibus, soluta deserunt! Rerum?'

        ],
        [   
            'id'    => '2',
            'slug'  => 'judul-artikel-2',
            'title' => 'Judul artikel 2',
            'author' => 'Kuirinus Ole',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque nisi impedit voluptatum molestiae deserunt illum id, vitae quibusdam, facilis voluptatibus eius? Nihil optio accusantium quidem officiis at sequi, voluptatem, explicabo commodi in aliquid, perferendis iste.'
            
        ]
        ];

        $post = Arr::first($posts, function ($post) use ($slug) {
            return $post['slug'] == $slug;
        });

        return view('post', ['title' => 'Singel Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Hubungi Kami']);
});