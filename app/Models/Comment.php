<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory, Notifiable,  SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'form_id',
        'user_id',
        'comment'

    ];

    protected $table = "comments";

    public function form()
    {
        return $this->belongsTo('App\Models\Form');

    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');

    }

    public static function comments($id){

        return Comment::where('form_id',$id)->with('user','form')->get();
    }
}
