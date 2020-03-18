<?php

namespace Kilamieaz\Indogram\Components;

use Cms\Classes\ComponentBase;
use Kilamieaz\Indogram\Models\Post;

class IndexPosts extends ComponentBase
{
    public $posts;

    public function componentDetails()
    {
        return [
            'name' => 'Posts List',
            'description' => 'List of posts'
        ];
    }

    public function onRun()
    {
        $this->posts = $this->loadPosts();
    }

    protected function loadPosts()
    {
        $slug = $this->controller->param('slug');

        return $slug ? Post::with('tags')->whereHas('tags', function ($query) use ($slug) {
            $query->where('slug', $slug);
        })->latest()->get() : Post::latest()->get();
    }
}
