</br>    
<div class="row">

    <div class="col l12 center">
        <h4>CADASTRAR CURSO</h4></br>
    </div>

    <div class="col l12 offset-l1">
        <h5>Dados</h5></br>
    </div>

    <div class="col l12 offset-l1">
        <label>
            <input type="checkbox" class="filled-in" name="status" value="Ativo">
            <span>Curso ativo?</span>
        </label>
    </div>
    
    <div class="input-field col l2 m2 offset-l1">
        </br><select name="coordenador">
            <option value="" disabled selected>Coordenador</option>
            <option value="">Mauricio</option>
            <option value="">Ana Bidancu</option>
        </select>
        </br> <label>Escolha um coordenador</label>
    </div>

    <div class="input-field col l2">
        </br><textarea id="textarea1" name="objetivo" class="materialize-textarea"></textarea>
        <label for="textarea1">Objetivo:</label>
    </div>

    <div class="input-field col l3 m2">
        </br><input type="text" name="nome" id="name">
        <label for="name">Nome do curso</label>
    </div>
    
    <div class="input-field col l3 m2">
        </br><select name="professor">
            <option value="">Mauricio</option>
            <option value="">Ana Bidancu</option>
        </select>
        </br> <label>Escolha um professor</label>
    </div>

    <div class="col l12 offset-l1">
        <label><span>Nível</span></label>
        <p>
            <label>
                <input name="nivel" type="radio" value="Infantil"/>
                <span>Infantil</span>
            </label>
        </p>
        <p>
            <label>
                <input name="nivel" type="radio" value="Fundamental"/>
                <span>Fundamental</span>
            </label>
        </p>
        <p>
            <label>
                <input name="nivel" type="radio" value="Médio"/>
                <span>Médio</span>
            </label>
        </p>

        <p>
            <label>
                <input name="nivel" type="radio" value="Técnico"/>
                <span>Técnico</span>
            </label>
        </p>
    </div>

</div>


