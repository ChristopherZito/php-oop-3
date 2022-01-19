<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <section>
        <?php
        /**
         * 
         *      Definire classe User:
         *          ATTRIBUTI (private):
         *          - username 
         *          - password
         *          - age
         *          
         *          METODI:
         *          - costruttore che accetta username, e password
         *          - proprieta' getter/setter
         *          - printMe: che stampa se stesso
         *          - toString: "username: age [password]"
         * 
         *          ECCEZIONI:
         *          - scatenare eccezione quando username e' minore di 3 caratteri o maggiore di 16
         *          - scatenare eccezione se password non contiene un carattere speciale (non alpha-numerico)
         *          - scatenare eccezione se age non e' un numero
         * 
         *          NOTE:
         *          - per testare il singolo carattere di una stringa
         * 
         *      Testare la classe appena definita con dati corretti e NON corretti all'interno di un
         *      try-catch e eventualmente informare l'utente del problema
         * 
         */
        

        class User {
            private $username;
            private $password;
            private $age;

            public function __construct($username, $password) {
                $this -> setUsername($username);
                $this -> setPassword($password);
            }
            // username
            public function setUsername($username){
                if(strlen($username) < 3 || strlen($username) > 16){
                    throw new Exception("L'username deve essere compreso tra 3 e 16 caratteri");
                }
                $this -> username = $username;
            }
            public function getUsername(){
                return $this -> username;
            }
            // password
            public function setPassword($password){
                if(ctype_alnum($password)){
                    throw new Exception("La password deve contenere almeno un carattere speciale");
                }
                $this-> password = $password;
            }
            public function getPassword(){
                return $this-> password;
            }
            // Age
            public function setAge($age){
                if(!is_int($age)){
                    throw new Exception("L'età non è un numero");
                }
                $this-> age = $age;
            }
            public function getAge(){
                return $this-> age;
            }
            // printMe
            public function printMe()
            {
                echo $this;
            }
            // toString
            public function __toString()
            {
                return "User: " . $this -> getUsername() . "<br> ". "Age: " . $this -> getAge(). "<br> " . "Password: ". "[" . $this -> getPassword() ."]" . "<br>";
            }
        }
       
        try {
             $u1 = new User("TntZito","Sono.19.xD");
            $u1 -> setAge(19);

            $u1 -> printMe();
        }catch (Exception $err){
            echo "Errore: " . $err -> getMessage();
        }

        ?>
    </section>
</body>
</html>