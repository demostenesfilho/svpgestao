<?php 
/* SOLICITANDO ARQUIVO DE CONEXÃO COM O BANCO */
require("model/persistency/db.php");

/* DELETAR TABELA CASO EXISTIR usuario */
banco("DROP TABLE IF EXISTS usuario CASCADE");
/* PRINTAR SE A TABELA FOI APAGADA */
echo "<p>Tabela Usuario apagada com sucesso !</p>";
/* CRIAR TABELA E POPULAR COM VALORES */
$sql ="CREATE TABLE usuario(";
$sql .= "codigo SERIAL NOT NULL,";
$sql .= "nome VARCHAR(250),";
$sql .= "empresa VARCHAR(250),";
$sql .= "email VARCHAR(100),";
$sql .= "senha VARCHAR(150),";
$sql .= "chave VARCHAR(255),";
$sql .= "PRIMARY KEY(codigo)";
$sql .= ");";
/* PASSANDO O PARAMETRO SQL PARA FUNÇÃO BANCO */
banco($sql);
echo "<p>Tabela Usuário criada com sucesso !</p>";


/* DELETAR TABELA CASO EXISTIR vendas */
banco("DROP TABLE IF EXISTS vendas");
/* PRINTAR SE A TABELA FOI APAGADA */
echo "<p>Tabela Vendas apagada com sucesso !</p>";
$sql ="CREATE TABLE vendas(";
$sql .="codigo SERIAL NOT NULL,";
$sql .="codigo_usuario INTEGER NOT NULL,";
$sql .="cliente VARCHAR(250),";
$sql .="telefone VARCHAR(100),";
$sql .="cidade VARCHAR(250),";
$sql .="excursao VARCHAR(250),";
$sql .="setor VARCHAR(250),";
$sql .="produtos VARCHAR(250),";
$sql .="valortotal VARCHAR(250),";
$sql .="data_insercao DATE NOT NULL DEFAULT CURRENT_DATE,";
$sql .="PRIMARY KEY(codigo), ";
$sql .="FOREIGN KEY (codigo_usuario) REFERENCES usuario (codigo)";
$sql .=");";
/* PASSANDO O PARAMETRO SQL PARA FUNÇÃO BANCO */
banco($sql);
echo "<p>Tabela Vendas criada com sucesso !</p>";

/* DELETAR TABELA CASO EXISTIR empresa */
banco("DROP TABLE IF EXISTS fornecedor CASCADE");
/* PRINTAR SE A TABELA FOI APAGADA */
echo "<p>Tabela Fornecedor apagada com sucesso !</p>";
/* CRIAR TABELA E POPULAR COM VALORES */
$sql ="CREATE TABLE fornecedor(";
$sql .= "codigo SERIAL NOT NULL,";
$sql .= "nome VARCHAR(250),";
$sql .= "chave VARCHAR(255),";
$sql .= "PRIMARY KEY(codigo)";
$sql .= ");";
/* PASSANDO O PARAMETRO SQL PARA FUNÇÃO BANCO */
banco($sql);
echo "<p>Tabela Fornecedor criada com sucesso !</p>";

/* DELETAR TABELA CASO EXISTIR produto */
banco("DROP TABLE IF EXISTS produto CASCADE");
/* PRINTAR SE A TABELA FOI APAGADA */
echo "<p>Tabela Produto apagada com sucesso !</p>";
/* CRIAR TABELA E POPULAR COM VALORES */
$sql ="CREATE TABLE produto(";
$sql .= "codigo SERIAL NOT NULL,";
$sql .= "nome VARCHAR(250),";
$sql .= "tamanhos VARCHAR(250),";
$sql .= "comissao VARCHAR(100),";
$sql .= "valorvenda VARCHAR(150),";
$sql .= "chave VARCHAR(255),";
$sql .= "PRIMARY KEY(codigo)";
$sql .= ");";
/* PASSANDO O PARAMETRO SQL PARA FUNÇÃO BANCO */
banco($sql);
echo "<p>Tabela Produto criada com sucesso !</p>";
?>