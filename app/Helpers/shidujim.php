<?php

if (!function_exists('validate_request')) {

    function validate_request($request)
    {

        $rules = [

            'gender'                        => 'required',
            'name'                          => 'required',
            'name_hebrew'                   => 'required',
            'lastname'                      => 'required',
            'second_lastname'               => 'required',
            "date_of_birth"                 => 'required',
            "civil_status"                  => 'required',
            "profession"                    => 'required',
            "email"                         => 'required',
            "main_phone"                    => 'required',
            "count_sons"                    => 'required',
            "religiouscompliancelevel"      => 'required',
            "community_assists"             => 'required',
            "name_school"                   => 'required',
            "smoke"                         => 'required',
            "sons"                          => 'required',
            "location"                      => 'required',
            "couple_sons"                   => 'required',
            "years_range_from"              => 'required',
            "years_range_to"                => 'required',
            "find_partner"                  => 'required',
            "files"                         => 'required',
            "family_purity_laws"            => 'required',
            "about_u"                       => 'required',
            "about_u_partner"               => 'required',
            "accepted_level"                => 'required',
            "studies"                       => 'required',
            "languages"                     => 'required',
            "qualities"                     => 'required',
            "live_future"                   => 'required',
            "civil_status_seeker"           => 'required'

        ];

        $validator = validator()->make($request->all(),$rules);

        if($validator->fails()) {
            return true;
        }
    }
}

if (!function_exists('validate_request_comment')) {

    function validate_request_comment($request)
    {

        $rules = [

            'summary-ckeditor' => 'required'

        ];

        $validator = validator()->make($request->all(), $rules);

        if ($validator->fails()) {
            return true;
        }
    }
}
