<?php namespace momo\Movies\Models;

use Model;

/**
 * Model
 */
class Movie extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'momo_movies_';


    //protected $jsonable = ['actors'];

    /*RELATIONS */

    public $belongsToMany = [
        'genres' =>[
            'momo\Movies\Models\Genre',
            'table'=>'momo_movies_movies_genres',
            'order'=>'genre_title'
        ],

        'actors' =>[
            'momo\Movies\Models\Actor',
            'table'=>'momo_movies_actors_movies',
            'order'=>'name'
        ]
    ];

    public $attachOne = [
        'poster'=>'System\Models\File'
    ];

    public $attachMany = [
        'movie_gallery'=>'System\Models\File'
    ];

    
}