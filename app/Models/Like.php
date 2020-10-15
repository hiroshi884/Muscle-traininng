<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{ protected $fillable = ['protain_id','user_id'];
  

   public function protain()
   {
     return $this->belongsTo(Protain::class);
   }
 
   public function user()
   {
     return $this->belongsTo(User::class);
   }
}
