<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //
    protected $fillable=['title','desc','user_id','duration','balance','img','adress','status','category_id'];
    public function offers()
    {
        return $this->hasMany('App\Offer');

    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }

     public function category()
    {
        return $this->belongsTo('App\Category');

     public function freelancers()
    {
        return $this->hasMany('App\User')->where('role','freelancer');
    }
}
