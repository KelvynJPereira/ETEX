<!-- Modal Structure -->
<div id="modelExcluirAluno<?php echo $dado['id_aluno']; ?>" class="modal">
    <div class="modal-content center">
        <h5>Têm certeza que deseja excluir:</h5></br>
        <h6><b><?php echo 'Aluno(a) ' . $dado['nome_aluno'] .' '.$dado['sobrenome_aluno']; ?></b></h6>
    </div>
    <div class="modal-footer">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <a class="modal-close waves-effect waves-green btn-flat"><i class="material-icons right">cancel</i>Cancelar</a>
            <button type="submit" name="excluir-aluno" value="<?php echo $dado['id_aluno']; ?>" class="modal-close waves-effect waves-green btn-flat"><i class="material-icons right">delete_forever</i>Excluir</button>
        </form>
    </div>
</div>