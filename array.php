<?php
$countries=array("india","pakistan","united state");
echo $countries[0];
echo "<br>";
echo $countries[1];
echo "<br>";
echo $countries[2];
echo "<br>";
$countryByCode=array("in"=>"india","pak"=>"pakistan","us"=>"united state");
echo $countryByCode["in"];
echo "<br>";
$countries=array("india","pakistan","united state");
$arrlength=count($countries);

for($x=0;$x<$arrlength;$x++)
  {
  echo $countries[$x];
  echo "<br>";
  }
echo"<br>";
$countriesByCode=array("in"=>"india","pak"=>"pakistan","us"=>"united state");

foreach($countriesByCode as $x=>$x_value)
  {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
  }
  
  $countries = array("india", "pakistan", "united state");

if (in_array("india", $countries))
  {
  echo "Match found";
  }
else
  {
  echo "Match not found";
  }
  //multidimensional array//
  
  
  $school= array
  (
 array("sameer",12,"allahaabd"),
 array("amar",13,"kanpur"),
 array("ram",14,"lucknow")
  );
  $arrlength=count($school);
  
  
  for ($row = 0; $row <  $arrlength; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  $arrlength2=count($school[$row]);
  for ($col = 0; $col <  $arrlength2; $col++) {
    echo "<li>".$school[$row][$col]."</li>";
  }
  echo "</ul>";
}
 //array of jobs//
 
 
 $jobs= array
 (
 array("Deloitte","Java","3 years"),
 array("JP Morgan","PHP","4 years","mumbai"),
 array("Tia","Oracle","5 years")
 );
 $arrlength=count($jobs);
 
?>