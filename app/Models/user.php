<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'nama_pengguna',
        'nama_toko',
        'nomor_identitas',
        'alamat',
        'telepon',
        'username',
        'email',
        'password',
        'foto_profile',
    ];
}
