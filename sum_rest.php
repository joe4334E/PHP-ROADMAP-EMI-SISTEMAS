<?php                                                                                                             
$suma = 0;                                                                                                        
$resta = 0;                                                                                                       

echo "Ingrese números para sumar y restar. Ingrese 0 para finalizar.\n";                                          

do {                                                                                                              
  $numero = (int) readline("Ingrese un número: ");                                                              

  $suma += $numero;                                                                                             
  $resta -= $numero;                                                                                            

} while ($numero != 0);                                                                                           

echo "La suma de los números ingresados es: " . $suma . "\n";                                                     
echo "La resta de los números ingresados es: " . $resta . "\n";                                                   
?>  
