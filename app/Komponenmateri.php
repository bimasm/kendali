<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komponenmateri extends Model
{
    protected $table = "komponenmateri";
    public function materi()
    {
        return $this->belongsTo(Materi::class);
    }
}
