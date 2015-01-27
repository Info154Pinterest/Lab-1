<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            /*-------------------------------------------------------------------------------
               Function Name   : isAlpha
               Purpose: Test whether a string consists of all alpha characters
               Parameters: $text (string)
               Return Type: 
            --------------------------------------------------------------------------------*/
            //Create a function to test whether a given string is all alphabetic. The function should return 
            //‘true’ if the string is all alphabetic and ‘false’ if the string contains any non-alphabetic characters. 
            function isAlpha($text){
                if(ctype_alpha($text)){
                    return TRUE;
                } else {
                    return FALSE;
                }
            }
            
            //Create a function to test whether a given string is a valid number. The function should return 
            //‘true’ if the number is valid and ‘false’ if the number is not valid.
            /*-------------------------------------------------------------------------------
               Function Name   : isItaNumber
               Purpose: Test whether a string consists of all alpha characters
               Parameters: 
               Return Type: 
            --------------------------------------------------------------------------------*/
            function isItaNumber($input){
                $input = (string)$input;
                $numSection = explode(",", $input);
                $lastDigits = end($numSection);
                if(is_numeric($lastDigits)&&strlen($lastDigits)==3){
                    $count = 0;
                    foreach ($numSection as $section) {
                        if(is_numeric($section)){
                            $count++;
                        } else {

                        }
                    if($count == count($numSection))
                        return TRUE;
                    }
                } else {
                    if (count($numSection)<2 && is_numeric($numSection[0])) {
                        return TRUE;
                    }
                    return FALSE;
                }
            }


            //Write a script that demonstrates use of the functions with a set of good test cases. That is, 
            //a script that sets a test value, calls the function, and displays the test value and the result 
            //returned by the function.
            $num = 34;
            $string1 = "abcd";
            $sting2 = "dsfgf";
            $num2 = "100,110";
            
                print_r("Check for aphabetic<br>");
                print_r($num." is ".(string)isAlpha($num)." </br>");
                print_r($string1." is ".(string)isAlpha($string1)." </br>");
                print_r($sting2." is ".(string)isAlpha($sting2)." </br>");

                print_r("Check for number<br>");
                print_r($num." is ".(string)isItaNumber($num)." </br>");
                print_r($string1." is ".(string)isItaNumber($string1)." </br>");
                print_r($sting2." is ".(string)isItaNumber($sting2)." </br>");
                print_r($num2." is ".(string)isItaNumber($num2)." </br>");
        ?>
    </body>
</html>
