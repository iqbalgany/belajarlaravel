<?php

namespace App\models;

use Illuminate\Support\Arr;

class Post
{

    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Judul Artikel 1',
                'slug' => 'judul-artikel-1',
                'author' => 'Iqbal gany',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae, accusantium iste
            reiciendis totam
            impedit cum porro. Illo nesciunt, aperiam quae rem sit aliquid repudiandae quibusdam placeat esse!
            Praesentium, impedit odit?',

            ],
            [
                'id' => 2,
                'title' => 'Judul Artikel 2',
                'slug' => 'judul-artikel-2',
                'author' => 'Maruli',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae, accusantium iste
            reiciendis totam
            impedit cum porro. Illo nesciunt, aperiam quae rem sit aliquid repudiandae quibusdam placeat esse!
            Praesentium, impedit odit?',

            ],
            [
                'id' => 3,
                'title' => 'Judul Artikel 3',
                'slug' => 'judul-artikel-3',
                'author' => 'Rio',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae, accusantium iste
            reiciendis totam
            impedit cum porro. Illo nesciunt, aperiam quae rem sit aliquid repudiandae quibusdam placeat esse!
            Praesentium, impedit odit?',

            ],
        ];
    }

    public static function find($slug)
    {
        return Arr::first(static::all(), fn($post) => $post['slug'] == $slug) ?? abort(404);
    }
}
