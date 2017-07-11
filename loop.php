                     <h2>Exercice 1</h2>
<pre>
<?php 

//******************Exercice 1 Loop******************//
              
function category ($debut, $fin){
     
    $rang = [];
      for($i=$debut; $i<= $fin; $i++){
        if($i % 2 == 0){
          echo 'Nombre pair :','<font color="blue">'.$i.'</font>'."</br>";
          print_r ($rang, $i);
        }
      
          else{ 
           echo 'Nombre impair :', '<font color="orange">'.$i.'</font>'."</br>";
          print_r ($rang, $i); 
          }  
     
          //if (sqrt($i)*sqrt($i) ==$i){
           // echo '<strong>'.$i.'</strong>'."</br>";
         // }
        }
        }
            echo (category(22, 40));


    
     
 ?> 
</pre>

             <h2>Exercice 2</h2>

