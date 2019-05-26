<div class="row">
    <div class="center l12">
        <h4>Matricular <?php echo $aluno['nome_aluno']; ?></h4>

    </div>
    <br>
    <div class="input-field col l6 offset-l3">
        <select name='id_curso'>
            <?php
            foreach ($cursos as $dado):
                ?>
                <option value="<?php echo $dado['id_curso']; ?>"><?php echo $dado['nome_curso']; ?></option>
                <?php
            endforeach;
            ?>
        </select>
        <label>Selecione um curso</label>
    </div>
</div>



















