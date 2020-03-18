<?php

namespace Kilamieaz\Indogram\Components;

use Cms\Classes\ComponentBase;
use Kilamieaz\Indogram\Models\Post;
use Input;
use Validator;
use Redirect;
use Flash;
use ValidationException;
use System\Models\File;
use Auth;

class CreatePosts extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Posts Create',
            'description' => 'Create posts'
        ];
    }

    public function onSubmit()
    {
        // Get request data
        $input = Input::only(['description', 'image']);
        $data = $this->data($input, ['user_id'=> Auth::getUser()->id]);
        // Validate request
        $this->validate($data);
        // create data
        $post = Post::create($data);
        $post->image = Input::file('image');
        $post->save();
    }

    public function data($request, $user_id)
    {
        return array_merge($request, $user_id);
    }

    protected function validate(array $data)
    {
        // Validate request
        $rules = [
            'description' => 'required',
            'image' => 'required',
        ];
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
    }

    public function onImageUpload() {
        $image = Input::all();

        $file = (new File())->fromPost($image['image']);

        return[
            '#imageResult' => '<img src="' . $file->getThumb(200, 200, ['mode' => 'crop']) . '" >'
        ];
    }
}
