<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\TeamMember;

class TeamMembersTableSeeder extends Seeder
{

	public function run()
	{

		DB::table('team_members')->delete();

		/*
			Schema::create('team_members', function(Blueprint $table)
			{
				$table->increments('id');
				$table->string('first_name');
				$table->string('last_name');
				$table->string('title');
				$table->string('email');
				$table->string('facebook')->nullable();
				$table->string('twitter')->nullable();
				$table->string('linkedin')->nullable();
				$table->string('googleplus')->nullable();
				$table->string('treehouse')->nullable();
				$table->string('codeacademy')->nullable();
				$table->text('about')->nullable();
				$table->timestamps();
				$table->timestamp('published_at')->nullable();
				$table->softDeletes();
			});

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

		*/

		TeamMember::create([
				'first_name'	=> 'Jeff',
				'last_name'		=> 'Martin',
				'title'			=> 'The Original Spartan Martin',
				'email'			=> 'jeff@spartanmartin.com',
				'linkedin'		=> '/in/spartanmartin',
				'treehouse'		=> '/jeffmartin',
				'published_at'	=> Carbon::now(),
			]);

	}

}
