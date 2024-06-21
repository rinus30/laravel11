<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
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
    }

    public static function find($slug)
    {
        $post = Arr::first(static::all(), fn ($post)=> $post['slug'] === $slug);
        if (!$post) {
            abort(404);
        }
        return $post;
    }
}
