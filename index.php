<!-- Week Number and Week Days problem -->
<!-- Problem Number 2 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Session</title>
</head>
<body style="padding-top:100px; padding-left :100px;">



<?php 

//question 1 start//
echo "<b>Question 1 : </b>";
echo "<p>  Write a program to check whether a year is a leap year or not. <br>Sample Input: 2000 <br>Sample Output:  Leep Year</p>";

        $years = 2004;     
        //condition to check if it is leap year or not
        if( ($years%4 == 0) and ($years%100 != 0) or ($years%400 ==0))  
        {  
            echo "Sample Input : $years"."<br>";
            echo "Sample Output : Leap Year";    
        }  
        else  
        {  
            echo "Sample Input : $years"."<br>";
            echo "Sample Output : Not Leap Year";    
        }  
    
//question 1 end//

echo "<br><br><br><br><br><br>";







//question 2 start//

        echo "<b>Question 2 : </b>";
        echo "<p> Write a program to input week numbers and print week day. <br>Sample Input: Week number: 1 <br>Sample Output:  Sunday</p>";

        $weekNumbers = 4;   
        //condition to check week Numbers and week days///
        if((1 <= $weekNumbers) && ($weekNumbers<=7)){
            if($weekNumbers==1){ 
                echo "Sample Input : $weekNumbers"."<br>";
                echo "Sample Output : Sunday";
            }
            else if($weekNumbers==2){ 
                echo "Sample Input : $weekNumbers"."<br>";
                echo "Sample Output : Monday";
            }
            else if($weekNumbers==3){ 
                echo "Sample Input : $weekNumbers"."<br>";
                echo "Sample Output : Tuesday";
            }
            else if($weekNumbers==4){ 
                echo "Sample Input : $weekNumbers"."<br>";
                echo "Sample Output : Wednesday";
            }
            else if($weekNumbers==5){ 
                echo "Sample Input : $weekNumbers"."<br>";
                echo "Sample Output : Thursday";
            }
            else if($weekNumbers==6){ 
                echo "Sample Input : $weekNumbers"."<br>";
                echo "Sample Output : Friday";
            }
            else if($weekNumbers==7){ 
                echo "Sample Input : $weekNumbers"."<br>";
                echo "Sample Output : Saturday";
            }
        }
        else{
            echo "You should give number between 1-7";
        }
//question 2 end//
echo "<br><br><br><br><br><br>";





//question 3 start//
echo "<b>Question 3 : </b>";
echo "<p>   Write a program to count the total number of notes in a given amount.
.<br> Sample Input:  575<br>Sample output :
500 : 1 <br>
100 : 0 <br>
50 : 1 <br>
20 : 1 <br>
10 : 0 <br>
5 : 1 <br>
2 : 0 <br>
1 : 0 <br>
</p><br><br>";

        $amount = 100;  
        $fixedAmount=$amount; 
        //array of notes//
        $arrayNotes = array(500, 100, 50, 20, 10, 5, 2, 1);
        $countsNotes =array(0, 0, 0, 0, 0, 0, 0, 0,0);

        //condition to check the notes 
        for ($i = 0; $i < 8; $i++){         // Count notes
            if ($amount >= $arrayNotes[$i]){
                    
                        $countsNotes[$i] = intval($amount / $arrayNotes[$i]);
                        $amount = $amount - $countsNotes[$i] * $arrayNotes[$i];
                    }
                }
                echo "Sample Input : ".$fixedAmount."<br>"; // Printing given amount

                echo ("Total Number of Notes :"."<br>"); // Printing  notes With  Notes counter

                for ($i = 0; $i < 8; $i++)
                {

                    echo ($arrayNotes[$i] . " : " .$countsNotes[$i]."<br>" );

                }

//question 3 end//
echo "<br><br><br><br><br><br>";





//question 4 start//
echo "<b>Question 4 : </b>";
echo "<p>  Write a program to calculate profit or loss..<br> Sample Input cost:  1000<br>Sample Input selling:  1500<br>Sample profit:  500</p>";


        $costPrice = 1000;
        $sellingPrice = 1500;
        //conditions to check whether it is profit or loss
        if($costPrice > $sellingPrice){

            $loss = ($costPrice - $sellingPrice);
            echo "Input Cost Price : ".$costPrice."<br>";
            echo "Input Selling Price : ".$sellingPrice."<br>";
            echo "Loss : $loss"."<br>";
            
        }
        else if($costPrice < $sellingPrice){

            $profit = ($sellingPrice - $costPrice);
            echo "Input Cost Price : ".$costPrice."<br>";
            echo "Input Selling Price : ".$sellingPrice."<br>";
            echo "Profit : ".$profit."<br>";
            

        }
        else{
            echo " You have no loss or Profit";
        }
        
//question 4 end//
echo "<br><br><br><br><br><br>";







//question 5 start//
echo "<b>Question 5 : </b>";
echo"<p> Write a program to check whether a character is uppercase or lowercase alphabet.<br> Sample Input:  C<br>Sample Output:  'C' is uppercase alphabet</p>";

        $character = 'C';   
        //condition to check if it is uppercase or lowercase
        if($character === strtoupper($character)) {
            echo "Input Character : ".$character."<br>";
            echo $character." is Uppercase alphabet"."<br>";

        }
        else if($character === strtolower($character)) {
            echo "Input Character : ".$character."<br>";
            echo $character." is Lowercase alphabet"."<br>";
        }
        else{
        echo "You entered a special character , digit or upper lower Mixed!"."<br>";
        }
//question 5 end//
echo "<br><br><br><br><br><br>";









//question 6 start//
echo "<b>Question 6 : </b>";
echo "<p>Write a program to find the maximum between two numbers using a switch case.</p>";

$number1 = 10;  
$number2 = 7; 
if(!is_numeric($number1) && !is_numeric($number2))  
{  
    echo "Input should be a number";  
    return;  
}   
//condition to check maximum between two number//
switch($number1 > $number2)
{   
    case 0: 
        echo "Sample Number 1 : ".$number1."<br>"; 
        echo "Sample Number 2 : " .$number2."<br>"; 
        echo "The maximum is : ".$number2."<br>";
        break;


    case 1: 
        echo "Sample Number 1 : ".$number1."<br>"; 
        echo "Sample Number 2 : " .$number2."<br>"; 
        echo "The maximum is : ".$number1."<br>";
        break;

    default: 
        echo "Number is equal";
}
//question 6 end//
echo "<br><br><br><br><br><br>";









//question 7 start//
echo "<b>Question 7 : </b>";
echo"<p>Write a program to print all even numbers between 1 to 100. - using while loop</p>";


$i = 1;

while($i <= 100) { //iterate from 1 to 100//
  if($i%2 == 0) {
      echo $i." , ";
  }
  $i++;
}
//question 7 end//
echo "<br><br><br><br><br><br>";









//question 8 start//
echo "<b>Question 8 : </b>";
echo"<p> Create an array which contains 1-100 numbers & print it. FromParent Array print even & odd number  array bottom of parent array. <br>Use array & loop Sample Output:<br>
Parent [1,2,3,4,5,6,.........100]<br> Even [2,4,6,.......100]<br> Odd [1,3,5,7,..........99]</p>";

$parrentArray = array();
$oddArray = array();
$evenArray = array();

echo "<b>Parrent array : </b>";
for($i=1; $i<=100; $i++) {

    $parrentArray[] = $i;

}
print_r( $parrentArray);
echo "<br><br><br><br>";


foreach ($parrentArray as $val){
    if($val%2== 0){
        $evenArray[] = $val;
    }
    else{
        $oddArray[] = $val;
    }
}
echo "<b>Even From parrentArray :  </b>";
print_r($evenArray);
echo "<br><br><br><br>";


echo "<b>Odd From parrentArray :  </b>";
print_r($oddArray);


//question 8 end//
echo "<br><br><br><br><br><br>";



//question 9 start//
echo "<b>Question 9 : </b>";
echo "<p>Write a function which returnswhether a number isprime or not</p>";


        $primeChecker=0;

        $number = 3;   
        //condition to check if it is prime number or not//

        // 0 and 1 are not prime numbers so whenever 0 or 1 occurs primechecker variable is set to 1;
        if ($number == 0 || $number == 1)
            $primeChecker = 1;

        for ($i = 2; $i <= $number / 2; ++$i) {
            if ($number % $i == 0) {
                $primeChecker = 1;
                break;
            }
        }
        echo "Given Number is " . $number . "<br>";
        // primechecker is 0 for prime numbers
        if ($primeChecker == 0){

            echo $number."  is a prime number"."<br>";
        }
        else{
            echo $number."  is a not prime number"."<br>";
        }


//question 9 end//
echo "<br><br><br><br><br><br>";






//question 10 start//
echo "<b>Question 10 : </b>";
echo "<p>Write a function to reverse a string:</p>";



        function reverse_string($string){
            
            $length = strlen($string);


            // for a 1 character string//
            if($length == 1)
            {
                return $string;
            }

            else
            {
                $length--;
                return reverse_string(substr($string,1, $length)).substr($string, 0, 1);
            }
        }
        // function called//
        $string ='string';
        echo "Given String is : " . $string."<br>";
        echo "The reverse string is :".(reverse_string($string));   

//question 9 end//
echo "<br><br><br><br><br><br>";



?>  







</body>
</html>





