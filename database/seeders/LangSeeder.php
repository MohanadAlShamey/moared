<?php

namespace Database\Seeders;

use App\Models\Lang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $string='[
{"id":"1","word":"home","ar":"الرئيسية","en":"Home","tr":"Home","created_at":"2022-09-11 08:33:49","updated_at":"2022-09-11 08:33:49"},
{"id":"2","word":"call_us","ar":"اتصل بنا ","en":"Call Us","tr":"Call Us","created_at":"2022-09-12 08:56:09","updated_at":"2022-09-12 08:56:09"},
{"id":"3","word":"lang","ar":"اللغة","en":"Languages","tr":"Languages","created_at":"2022-09-12 09:10:20","updated_at":"2022-09-12 09:10:20"},
{"id":"4","word":"ar","ar":"العربية","en":"Arabic","tr":"Arabic","created_at":"2022-09-12 09:11:25","updated_at":"2022-09-12 09:11:25"},
{"id":"5","word":"en","ar":"الإنكليزية","en":"English","tr":"English","created_at":"2022-09-12 09:11:56","updated_at":"2022-09-12 09:11:56"},
{"id":"6","word":"tr","ar":"التركية","en":"Turkey","tr":"Turkey","created_at":"2022-09-12 09:12:21","updated_at":"2022-09-12 09:12:21"},
{"id":"7","word":"service","ar":"خدماتنا","en":"service","tr":"service","created_at":"2022-09-12 10:08:54","updated_at":"2022-09-12 10:08:54"},
{"id":"8","word":"product","ar":"منتجاتنا","en":"Product","tr":"Product","created_at":"2022-09-12 10:10:15","updated_at":"2022-09-12 10:14:39"},
{"id":"9","word":"blog","ar":"المدونة","en":"blog","tr":"blog","created_at":"2022-09-12 10:10:46","updated_at":"2022-09-12 10:10:46"},
{"id":"10","word":"news","ar":"الأخبار","en":"news","tr":"news","created_at":"2022-09-12 10:11:11","updated_at":"2022-09-12 10:11:11"},
{"id":"11","word":"about_us","ar":"من نحن ","en":"about","tr":"about","created_at":"2022-09-12 10:11:53","updated_at":"2022-09-12 10:11:53"},
{"id":"12","word":"last_news","ar":"أخر الأخبار","en":"last_news","tr":"last_news","created_at":"2022-09-12 10:21:44","updated_at":"2022-09-12 10:21:44"},
{"id":"13","word":"read_more","ar":"المزيد","en":"More","tr":"More","created_at":"2022-09-12 11:53:31","updated_at":"2022-09-12 11:53:31"},
{"id":"14","word":"porto","ar":"أعمالنا","en":"Portfolio","tr":"portfolio","created_at":"2022-09-12 12:08:38","updated_at":"2022-09-12 12:08:38"},
{"id":"15","word":"partner","ar":"شركاؤنا ","en":"Partners","tr":"PartnersTr","created_at":"2022-09-12 13:41:31","updated_at":"2022-09-12 13:41:31"},
{"id":"16","word":"testimonial","ar":"قالوا عنا ","en":"Testimonial ","tr":"Testimonial ","created_at":"2022-09-13 08:25:05","updated_at":"2022-09-13 08:25:05"},
{"id":"17","word":"all","ar":"الكل ","en":"All","tr":"All","created_at":"2022-09-13 08:26:19","updated_at":"2022-09-13 08:26:19"},
{"id":"18","word":"team","ar":"فريقنا المتميز ","en":"Our Professionals Team","tr":"Our Professionals Team","created_at":"2022-09-13 08:35:57","updated_at":"2022-09-13 08:35:57"}
]';
        $langs=json_decode($string);
        foreach ($langs as $lang){
           // dd($lang['word']);
            Lang::create([
                'word'=>$lang->word,
                'ar'=>$lang->ar,
                'en'=>$lang->en,
                'tr'=>$lang->tr,
            ]);
        }
    }
}
