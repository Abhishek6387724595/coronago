<?php include 'dbcon.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <?php include 'link/links.php'; ?>
    <?php include 'css/style.php'; ?>
</head>
<body onload="fetch()">
<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item active">
        <a class="nav-link" href=http://localhost/coronago/index.php#"">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/coronago/index.php#aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/coronago/index.php#sympid">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/coronago/index.php#preventid">Preventions</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiastatewise.php">IndiaStateWise</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiadaywise.php">IndiaDayWise</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/coronago/index.php#contactid">Contacts</a>
      </li>
    </ul>
  </div>
</nav>

<!--***********************Corona latest*********************-->

<section class="corona_update">
  <div class="mb-3">
    <h3 class="text-uppercase text-center my-5">Covid-19 Updates Of India</h3>
  </div>

  <div class="table-responsive">
      <table class="table table-bordered text-center table-striped" id="tbval">
        <tr>
          <th class="text-capitalize">lastupdatetime</th>
          <th class="text-capitalize">state</th>
          <th class="text-capitalize">confirmed</th>
          <th class="text-capitalize">active</th>
          <th class="text-capitalize">recovered</th>
          <th class="text-capitalize">deaths</th>
        </tr>
       

<!--</section>-->
<br>

<?php
$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);  
$response = file_get_contents("https://api.covid19india.org/data.json", false, stream_context_create($arrContextOptions));

$coronalive = json_decode($response,true);
/*echo "<pre>";
print_r($coronadata);*/
$statecount = count($coronalive['statewise']);
for($i=1;$i<$statecount;$i++){

  ?>

    <tr>
        <td><?php echo $coronalive['statewise'][$i]['lastupdatedtime'] ; ?></td>
        <td><?php echo $coronalive['statewise'][$i]['state'] ; ?></td>
        <td style="font-weight:bold;"><?php echo $coronalive['statewise'][$i]['confirmed'] ; ?></td>
        <td><?php echo $coronalive['statewise'][$i]['active'] ; ?></td>
        <td><?php echo $coronalive['statewise'][$i]['recovered'] ; ?></td>
        <td><?php echo $coronalive['statewise'][$i]['deaths'] ; ?></td>
    </tr>




  <?php

}?>
    </table>
  </div>
  </div>
</section>


<!--********************Footer*************************-->

<footer class="mt-5">
  <div class="footer_style text-white text-center container-fluid">
    <p>&copy Copyright by Abhishek Awasthi</p>
  </div>
</footer>
