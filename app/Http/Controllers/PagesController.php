<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\TeamMember;

use Illuminate\Http\Request;

class PagesController extends Controller {

	//
	public function index()
	{
		$founders	= TeamMember::where('title', '=', 'The Original Spartan Martin')->get();
		$founder	= (object)(isset($founders[0]) ? $founders[0]->toArray() : []);

//		dd($founder);
		return view('pages/index', compact('founder'));
	}

	public function services()
	{
		return view('pages/services');
	}

	public function resume()
	{

		$history	= [
			['Acclaim Events LLC','Consultant','2014-05-01','present'],
			['SpartanMartin.com','Owner &amp; Web Developer','2014-05-01','present'],
			['Promote Oregon','Door Director','2014-09-10','2014-11-10'],
			['Acclaim Events LLC','VP of IT &amp; Business Development','2014-01-01','2014-04-30'],
			['Alliance Martial Arts','Owner &amp; Chief Instructor','2011-01-01','2013-01-01'],
			['USWC Taekwondo','Intern &amp; Assistant Instructor','2009-04-01','2010-08-31'],
		];

		$skills		= [
			[
				['HTML5','1993-01-01',5],
			],
			[
				['CSS3','1993-01-01',5],
				['SASS','2014-05-01',3],
				['LESS','2014-05-01',3],
			],
			[
				['Javascript','1995-01-01',4],
				['jQuery','2008-01-01',4],
				['Angular.js','2014-07-01',4],
			],
			[
				['PHP5','2000-01-01',5],
				['MYSQL5','2000-01-01',5],
				['Laravel5','2014-08-01',4],
			],
			[
				['Wordpress','2013-01-01',5],
				['WP Themes','2014-01-01',4],
				['WP Plugins','2014-03-01',4],
			],
		];

		$education	= [
			['Treehouse.com','My Treehouse Profile','http://teamtreehouse.com/jeffmartin','My Treehouse Profile'],
			['National Career Readiness Certification','National Gold Certification','https://myworkkeys.act.org/mwk/emCertDetails.do?event=go&realm=17740116&certId=8YKVB7ZS6K52','NCRC National Gold Certification'],
			['George Fox University','2 years completed',null,null],
			['Portland Christian High School','High School Diploma',null,null],
		];

		$resume	= [
			'history'	=> $history,
			'skills'	=> $skills,
			'education'	=> $education,
		];

		return view('pages/resume')->withData($resume);
	}

	public function projects()
	{
		return view('pages/projects');
	}

	public function contact()
	{
		return view('pages/contact');
	}

}
