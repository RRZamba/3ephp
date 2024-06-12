<?php
  // conexao
  include 'conexao.php';

  //Recebendo os valores
  $nome = $_POST['nome'];
  $sobrenome = $_POST['sobre'];
  $curso = $_POST['curso'];
  $endereco = $_POST['end'];

  //Imagem
  $arqTmp =  $_FILES['foto']['tmp_name'];
  $arqNome = $_FILES['foto']['name'];

  
  //Caminho da imagem
  $caminho = "C:/wamp64/www/InsertImagens/Imagens/$arqNome";



  //Variavel para inserir na tabela do bd
  $query = "INSERT INTO aluno(nome,sobrenome,curso,endereco,imagem)VALUES('$nome','$sobrenome','$curso','$endereco','$caminho')";

  if(@move_uploaded_file($arqTmp, $caminho))
  {

    $resultado = mysqli_query($con,$query);
    if(!$resultado)
    {
      echo "<script>
            alert('Erro ao salvar dados!!! Animal!!!');
            history.back();
           </script>";
    }
    else
    {

     echo "<script>
            alert('Salvo');
            history.back();
           </script>";
    }


  }
  else
  {
    echo "<script>
            alert('Erro ao salvar dados!!! Animal!!!');
            history.back();
           </script>";
    
  }
  

  

  


?>