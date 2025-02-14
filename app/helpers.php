<?php

use App\Models\contact;
use App\Models\exper;
use App\Models\projek;
use App\Models\section;
use App\Models\sertif;
use App\Models\skills;


if (!function_exists('get_contact_value')) {
    function get_contact_value($key) {
        $data = contact::where('key', $key)->first();
        return isset($data->value) ? $data->value : 'empty';
    }
}

if (!function_exists('get_sections_data')) {
    function get_sections_data($key) {
        $data = section::where('post_as', $key)->first();
        return $data ?? 'empty';
    }
}

if (!function_exists('get_skills_data')) {
    function get_skills_data() {
        return skills::all();
    }
}

if (!function_exists('get_expers_data')) {
    function get_expers_data() {
        return exper::all();
    }
}

if (!function_exists('get_sertifs_data')) {
    function get_sertifs_data() {
        return sertif::all();
    }
}

if (!function_exists('get_projeks_data')) {
    function get_projeks_data() {
        return projek::all();
    }
}
