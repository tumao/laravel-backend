<?php 
class User_group extends Eloquent
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'user_group';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array();

	protected $fillable = array('user_id', 'group_id');

	public function user()
	{
		// $this->belongsTo('User');
	}

}