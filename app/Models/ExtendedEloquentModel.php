<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class ExtendedEloquentModel extends Model
{

	public function scopePublished($query)
	{
		return $query
				->whereNotNull('published_at')
				->where('published_at', '<=', Carbon::now());
	}

	public function scopeUnpublished($query)
	{
		return $query
				->whereNull('published_at')
				->orWhere('published_at', '>', Carbon::now());
	}

	public function scopeActivated($query)
	{
		return $query->whereNotNull('activated_at');
	}

	public function scopeUnactivated($query)
	{
		return $query->whereNull('activated_at');
	}

}