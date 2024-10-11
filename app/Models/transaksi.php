<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';
    protected $fillable = ['pelanggan_id', 'menu_id', 'kuantitas', 'total', 'status'];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
