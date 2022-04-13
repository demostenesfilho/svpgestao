<?php
putenv("DATABASE_URL=host=ec2-34-192-210-139.compute-1.amazonaws.com port=5432 user=uaaozdgekyceoi dbname=dd9ad3tm7qb2bm password=22606bc548e214bdf2b340dd597af03bc1cea35613f69885845fa760ffcb8455");

/* CONEXÃO DE BANCO SQL */
function banco($sql){
  /* ESTABELECENDO CONEXÃO UTILIZANDO VARIÁVEIS DE AMBIENTE */
  $conn = pg_connect(getenv("DATABASE_URL"));
  if (!$conn)
    die ("Erro conexão com o banco.");
  /* ESTABELECENDO RESULTADO PARA CONEXÃO EM CASO DE ERRO */
  $resultado = pg_query($conn, $sql);
  if (!$resultado)
    die ("Erro de conexão com o SQL.");
  /* FECHANDO CONEXÃO E RETORNANDO RESULTADO */
  pg_close($conn);
  
  return $resultado;
}
?>