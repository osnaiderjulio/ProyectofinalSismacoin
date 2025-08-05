function calcularValorUnitario(selectElement) {
    var selectedOption = selectElement.options[selectElement.selectedIndex];
    var precioUnitario = selectedOption.getAttribute("data-precio");
    document.getElementById("Precio_Uni").value = precioUnitario;
    calcularTotal();
}

function calcularTotal() {
    var cantidad = parseFloat(document.getElementById("Cantidad").value);
    var precioUnitario = parseFloat(document.getElementById("Precio_Uni").value);
    var total = cantidad * precioUnitario;
    if (!isNaN(total)) {
        document.getElementById("Total").value = total.toFixed(2);
    }
}