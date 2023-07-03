<!--Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
- name sia più lungo di 3 caratteri,
- mail contenga un punto e una chiocciola e
- age sia un numero.

Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"-->

<form action="" method="GET">
    <input type="text" name="name" id="name">
    <input type="email" name="mail" id="mail">
    <input type="text" name="age" id="age">
</form>

<?php 

if (count($_GET['name']) >= 3){
    echo 'Name must be at least 4 characters';
}else{
    if(in_array($_GET['mail'], '@') && is_numeric($_GET['age'])){
        echo 'Accesso riuscito';
    }else{
        echo 'Accesso negato';
    }
}


?>