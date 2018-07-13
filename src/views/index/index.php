<table class="table table-bordered">
    <thead>
        <tr>
            <td>
                <b>Nome</b>
            </td>
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

