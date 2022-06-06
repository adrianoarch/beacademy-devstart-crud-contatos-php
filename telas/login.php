    <div class="container">
        <div class="row justify-content-center g-5 mt-2">
        <div class="col-sm-4 col-md-8 text-center">
            <img class="img-fluid w-75" src="./telas/images/undraw.svg" alt="Desenho de um pessoa sentada em frente a um computador">
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title mb-3">Login</h3>
                    <p class="text-muted">
                        Digite seus dados para fazer login no sistema
                    </p>
                 </div>
                <div class="card-body">
                    <form action="login.php" method="post">
                        <div class="form-group my-3">
                                <!-- <label for="email">E-mail</label> -->
                            <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu e-mail">
                        </div>
                        <div class="form-group my-3">
                                <!-- <label for="senha">Senha</label> -->
                            <input type="password" name="senha" id="senha" class="form-control" placeholder="Digite sua senha">
                        </div>
                        <div class="form-group my-3 d-flex">
                            <div class="flex-grow-1">
                                <input type="checkbox" name="remember" id="remember" class="form-check-input" checked><span class="text-muted px-2 align-self-center">Lembre-me</span>
                            </div>
                            <div class="text-muted">
                                <a class="link-secondary" href="#">Esqueci a senha</a>
                            </div>
                        </div>
                         <div class="form-group d-grid my-4">
                            <button type="submit" class="btn text-light" style="background:#6C63FF">Entrar</button>
                        </div>
                    </form>

                </div>
            </div>
            <div class="mt-3 p-2">
                <p class="text-muted fs-5">
                    - Ou faça login com -
                </p>
                <div>
                    <a href="#" class="mr-2 display-4">
                        <i class="bx bxl-facebook-circle button__icon"></i></a>
                    <a href="#" class="mr-2 display-4">
                        <i class='bx bxl-google button__icon' style='color:#e40d0c'></i></a>
                    <a href="#" class="mr-2 display-4">
                        <i class='bx bxl-twitter button__icon' style='color:#2c77bb'></i></a>
                </div>
            </div>
        </div>
    </div>