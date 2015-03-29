<?php

class Movie extends Eloquent {
    protected $table = 'movie';
    public function genres()
    {
    	return $this->belongsToMany('Genre');
    }
}