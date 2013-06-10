<?php 
class Post extends Eloquent
{ 
	
	public function author()
	{
		return $this->belongs_to('User', 'author_id');
	}
	
	/*public function posts()
	{
		return $this->has_many('Post', 'id');
	}*/
}