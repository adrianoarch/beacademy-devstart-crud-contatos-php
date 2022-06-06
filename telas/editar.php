<div class="container">
        <div class="row justify-content-center g-2 m-2 align-items-center">
            <div class="col-sm-4 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title mb-3 text-center">Edição</h3>
                        <p class="text-muted text-center">
                            Edite os dados do contato selecionado
                        </p>
                    </div>
                    <div class="card-body mt-2">
                        <form action="" method="post">
                            <div class="form-group mb-4">
                                <input value="<?= $contato[0];?>" type="text" class="form-control" id="nome" name="nome" placeholder=" Digite seu nome">
                            </div>
                            <div class="form-group mb-4">
                                <input value="<?= $contato[1];?>" type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group mb-4">
                                <input value="<?= $contato[2];?>" type="tel" class="form-control" id="telefone" name="telefone" placeholder="Telefone">
                            </div>
                            <div class="form-group d-grid mb-3">
                                <button class="btn" style="background:#6C63FF" type="submit">
                                    <span class="box-icon text-light">
                                        <i class="bx bx-user"></i>
                                    </span>
                                    <span class="box-label text-light">
                                        Confirmar
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-6 text-center">
                <img class="img-fluid" src="./telas/images/mobile.svg" style="width:35vw" alt="Desenho de um pessoa usando o celular com outro celular ao fundo">
            </div>
        </div>
    </div>
