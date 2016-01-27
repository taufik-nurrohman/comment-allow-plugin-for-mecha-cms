<?php

if($config->is->post) {
    Weapon::add('shield_lot_before', function() {
        $config = Config::get();
        $s = $config->page_type;
        $allow = isset($config->{$s}->fields->allow_comments) && $config->{$s}->fields->allow_comments !== false;
        $config->comments->allow = $allow;
        Config::set('comments.allow', $allow);
        Shield::lot(array('config' => $config));
    });
}