<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceRequest extends Model
{
    protected $fillable = [/* todos los campos del formulario */];
    protected $casts = [
      'work_hours'          => 'array',
      'utilities'           => 'array',
      'sensitive_elements'  => 'array',
    ];
    public function media() {
        return $this->hasMany(ServiceRequestMedia::class);
    }
}