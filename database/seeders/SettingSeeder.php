<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'face'=>'https://facebook.com',
            'email'=>'example@email.com',
            'info_ar'=>'Info Arabic',
            'instagram'=>'https://instagram.com',
            'name_ar'=>'Name Ar',
            'phone'=>'0987654321',
            'youtube'=>'https://youtube.com',
            'twitter'=>'https://twitter.com',
            'name_en'=>'Name En',
            'name_tr'=>'Name Tr'
        ]);
    }
}
