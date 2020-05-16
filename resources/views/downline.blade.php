<?php
//   $y=10;
// $count=count($posts);
// //dd($posts[0]->level+1);
// $level=$posts[0]->level+1;
// //dd($level);
// if($count ==$y)
// {
// $itemsf = User::where('id', '=',Auth::user()->id)->update(['level' =>$level]);
// }

?>

@extends('layouts.app')

@section('content')
  <!-- /.aside -->
      <section id="content">
        <section class="vbox">
          <header class="header bg-white b-b b-light">
            <p><strong>Downline | </strong>Red = Unverified/Unpaid Account  AND Green = Verified/Paid Account</p>
          </header>
          <section class="scrollable wrapper">
            <div class="row">

              <div class="col-sm-12 portlet">
                <section class="panel panel-success portlet-item">
                  <header class="panel-heading"> Your Referral List </header>
                  <ul class="list-group alt">
				  <div class="col-lg-3">
                <section class="panel panel-default">
                  <div class="panel-body"><h4><span class="caret"></span> Level   {{ Auth::user()->level }} </h4>


				  </div>
				  <!-- Started Fetching Downline Of User-->
<?php

$totalref=0;
$totalrefear=0;
	$ll1=1;


foreach ($posts as $key => $value)
{
  $totalrefear=$totalrefear+$ll1;
  if ($value->email_verified_at ==0)
  {
$status="danger";
}
else{
$status="success";
}
?>
<li class='list-group-item'>
                      <div class='media'>
                        <div class='pull-right text-{{$status}} m-t-sm'> <i class='fa fa-circle'></i> </div>
                        <div class='media-body'>
                          <div><a href='#'>{{$value->name}}</a></div>
                         <small class='text-muted'>E-Mail :{{$value->email}} </small> <br><small class='text-muted'>Registration Date :{{date('d/m/Y ',strtotime($value->created_at))}} </small><br></small></div>
                      </div>
                    </li>

          <?php
            }
                ?>

</br> <P><b>&nbsp;&nbsp;&nbsp; Total Earnings - </b># {{$totalrefear}} Unit</p>



                </section>
              </div>






<!-- End Fetching Downline Of User-->




                  </ul>
                </section>

              </div>
            </div>
          </section>
        </section>
        <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
      </section>
  @endsection
