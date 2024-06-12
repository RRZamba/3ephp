<?php

  //Conectando
  $con = mysqli_connect('localhost',
                 'root','','aluno');

  //Verificar a conexao
  if(!$con) 
  {
    echo "Erro ao Conectar, chame a sua mãe! Otário!";
  }

?>