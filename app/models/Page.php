<?php

    class Page extends \Eloquent {
        protected $fillable = [
            'url', 'order', 'parent_id'
        ];

        public function title()
        {
            return $this->hasMany('PageContent');
        }
    }