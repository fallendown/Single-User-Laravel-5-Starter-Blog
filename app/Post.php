<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

    /**
     * Set the fillable fields for the Post model
     * @var array
     */
    protected $fillable = ['user_id', 'title', 'slug', 'body', 'cover'];

    /**
     * Create the relationship to the User Model
     */
    public function user()
    {
        $this->belongsTo('User');
    }
}
