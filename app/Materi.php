<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    protected $table = "materi";
    public function komponen()
    {
        return $this->hasMany(Komponenmateri::class, 'id_materi');
    }
}
