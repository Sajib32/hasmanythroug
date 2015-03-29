<?php

class Movie extends Eloquent {
    protected $table = 'movies';
    public function genres()
    {
    	return $this->belongsToMany('Genre');
    }
}