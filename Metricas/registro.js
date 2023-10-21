function validarFormulario() {
    var nombre = document.getElementById("nombre").value;
    var correo = document.getElementById("correo").value;
    var contrasena = document.getElementById("contraseña").value;

    // Validación simple para verificar que los campos no estén vacíos
    if (nombre === "" || correo === "" || contraseña === "") {
        alert("Todos los campos son obligatorios. Por favor, complete el formulario.");
        return false; // Evita el envío del formulario si no pasa la validación
    }

    // Puedes agregar más validaciones según tus necesidades, como validación de correo electrónico o contraseña segura

    return true; // Envía el formulario si pasa la validación
}
