<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('langs', function (Blueprint $table) {
            $table->id();
            $table->string('word')->unique();
            $table->string('ar')->nullable();
            $table->string('en')->nullable();
            $table->string('tr')->nullable();
            $table->timestamps();
        });
      /*  DB::unprepared("INSERT INTO `langs` (`id`, `word`, `ar`, `en`, `tr`, `created_at`, `updated_at`) VALUES
(1, 'home', 'الرئيسية', 'Home', 'Home', '2022-09-11 05:33:49', '2022-09-11 05:33:49'),
(2, 'call_us', 'اتصل بنا ', 'Call Us', 'Call Us', '2022-09-12 05:56:09', '2022-09-12 05:56:09'),
(3, 'lang', 'اللغة', 'Languages', 'Languages', '2022-09-12 06:10:20', '2022-09-12 06:10:20'),
(4, 'ar', 'العربية', 'Arabic', 'Arabic', '2022-09-12 06:11:25', '2022-09-12 06:11:25'),
(5, 'en', 'الإنكليزية', 'English', 'English', '2022-09-12 06:11:56', '2022-09-12 06:11:56'),
(6, 'tr', 'التركية', 'Turkey', 'Turkey', '2022-09-12 06:12:21', '2022-09-12 06:12:21'),
(7, 'service', 'خدماتنا', 'service', 'service', '2022-09-12 07:08:54', '2022-09-12 07:08:54'),
(8, 'product', 'منتجاتنا', 'Product', 'Product', '2022-09-12 07:10:15', '2022-09-12 07:14:39'),
(9, 'blog', 'المدونة', 'blog', 'blog', '2022-09-12 07:10:46', '2022-09-12 07:10:46'),
(10, 'news', 'الأخبار', 'news', 'news', '2022-09-12 07:11:11', '2022-09-12 07:11:11'),
(11, 'about_us', 'من نحن ', 'about', 'about', '2022-09-12 07:11:53', '2022-09-12 07:11:53'),
(12, 'last_news', 'أخر الأخبار', 'last_news', 'last_news', '2022-09-12 07:21:44', '2022-09-12 07:21:44'),
(13, 'read_more', 'المزيد', 'More', 'More', '2022-09-12 08:53:31', '2022-09-12 08:53:31'),
(14, 'porto', 'أعمالنا', 'Portfolio', 'portfolio', '2022-09-12 09:08:38', '2022-09-12 09:08:38'),
(15, 'partner', 'شركاؤنا ', 'Partners', 'PartnersTr', '2022-09-12 10:41:31', '2022-09-12 10:41:31'),
(16, 'testimonial', 'قالوا عنا ', 'Testimonial ', 'Testimonial ', '2022-09-13 05:25:05', '2022-09-13 05:25:05'),
(17, 'all', 'الكل ', 'All', 'All', '2022-09-13 05:26:19', '2022-09-13 05:26:19'),
(18, 'team', 'فريقنا المتميز ', 'Our Professionals Team', 'Our Professionals Team', '2022-09-13 05:35:57', '2022-09-13 05:35:57');
");*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('langs');
    }
};
