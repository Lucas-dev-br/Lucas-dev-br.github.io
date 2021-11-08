<?php

    if(isset($_POST["email"]) && !empty($_POST["email"]) ) {

    $nome = addslashes($_POST["nome"]);
    $email = addslashes($_POST["email"]);
    $mensagem = addslashes($_POST["menssagem"]);
    

    }

    $to = "lucasenge@hotmail.com";
    $subject = "Contato - Portifolio";
    $body = "nome: ".$nome. "\n" .
    "email: ".$email. "\n"  . 
    "Menssagem: ".$menssagem;

    $header = "From: lucasenge@hotmail.com". "\r\n" . 
            "Reply-To:".$email. "\r\n" .
            ."X=Mailer:PHP/".phpversion();

    if(mail($to,$subject,$body,$header)) {

    echo("Email enviado com sucesso!"); 

    }else{

    echo("Email não pode ser enviado!");

}

?>