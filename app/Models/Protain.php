<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class Protain extends Model
{
    use SoftDeletes;

    protected $fillable = ['name','body', 'things','weights','how_many', 'sets','date','body',];

    public function user()
{
    return $this->belongsTo(User::class);
}
public function replies()
{
    return $this->hasMany(Reply::class);
}
public function likes()
{
    return $this->hasMany(Like::class);
}

public function is_liked_by_auth_user()
{
  $id = Auth::id();

  $likers = array();
  foreach($this->likes as $like) {
    array_push($likers, $like->user_id);
  }

  if (in_array($id, $likers)) {
    return true;
  } else {
    return false;
  }
}
}
