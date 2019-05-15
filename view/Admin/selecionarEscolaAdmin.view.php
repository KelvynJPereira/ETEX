<div id="modal-selecionar-escola" class="modal">
    <div class="modal-content center">
        <div>
            <h4 class="center">Escolha uma escola:</h4></br>
        </div>
        <div class="row">
            <div class="col l8 push-l2">
                <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>"> 
                    <select name="id_escola">
                        <?php foreach ($escolas_admin as $id => $dado_escola): ?>
                            <option value="<?php echo $id?>"><?php echo $dado_escola['nome_escola']; ?></option>
                        <?php endforeach; ?>  
                    </select>
            </div>
            <div class="col l12">
                </br><button class="btn waves-effect waves-light green btn-medium" type="submit" name="bnt-escolha-escola" value="true">Escolher</button>
                </form>
            </div></br>
        </div>
    </div>
</div>
