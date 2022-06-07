<?php

$url = explode('?', $_SERVER['REQUEST_URI']);

include './telas/head.php';
include './telas/menu.php';
include './acoes.php';

match ($url[0]) {
    '/' => home(),
    '/login' => login(),
    '/cadastro' => cadastro(),
    '/listar' => listar(),
    '/excluir' => excluir(),
    '/editar' => editar(),
    default => error404()
};

include './telas/footer.php';