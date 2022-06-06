<?php
$mensagem = "Desculpe, não foi possível encontrar a página solicitada.";
?>
<body class="vh-100">
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12 mt-2">
                <div>
                    <h1 class="fs-3 fw-light text-center"><?php echo $mensagem; ?></h1>
                    <div class="text-center d-grid">
                        <picture>
                            <img class="img-fluid" style="width:35vw" src="./telas/images/error.svg" alt="Imagem de um ratinho comendo queijo olhando para o número de erro 404">
                        </picture>
                        <p>
                            <a href="/" class="btn text-light" style="background:#6C63FF">Voltar para a página inicial</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>