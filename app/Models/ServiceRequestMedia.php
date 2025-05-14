<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceRequestMedia extends Model
{
    protected $fillable = ['file_path'];
    public function request() {
        return $this->belongsTo(ServiceRequest::class);
    }
}
