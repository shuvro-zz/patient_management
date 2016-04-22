<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
   // protected $fillable = ['name', 'email', 'contact', 'CNIC', 'age','sex','bloodGroup','disease','allergy','medicine','diagnosis','comments'];
   protected $guarded = ['id'];
//     public function user()
// {
//     return $this->belongsTo('App\User');
// }
//
// public function getName()
// {
//     return $this->name;
// }

}
