<?=$this->showMessage()?>
<div class="col-md-6">
    <h1>Adicionar na tabela1</h1>

    <form id="formAdd" action="" method="post">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome">
        </div>

        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="teste@teste.com">
            <small class="form-text text-muted">Apenas pra ficar mais bonito que nem na documentação.</small>
        </div>

        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" class="form-control" placeholder="Sua senha">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success" name="enviar" id="enviar">Enviar</button>
            <button type="reset" class="btn btn-default" name="limpar" id="limpar">Limpar</button>
        </div>

    </form>
</div>
