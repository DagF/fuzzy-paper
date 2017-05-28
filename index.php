<html>
<head>
<title>Transportation Method Idea Generation</title>
<meta name="viewport" content="width=device-width"/>
<style>
.wrapper{
width:600px;
margin:auto;
padding:5px;
background-color:#fff;
}
body{
margin:0;
background-color:#cff;
}
</style>
</head>
<body>
<div class="wrapper">
<h1>Transportation Method Idea Generation</h1>
<p>
In this experiment we explore different factors influence on idea generation.
All responses are anonymous.
<br><br>
<b>The result of the survey will be posted here along with the accompanying paper.</b>
<br>
<a href="results.php">Results can be viewed here</a>
<br>
<br><br>
Please follow the link below to answer the survey:
<br>
<?php
$r = rand(0,2);
if($r == 0){
//merged
  echo '<a class="form" href="https:/\/docs.google.com/forms/d/e/1FAIpQLSfWXuExlBXDNLTzkmX5kjnbrfwUJflMnMKv8sZelhBnjhuMMw/viewform">Go to Transportation Method Idea Generation Form</a>';
}
elseif($r == 1){
//split  
echo '<a class="form" href="https:/\/docs.google.com/forms/d/e/1FAIpQLSdfu0Mi1le89OMlgBI4XzN1_l17Tj4BpA4oTKWMiSa7d3tiGA/viewform">Go to Transportation Method Idea Generation Form</a>';
}
else{
//merged no ideas
  echo '<a class="form" href="https:/\/docs.google.com/forms/d/e/1FAIpQLSc1bIecmoDfvMJ9sAJTsveLzb-gy5MYsxWyy3vOieIWOydhCA/viewform">Go to Transportation Method Idea Generation Form</a>';
}
?>
