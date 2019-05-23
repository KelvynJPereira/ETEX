<!-- Modal Structure -->
<div id="modelExcluirCurso<?php echo $dado['id_curso']; ?>" class="modal">
    <div class="modal-content center">
        <h5>Têm certeza que deseja excluir:</h5></br>
        <h6> <?php echo $dado['nome_curso']; ?></h6>
    </div>
    <div class="modal-footer">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <a class="modal-close waves-effect waves-green btn-flat"><i class="material-icons right">cancel</i>Cancelar</a>
            <button type="submit" name="excluir-curso" value="<?php echo $dado['id_curso']; ?>" class="modal-close waves-effect waves-green btn-flat"><i class="material-icons right">delete_forever</i>Excluir</button>
        </form>
    </div>
</div>