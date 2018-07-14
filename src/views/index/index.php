<div class="jumbotron king-jumbotron text-center">
    <h2 id="main-text" class="display-4">Devlabs</h2>
</div>

<a href="/add"><button class="btn btn-primary">Adicionar</button></a>

<div class="main-table-div">
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th scope="col">
                Nome
            </th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($funcionarios as $funcionario):  ?>
            <tr>
                <td>
                    <?="{$funcionario['nome_func']} {$funcionario['sobrenome_func']}";?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
