<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sale extends Model
{
    use HasFactory;
    public $timestamps = FALSE;

    protected $table = 'sales';

    protected $fillable = [
        'sold_by'
    ];
}
