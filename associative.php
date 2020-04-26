<?php
$associative=array(
	
	array("Rahul",25,95.56),
                   array("sita",24,85.17),
				   array("Rohan",25,90.78));


				//    echo $associative ["Name"];
				//    echo "<br>";
				//    echo $associative ["Age"];
				//    echo "<br>";
				//    echo $associative ["Percentage"];
				//    echo "<br>";
				   $arrlength=sizeof($associative);

				   echo 'outer lenght =>'.$arrlength;
									  for($i=0;$i<$arrlength;$i++)
									  {

										// print_r($associative[0]);
										  $arrinnerlength= sizeof($associative[$i]);

										  echo "inner length" . $arrinnerlength;
										  echo "Name ". $associative [$i][0]; 
										  echo "Age ". $associative [$i][1]; 
										  echo "Per ". $associative [$i][2]; 
										//   for($j=0;$j<$arrinnerlength;$j++)
										//   {
										// 	  echo $associative [$i][$j];
										// 	  echo "<br>";
										//   }
									  }
				   ?>

			

				 