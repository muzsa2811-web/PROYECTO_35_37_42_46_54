document.addEventListener("DOMContentLoaded", function () {
  const btn = document.getElementById("calcularBtn");

  btn.addEventListener("click", function () {
    const nombre = document.getElementById("nombre").value.trim();
    const kilos = parseFloat(document.getElementById("kilos").value);
    const cliente = document.querySelector('input[name="cliente"]:checked');
    const totalInput = document.getElementById("total");
    const descuentoInput = document.getElementById("descuento");
    const precioKilo = 45; 
    if (!nombre || !kilos || !cliente) {
      alert("⚠️ Por favor completa todos los campos.");
      totalInput.value = "";
      descuentoInput.value = "";
      return;
    }
    let subtotal = kilos * precioKilo;
    let descuento = cliente.value === "si" ? subtotal * 0.10 : 0;
    let total = subtotal - descuento;

    descuentoInput.value = `$${descuento.toFixed(2)} MXN`;
    totalInput.value = `$${total.toFixed(2)} MXN`;
  });
});
