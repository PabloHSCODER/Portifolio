<?

    $nome = addslashes($_POST['nome']); //addslashes é utilizado para tratamento de strings
    $email= addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);
    $mensagem = addslashes($_POST['mensagem']);

    $para = "pablodev60@gmail.com";
    $assunto = "SOLICITAÇÃO DE CONTATO - PHCODE";

    $corpo = "Nome: ".$nome."\n"."Email: ".$email."\n"."Telefone: ".$telefone."\n"."Mensagem: ".$mensagem;

    $cabecalho = "From: pablohs11@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabecalho)){
        echo("E-mail enviando com sucesso!");
    }else{
        echo("Houve um erro ao enviar o email!");
    }
?>