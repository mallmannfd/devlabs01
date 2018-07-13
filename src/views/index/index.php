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

