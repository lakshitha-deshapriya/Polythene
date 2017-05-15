<?php

namespace App\Http\Controllers;

use App\DailyProduction;
use App\CompactDetails;

Class PagesController extends Controller {

	public function getIndex(){
		return view('pages.home');
	}

	public function getAttendance(){
		return view('pages.attendance');
	}

	public function getDailyProduction(){
		$productions=DailyProduction::where('date',date("Y/m/d"))->get();

		return view('pages.dailyproduction')->withProductions($productions);
	}

	public function getCompactDetails(){
		$compacts=CompactDetails::all();
		return view('pages.compactdetails')->withCompacts($compacts);
	}

	public function getPurchaseDetails(){
		return view('pages.purchasedetails');
	}

	public function getTradingDetails(){
		return view('pages.tradingdetails');
	}

	public function getProductions(){
		$productions=DailyProduction::all();

		return view('pages.productions')->withProductions($productions);
	}

	//public function postContact(){

	//}
}
