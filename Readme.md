Framework de PHP utilizado es symfony.
La primera parte del ejercicio (calculadora), recibiremos unos parámetros por la url, los cuáles trataremos de la siguiente manera en el 
controlador, DefaultController.
Al estar enrutado mediante Route, será necesario que reciba 3 argumentos para entrar en nuestra función.
El primer argumento será comparado con las operaciones soportadas por nuestra calculadora, realizando la operación correspondiente (mostrando el resultado en pantalla) ó lanzando un mensaje de error si la operación no está soportada.
El segundo y tercer argumento se cerciona el propio Route de que sean números, dandonos error si por ejemplo le pasamos una string en vez de un número.

