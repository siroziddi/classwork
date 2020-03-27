$arr =['a'=>'html','b'=>'css','c'=>'php','d'=>'js','e'=>'jq'];
 foreach($arr as $el):
     echo $el.'<br>'; 
 endforeach;

 echo '<hr>';

  $arr =[10,20,15,17,24,35];
 $result=0;
 foreach($arr as $elem){
    $result=$result + $elem;
 }
echo $result;

echo '<hr>';

$i= 1;
  while($i <= 100){
    echo $i.'<br>';
    $i++;
 }

 echo '<hr>';

 for($i=1;$i<=100;$i++){
    echo $i . '<br>';
     }

     echo '<hr>';


     $arr =['green'=>'зелный','red'=>'красный','blue'=>'голубой'];
     foreach($arr as $key=>$elem){
            echo $key . '=' . $elem . '<br>';
         }

         echo '<hr>';  

         $arr =['Коля'=>200,'Вася'=>300,'Петя'=>400];
         foreach($arr as $key=>$elem){
                echo "$key зарплата- $elem . '<br>'";
             }
            
             echo '<hr>';

             $arr =[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100];
    $result=0;
    foreach($arr as $elem){
    $result=$result + $elem;
    }
              

             
                      
    

?>