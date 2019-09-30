<html>
    <body>
       
          <table border= "1">
            
            <?php
            
            $articulos = 0;
            $primo = 0;
            $num = 1;
           
            while ($articulos < 10){
            
                $articulos++;
                
                echo "<td>".$articulos;
                
                echo "<br>";
                
                echo ($articulos % 2 == 0) ? " par" : " impar";
                
                echo "<br>";
                
                while ($articulos > $num) {
                if ($articulos % $num == 0) {
                    $primo++;
                }
                
                $num++;
                    
                }
             
                if ($primo >= 2) {
                    echo "No es primo";
                } else {
                    echo "Es primo";
                }
                  
                }
          
            
         
           ?>   
           
        </table>
        
    </body>
    
</html>
