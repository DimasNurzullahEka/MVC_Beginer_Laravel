<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class GuruModel extends Model
{
    public function allData()
    {
        return[
            [
                'nim'=>'3130019003',
                'nama'=>'Dimas Nurzullah',
                'prodi'=>'Sistem Informasi'
            ],
            [
                'nim'=>'2130019003',
                'nama'=>'Ega Nuriyah',
                'prodi'=>'Sistem Analis'
            ],
            [
                'nim'=>'3130019023',
                'nama'=>'Ega Almira',
                'prodi'=>'Sistem Informasi'
            ],
            [
                'nim'=>'3130019026',
                'nama'=>'Ahmad Muthoharun',
                'prodi'=>'Sistem Informasi'
            ]
        ];
    }
}
