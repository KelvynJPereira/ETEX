<div class="row">
    <div class="col l12 center">
        </br><h4>Cadastro de turma</h4>
    </div>
    <div class="col l12 offset-l2"></br>
        <label><span>Período</span></label>
        <p>
            <label>
                <input name="group1" type="radio"  />
                <span>Matutino</span>
            </label>
        </p>
        <p>
            <label>
                <input name="group1" type="radio"  />
                <span>Vespertino</span>
            </label>
        </p>
        <p>
            <label>
                <input name="group1" type="radio"  />
                <span>Diurno</span>
            </label>
        </p>

        <p>
            <label>
                <input name="group1" type="radio"  />
                <span>Noturno</span>
            </label>
        </p>
    </div>

    <div class="input-field col l2 m2 offset-l2">
        <input type="text" name="nome" id="name">
        <label for="name">Identificação da turma</label>
    </div>

    <div class="input-field col l2 m2">
        <select name="status">

            <option value="">Aberta</option>
            <option value="">Fechada</option>
        </select>
        <label>Status da turma</label>
    </div>

    <div class="input-field col l2 m2">
        <input type="number" name="quantVagas" id="quantVagas">
        <label for="quantVagas">Quant. Vagas</label>
    </div>

    <div class="input-field col l2 m2">
        <input type="number" name="nMeses" id="nMeses">
        <label for="nMeses">N° de Meses</label>
    </div>


    <div class="input-field col l2 m2 offset-l2">
        </br><input type="date" name="dtInicio" id="birthday">
        </br><label for="birthday">Data Início</label>
    </div> 

    <div class="input-field col l2 m2">
        </br><input type="date" name="dtFim" id="birthday">
        </br><label for="birthday">Data Fim</label>
    </div> 
</div>