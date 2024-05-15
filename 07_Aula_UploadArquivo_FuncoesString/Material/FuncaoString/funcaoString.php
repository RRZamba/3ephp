<?php
   /* O php possui algumas funções para  tratamento de String em suas bibliotecas, abaixo iremos conhecer as principais!!!!
   */
   $nome = "Anderson Camilo";

   //strlen() -retorna total de caractéres 
   echo strlen($nome);
   echo "<br>";

   //str_word_count() - retorna o total de palavras na string
   echo str_word_count($nome);
   echo "<br>";

   //str_replace() - Substitui uma determinada sequencia de caractér
   echo str_replace("Camilo","Bruno", $nome);

   //trim() - Remove espaços sobrando antes e depois da string
   $nome = "     Rafaela do 2ºY         ";
   echo trim($nome);
   echo "<br>";

   //strtolower() - retorna todas as letras em caixa baixa
   echo strtolower($nome);
   echo "<br>";

   //strtoupper() - retorna todas as letras em caixa alta
   echo strtoupper($nome);
   echo "<br>";

?>