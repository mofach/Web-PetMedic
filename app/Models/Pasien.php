<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pasien extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_pasien',
        'nama_pasien',
        'nomor_hp',
        'alamat',
        'nama_hewan',
        'jenis_hewan',
        'ras',
        'jenis_kelamin_hewan',
        'tanggal_lahir_hewan'
    ];

    public function administrasi(): HasMany
    {
        return $this->hasMany(Administrasi::class);
    }
}
