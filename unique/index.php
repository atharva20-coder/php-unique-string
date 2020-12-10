<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="this is sn exsmple of meta description. This will often">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>unique-string</title>
    </head>
    <body>
        <?php
        /*function generateKey(){
    M        $keyLength = 8;             //length of character
    E        $str = "0123456789abcdefghijklmnopqrstuvwz()/$";                  //what character we are allowing
    T           
    H        //shuffling ang cutting it length(8)
    O        
    D        $randStr = substr(str_shuffle($str), 0, $keyLength);
            
    1        return $randStr;
        }
        
        echo generateKey();
        */
        
        /*function generateKey(){
    M       //creating unique id
    E        
    T        $randStr = uniqid('daniel', true);
    H                                             //Don't use this example for creating secure data like passwords.since it is possible to guess part   O                                                of the key. Use it for creating unique URL's or file names.
    D        return $randStr;
        }
    2    echo generateKey();
        */
    //THIS EXAMPLE CAN BE USED FOR CREATING SECURE DATA LIKE PASSWORDS, IF YOU WANT TO CREATE IT FOR THE USERS OR ALLOW YHEM TO AUTO GENERATE A PASSWORD
        
        $conn = mysqli_connect("localhost","root", "", "uniqueString");
        
        function checkKeys($conn, $randStr){
            $sql = "SELECT * FROM keystring";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){
                if($row['keystringKey'] == $randStr){
                   $keyExists = true;
                    break;
                }else{
                    $keyExists = false;
                }
            }
            
            return $keyExists;
        }
            
            function generateKey($conn){
            $keyLength = 8;             //length of character
            $str = "0123456789abcdefghijklmnopqrstuvwz()/$";                  //what character we are allowing
               
            //shuffling ang cutting it length(8)
            
            $randStr = substr(str_shuffle($str), 0, $keyLength);
                
                $checkKey = checkKeys($conn, $randStr);
                
                while($checkKey == true){
                    $randStr = substr(str_shuffle($str), 0, $keyLength);
                    $checkKey = checkKeys($conn, $randStr);
                }
                
                return $randStr;
            }
        echo generateKey($conn);
        
        ?>
    </body>
</html>