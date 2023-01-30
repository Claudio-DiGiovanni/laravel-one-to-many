<?php

namespace App\Traits;

trait Slugger{
    public static function getSlug($text) {
        $slugBase = Str::slug()
    };
};
