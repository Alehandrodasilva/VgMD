<?php include ("header.php");?>

<?php
    //Bloco para Declaração de Variaveis 
    $fotoUsuario = $nomeUsuario = $cidadeUsuario = $telefoneUsuario = $emailUsuario = $senhaUsuario = $confirmarSenhaUsuario = "";
    $erroPreenchimento = false;
    //Vereficar o método  de envio do FORM
    if($_SERVER["REQUEST_METHOD"] =="POST"){

        //Verefica se o Formulario está vazio utilizando a função empty 
        if(empty($_POST["nemeFormulario"])){
            echo "<div class='alert alert-warning text-center'>
                 o campo <strong>NOME</strong> é obrigatorio!
                 </div>
            ";
            $erroPreenchimento = true;
        }
        else{
        $nomeUsuario = $_POST["nomeUsuario"];

        }
        
         //Validação do campo cidadeUsuario
         if(empty($_POST["cidadeUsuario"])){
            echo "<div class='alert alert-warning text-center'>
                 o campo <strong>CIDADE</strong> é obrigatorio!
                 </div>
            ";
            $erroPreenchimento = true;
        }
        else{
        $cidadeUsuario = $_POST["cidadeUsuario"];
        
        }

         
        //Validação do campo TelefoneUsuario
        if(empty($_POST["telefoneUsuario"])){
            echo "<div class='alert alert-warning text-center'>
                 o campo <strong>TELEFONE</strong> é obrigatorio!
                 </div>
            ";
            $erroPreenchimento = true;
        }
        else{
        $telefoneeUsuario = $_POST["telefoneUsuario"];
        
        }
        //Validação do campo emailUsuario
        if(empty($_POST["emailUsuario"])){
            echo "<div class='alert alert-warning text-center'>
                 o campo <strong>EMAIL</strong> é obrigatorio!
                 </div>
            ";
            $erroPreenchimento = true;
        }
        else{
        $EmailUsuario = $_POST["emailUsuario"];
        
        }
         
        //Validação do campo confirSenhaUsuario
        if(empty($_POST["confirmaSenhaUsuario"])){
            echo "<div class='alert alert-warning text-center'>
                 o campo <strong>CONFIRMAR SENHA</strong> é obrigatorio!
                 </div>
            ";
            $erroPreenchimento = true;
        }
        else{
        $senhaUsuario = $_POST["senhaUsuario"];
        
        }
    } 

   ?>

 <?php include("footer.php");?>