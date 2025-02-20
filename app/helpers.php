<?php

use App\Models\Contact;
use App\Models\exper;
use App\Models\Projek;
use App\Models\Section;
use App\Models\Sertif;
use App\Models\Skills;


if (!function_exists('get_contact_value')) {
    function get_contact_value($key) {
        $data = Contact::where('key', $key)->first();
        return isset($data->value) ? $data->value : 'empty';
    }
}

if (!function_exists('get_sections_data')) {
    function get_sections_data($key) {
        $data = Section::where('post_as', $key)->first();
        return $data ?? 'empty';
    }
}

if (!function_exists('get_skills_data')) {
    function get_skills_data() {
        return Skills::all();
    }
}

if (!function_exists('get_expers_data')) {
    function get_expers_data() {
        return exper::all();
    }
}

if (!function_exists('get_sertifs_data')) {
    function get_sertifs_data() {
        return Sertif::all();
    }
}

if (!function_exists('get_projeks_data')) {
    function get_projeks_data() {
        return Projek::all();
    }
}
