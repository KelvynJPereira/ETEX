<!-- Modal Structure -->
<div id="modelExcluirEscola<?php echo $dado['id_escola']; ?>" class="modal">
    <div class="modal-content center">
        <h5>Têm certeza disso?</h5>
    </div>
    <div class="modal-footer">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
            <a class="modal-close waves-effect waves-green btn-flat"><i class="material-icons right">cancel</i>Cancelar</a>
            <button type="submit" name="excluir-escola" value="<?php echo $dado['id_escola'];?>" class="modal-close waves-effect waves-green btn-flat"><i class="material-icons right">delete_forever</i>Excluir</button>
        </form>
    </div>
</div>