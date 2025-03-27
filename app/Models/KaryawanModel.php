<?php

namespace App\Models;
use CodeIgniter\Model;

class KaryawanModel extends Model
{
    protected $table = 'karyawan';
    protected $allowedFields = ['gaji_pokok', 'absen'];
}
