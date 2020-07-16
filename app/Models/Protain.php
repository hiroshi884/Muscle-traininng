<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class Protain extends Model
{
    use SoftDeletes;

    protected $fillable = ['name','body', 'things','weights','how_many', 'sets','date','body']; // ★ ここを追加！

    public function user()
{
    return $this->belongsTo(User::class);
}
}
