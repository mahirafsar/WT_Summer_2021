<?php
   	

	   //Get form data
	   $formdata = array(
	      'firstname'=> $_POST["firstname"],
	      'email'=>$_POST["email"],
	      'pwd'=> $_POST["pwd"],
	      'com'=> $_POST["com"],
	      'gender'=> $_POST["gender"],
	      //'hobby1'=> $_POST["hobby1"],
	      //'hobby2'=> $_POST["hobby2"],
	      //'hobby3'=> $_POST["hobby3"]

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

    
	//  echo "my value: ".$mydata[5]->firstName;
/*	 foreach($mydata as $myobject)
	 {
	 foreach($myobject as $key=>$value)
	{
		echo "your ".$key." is ".$value."<br>";
	} 
	}
	*/
?>