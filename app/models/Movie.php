<?php

class Movie extends Eloquent {
    protected $table = 'movie';

    // Problem solved by using belongsToMany

    public function genres()
    {
    	return $this->belongsToMany('Genre');
    }

    // Problem solved by using belongsToMany
}