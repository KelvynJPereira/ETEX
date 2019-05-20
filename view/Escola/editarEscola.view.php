<?php
foreach ($dados as $dado):
    ?>
    <div class="row">
        <div class="input-field col l2 m2 offset-l5">
            <img class="materialboxed" width="124" src="../../assets/img/escola/uploads/<?php echo $dado['logo_escola'];?>">
            <input type="file" name="logo" id="image"></input>
        </div> 
    </div></br>
    <div class="row">
        <div class="col l12 offset-l1">
            <h5>Dados</h5>
        </div>
        </br>
        <div class="input-field col l2 m2 offset-l1">
            <input type="text" name="nome" value="<?php echo $dado['nome_escola'];?>" id="nome">
            <label for="nome">Razão social</label>
        </div>
        <div class="input-field col l2 m2">
            <input type="text" name="cnpj" value="<?php echo $dado['cnpj_escola'];?>" id="cnpj">
            <label for="cnpj">CNPJ</label>
        </div>
        <div class="input-field col l2 m2">
            <select name="ensino" value="<?php echo $dado['tipo_escola'];?>">
                <option value="Ensino Fundamental">Ensino Fundamental</option>
                <option value="Ensino Médio">Ensino Médio</option>
                <option value="Ensino Fundamental e Médio">Ensino Fundamental e Médio</option>
                <option value="Ensino Médio Técnico">Ensino Médio Técnico</option>
            </select>
            <label>Tipo Ensino</label>
        </div>

        <div class="input-field col l2 m2">
            <i class="material-icons prefix">phone</i>
            <input type="number" name="foneF" value="<?php echo $dado['fone_fixo_escola'];?>" id="foneF">
            <label for="foneF">Telefone fixo</label>
        </div>

        <div class="input-field col l2 m2">
            <input type="number" name="foneC"  value="<?php echo $dado['fone_comercial_escola'];?>" id="foneC">
            <label for="foneC">Telefone Comercial</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col l3 m2 offset-l1">
            <input type="text" name="email" value="<?php echo $dado['email_escola'];?>" id="email">
            <label for="email">Email</label>
        </div>

        <div class="input-field col l3 m2">
            <input type="text" name="site" value="<?php echo $dado['site_escola'];?>" id="site">
            <label for="site">Site</label>
        </div>
    </div>

    <?php
endforeach;
?>












