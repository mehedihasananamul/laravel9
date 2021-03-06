<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'uid','title', 'description'
    ];    
    public function user(){
        return $this->belongsTo(User::class, 'uid')->withDefault([
            'name'=>'Guest'
        ]);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class,'post_tag','post_id','tag_id')
                                    ->withTimestamps()
                                    ->withPivot('status');
    }

}
