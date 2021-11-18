<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul 1",
            "slug" => "judul-1",
            "author" => "Powder",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis esse reprehenderit deserunt animi recusandae at autem quia iure eveniet ipsa nobis porro nemo ea, sapiente officia earum totam enim aliquam ut temporibus doloribus vitae sequi aperiam qui. Molestias libero ex aut blanditiis asperiores harum, ducimus dolore excepturi, repellat aliquid rem molestiae itaque quibusdam quis magnam temporibus illo, voluptatum tempore. Harum saepe fugit amet enim possimus aliquam recusandae! Aliquam error soluta excepturi nobis quidem et ea, nisi dicta doloremque dolores in?"
        ],
        [
            "title" => "Judul 2",
            "slug" => "judul-2",
            "author" => "Vi",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi, modi dolorum iste fugiat harum doloribus qui illo ad sunt a culpa nemo expedita non. Eaque quia eveniet aspernatur earum corporis, iure voluptatum possimus voluptatem in cupiditate. Necessitatibus, nisi harum! Quidem fugit earum sapiente possimus optio saepe enim cumque debitis repellat odio harum maiores error molestias eos facere pariatur, laboriosam dolores soluta modi impedit, magnam consequuntur aliquam. Suscipit facere possimus quos blanditiis reiciendis, ducimus delectus libero, similique fugit exercitationem hic voluptatibus aliquid quis qui autem. Eos praesentium molestias soluta porro ipsa aperiam quisquam. Modi doloribus veritatis accusamus et! Corporis, hic enim!"
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();        

       return $posts -> firstWhere('slug', $slug);
    }
}
