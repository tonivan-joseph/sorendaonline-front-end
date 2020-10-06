<?php

$para= "contato@sorendaonline.com";
$assunto: "Contato pelo Site";
$nome= $_REQUEST["nm"];
$email= $_REQUEST["eml"];
$assunto= $_REQUEST["asst"];
$mensagem= $_REQUEST["msg"];

        $corpo = "<strong> Mensagem de Contato</strong><br/><br/> ";
        $corpo = "<strong> Nome: </strong> $nome";
        $corpo = "<br/><strong> Email: </strong> $email";
        $corpo = "<br/><strong> Assunto: </strong> $assunto";
        $corpo = "<br/><strong> Mensagem: </strong> $mensagem";

        $header="From: $email Reply-to: $email";
        $header .= "Content-Type: text/html; charset= utf-8";
@mail($para,$assunto,$corpo,$header);

header("location:inde.php?msg=enviado");

?>
