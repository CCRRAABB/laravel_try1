<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable=[
        'title',
        'body',
        'extra',
        'publish_at',
        'user_id'
    ];

    public function setPublishAtAttribute($date)
    {
        $this->attributes['publish_at']=Carbon::createFromFormat('Y-m-d',$date);
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

   public function tag(){
        return $this->belongsToMany('App\Tag');
    }

    public function getTagListAttribute(){
        return $this->tag->lists('id')->toArray();
    }
}
