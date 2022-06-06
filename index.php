<?php

$url = explode('?', $_SERVER['REQUEST_URI']);

include './telas/head.php';
include './telas/menu.php';
include './acoes.php';

match ($url[0]) {
    '/' => home(),
    '/login' => login(),
    '/cadastro' => cadastro(),
    '/cadastro-sucesso' => cadastroSucesso(),
    '/login-sucesso' => loginSucesso(),
    '/login-erro' => loginErro(),
    '/logout' => logout(),
    '/listar' => listar(),
    '/excluir' => excluir(),
    '/editar' => editar(),
    '/relatorios' => relatorios(),
    default => error404()
};

include './telas/footer.php';