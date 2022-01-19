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
        *      Definire classe Computer:
        *          ATTRIBUTI:
        *          - codice univoco
        *          - modello
        *          - prezzo
        *          - marca
        * 
        *          METODI:
        *          - costruttore che accetta codice univoco e prezzo
        *          - proprieta' getter/setter per tutte le variabili d'istanza
        *          - printMe: che stampa se stesso (come quella vista a lezione)
        *          - toString: "marca modello: prezzo [codice univoco]"
        * 
        *          ECCEZIONI:
        *          - codice univoco: deve essere composto da esattamente 6 cifre (no altri caratteri)
        *          - marca e modello: devono essere costituiti da stringhe tra i 3 e i 20 caratteri
        *          - prezzo: deve essere un valore intero compreso tra 0 e 2000
        * 
        *      Testare la classe appena definita con tutte le casistiche interessanti per verificare
        *      il corretto funzionamento dell'algoritmo
        */
        

        class Computer {
            private $unicode;
            private $prezzo;
            private $modello;
            private $marca;

            public function __construct($unicode, $prezzo) {
                $this -> setUnicode($unicode);
                $this -> setPrezzo($prezzo);
            }

            // Unicode - codice univoco: deve essere composto da esattamente 6 cifre (no altri caratteri)
            public function setUnicode($unicode){
                if(!is_int($unicode)){
                    throw new Exception("L'unicode deve essere un numero");
                    
                }else if( $unicode < 100000 || $unicode > 999999){
                    throw new Exception("L'unicode deve avere 6 numeri");
                }
                $this -> unicode = $unicode;
            }
            public function getUnicode(){
                return $this -> unicode;
            }
            // prezzo - prezzo: deve essere un valore intero compreso tra 0 e 2000
            public function setPrezzo($prezzo){
                if(!is_int($prezzo)){
                    throw new Exception("Il prezzo deve essere un numero");
                    
                }else if( $prezzo <= 0 || $prezzo > 2000){
                    throw new Exception("Il prezzo deve essere compreso tra 0 e 2000");
                }
                $this-> prezzo = $prezzo;
            }
            public function getPrezzo(){
                return $this-> prezzo;
            }
            // modello - modello: deve essere costituito da stringhe tra i 3 e i 20 caratteri
            public function setModello($modello){
                if( strlen($modello) < 3 || strlen($modello) > 20){
                    throw new Exception("Il nome del modello deve essere compreso tra 3 e 20 caratteri");
                }
                $this-> modello = $modello;
            }
            public function getModello(){
                return $this-> modello;
            }
            // marca - marca: deve essere costituito da stringhe tra i 3 e i 20 caratteri
            public function setMarca($marca){
                if( strlen($marca) < 3 || strlen($marca) > 20){
                    throw new Exception("Il nome della marca deve essere compreso tra 3 e 20 caratteri");
                }
                $this-> marca = $marca;
            }
            public function getMarca(){
                return $this-> marca;
            }
            // printMe
            public function printMe()
            {
                echo $this;
            }
            // toString
            public function __toString()
            {
                return "Marca: " . $this -> getMarca() 
                . "<br> ". "Modello: " . $this -> getModello() 
                . "<br> " .  "Prezzo: " . $this -> getPrezzo() . "€" 
                . "<br>"."Codice Univoco: ". "[" . $this -> getUnicode() ."]" . "<br>";
            }
        }
       
        try {
            $c1 = new Computer(123456,800);
            $c1 -> setModello("Pavillon 15");
            $c1 -> setMarca("HP ultra");
    
            $c1 -> printMe();
        }catch (Exception $err){
            echo "Errore: " . $err -> getMessage();
        }finally{
            echo "<h3> Prodotto aggiunto </h3>";
        }
        ?>
    </section>
</body>
</html>