<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactImage extends Model
{
    protected $fillable = ['path'];

    public function submission()
    {
        return $this->belongsTo(ContactSubmission::class, 'contact_submission_id');
    }
}