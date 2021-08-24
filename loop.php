<?php
session_start();
if(!isset($_SESSION['email']))
{
    echo '<script>window.location.href="login.php";</script>';
}
?>
<html>
    <head>
        <title>Loops</title>
        <link  rel="stylesheet" href="./css/css/bootstrap.css">
        <style>
            table{
                border: 1px solid black;
                margin: 20px;
                
            }
           
            td{
                border: 1px solid black ;
                padding: 20px;
                font-weight: bold;
                font-size: 16px;
            }
            p{
                color: blue;
            }
            .red{
                color: orange;

            }
        </style>
    </head>
    <body>

<?php

if(isset($_SESSION['email'])){
    echo '<h1>welcome '.$_SESSION['email'].' </h1>';
    echo '<button type="button" class=" btn btn-primary"><a href="logout.php" class=" text-white">logout</a></button>';
}
$a=1;
echo "<h1>Use while loop</h1>";
echo "<ul>";
while($a<=10){
    echo " <li>This is while loop  $a </li> <br>";
    $a++;
    
}
echo "</ul>";
$b=1;
echo "<h1>Use if and else in while loop</h1>";
echo "<ul>";
while($b<10){

    if($b<5){
        echo" <li>less then 5</li> <br>";
    }
    else{
        echo" <li>Greater then 5</li> <br>";
    }
 $b++;   
}
echo "</ul>";
echo "<h1>Use for loop</h1>";

for($i=0;$i<=15;$i++){
 echo "This is for loop $i <br>";
}
echo "<h1>Nested for loop</h1>";
// for($c=1;$a<=100;$a=$a+10){
//     echo "$a <br>";
//     for($d=$a;$d<=$a+10;$d++){
//         echo "$d <br>";
//     }
//     echo " <br>";

// }
for($j=0;$j<=5;$j++)
{
    for($k=5;$k>=$j;$k--)
    {
        echo "* ";
    }
    echo"<br>";

}
echo "<br>";
for($j=0;$j<=5;$j++)
{
    for($k=0;$k<=$j;$k++)
    
    {
        echo "* ";
    }
    echo"<br>";

}
echo "<h1>write table of 5 using for loop</h1>";
echo "<table >";
for($j=1;$j<=10;$j++){
    $mul = 5* $j;
    echo "<tr><td>5</td><td>x</td><td> $j </td><td> = </td><td>$mul </td></tr> ";
  
}
echo"</table>";
for($j=0;$j<=5;$j++)
{
    
        echo "********* ";
    
   
    echo "<br>";

}
echo "<br>";
echo"<table>";
echo"<tr>";
echo"<td>";
for($j=0;$j<=5;$j++)
{
    for($k=0;$k<=$j;$k++)
    
    {
        echo "* ";
    }
    echo"<br>";

}
for($j=0;$j<=5;$j++)
{
    for($k=5;$k>=$j;$k--)
    {
        echo "* ";
    }
    echo"<br>";

}
echo"</td>";
echo"<td>";
for($j=0;$j<=5;$j++)
{
    for($k=0;$k<=$j;$k++)
    
    {
        echo "* ";
    }
    echo"<br>";

}
for($j=0;$j<=5;$j++)
{
    for($k=5;$k>=$j;$k--)
    {
        echo "* ";
    }
    echo"<br>";

}
echo"</td>";
echo"</tr>";
echo"</table>";
echo "<h1>find even odd</h1>";
for($num=1;$num<=100;$num++){
 if($num%2==0){
     echo "<p> $num is even</p> ";
 }
 else{
     echo " <p class=\"red\">$num is odd</p> ";
 }
}
echo "<h1>Prime number</h1>";
for($num=1;$num<=100;$num++){
    for($i=2;$i<=$num;$i++){
        if($num%$i==0)
        break;
    }
    
    
    if ($i==$num){
        echo "<h3 class=\"red\"> $num is prime</h3> ";

    }
    else{
        echo " $num is not prime <br>";
    }

 
}




?>
    </body>
    </html>