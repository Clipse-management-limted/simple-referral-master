<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KodeInfo\JOrgChart;
use Illuminate\Support\Facades\DB;
use Auth;
use App\User;

class HomeController extends Controller
{
  public $chain = [];
  public $tree_string = "";
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    	$ll1=1;
      $ql=1;
    $totalrefear=0;

//     $jorg = new App\KodeInfo\JOrgChart();
//      $response = $jorg->getChart(1);
// //$response = JOrgChart::getChart(1);
//   return View::make('home',['tree'=>$response['tree_string']]);
$postsw=DB::table('users')->where('referrer_id', '=' ,Auth::user()->id )->orderBy('id', 'DESC')->get();
foreach ($postsw as $key => $value)
{
    $totalrefear=$totalrefear+$ll1;

}
$be=$totalrefear;
DB::table('users')->where('id', '=',Auth::user()->id)->update(['tamount' =>$be]);
$posts=DB::table('users')->where('referrer_id', '=' ,Auth::user()->id )->orderBy('id', 'DESC')->first();
//$pw=DB::table('users')->where('id', '=' ,Auth::user()->referrer_id )->get();
$id=Auth::user()->id;
$postsq=DB::table('users')->where('referrer_id', '=' ,Auth::user()->id )->get();
  $count=count($postsq);

if($count==0)
{
$levele=0;
}
else {
  $h=$count/10;
  $levele=intval($h)+1;
      // dd($pw);
}
$qlevele=$levele-1;
$pw=DB::table('users')->where('id', '=' ,Auth::user()->referrer_id )->get();

//dd($qlevele);
// dd($levele."0");
 //dd($count);
$items = DB::table('users')->where('id',$id)->update(array('level'=>$levele));
    if($count == $qlevele."0")
    {
      if ($pw[0]->rtamount !=$qlevele) {
        if(Auth::user()->referrer_id !=0)
        {
  //dd($count);
      $sqq =DB::update("update users SET rtamount = rtamount +".$ql." WHERE id='".Auth::user()->referrer_id."'");
        //
          // $items = DB::table('users')->where('id',Auth::user()->referrer_id)->update(array(
          //                                 'rtamount'=>$levele));
        }
      }

    }
  return view('home',compact('posts',$posts,'postsw',$postsw));


    }



    public function downline()
    {
      $id=Auth::user()->id;
      $posts=DB::table('users')->where('referrer_id', '=' ,Auth::user()->id )->get();
        $count=count($posts);
      //$count=10;
      if($count==0)
      {
      $levele=0;
      }
      else {
        $h=$count/10;
        $levele=intval($h)+1;
      }

      $items = DB::table('users')->where('id',$id)->update(array(
                                      'level'=>$levele));
    $posts=DB::table('users')->where('referrer_id', '=' ,Auth::user()->id )->get();

        return view('downline')->with('posts',$posts);
    }
}
