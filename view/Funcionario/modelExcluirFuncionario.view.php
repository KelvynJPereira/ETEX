<!-- Modal Structure -->
<div id="modelExcluirFuncionario<?php echo $dado['id_funcionario']; ?>" class="modal">
    <div class="modal-content center">
        <h5>Têm certeza que deseja excluir:</h5></br>
        <h6><b><?php echo 'Colaborador ' . $dado['nome_funcionario'] .' '.$dado['sobrenome_funcionario']; ?></b></h6>
    </div>
    <div class="modal-footer">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <a class="modal-close waves-effect waves-green btn-flat"><i class="material-icons right">cancel</i>Cancelar</a>
            <button type="submit" name="excluir-funcionario" value="<?php echo $dado['id_funcionario']; ?>" class="modal-close waves-effect waves-green btn-flat"><i class="material-icons right">delete_forever</i>Excluir</button>
        </form>
    </div>
</div>