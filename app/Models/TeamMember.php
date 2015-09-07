<?php namespace App\Models;

use App\Models\ExtendedEloquentModel;
use App\Helpers\Helpers;
use Carbon\Carbon;

class TeamMember extends ExtendedEloquentModel
{

	protected $table	= 'team_members';

	protected $fillable	= [
		'first_name',
		'last_name',
		'title',
		'email',
		'facebook',
		'twitter',
		'linkedin',
		'googleplus',
		'treehouse',
		'codeacademy',
		'about',
		'published_at',
	];

	protected $dates	= [
		'published_at',
	];

}
