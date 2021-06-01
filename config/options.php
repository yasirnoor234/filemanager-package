<?php
// config/options.php

return array(
    array(
        "id" => "general",
        "label" => "General",
        "icon" => "fa-cubes",
        "fields" => array(
            array(
                "type" => "text",
                "id" => "site_name",
                "label" => "Site Name",
                "description" => "Enter your site name",
                "icon" => "fa-globe",
                "validation" => 'required|min:10'
            ),
            array(
                "type" => "text",
                "id" => "site_slogan",
                "label" => "Site Slogan",
                "description" => "Enter site slogan",
                "validation" => 'required'
            ),
            array(
                "type" => "timepicker",
                "id" => "backup_time",
                "label" => "Backup Time",
                "description" => "Set db backup time",
                "validation" => 'required'
            )

        )
    ),
    array(
        "id" => "social",
        "label" => "Social",
        "icon" => "fa-globe",
        "fields" => array(
            array(
                "type" => "text",
                "id" => "fb_link",
                "label" => "Facebook",
                "description" => "Enter facebook link",
                "icon" => "fa-facebook-square"
            ),
            array(
                "type" => "text",
                "id" => "twitter_link",
                "label" => "Twitter",
                "description" => "Enter twitter link",
                "icon" => "fa-twitter-square"
            )
        )
    ),
    array(
        "id" => "text",
        "label" => "Text",
        "icon" => "fa-cubes",
        "fields" => array(
            array(
                "type"        => "text",
                "id"          => "text_one",
                "label"       => "Option Label Name",
                "description" => "Description",
                "placeholder" => "Placeholder",
                "icon"        => "fa-globe",
                "validation"  => 'required|min:22'
            ),
            array(
                "type"        => "textarea",
                "id"          => "textarea",
                "label"       => "Option Label Name",
                "description" => "Description",
                "icon"        => "icon",
                "validation"  => 'validation rules'
            )
        )
        
    ),
    array(
        "id" => "switcher",
        "label" => "Switcher",
        "icon" => "fa-cubes",
        "fields" => array(
            array(
                "type"        => "switcher",
                "id"          => "toggle",
                "label"       => "Option Label Name",
                "description" => "Description",
                "icon"        => "icon",
                "validation"  => 'validation rules'
            )
        )
    ),
    array(
        "id" => "colorpicker",
        "label" => "Color Picker",
        "icon" => "fa-cubes",
        "fields" => array(
            array(
                "type"        => "colorpicker",
                "id"          => "color_picker",
                "label"       => "Option Label Name",
                "description" => "Description",
                "icon"        => "icon",
                "validation"  => 'validation rules'
            )
        )
    ),
    array(
        "id" => "datepicker",
        "label" => "Date Picker",
        "icon" => "fa-cubes",
        "fields" => array(
            array(
                "type"        => "datepicker",
                "id"          => "date_picker",
                "label"       => "Option Label Name",
                "description" => "Description",
                "icon"        => "icon",
                "validation"  => 'validation rules'
            ),
            array(
                "type"        => "timepicker",
                "id"          => "time_picker",
                "label"       => "Option Label Name",
                "description" => "Description",
                "icon"        => "icon",
                "validation"  => 'validation rules'
            ),
            array(
                "type"        => "datetimepicker",
                "id"          => "date_time_picker",
                "label"       => "Option Label Name",
                "description" => "Description",
                "icon"        => "icon",
                "validation"  => 'validation rules'
            ),
        )
    ),
    array(
        "id" => "dropdown",
        "label" => "Drop Down",
        "icon" => "fa-cubes",
        "fields" => array(
            array(
                "type"        => "dropdown",
                "id"          => "dropdown_id",
                "options"     => "users,id,name",
                "label"       => "Option Label Name",
                "description" => "Description",
                "icon"        => "icon",
                "validation"  => 'validation rules'
            ),
            array(
                "type"        => "dropdown",
                "id"          => "dropdown_array",
                "options"     => ["Male"=>"Male","Female"=>"Female"],
                "label"       => "Option Label Name",
                "description" => "Description",
                "icon"        => "icon",
                "validation"  => 'validation rules'
            ),      
        )
    ),
    array(
        "id" => "autocomplete",
        "label" => "Auto Complete",
        "icon" => "fa-cubes",
        "fields" => array(
            array(
                "type"        => "autocomplete",
                "id"          => "auto_complete",
                "options"     => "users,id,name",
                "label"       => "Option Label Name",
                "description" => "Description",
                "icon"        => "icon",
                "validation"  => 'validation rules'
            ),
            array(
                "type"        => "radio",
                "id"          => "radio",
                "options"     => ["BD", "IND", "PAK", "ENG"],
                "label"       => "Option Label Name",
                "description" => "Description",
                "icon"        => "icon",
                "validation"  => 'validation rules'
            )
        )
    ), 
    array(
        "id" => "tag",
        "label" => "Tag",
        "icon" => "fa-cubes",
        "fields" => array(
            array(
                "type"        => "tag",
                "id"          => "tag_attribute",
                "label"       => "Option Label Name",
                "description" => "Description",
                "icon"        => "icon",
                "validation"  => 'validation rules'
            ),
            array(
                "type"        => "multicheck",
                "id"          => "multi_check",
                "options"     => ["Cricket", "Hocky", "Foodball"],
                "label"       => "Option Label Name",
                "description" => "Description",
                "icon"        => "icon",
                "validation"  => 'validation rules'
            ),
            array(
                "type"        => "icon",
                "id"          => "icon",
                "label"       => "Option Label Name",
                "description" => "Description",
                "icon"        => "icon",
                "validation"  => 'validation rules'
            )        
        )
    ),        
);