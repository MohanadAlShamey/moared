<?php


function lang($name){
    $lang=\App\Models\Lang::whereWord($name)->first();
    if($lang){
        return $lang->{app()->getLocale()};
    }
    return  "";
}
