<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

   /*  
   // lista blanca
    protected $fillable = [
        'title',
        'slug',
        'body',
        'category_id',
        'user_id'
    ]; 
    */

    // Lista negra
    protected $guarded = [
        'id',
        'image_url',
        'created_at',
        'updated_at'
    ]; 
}
