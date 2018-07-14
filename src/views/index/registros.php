<div class="jumbotron king-jumbotron text-center">
    <h2 id="main-text" class="display-4">Registros</h2>
</div>

<div class="main-table-div">
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>
                Id
            </th>
            <th>
                Nome
            </th>
            <th>
                Email
            </th>
            <th>
                Última Alteração
            </th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($registros as $registro):  ?>
            <tr>
                <td scope="row">
                    <?="{$registro['id']}";?>
                </td>
                <td>
                    <?="{$registro['nome']}";?>
                </td>
                <td>
                    <?="{$registro['email']}";?>
                </td>
                <td>
                    <?="{$registro['ultima_alteracao']}";?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
