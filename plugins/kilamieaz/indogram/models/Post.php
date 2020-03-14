<?php

namespace Kilamieaz\Indogram\Models;

use Model;

/**
 * Post Model
 */
class Post extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'kilamieaz_indogram_posts';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['description', 'user_id'];

    public function getUserIdOptions()
    {
        $users = \Rainlab\User\Models\User::all(['id', 'name']);
        $usersOptions = [];

        $users->each(function ($user) use (&$usersOptions) {
            $usersOptions[$user->id] = $user->name;
        });

        return $usersOptions;
    }

    /**
     * @var array Validation rules for attributes
     */
    public $rules = [
        'description' => 'required',
        'user_id' => 'required'
    ];

    /**
     * @var array Attributes to be cast to native types
     */
    protected $casts = [];

    /**
     * @var array Attributes to be cast to JSON
     */
    protected $jsonable = [];

    /**
     * @var array Attributes to be appended to the API representation of the model (ex. toArray())
     */
    protected $appends = [];

    /**
     * @var array Attributes to be removed from the API representation of the model (ex. toArray())
     */
    protected $hidden = [];

    /**
     * @var array Attributes to be cast to Argon (Carbon) instances
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [
        'user' => [
            'Rainlab\User\Models\User',
            'table' => 'users',
            'order' => 'name'
        ]
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
        'photo' => 'System\Models\File'
    ];
    public $attachMany = [];
}
