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
                  <div class="panel-body"><h4>Level 1</h4>


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



              			  <div class="col-lg-3">
                              <section class="panel panel-default">
                                <div class="panel-body"><h4>Level 2</h4></div>
              				  <!-- Started Fetching Downline Of User-->

              <?php
              $totalrefear2=0;
              $ll2=1;
              $query=DB::table('users')->where('referrer_id', '=' ,Auth::user()->id )->get();

foreach ($query as $key => $value) {

               $query22=DB::table('users')->where('referrer_id', '=' ,$value->id)->get();

            //   $query22="SELECT fname,email,doj,active,username,pcktaken FROM  affiliateuser where referedby = '$countusername'";
          foreach ($query22 as $key => $row22) {
            // print $row22;
              $totalrefear2=$totalrefear2+$ll2;

              if ($value->email_verified_at ==0)
              {
            $status2="danger";
            }
            else{
            $status2="success";
            }

                echo "<li class='list-group-item'>
                                    <div class='media'>
                                      <div class='pull-right text-$status2 m-t-sm'> <i class='fa fa-circle'></i> </div>
                                      <div class='media-body'>
                                        <div><a href='#'>$row22->name</a></div>
                                       <small class='text-muted'>E-Mail : $row22->email</small> <br><small class='text-muted'>Registration Date :".date('d/m/Y ',strtotime($row22->created_at))." </small><br>Referred By - $value->name</small></div>
                                    </div>
                                  </li> ";


                }

               }
               print "</br> <P><b>&nbsp;&nbsp;&nbsp; Total Earnings - </b> # $totalrefear2 Unit</p>";


              ?>


                              </section>
                            </div>

                            <div class="col-lg-3">
                                    <section class="panel panel-default">
                                      <div class="panel-body"><h4>Level 3</h4></div>
                              <!-- Started Fetching Downline Of User-->

                          <?php
                          $totalrefear3=0;
                          $ll2=1;
                          $queryd=DB::table('users')->where('referrer_id', '=' ,Auth::user()->id )->get();

                          foreach ($queryd as $key => $valuer) {
                          $query=DB::table('users')->where('referrer_id', '=' ,$valuer->id )->get();

                          foreach ($query as $key => $value) {

                          $query22=DB::table('users')->where('referrer_id', '=' ,$value->id)->get();

                          //   $query22="SELECT fname,email,doj,active,username,pcktaken FROM  affiliateuser where referedby = '$countusername'";
                          foreach ($query22 as $key => $row22) {
                          // print $row22;
                          $totalrefear3=$totalrefear3+$ll2;

                          if ($value->email_verified_at ==0)
                          {
                          $status2="danger";
                          }
                          else{
                          $status2="success";
                          }

                          echo "<li class='list-group-item'>
                                          <div class='media'>
                                            <div class='pull-right text-$status2 m-t-sm'> <i class='fa fa-circle'></i> </div>
                                            <div class='media-body'>
                                              <div><a href='#'>$row22->name</a></div>
                                             <small class='text-muted'>E-Mail : $row22->email</small> <br><small class='text-muted'>Registration Date :".date('d/m/Y ',strtotime($row22->created_at))." </small><br>Referred By - $value->name</small></div>
                                          </div>
                                        </li> ";


                          }
                        }

                          }
                          print "</br> <P><b>&nbsp;&nbsp;&nbsp; Total Earnings - </b> # $totalrefear3 Unit</p>";


                          ?>


                                    </section>
                                  </div>

                                  <div class="col-lg-3">
                                          <section class="panel panel-default">
                                            <div class="panel-body"><h4>Level 4</h4></div>
                                    <!-- Started Fetching Downline Of User-->

                                <?php
                                $totalrefear4=0;
                                $ll2=1;
                                $querydw=DB::table('users')->where('referrer_id', '=' ,Auth::user()->id )->get();

                                foreach ($querydw as $key => $valuewr) {
                                $queryd=DB::table('users')->where('referrer_id', '=' ,$valuewr->id )->get();

                                foreach ($queryd as $key => $valuer) {
                                $query=DB::table('users')->where('referrer_id', '=' ,$valuer->id )->get();

                                foreach ($query as $key => $value) {

                                $query22=DB::table('users')->where('referrer_id', '=' ,$value->id)->get();

                                //   $query22="SELECT fname,email,doj,active,username,pcktaken FROM  affiliateuser where referedby = '$countusername'";
                                foreach ($query22 as $key => $row22) {
                                // print $row22;
                                $totalrefear4=$totalrefear4+$ll2;

                                if ($value->email_verified_at ==0)
                                {
                                $status2="danger";
                                }
                                else{
                                $status2="success";
                                }

                                echo "<li class='list-group-item'>
                                                <div class='media'>
                                                  <div class='pull-right text-$status2 m-t-sm'> <i class='fa fa-circle'></i> </div>
                                                  <div class='media-body'>
                                                    <div><a href='#'>$row22->name</a></div>
                                                   <small class='text-muted'>E-Mail : $row22->email</small> <br><small class='text-muted'>Registration Date :".date('d/m/Y ',strtotime($row22->created_at))." </small><br>Referred By - $value->name</small></div>
                                                </div>
                                              </li> ";


                                }
                                }
                              }

                                }
                                print "</br> <P><b>&nbsp;&nbsp;&nbsp; Total Earnings - </b> # $totalrefear4 Unit</p>";


                                ?>


                                          </section>
                                        </div>

                                        <div class="col-lg-3">
                                                <section class="panel panel-default">
                                                  <div class="panel-body"><h4>Level 5</h4></div>
                                          <!-- Started Fetching Downline Of User-->

                                      <?php
                                      $totalrefear5=0;
                                      $ll2=1;
                                      $querydaw=DB::table('users')->where('referrer_id', '=' ,Auth::user()->id )->get();

                                      foreach ($querydaw as $key => $valuewar) {
                                      $querydw=DB::table('users')->where('referrer_id', '=' ,$valuewar->id )->get();

                                      foreach ($querydw as $key => $valuewr) {
                                      $queryd=DB::table('users')->where('referrer_id', '=' ,$valuewr->id )->get();

                                      foreach ($queryd as $key => $valuer) {
                                      $query=DB::table('users')->where('referrer_id', '=' ,$valuer->id )->get();

                                      foreach ($query as $key => $value) {

                                      $query22=DB::table('users')->where('referrer_id', '=' ,$value->id)->get();

                                      //   $query22="SELECT fname,email,doj,active,username,pcktaken FROM  affiliateuser where referedby = '$countusername'";
                                      foreach ($query22 as $key => $row22) {
                                      // print $row22;
                                      $totalrefear5=$totalrefear5+$ll2;

                                      if ($value->email_verified_at ==0)
                                      {
                                      $status2="danger";
                                      }
                                      else{
                                      $status2="success";
                                      }

                                      echo "<li class='list-group-item'>
                                                      <div class='media'>
                                                        <div class='pull-right text-$status2 m-t-sm'> <i class='fa fa-circle'></i> </div>
                                                        <div class='media-body'>
                                                          <div><a href='#'>$row22->name</a></div>
                                                         <small class='text-muted'>E-Mail : $row22->email</small> <br><small class='text-muted'>Registration Date :".date('d/m/Y ',strtotime($row22->created_at))." </small><br>Referred By - $value->name</small></div>
                                                      </div>
                                                    </li> ";


                                      }
                                      }
                                    }
                                  }

                                      }
                                      print "</br> <P><b>&nbsp;&nbsp;&nbsp; Total Earnings - </b> # $totalrefear5 Unit</p>";


                                      ?>


                                                </section>
                                              </div>
                                              <div class="col-lg-3">
                                                      <section class="panel panel-default">
                                                        <div class="panel-body"><h4>Level 6</h4></div>
                                                <!-- Started Fetching Downline Of User-->

                                            <?php
                                            $totalrefear6=0;
                                            $ll2=1;
                                            $querydbvw=DB::table('users')->where('referrer_id', '=' ,Auth::user()->id )->get();

                                            foreach ($querydbvw as $key => $valuewrvb) {
                                            $querydvw=DB::table('users')->where('referrer_id', '=' ,$valuewrvb->id )->get();

                                            foreach ($querydvw as $key => $valuewrv) {
                                            $querydw=DB::table('users')->where('referrer_id', '=' ,$valuewrv->id )->get();

                                            foreach ($querydw as $key => $valuewr) {
                                            $queryd=DB::table('users')->where('referrer_id', '=' ,$valuewr->id )->get();

                                            foreach ($queryd as $key => $valuer) {
                                            $query=DB::table('users')->where('referrer_id', '=' ,$valuer->id )->get();

                                            foreach ($query as $key => $value) {

                                            $query22=DB::table('users')->where('referrer_id', '=' ,$value->id)->get();

                                            //   $query22="SELECT fname,email,doj,active,username,pcktaken FROM  affiliateuser where referedby = '$countusername'";
                                            foreach ($query22 as $key => $row22) {
                                            // print $row22;
                                            $totalrefear6=$totalrefear6+$ll2;

                                            if ($value->email_verified_at ==0)
                                            {
                                            $status2="danger";
                                            }
                                            else{
                                            $status2="success";
                                            }

                                            echo "<li class='list-group-item'>
                                                            <div class='media'>
                                                              <div class='pull-right text-$status2 m-t-sm'> <i class='fa fa-circle'></i> </div>
                                                              <div class='media-body'>
                                                                <div><a href='#'>$row22->name</a></div>
                                                               <small class='text-muted'>E-Mail : $row22->email</small> <br><small class='text-muted'>Registration Date :".date('d/m/Y ',strtotime($row22->created_at))." </small><br>Referred By - $value->name</small></div>
                                                            </div>
                                                          </li> ";


                                            }
                                            }
                                          }
                                        }
                                      }

                                            }
                                            print "</br> <P><b>&nbsp;&nbsp;&nbsp; Total Earnings - </b> # $totalrefear6 Unit</p>";


                                            ?>


                                                      </section>
                                                    </div>
                                                    <div class="col-lg-3">
                                                            <section class="panel panel-default">
                                                              <div class="panel-body"><h4>Level 7</h4></div>
                                                      <!-- Started Fetching Downline Of User-->

                                                  <?php
                                                  $totalrefear7=0;
                                                  $ll2=1;
                                                  $qerydbvw=DB::table('users')->where('referrer_id', '=' ,Auth::user()->id )->get();

                                                  foreach ($qerydbvw as $key => $valuwrvb) {
                                                  $querydbvw=DB::table('users')->where('referrer_id', '=' ,$valuwrvb->id )->get();

                                                  foreach ($querydbvw as $key => $valuewrvb) {
                                                  $querydvw=DB::table('users')->where('referrer_id', '=' ,$valuewrvb->id )->get();

                                                  foreach ($querydvw as $key => $valuewrv) {
                                                  $querydw=DB::table('users')->where('referrer_id', '=' ,$valuewrv->id )->get();

                                                  foreach ($querydw as $key => $valuewr) {
                                                  $queryd=DB::table('users')->where('referrer_id', '=' ,$valuewr->id )->get();

                                                  foreach ($queryd as $key => $valuer) {
                                                  $query=DB::table('users')->where('referrer_id', '=' ,$valuer->id )->get();

                                                  foreach ($query as $key => $value) {

                                                  $query22=DB::table('users')->where('referrer_id', '=' ,$value->id)->get();

                                                  //   $query22="SELECT fname,email,doj,active,username,pcktaken FROM  affiliateuser where referedby = '$countusername'";
                                                  foreach ($query22 as $key => $row22) {
                                                  // print $row22;
                                                  $totalrefear7=$totalrefear7+$ll2;

                                                  if ($value->email_verified_at ==0)
                                                  {
                                                  $status2="danger";
                                                  }
                                                  else{
                                                  $status2="success";
                                                  }

                                                  echo "<li class='list-group-item'>
                                                                  <div class='media'>
                                                                    <div class='pull-right text-$status2 m-t-sm'> <i class='fa fa-circle'></i> </div>
                                                                    <div class='media-body'>
                                                                      <div><a href='#'>$row22->name</a></div>
                                                                     <small class='text-muted'>E-Mail : $row22->email</small> <br><small class='text-muted'>Registration Date :".date('d/m/Y ',strtotime($row22->created_at))." </small><br>Referred By - $value->name</small></div>
                                                                  </div>
                                                                </li> ";


                                                  }
                                                  }
                                                }
                                              }
                                              }
                                            }

                                                  }
                                                  print "</br> <P><b>&nbsp;&nbsp;&nbsp; Total Earnings - </b> # $totalrefear7 Unit</p>";

                                                  ?>


                                                            </section>
                                                          </div>

                                                          <div class="col-lg-3">
                                                                  <section class="panel panel-default">
                                                                    <div class="panel-body"><h4>Level 8</h4></div>
                                                            <!-- Started Fetching Downline Of User-->

                                                        <?php
                                                        $totalrefear8=0;
                                                        $ll2=1;
                                                        $qerydbvzw=DB::table('users')->where('referrer_id', '=' ,Auth::user()->id )->get();

                                                        foreach ($qerydbvzw as $key => $valuwrvbz) {
                                                        $qerydbvw=DB::table('users')->where('referrer_id', '=' ,$valuwrvbz->id )->get();

                                                        foreach ($qerydbvw as $key => $valuwrvb) {
                                                        $querydbvw=DB::table('users')->where('referrer_id', '=' ,$valuwrvb->id )->get();

                                                        foreach ($querydbvw as $key => $valuewrvb) {
                                                        $querydvw=DB::table('users')->where('referrer_id', '=' ,$valuewrvb->id )->get();

                                                        foreach ($querydvw as $key => $valuewrv) {
                                                        $querydw=DB::table('users')->where('referrer_id', '=' ,$valuewrv->id )->get();

                                                        foreach ($querydw as $key => $valuewr) {
                                                        $queryd=DB::table('users')->where('referrer_id', '=' ,$valuewr->id )->get();

                                                        foreach ($queryd as $key => $valuer) {
                                                        $query=DB::table('users')->where('referrer_id', '=' ,$valuer->id )->get();

                                                        foreach ($query as $key => $value) {

                                                        $query22=DB::table('users')->where('referrer_id', '=' ,$value->id)->get();

                                                        //   $query22="SELECT fname,email,doj,active,username,pcktaken FROM  affiliateuser where referedby = '$countusername'";
                                                        foreach ($query22 as $key => $row22) {
                                                        // print $row22;
                                                        $totalrefear8=$totalrefear8+$ll2;

                                                        if ($value->email_verified_at ==0)
                                                        {
                                                        $status2="danger";
                                                        }
                                                        else{
                                                        $status2="success";
                                                        }

                                                        echo "<li class='list-group-item'>
                                                                        <div class='media'>
                                                                          <div class='pull-right text-$status2 m-t-sm'> <i class='fa fa-circle'></i> </div>
                                                                          <div class='media-body'>
                                                                            <div><a href='#'>$row22->name</a></div>
                                                                           <small class='text-muted'>E-Mail : $row22->email</small> <br><small class='text-muted'>Registration Date :".date('d/m/Y ',strtotime($row22->created_at))." </small><br>Referred By - $value->name</small></div>
                                                                        </div>
                                                                      </li> ";


                                                        }
                                                        }
                                                      }
                                                    }
                                                    }
                                                  }
                                                }

                                                        }
                                                        print "</br> <P><b>&nbsp;&nbsp;&nbsp; Total Earnings - </b> # $totalrefear8 Unit</p>";
                                                        $be=$totalrefear+$totalrefear2+$totalrefear3+$totalrefear4+$totalrefear5+$totalrefear6+$totalrefear7+$totalrefear8;
                                                        DB::table('users')->where('id', '=',Auth::user()->id)->update(['tamount' =>$be]);
                                                        ?>


                                                                  </section>
                                                                </div>

                                                                <div class="col-lg-3">
                                                                        <section class="panel panel-default">
                                                                          <div class="panel-body"><h4>Level 9</h4></div>
                                                                  <!-- Started Fetching Downline Of User-->

                                                              <?php
                                                              $totalrefear9=0;
                                                              $ll2=1;
                                                              $qerydbvzwf=DB::table('users')->where('referrer_id', '=' ,Auth::user()->id )->get();

                                                              foreach ($qerydbvzwf as $key => $valuwrvbzf) {
                                                              $qerydbvzw=DB::table('users')->where('referrer_id', '=' ,$valuwrvbzf->id )->get();

                                                              foreach ($qerydbvzw as $key => $valuwrvbz) {
                                                              $qerydbvw=DB::table('users')->where('referrer_id', '=' ,$valuwrvbz->id )->get();

                                                              foreach ($qerydbvw as $key => $valuwrvb) {
                                                              $querydbvw=DB::table('users')->where('referrer_id', '=' ,$valuwrvb->id )->get();

                                                              foreach ($querydbvw as $key => $valuewrvb) {
                                                              $querydvw=DB::table('users')->where('referrer_id', '=' ,$valuewrvb->id )->get();

                                                              foreach ($querydvw as $key => $valuewrv) {
                                                              $querydw=DB::table('users')->where('referrer_id', '=' ,$valuewrv->id )->get();

                                                              foreach ($querydw as $key => $valuewr) {
                                                              $queryd=DB::table('users')->where('referrer_id', '=' ,$valuewr->id )->get();

                                                              foreach ($queryd as $key => $valuer) {
                                                              $query=DB::table('users')->where('referrer_id', '=' ,$valuer->id )->get();

                                                              foreach ($query as $key => $value) {

                                                              $query22=DB::table('users')->where('referrer_id', '=' ,$value->id)->get();

                                                              //   $query22="SELECT fname,email,doj,active,username,pcktaken FROM  affiliateuser where referedby = '$countusername'";
                                                              foreach ($query22 as $key => $row22) {
                                                              // print $row22;
                                                              $totalrefear9=$totalrefear9+$ll2;

                                                              if ($value->email_verified_at ==0)
                                                              {
                                                              $status2="danger";
                                                              }
                                                              else{
                                                              $status2="success";
                                                              }

                                                              echo "<li class='list-group-item'>
                                                                              <div class='media'>
                                                                                <div class='pull-right text-$status2 m-t-sm'> <i class='fa fa-circle'></i> </div>
                                                                                <div class='media-body'>
                                                                                  <div><a href='#'>$row22->name</a></div>
                                                                                 <small class='text-muted'>E-Mail : $row22->email</small> <br><small class='text-muted'>Registration Date :".date('d/m/Y ',strtotime($row22->created_at))." </small><br>Referred By - $value->name</small></div>
                                                                              </div>
                                                                            </li> ";


                                                              }
                                                              }
                                                            }
                                                          }
                                                          }
                                                        }
                                                      }
                                                    }

                                                              }
                                                              print "</br> <P><b>&nbsp;&nbsp;&nbsp; Total Earnings - </b> # $totalrefear9 Unit</p>";
                                                              $be=$totalrefear+$totalrefear2+$totalrefear3+$totalrefear4+$totalrefear5+$totalrefear6+$totalrefear7+$totalrefear8+$totalrefear9;
                                                              DB::table('users')->where('id', '=',Auth::user()->id)->update(['tamount' =>$be]);
                                                              ?>


                                                                        </section>
                                                                      </div>

                                                                      <div class="col-lg-3">
                                                                              <section class="panel panel-default">
                                                                                <div class="panel-body"><h4>Level 10</h4></div>
                                                                        <!-- Started Fetching Downline Of User-->

                                                                    <?php
                                                                    $totalrefear10=0;
                                                                    $ll2=1;
                                                                    $qerydbvzwhf=DB::table('users')->where('referrer_id', '=' ,Auth::user()->id )->get();

                                                                    foreach ($qerydbvzwhf as $key => $valuwrvbzhf) {
                                                                    $qerydbvzwf=DB::table('users')->where('referrer_id', '=' ,$valuwrvbzhf->id )->get();

                                                                    foreach ($qerydbvzwf as $key => $valuwrvbzf) {
                                                                    $qerydbvzw=DB::table('users')->where('referrer_id', '=' ,$valuwrvbzf->id )->get();

                                                                    foreach ($qerydbvzw as $key => $valuwrvbz) {
                                                                    $qerydbvw=DB::table('users')->where('referrer_id', '=' ,$valuwrvbz->id )->get();

                                                                    foreach ($qerydbvw as $key => $valuwrvb) {
                                                                    $querydbvw=DB::table('users')->where('referrer_id', '=' ,$valuwrvb->id )->get();

                                                                    foreach ($querydbvw as $key => $valuewrvb) {
                                                                    $querydvw=DB::table('users')->where('referrer_id', '=' ,$valuewrvb->id )->get();

                                                                    foreach ($querydvw as $key => $valuewrv) {
                                                                    $querydw=DB::table('users')->where('referrer_id', '=' ,$valuewrv->id )->get();

                                                                    foreach ($querydw as $key => $valuewr) {
                                                                    $queryd=DB::table('users')->where('referrer_id', '=' ,$valuewr->id )->get();

                                                                    foreach ($queryd as $key => $valuer) {
                                                                    $query=DB::table('users')->where('referrer_id', '=' ,$valuer->id )->get();

                                                                    foreach ($query as $key => $value) {

                                                                    $query22=DB::table('users')->where('referrer_id', '=' ,$value->id)->get();

                                                                    //   $query22="SELECT fname,email,doj,active,username,pcktaken FROM  affiliateuser where referedby = '$countusername'";
                                                                    foreach ($query22 as $key => $row22) {
                                                                    // print $row22;
                                                                    $totalrefear10=$totalrefear10+$ll2;

                                                                    if ($value->email_verified_at ==0)
                                                                    {
                                                                    $status2="danger";
                                                                    }
                                                                    else{
                                                                    $status2="success";
                                                                    }

                                                                    echo "<li class='list-group-item'>
                                                                                    <div class='media'>
                                                                                      <div class='pull-right text-$status2 m-t-sm'> <i class='fa fa-circle'></i> </div>
                                                                                      <div class='media-body'>
                                                                                        <div><a href='#'>$row22->name</a></div>
                                                                                       <small class='text-muted'>E-Mail : $row22->email</small> <br><small class='text-muted'>Registration Date :".date('d/m/Y ',strtotime($row22->created_at))." </small><br>Referred By - $value->name</small></div>
                                                                                    </div>
                                                                                  </li> ";


                                                                    }
                                                                    }
                                                                  }
                                                                }
                                                                }
                                                              }
                                                            }
                                                          }
                                                        }

                                                                    }
                                                                    print "</br> <P><b>&nbsp;&nbsp;&nbsp; Total Earnings - </b> # $totalrefear10 Unit</p>";
                                                                    $be=$totalrefear+$totalrefear2+$totalrefear3+$totalrefear4+$totalrefear5+$totalrefear6+$totalrefear7+$totalrefear8+$totalrefear9+$totalrefear10;
                                                                    DB::table('users')->where('id', '=',Auth::user()->id)->update(['tamount' =>$be]);
                                                                    ?>


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
