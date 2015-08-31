<?php
use Illuminate\Database\Eloquent\Model;
class Book extends Model
{
	public $title = ""; 
    public $author = ""; 
	public $timestamps = false;
	protected $fillable = array('title','author');
}
?>