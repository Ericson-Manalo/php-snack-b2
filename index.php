<!--Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
- name sia più lungo di 3 caratteri,
- mail contenga un punto e una chiocciola e
- age sia un numero.
Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"-->

<form action="" method="GET">
    <input type="text" name="name" id="name" placeholder ="Type your name">
    <input type="email" name="mail" id="mail" placeholder ="Type your mail">
    <input type="text" name="age" id="age" placeholder ="Type your age">
    <input type="submit" value="check">
</form>

<?php
        $accessDenied = 'Access denied';
        $accessGranted = 'Access granted';


        if ( empty($_GET['name'])
        || empty($_GET['mail'])
        || empty($_GET['age'])){
            echo 'Please type a name, an email and an age';
        } else {

            if (!strlen($_GET['name']) > 3){
                echo $accessDenied;
            } elseif (! (str_contains($_GET['mail'], '@') &&  str_contains($_GET['mail'], '.')) ){
                echo $accessDenied;
            } elseif (!is_numeric($_GET['age'])){
                echo $accessDenied;
            } else {
                echo $accessGranted;
            }
        }
    ?>