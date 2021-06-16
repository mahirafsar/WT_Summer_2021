<?php
   	

	   //Get form data
	   $formdata = array(
	      'firstname'=> $_POST["firstname"],
	      'email'=>$_POST["email"],
	      'pwd'=> $_POST["pwd"],
	      'com'=> $_POST["com"],
	      'gender'=> $_POST["gender"]
	  
	   );

        if(isset($_REQUEST["hobby1"]))
        {
            $formdata['hobby1']= $_REQUEST["hobby1"];
        }
        if(isset($_REQUEST["hobby2"]))
        {
            $formdata['hobby2']= $_REQUEST["hobby2"];
        }
        if(isset($_REQUEST["hobby3"]))
        {
            $formdata['hobby3']= $_REQUEST["hobby3"];
        }
       $existingdata = file_get_contents('data.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formdata;
       //Convert updated array to JSON
	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
	   
	   //write json data into data.json file
	   if(file_put_contents("data.json", $jsondata)) {
	        echo "Data successfully saved <br>";
	    }
	   else 
	        echo "no data saved";

     $data = file_get_contents("data.json");
	 $mydata = json_decode($data);

    
?>
