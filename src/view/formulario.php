<?php

?>

<form action="" method="post">
    <h2>Formulario de Vatoción</h2>
    <label for="name-lastname">Nombre y apellido</label>
    <input type="text" name="name-lastname" placeholder="Nombre y apellido del votante">
    <label for="alias">Alias</label> 
    <input type="text" name="alias" placeholder="Alias del votante">
    <label for="rut">Rut</label>
    <input type="text" name="rut" placeholder="Rut del votante">
    <label for="e-mail">e-mail</label>
    <input type="text" name="e-mail" placeholder="e-mail del votante">
    <label for="">Region</label>
    <select name="region" id="">
        <option value="0">Seleccione una región</option>
    </select>  
    <label for="">Comuna</label>
    <select name="comuna" id="">
        <option value="0">Selecione una comuna</option>
    </select>
    <label for="">Candidato</label>
    <select name="candidato" id="candidato">
        <option value="">Selecione un candidato</option>
    </select>
    <label for="">Como se entero de nosotros</label>
    <div class="check-content">
        <label for="">Web</label><input type="checkbox" name="sobre" id="" >
        <label for="">TV</label><input type="checkbox" name="sobre" id="">
        <label for="">Redes sociales</label><input type="checkbox" name="sobre" id="">
        <label for="">Amigos</label><input type="checkbox" name="sobre" id="">
    </div>
</form>