
var rango = document.querySelector("#rangoPrecio");
var span = document.querySelector(".spanCategoria");

rango.onclick = ()=>{
    let id = span.getAttribute("idCategoria");
   
   const data = new URLSearchParams("idCata=" + id);
   
    fetch("{{ route('product.listarPrecioEntre') }}", {
        method: 'GET',
        body: data
    })
    .then(function(response) {
        if(response.ok) {
            return response.text()
        } else {
            throw "Error en la llamada Ajax";
        }
    })
    .then(function(texto) {
        console.log(texto);
    })
    .catch(function(err) {
        console.log(err);
    });
}