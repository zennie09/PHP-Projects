<?php
        if(isset($_POST["submit"]))
        {
            if(isset($_POST["urban_dictionary_error"])){
                $urban_error = $_POST["urban_dictionary_error"]; 
           }else{
            $urban_error  = "Please enter your Urban Word!!!";
           }

           if(isset($_POST["urban_definition"])){
            $urban_definition  = $_POST["urban_definition"]; 
            }else{
                $urban_definition   = "Was Not Founded!!!";
            }

            if(isset($_POST["urban_dictionary_example1"])){
                $urban_example1  = $_POST["urban_dictionary_example1"]; 
            }else{
                    $urban_example1   = "";
            }

            if(isset($_POST["urban_link"])){
                $urban_link  = $_POST["urban_link"]; 
            }else{
                    $urban_link   = "";
            }
            
            if(isset($_POST["urban_author"])){
               
                $urban_author  = $_POST["urban_author"]; 
            }else{
                    $urban_author   = "";
            }

            if(isset($_POST["urban_written"])){
               
                $urban_written  = $_POST["urban_written"]; 
            }else{
                    $urban_written   = "";
            }

            



            
            $urban_word = $_POST["urban_word"];

            if($urban_word==''){
                $urban_error;
            }else{
                $urban_error='';
		/*Using of RAPIDAPI*/

                $curl = curl_init();
    
                curl_setopt_array($curl, [
                    CURLOPT_URL => 'https://mashape-community-urban-dictionary.p.rapidapi.com/define?term='.$urban_word,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_CUSTOMREQUEST => 'GET',
                    CURLOPT_HTTPHEADER => [
                        'x-rapidapi-host: --GET RAPIDAPI HOST ID--',
                        'x-rapidapi-key: --GET RAPIDAPI KEY--',
                    ],
                ]);

                $response = curl_exec($curl);
                $err = curl_error($curl);

                curl_close($curl);

                if ($err) {
                    echo 'cURL Error #:'.$err;
                } else {
                    //echo $response;
                    $result = json_decode($response, true);
                    $urban_definition = $result['list'][0]['definition']."<br>";
                    $urban_example1 = $result['list'][0]['example'];
                    $urban_link  = "<a href=".$result['list'][0]['permalink'].">Click On Me</a>";
                    $urban_word = $result['list'][0]['word'];
                    $urban_author = $result['list'][0]['author'];
                    $urban_written = date("d-m-Y", strtotime($result['list'][0]['written_on']));

                  
                }
            }
		/*END RAPIDAPI*/
         }else{

         }
       




?>