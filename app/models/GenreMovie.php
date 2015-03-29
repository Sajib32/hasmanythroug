<?php

class GenreMovie extends Eloquent {
    protected $table = 'genre_movie';

    public function genres()
    {
    	return $this->belongsTo('Genre');
    }

    public function movies()
    {
    	return $this->belongsTo('Movie');
    }
}