<div class="col-lg-3">
        <section class="panel panel-default">
          <div class="panel-body"><h4>Level 2</h4></div>
  <!-- Started Fetching Downline Of User-->

<?php
$totalrefear=0;
$query="SELECT fname,email,doj,active,username FROM  affiliateuser where referedby = '".$_SESSION['username']."'";


$result = mysqli_query($con,$query);

while($row = mysqli_fetch_array($result))
{
$ac="$row[active]";
$countusername="$row[username]";
$query22="SELECT fname,email,doj,active,username,pcktaken FROM  affiliateuser where referedby = '$countusername'";
$result22 = mysqli_query($con,$query22);

while($row22 = mysqli_fetch_array($result22))
{
$ac2="$row22[active]";
$countusername2="$row22[username]";
$pcktook="$row22[pcktaken]";
$qu="SELECT level2 FROM  packages where id = $pcktook";
$re = mysqli_query($con,$qu);
while($r = mysqli_fetch_array($re))
{
$ll2="$r[0]";
}
if ($ac2==1)
{
$status2="success";
$totalrefear=$totalrefear+$ll2;
}
else
{
$status2="danger";
}


echo "<li class='list-group-item'>
              <div class='media'>
                <div class='pull-right text-$status2 m-t-sm'> <i class='fa fa-circle'></i> </div>
                <div class='media-body'>
                  <div><a href='#'>$row22[fname]</a></div>
                 <small class='text-muted'>E-Mail : $row22[email]</small> <br><small class='text-muted'>Registration Date : $row22[doj] </small><br>Referred By - $row[fname]</small></div>
              </div>
            </li> ";


}

}
print "</br> <P><b>&nbsp;&nbsp;&nbsp; Total Earnings - </b>$pckcur $totalrefear</p>";
?>


        </section>
      </div>

      <div class="col-lg-3">
        <section class="panel panel-default">
          <div class="panel-body"><h4>Level 3</h4></div>
  <!-- Started Fetching Downline Of User-->
  <?php

$totalrefear=0;
$query="SELECT fname,email,doj,active,username FROM  affiliateuser where referedby = '".$_SESSION['username']."'";


$result = mysqli_query($con,$query);

while($row = mysqli_fetch_array($result))
{
$ac="$row[active]";
$countusername="$row[username]";
$query22="SELECT fname,email,doj,active,username FROM  affiliateuser where referedby = '$countusername'";
$result22 = mysqli_query($con,$query22);

while($row22 = mysqli_fetch_array($result22))
{
$ac2="$row22[active]";
$countusername2="$row22[username]";
$fname22="$row22[fname]";

$query33="SELECT fname,email,doj,active,username,pcktaken FROM  affiliateuser where referedby = '$countusername2'";
$result33 = mysqli_query($con,$query33);
while($row33 = mysqli_fetch_array($result33))
{
$ac3="$row33[active]";
$countusername3="$row33[username]";
$pcktook="$row33[pcktaken]";
$qu="SELECT level3 FROM  packages where id = $pcktook";
$re = mysqli_query($con,$qu);
while($r = mysqli_fetch_array($re))
{
$ll3="$r[0]";
}
if ($ac3==1)
{
$status3="success";
$totalrefear=$totalrefear+$ll3;
}
else
{
$status3="danger";
}

echo "<li class='list-group-item'>
              <div class='media'>
                <div class='pull-right text-$status3 m-t-sm'> <i class='fa fa-circle'></i> </div>
                <div class='media-body'>
                  <div><a href='#'>$row33[fname]</a></div>
                 <small class='text-muted'>E-Mail : $row33[email]</small> <br><small class='text-muted'>Registration Date : $row33[doj] </small><br>Referred By - $row22[fname]</small></div>
              </div>
            </li> ";


}

}
}
print "</br> <P><b>&nbsp;&nbsp;&nbsp; Total Earnings - </b>$pckcur $totalrefear</p>";
?>


        </section>
      </div>


<div class="col-lg-3">
        <section class="panel panel-default">
          <div class="panel-body"><h4>Level 4</h4></div>
  <!-- Started Fetching Downline Of User-->
  <?php
$totalrefear=0;

  $query="SELECT fname,email,doj,active,username FROM  affiliateuser where referedby = '".$_SESSION['username']."'";


$result = mysqli_query($con,$query);

while($row = mysqli_fetch_array($result))
{
$ac="$row[active]";
$countusername="$row[username]";
$query22="SELECT fname,email,doj,active,username FROM  affiliateuser where referedby = '$countusername'";
$result22 = mysqli_query($con,$query22);

while($row22 = mysqli_fetch_array($result22))
{
$ac2="$row22[active]";
$countusername2="$row22[username]";
$fname22="$row22[fname]";

$query33="SELECT fname,email,doj,active,username FROM  affiliateuser where referedby = '$countusername2'";
$result33 = mysqli_query($con,$query33);
while($row33 = mysqli_fetch_array($result33))
{
$ac3="$row33[active]";
$countusername3="$row33[username]";

$query44="SELECT fname,email,doj,active,username,pcktaken FROM  affiliateuser where referedby = '$countusername3'";
$result44 = mysqli_query($con,$query44);
while($row44 = mysqli_fetch_array($result44))
{
$ac4="$row44[active]";
$countusername4="$row44[username]";
$pcktook="$row44[pcktaken]";
$qu="SELECT level4 FROM  packages where id = $pcktook";
$re = mysqli_query($con,$qu);
while($r = mysqli_fetch_array($re))
{
$ll4="$r[0]";
}

if ($ac4==1)
{
$status4="success";
$totalrefear=$totalrefear+$ll4;
}
else
{
$status4="danger";
}

echo "<li class='list-group-item'>
              <div class='media'>
                <div class='pull-right text-$status4 m-t-sm'> <i class='fa fa-circle'></i> </div>
                <div class='media-body'>
                  <div><a href='#'>$row44[fname]</a></div>
                 <small class='text-muted'>E-Mail : $row44[email]</small> <br><small class='text-muted'>Registration Date : $row44[doj] </small><br>Referred By - $row33[fname]</small></div>
              </div>
            </li> ";


}

}
}
}
print "</br> <P><b>&nbsp;&nbsp;&nbsp; Total Earnings - </b>$pckcur $totalrefear</p>";
?>


        </section>
      </div>


<div class="col-lg-3">
        <section class="panel panel-default">
          <div class="panel-body"><h4>Level 5</h4></div>
  <!-- Started Fetching Downline Of User-->
  <?php

$totalrefear=0;
  $query="SELECT fname,email,doj,active,username FROM  affiliateuser where referedby = '".$_SESSION['username']."'";


$result = mysqli_query($con,$query);

while($row = mysqli_fetch_array($result))
{
$ac="$row[active]";
$countusername="$row[username]";
$query22="SELECT fname,email,doj,active,username FROM  affiliateuser where referedby = '$countusername'";
$result22 = mysqli_query($con,$query22);

while($row22 = mysqli_fetch_array($result22))
{
$ac2="$row22[active]";
$countusername2="$row22[username]";
$fname22="$row22[fname]";

$query33="SELECT fname,email,doj,active,username FROM  affiliateuser where referedby = '$countusername2'";
$result33 = mysqli_query($con,$query33);
while($row33 = mysqli_fetch_array($result33))
{
$ac3="$row33[active]";
$countusername3="$row33[username]";

$query44="SELECT fname,email,doj,active,username FROM  affiliateuser where referedby = '$countusername3'";
$result44 = mysqli_query($con,$query44);
while($row44 = mysqli_fetch_array($result44))
{
$ac4="$row44[active]";
$countusername4="$row44[username]";
$query55="SELECT fname,email,doj,active,username,pcktaken FROM  affiliateuser where referedby = '$countusername4'";
$result55 = mysqli_query($con,$query55);
while($row55 = mysqli_fetch_array($result55))
{

$ac5="$row55[active]";
$countusername5="$row55[username]";
$pcktook="$row55[pcktaken]";
$qu="SELECT level5 FROM  packages where id = $pcktook";
$re = mysqli_query($con,$qu);
while($r = mysqli_fetch_array($re))
{
$ll5="$r[0]";
}

if ($ac5==1)
{
$status5="success";
$totalrefear=$totalrefear+$ll5;
}
else
{
$status5="danger";
}


echo "<li class='list-group-item'>
              <div class='media'>
                <div class='pull-right text-$status5 m-t-sm'> <i class='fa fa-circle'></i> </div>
                <div class='media-body'>
                  <div><a href='#'>$row55[fname]</a></div>
                 <small class='text-muted'>E-Mail : $row55[email]</small> <br><small class='text-muted'>Registration Date : $row55[doj] </small><br>Referred By - $row44[fname]</small></div>
              </div>
            </li> ";


}
}
}
}
}
print "</br> <P><b>&nbsp;&nbsp;&nbsp; Total Earnings - </b>$pckcur $totalrefear</p>";
?>


        </section>
      </div>

  <div class="col-lg-3">
        <section class="panel panel-default">
          <div class="panel-body"><h4>Level 6</h4></div>
  <!-- Started Fetching Downline Of User-->
  <?php
$totalrefear=0;
$query="SELECT fname,email,doj,active,username FROM  affiliateuser where referedby = '".$_SESSION['username']."'";


$result = mysqli_query($con,$query);

while($row = mysqli_fetch_array($result))
{
$ac="$row[active]";
$countusername="$row[username]";
$query22="SELECT fname,email,doj,active,username FROM  affiliateuser where referedby = '$countusername'";
$result22 = mysqli_query($con,$query22);

while($row22 = mysqli_fetch_array($result22))
{
$ac2="$row22[active]";
$countusername2="$row22[username]";
$fname22="$row22[fname]";

$query33="SELECT fname,email,doj,active,username FROM  affiliateuser where referedby = '$countusername2'";
$result33 = mysqli_query($con,$query33);
while($row33 = mysqli_fetch_array($result33))
{
$ac3="$row33[active]";
$countusername3="$row33[username]";

$query44="SELECT fname,email,doj,active,username FROM  affiliateuser where referedby = '$countusername3'";
$result44 = mysqli_query($con,$query44);
while($row44 = mysqli_fetch_array($result44))
{
$ac4="$row44[active]";
$countusername4="$row44[username]";
$query55="SELECT fname,email,doj,active,username FROM  affiliateuser where referedby = '$countusername4'";
$result55 = mysqli_query($con,$query55);
while($row55 = mysqli_fetch_array($result55))
{
$ac5="$row55[active]";
$countusername5="$row55[username]";
$query66="SELECT fname,email,doj,active,username,pcktaken FROM  affiliateuser where referedby = '$countusername5'";
$result66 = mysqli_query($con,$query66);
while($row66 = mysqli_fetch_array($result66))
{

$ac6="$row66[active]";
$countusername6="$row66[username]";
$pcktook="$row66[pcktaken]";
$qu="SELECT level6 FROM  packages where id = $pcktook";
$re = mysqli_query($con,$qu);
while($r = mysqli_fetch_array($re))
{
$ll6="$r[0]";
}

if ($ac6==1)
{
$status6="success";
$totalrefear=$totalrefear+$ll6;
}
else
{
$status6="danger";
}

echo "<li class='list-group-item'>
              <div class='media'>
                <div class='pull-right text-$status6 m-t-sm'> <i class='fa fa-circle'></i> </div>
                <div class='media-body'>
                  <div><a href='#'>$row66[fname]</a></div>
                 <small class='text-muted'>E-Mail : $row66[email]</small> <br><small class='text-muted'>Registration Date : $row66[doj] </small><br>Referred By - $row55[fname]</small></div>
              </div>
            </li> ";


}
}
}
}
}
}
print "</br> <P><b>&nbsp;&nbsp;&nbsp; Total Earnings - </b>$pckcur $totalrefear</p>";
?>


        </section>
      </div>


          <div class="col-lg-3">
        <section class="panel panel-default">
          <div class="panel-body"><h4>Level 7</h4></div>
  <!-- Started Fetching Downline Of User-->
  <?php
$totalrefear=0;
$query="SELECT fname,email,doj,active,username FROM  affiliateuser where referedby = '".$_SESSION['username']."'";


$result = mysqli_query($con,$query);

while($row = mysqli_fetch_array($result))
{
$ac="$row[active]";
$countusername="$row[username]";
$query22="SELECT fname,email,doj,active,username FROM  affiliateuser where referedby = '$countusername'";
$result22 = mysqli_query($con,$query22);

while($row22 = mysqli_fetch_array($result22))
{
$ac2="$row22[active]";
$countusername2="$row22[username]";
$fname22="$row22[fname]";

$query33="SELECT fname,email,doj,active,username FROM  affiliateuser where referedby = '$countusername2'";
$result33 = mysqli_query($con,$query33);
while($row33 = mysqli_fetch_array($result33))
{
$ac3="$row33[active]";
$countusername3="$row33[username]";

$query44="SELECT fname,email,doj,active,username FROM  affiliateuser where referedby = '$countusername3'";
$result44 = mysqli_query($con,$query44);
while($row44 = mysqli_fetch_array($result44))
{
$ac4="$row44[active]";
$countusername4="$row44[username]";
$query55="SELECT fname,email,doj,active,username FROM  affiliateuser where referedby = '$countusername4'";
$result55 = mysqli_query($con,$query55);
while($row55 = mysqli_fetch_array($result55))
{
$ac5="$row55[active]";
$countusername5="$row55[username]";
$query66="SELECT fname,email,doj,active,username,pcktaken FROM  affiliateuser where referedby = '$countusername5'";
$result66 = mysqli_query($con,$query66);
while($row66 = mysqli_fetch_array($result66))
{

$ac6="$row66[active]";
$countusername6="$row66[username]";
$query77="SELECT fname,email,doj,active,username,pcktaken FROM  affiliateuser where referedby = '$countusername6'";
$result77 = mysqli_query($con,$query77);
while($row77 = mysqli_fetch_array($result77))
{
$ac7="$row77[active]";
$countusername7="$row77[username]";
$pcktook="$row77[pcktaken]";
$qu="SELECT level7 FROM  packages where id = $pcktook";
$re = mysqli_query($con,$qu);
while($r = mysqli_fetch_array($re))
{
$ll7="$r[0]";
}

if ($ac7==1)
{
$status7="success";
$totalrefear=$totalrefear+$ll7;
}
else
{
$status7="danger";
}

echo "<li class='list-group-item'>
              <div class='media'>
                <div class='pull-right text-$status7 m-t-sm'> <i class='fa fa-circle'></i> </div>
                <div class='media-body'>
                  <div><a href='#'>$row77[fname]</a></div>
                 <small class='text-muted'>E-Mail : $row77[email]</small> <br><small class='text-muted'>Registration Date : $row77[doj] </small><br>Referred By - $row66[fname]</small></div>
              </div>
            </li> ";

}
}
}
}
}
}
}
print "</br> <P><b>&nbsp;&nbsp;&nbsp; Total Earnings - </b>$pckcur $totalrefear</p>";
?>


        </section>
      </div>
          <div class="col-lg-3">
        <section class="panel panel-default">
          <div class="panel-body"><h4>Level 8</h4></div>
  <!-- Started Fetching Downline Of User-->
  <?php
$totalrefear=0;
$query="SELECT fname,email,doj,active,username FROM  affiliateuser where referedby = '".$_SESSION['username']."'";


$result = mysqli_query($con,$query);

while($row = mysqli_fetch_array($result))
{
$ac="$row[active]";
$countusername="$row[username]";
$query22="SELECT fname,email,doj,active,username FROM  affiliateuser where referedby = '$countusername'";
$result22 = mysqli_query($con,$query22);

while($row22 = mysqli_fetch_array($result22))
{
$ac2="$row22[active]";
$countusername2="$row22[username]";
$fname22="$row22[fname]";

$query33="SELECT fname,email,doj,active,username FROM  affiliateuser where referedby = '$countusername2'";
$result33 = mysqli_query($con,$query33);
while($row33 = mysqli_fetch_array($result33))
{
$ac3="$row33[active]";
$countusername3="$row33[username]";

$query44="SELECT fname,email,doj,active,username FROM  affiliateuser where referedby = '$countusername3'";
$result44 = mysqli_query($con,$query44);
while($row44 = mysqli_fetch_array($result44))
{
$ac4="$row44[active]";
$countusername4="$row44[username]";
$query55="SELECT fname,email,doj,active,username FROM  affiliateuser where referedby = '$countusername4'";
$result55 = mysqli_query($con,$query55);
while($row55 = mysqli_fetch_array($result55))
{
$ac5="$row55[active]";
$countusername5="$row55[username]";
$query66="SELECT fname,email,doj,active,username,pcktaken FROM  affiliateuser where referedby = '$countusername5'";
$result66 = mysqli_query($con,$query66);
while($row66 = mysqli_fetch_array($result66))
{

$ac6="$row66[active]";
$countusername6="$row66[username]";
$query77="SELECT fname,email,doj,active,username,pcktaken FROM  affiliateuser where referedby = '$countusername6'";
$result77 = mysqli_query($con,$query77);
while($row77 = mysqli_fetch_array($result77))
{
$countusername7="$row77[username]";
$query88="SELECT fname,email,doj,active,username,pcktaken FROM  affiliateuser where referedby = '$countusername7'";
$result88 = mysqli_query($con,$query88);
while($row88 = mysqli_fetch_array($result88))
{
$ac8="$row88[active]";
$countusername8="$row88[username]";
$pcktook="$row88[pcktaken]";
$qu="SELECT level8 FROM  packages where id = $pcktook";
$re = mysqli_query($con,$qu);
while($r = mysqli_fetch_array($re))
{
$ll8="$r[0]";
}

if ($ac8==1)
{
$status8="success";
$totalrefear=$totalrefear+$ll8;
}
else
{
$status8="danger";
}

echo "<li class='list-group-item'>
              <div class='media'>
                <div class='pull-right text-$status8 m-t-sm'> <i class='fa fa-circle'></i> </div>
                <div class='media-body'>
                  <div><a href='#'>$row88[fname]</a></div>
                 <small class='text-muted'>E-Mail : $row88[email]</small> <br><small class='text-muted'>Registration Date : $row88[doj] </small><br>Referred By - $row77[fname]</small></div>
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
print "</br> <P><b>&nbsp;&nbsp;&nbsp; Total Earnings - </b>$pckcur $totalrefear</p>";
?>


        </section>
      </div>







<!-- End Fetching Downline Of User-->



    <div class="col-lg-3">
        <section class="panel panel-default">
          <div class="panel-body"><h4>Level 9</h4></div>
  <!-- Started Fetching Downline Of User-->
  <?php
$totalrefear=0;
$query="SELECT fname,email,doj,active,username FROM  affiliateuser where referedby = '".$_SESSION['username']."'";


$result = mysqli_query($con,$query);

while($row = mysqli_fetch_array($result))
{
$ac="$row[active]";
$countusername="$row[username]";
$query22="SELECT fname,email,doj,active,username FROM  affiliateuser where referedby = '$countusername'";
$result22 = mysqli_query($con,$query22);

while($row22 = mysqli_fetch_array($result22))
{
$ac2="$row22[active]";
$countusername2="$row22[username]";
$fname22="$row22[fname]";

$query33="SELECT fname,email,doj,active,username FROM  affiliateuser where referedby = '$countusername2'";
$result33 = mysqli_query($con,$query33);
while($row33 = mysqli_fetch_array($result33))
{
$ac3="$row33[active]";
$countusername3="$row33[username]";

$query44="SELECT fname,email,doj,active,username FROM  affiliateuser where referedby = '$countusername3'";
$result44 = mysqli_query($con,$query44);
while($row44 = mysqli_fetch_array($result44))
{
$ac4="$row44[active]";
$countusername4="$row44[username]";
$query55="SELECT fname,email,doj,active,username FROM  affiliateuser where referedby = '$countusername4'";
$result55 = mysqli_query($con,$query55);
while($row55 = mysqli_fetch_array($result55))
{
$ac5="$row55[active]";
$countusername5="$row55[username]";
$query66="SELECT fname,email,doj,active,username,pcktaken FROM  affiliateuser where referedby = '$countusername5'";
$result66 = mysqli_query($con,$query66);
while($row66 = mysqli_fetch_array($result66))
{

$ac6="$row66[active]";
$countusername6="$row66[username]";
$query77="SELECT fname,email,doj,active,username,pcktaken FROM  affiliateuser where referedby = '$countusername6'";
$result77 = mysqli_query($con,$query77);
while($row77 = mysqli_fetch_array($result77))
{
$countusername7="$row77[username]";
$query88="SELECT fname,email,doj,active,username,pcktaken FROM  affiliateuser where referedby = '$countusername7'";
$result88 = mysqli_query($con,$query88);
while($row88 = mysqli_fetch_array($result88))
{

$countusername8="$row88[username]";
$query99="SELECT fname,email,doj,active,username,pcktaken FROM  affiliateuser where referedby = '$countusername8'";
$result99 = mysqli_query($con,$query99);
while($row99 = mysqli_fetch_array($result99))
{

$countusername9="$row99[username]";

$ac9="$row99[active]";
$pcktook="$row99[pcktaken]";
$qu="SELECT level9 FROM  packages where id = $pcktook";
$re = mysqli_query($con,$qu);
while($r = mysqli_fetch_array($re))
{
$ll9="$r[0]";
}

if ($ac9==1)
{
$status9="success";
$totalrefear=$totalrefear+$ll9;
}
else
{
$status9="danger";
}

echo "<li class='list-group-item'>
              <div class='media'>
                <div class='pull-right text-$status9 m-t-sm'> <i class='fa fa-circle'></i> </div>
                <div class='media-body'>
                  <div><a href='#'>$row99[fname]</a></div>
                 <small class='text-muted'>E-Mail : $row99[email]</small> <br><small class='text-muted'>Registration Date : $row99[doj] </small><br>Referred By - $row88[fname]</small></div>
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
print "</br> <P><b>&nbsp;&nbsp;&nbsp; Total Earnings - </b>$pckcur $totalrefear</p>";
?>


        </section>
      </div>







<!-- End Fetching Downline Of User-->

<div class="col-lg-3">
        <section class="panel panel-default">
          <div class="panel-body"><h4>Level 10</h4></div>
  <!-- Started Fetching Downline Of User-->
  <?php
$totalrefear=0;
$query="SELECT fname,email,doj,active,username FROM  affiliateuser where referedby = '".$_SESSION['username']."'";


$result = mysqli_query($con,$query);

while($row = mysqli_fetch_array($result))
{
$ac="$row[active]";
$countusername="$row[username]";
$query22="SELECT fname,email,doj,active,username FROM  affiliateuser where referedby = '$countusername'";
$result22 = mysqli_query($con,$query22);

while($row22 = mysqli_fetch_array($result22))
{
$ac2="$row22[active]";
$countusername2="$row22[username]";
$fname22="$row22[fname]";

$query33="SELECT fname,email,doj,active,username FROM  affiliateuser where referedby = '$countusername2'";
$result33 = mysqli_query($con,$query33);
while($row33 = mysqli_fetch_array($result33))
{
$ac3="$row33[active]";
$countusername3="$row33[username]";

$query44="SELECT fname,email,doj,active,username FROM  affiliateuser where referedby = '$countusername3'";
$result44 = mysqli_query($con,$query44);
while($row44 = mysqli_fetch_array($result44))
{
$ac4="$row44[active]";
$countusername4="$row44[username]";
$query55="SELECT fname,email,doj,active,username FROM  affiliateuser where referedby = '$countusername4'";
$result55 = mysqli_query($con,$query55);
while($row55 = mysqli_fetch_array($result55))
{
$ac5="$row55[active]";
$countusername5="$row55[username]";
$query66="SELECT fname,email,doj,active,username,pcktaken FROM  affiliateuser where referedby = '$countusername5'";
$result66 = mysqli_query($con,$query66);
while($row66 = mysqli_fetch_array($result66))
{

$ac6="$row66[active]";
$countusername6="$row66[username]";
$query77="SELECT fname,email,doj,active,username,pcktaken FROM  affiliateuser where referedby = '$countusername6'";
$result77 = mysqli_query($con,$query77);
while($row77 = mysqli_fetch_array($result77))
{
$countusername7="$row77[username]";
$query88="SELECT fname,email,doj,active,username,pcktaken FROM  affiliateuser where referedby = '$countusername7'";
$result88 = mysqli_query($con,$query88);
while($row88 = mysqli_fetch_array($result88))
{

$countusername8="$row88[username]";
$query99="SELECT fname,email,doj,active,username,pcktaken FROM  affiliateuser where referedby = '$countusername8'";
$result99 = mysqli_query($con,$query99);
while($row99 = mysqli_fetch_array($result99))
{

$countusername9="$row99[username]";
$query10="SELECT fname,email,doj,active,username,pcktaken FROM  affiliateuser where referedby = '$countusername9'";
$result10 = mysqli_query($con,$query10);
while($row10 = mysqli_fetch_array($result10))
{
$countusername10="$row10[username]";
$ac10="$row10[active]";
$pcktook="$row10[pcktaken]";
$qu="SELECT level10 FROM  packages where id = $pcktook";
$re = mysqli_query($con,$qu);
while($r = mysqli_fetch_array($re))
{
$ll10="$r[0]";
}

if ($ac10==1)
{
$status10="success";
$totalrefear=$totalrefear+$ll10;
}
else
{
$status10="danger";
}

echo "<li class='list-group-item'>
              <div class='media'>
                <div class='pull-right text-$status10 m-t-sm'> <i class='fa fa-circle'></i> </div>
                <div class='media-body'>
                  <div><a href='#'>$row10[fname]</a></div>
                 <small class='text-muted'>E-Mail : $row10[email]</small> <br><small class='text-muted'>Registration Date : $row10[doj] </small><br>Referred By - $row99[fname]</small></div>
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
print "</br> <P><b>&nbsp;&nbsp;&nbsp; Total Earnings - </b>$pckcur $totalrefear</p>";
?>


        </section>
      </div>
