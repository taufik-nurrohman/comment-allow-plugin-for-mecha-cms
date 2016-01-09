<?php

if($config->page_type === 'article') {
    Weapon::add('chunk_lot_before', function() {
        $config = Config::get();
        $allow = isset($config->article->fields->allow_comments) && $config->article->fields->allow_comments !== false;
        $config->comments->allow = $allow;
        Config::set('comments.allow', $allow);
        Shield::lot(array('config' => $config));
    });
}