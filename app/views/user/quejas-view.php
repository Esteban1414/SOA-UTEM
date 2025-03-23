<?php
require_once LAYOUTS_US . 'header.php';
?>

<div class="container">
    <h2>Comparte tu comentario</h2>
    <form id="add-queja-form" method="POST" autocomplete="off" enctype="multipart/form-data">
        <label for="comentario">Escribe tu comentario:</label>
        <textarea
            maxlength="500"
            id="queja"
            name="queja"
            placeholder="Escribe aquí..."
            pattern="^(?!\s*$)[a-zA-Z0-9.,!?\sáéíóúÁÉÍÓÚñÑ()-]*$"
            title="El campo no puede estar vacío ni contener solo espacios, solo se permiten letras, números y los caracteres .,!?()">
</textarea>


        <br><br>
        <button type="submit">Enviar</button>
    </form>
</div>

<?php

require_once LAYOUTS_US . 'footer.php';
?>