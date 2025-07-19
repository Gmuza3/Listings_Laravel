<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listing extends Model
{
   use HasFactory;

   protected $fillable =[
      'title',
      'description',
      'website',
      'email',
      'location',
      'user_id',
      'tags',
      'company'
   ];


}
