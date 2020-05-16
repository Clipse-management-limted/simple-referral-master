@extends('layouts.app')

@section('content')

      <section id="content">
        <section class="hbox stretch">
          <section>
            <section class="vbox">
              <section class="scrollable padder">
                <section class="row m-b-md">
                  <div class="col-sm-6">

                    <h3 class="m-b-xs text-black">Dashboard</h3>
                    <small>Welcome back,{{ Auth::user()->name }}
                       <?php

//       $sql="SELECT fname FROM  affiliateuser WHERE username='".$_SESSION['username']."'";
//       if ($result = mysqli_query($con, $sql)) {
//
//     /* fetch associative array */
//     while ($row = mysqli_fetch_row($result)) {
//         print $row[0];
//     }
//
// }
// if($_SERVER['REQUEST_METHOD'] == 'POST')
//             {
//             print $errormsg;
//             }


     ?>, <i class="fa fa-map-marker fa-lg text-primary"></i> {{Auth::user()->address ?? ' '}}, {{ Auth::user()->country }} </small> </div>

                  <div class="col-sm-6 text-right text-left-xs m-t-md">


                    <a href="#" class="btn btn-icon b-2x btn-default btn-rounded hover"><i class="i i-bars3 hover-rotate"></i></a> <a href="#nav, #sidebar" class="btn btn-icon b-2x btn-info btn-rounded" data-toggle="class:nav-xs, show"><i class="fa fa-bars"></i></a> </div>
                </section>
                <div class="row">
        <div class="col-sm-12">

                      <div class="panel b-a">
                        <div class="row m-n">

                          <div class="col-md-6 b-b">
                            <a href="#" class="block padder-v hover">
                              <span class="i-s i-s-2x pull-left m-r-sm">
                                <i class="i i-hexagon2 i-s-base text-success-lt hover-rotate"></i>
                                <i class="i i-users2 i-sm text-white"></i>
                              </span>
                              <span class="clear">
                                <span class="h3 block m-t-xs text-success">{{$posts->name ?? ' '}}</span>
                                <small class="text-muted text-u-c">Last Referral Username</small>
                              </span>
                            </a>
                          </div>
                <div class="col-md-6 b-b b-r">
                            <a href="#" class="block padder-v hover">
                              <span class="i-s i-s-2x pull-left m-r-sm">
                                <i class="i i-hexagon2 i-s-base text-danger hover-rotate"></i>
                                <i class="i i-plus2 i-1x text-white"></i>
                              </span>
                              <span class="clear">
                                <span class="h3 block m-t-xs text-danger">{{ Auth::user()->referrer->name ?? 'Not Specified' }}</span>
                                <small class="text-muted text-u-c">Referrer</small>
                              </span>
                            </a>
                          </div>
                          <div class="col-md-6 b-b b-r">
                            <a href="#" class="block padder-v hover">
                              <span class="i-s i-s-2x pull-left m-r-sm">
                                <i class="i i-hexagon2 i-s-base text-info hover-rotate"></i>
                                <i class="i i-location i-sm text-white"></i>
                              </span>
                              <span class="clear">
                                <span class="h3 block m-t-xs text-info fa fa-map-marker"> {{$posts->address ?? ' '}}, {{$posts->country ?? ' '}}<span class="text-sm"></span></span>
                                <small class="text-muted text-u-c">location</small>
                              </span>
                            </a>
                          </div>
                          <div class="col-md-6 b-b">
                            <a href="#" class="block padder-v hover">
                              <span class="i-s i-s-2x pull-left m-r-sm">
                                <i class="i i-hexagon2 i-s-base text-primary hover-rotate"></i>
                                <i class="i i-alarm i-sm text-white"></i>
                              </span>
                              <span class="clear">
                                <span class="h3 block m-t-xs text-primary"><span>&#8358;</span>{{Auth::user()->rtamount + Auth::user()->tamount  ?? ' ' }}</span>
                                <small class="text-muted text-u-c">Total (Referrals Downline/Earnings & Referrals Earnings) </small>
                              </span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>

        <div class="col-lg-12">
                <section class="panel panel-default">
                  <div class="panel-body">

                  <footer class="panel-footer bg-info text-center">
                    <div class="row pull-out">
                      <div class="col-xs-6">
                        <div class="padder-v"> <span class="m-b-xs h3 block text-white"><span>&#8358;</span>{{Auth::user()->tamount ?? ' '}}</span> <small class="text-muted">Earnings (Total Direct Referrals Earnings) </small> </div>
                      </div>
                      <div class="col-xs-6 dk">
                      <div class="padder-v"> <span class="m-b-xs h3 block text-white"><span>&#8358;</span>{{Auth::user()->rtamount  ?? ' ' }}</span> <small class="text-muted">Referrals (Total Referrals Downline/Earnings) </small> </div>
                      </div>
                      <div class="col-xs-6 dk" style="background-color:red;">
                      <div class="padder-v"> <span class="m-b-xs h3 block text-white">{{ count(Auth::user()->referrals)  ?? '0' }}</span> <small class="text-muted">Referrals (direct) </small> </div>
                      </div>
                      <div class="col-xs-6 ">
                        <div class="padder-v"> <span class="m-b-xs h3 block text-white">#{{Auth::user()->level ?? ' '}}</span> <small class="text-muted">Level</small> </div>
                      </div>

                    </div>
                  </footer>
             <section class="panel panel-default" id="progressbar">
                  <header class="panel-heading">
                    <ul class="nav nav-pills pull-right">

                    </ul>
          <div class="form-group">
            <input type="hidden" name="todo" value="post">
                        <label>Your Referral Invite URL</label>
                        <input type="text" value="{{ Auth::user()->referral_link }}" class="form-control" placeholder="Your Invite URL" name="inviteurl" >
                      </div>
                    Next Payment Progress bar </header>
                  <ul class="list-group">

                    <li class="list-group-item">
                      <section id="content">
                        <section class="vbox">
                          <header class="header bg-white b-b b-light">
                            <p><strong>Downline | </strong>Red = Unverified/Unpaid Account  AND Green = Verified/Paid Account</p>
                          </header>
                          <section class="scrollable wrapper">
                            <div class="row">

                              <div class="col-sm-12 portlet">
                                <section class="panel panel-success portlet-item">
                                  <header class="panel-heading"> Your Referral List <h4><span class="caret"></span> Level   {{ Auth::user()->level }} </h4></header>
                                  <ul class="list-group alt">

                <?php

                $totalref=0;
                $totalrefear=0;
                	$ll1=1;


                foreach ($postsw as $key => $value)
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
                <div class="col-lg-3">
                      <section class="panel panel-default">
                        <div class="panel-body">
                          <h4 class='pull-left text-{{$status}} m-t-sm'>{{$value->name}}</h4>  <div class='pull-right text-{{$status}} m-t-sm'> <i class='fa fa-circle'></i> </div>


                </div>
                <!-- Started Fetching Downline Of User-->
                <li class='list-group-item'>
                                      <div class='media'>

                                        <div class='media-body'>
                                          <div><a href='#'></a></div>
                                         <small class='text-muted'>E-Mail :{{$value->email}} </small> <br><small class='text-muted'>Registration Date :{{date('d/m/Y ',strtotime($value->created_at))}} </small><br></small></div>
                                      </div>
                                    </li>

                                                                    </section>
                                                                  </div>

                          <?php
                            }
                        

                                ?>

  </br> <P><b>&nbsp;&nbsp;&nbsp; Total Earnings - </b><span>&#8358;</span> {{$totalrefear}} Unit</p>








                <!-- End Fetching Downline Of User-->




                                  </ul>
                                </section>

                              </div>
                            </div>
                          </section>
                        </section>
                        <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
                      </section>
                    </li>
          <br/>
          <h3 align="center"></h3>

                  </ul>
                </section>
                </section>
              </div>





                </div>



            </section>
          </section>

        </section>
        <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>
    </section>
  </section>
</section>


@endsection
