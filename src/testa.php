<?php

  if(pg_connect("host=postgres port=5432 dbname=teste_db user=semhora password=semhora")){
    echo "conexao realizada";
  } else {
    echo "erro na conexao";
  }
?>