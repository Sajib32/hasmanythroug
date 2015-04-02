<?php

class GenreMovie extends Eloquent {
    protected $table = 'genre_movie';

    // Problem solved by using belongsToMany

    public function genres()
    {
    	return $this->belongsTo('Genre');
    }

    public function movies()
    {
    	return $this->belongsTo('Movie');
    }

    // Problem solved by using belongsToMany
}