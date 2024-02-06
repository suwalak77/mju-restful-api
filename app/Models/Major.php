<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    use HasFactory;

    protected $primaryKey = 'major_id';
    public function major() {
        return $this->belongsTo(Major::class, 'major_id', 'major_id');  }

}
