<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pakta extends Model
{
    use HasFactory;

    protected $table = 'pakta';

    protected $fillable = [
        'id_users',
        'pakta_integritas'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

}
