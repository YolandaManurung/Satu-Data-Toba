<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jumlah_populasi_ternak_unggas extends Model
{
    protected $table='peternakan_jumlah_populasi_ternak_unggas';
    protected $primaryKey='id';
    protected $fillable=['kecamatan','ayam_buras','itik','tahun'];
}