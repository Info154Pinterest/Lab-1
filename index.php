<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            //Create a function to test whether a given string is all alphabetic. The function should return 
            //‘true’ if the string is all alphabetic and ‘false’ if the string contains any non-alphabetic characters. 
            function is_alphabetic($text){
                if(ctype_alpha($text)){
                    return TRUE;
                } else {
                    return FALSE;
                }
            }
            
            //Create a function to test whether a given string is a valid number. The function should return 
            //‘true’ if the number is valid and ‘false’ if the number is not valid.
            function checkForNumber($input){
                if(is_numeric($input)){
                    return TRUE;
                } else {
                    return FALSE;
                }
            }


            //Write a script that demonstrates use of the functions with a set of good test cases. That is, 
            //a script that sets a test value, calls the function, and displays the test value and the result 
            //returned by the function.
            $num = 34;
            $string1 = abcd;
            $sting2 = dsfgf;
            
             
                print_r($num." is ".(string)is_alphabetic($num));
            
            
        ?>
    </body>
</html>
