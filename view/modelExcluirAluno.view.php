<!-- Modal Structure -->
<div id="modelExcluirAluno<?php echo $dado['id_aluno']; ?>" class="modal">
    <div class="modal-content center">
        <h5>Têm certeza disso?</h5>
    </div>
    <div class="modal-footer">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
            <a class="modal-close waves-effect waves-green btn-flat"><i class="material-icons right">cancel</i>Cancelar</a>
            <button type="submit" name="excluir-aluno" value="<?php echo $dado['id_aluno']; ?>" class="modal-close waves-effect waves-green btn-flat"><i class="material-icons right">delete_forever</i>Excluir</button>
        </form>
    </div>
</div>