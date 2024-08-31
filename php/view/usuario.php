<?php
require_once "./php/view/tela_home.php";
class Usuario extends Home
{
    public function getLogin()
    {
        $this->cabecalho();
        $this->navbar();

        ?>
        <div class="container">
            <div class="tudo">
                <div class="tela_login mx-auto bg-secondary-subtle p-3" style="width: 400px">
                    <form action="" method="POST" class="form">
                        <div class="form-group">
                            <label for="login" class="label">LOGIN:</label>
                            <input type="text" name="login" id="login" class="form-control" autocomplete="new-password"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="senha" class="label">SENHA:</label>
                            <input type="password" name="senha" id="senha" class="form-control mb-2" autocomplete="new-password"
                                required>
                        </div>
                        <!-- <input type="submit" class="botao" value="Entrar"> -->
                        <button type="submit" class="btn btn-primary">ENTRAR</button>
                    </form>
                </div>
            </div>
        </div>
        <?php

    }
    public function logout()
    {
    }
    public function postLogin()
    {
        $controller = new ControllerUser();
        $resultado = $controller->validarLogin();
        if ($resultado) {
            echo '<div class="alert alert-success" role="alert">Login bem-sucedido!</div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">Login ou senha inválidos.</div>';
        }
    }
    public function getCadastro()
    {
        $this->cabecalho();
        $this->navbar();
        ?>
        <div class="container">
            <div class="tudo">
                <div class="tela_cadastro mx-auto bg-secondary-subtle p-3" style="width: 600px">
                    <form action="" method="POST" class="form">
                        <div class="form-group">
                            <label for="nome_usuario">Nome do Usuário</label>
                            <input type="text" name="nome_usuario" id="nome_usuario" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="login_usuario">Login do Usuário</label>
                            <input type="text" name="login_usuario" id="login_usuario" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="senha_usuario">Senha</label>
                            <input type="password" name="senha_usuario" id="senha_usuario" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
        <?php

    }
    public function post()
    {
        $controller = new ControllerUser();
        $resultado = $controller->registrarUsusario();
        if ($resultado) {
            echo '<div class="alert alert-success" role="alert">Usuário cadastrado com sucesso!</div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">Erro ao cadastrar o usuário. Tente novamente.</div>';
        }
    }


    public function put()
    {
    }
    public function delete()
    {
    }
}
?>