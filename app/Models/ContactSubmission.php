<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactSubmission extends Model
{
    protected $fillable = ['first_name','last_name','email','phone','message'];

    public function images()
    {
        return $this->hasMany(ContactImage::class);
    }
}