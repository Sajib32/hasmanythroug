<?php

class Genre extends Eloquent {
    protected $table = 'genres';

    // Problem solved by using belongsToMany
    
    public function movies()
    {
    	return $this->belongsToMany('Movie');
    }

    // Problem solved by using belongsToMany
}