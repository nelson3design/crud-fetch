var btn= document.querySelector('.btn')
var buscar= document.querySelector('.pes')

ListarProdutos();
function ListarProdutos(pesquisar) {
    fetch("listar.php", {
        method: "POST",
        body: pesquisar
    }).then(response => response.text()).then(response => {
        resultado.innerHTML = response;
    })
}
btn.addEventListener("click", (e) => {
    e.preventDefault()
    fetch("registrar.php", {
        method: "POST",
        body: new FormData(frm)
    }).then(response => response.text()).then(response => {
        if (response == "ok") {
            Swal.fire({
                icon: 'success',
                title: 'Registrado',
                showConfirmButton: false,
                timer: 1500
            })
            frm.reset();
            ListarProdutos();
        }else if(response=="vide"){
            Swal.fire({
                icon: 'success',
                title: 'Preenche os dados',
                showConfirmButton: false,
                timer: 1500
            })
            btn.value = "Registrar";
            idp.value = "";
            ListarProdutos();
            frm.reset();
        }else{
             Swal.fire({
                icon: 'success',
                title: 'Editado',
                showConfirmButton: false,
                timer: 1500
            })
            btn.value = "Registrar";
            idp.value = "";
            ListarProdutos();
            frm.reset();
        }
    })
});
function del(id) {
    Swal.fire({
        title: 'Tem certeza de excluir o Produto?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si!',
        cancelButtonText: 'NO'
    }).then((result) => {
        if (result.isConfirmed) {
            fetch("excluir.php", {
                method: "POST",
                body: id
            }).then(response => response.text()).then(response => {
                if (response == "ok") {
                   ListarProdutos();
                   Swal.fire({
                       icon: 'success',
                       title: 'excluido',
                       showConfirmButton: false,
                       timer: 1500
                   })
                }
                
            })
            
        }
    })
}
function edit(id) {
    fetch("editar.php", {
        method: "POST",
        body: id
    }).then(response => response.json()).then(response => {
        idp.value = response.id;
        codigo.value = response.codigo;
        produto.value = response.produto;
        preco.value = response.preco;
        quant.value = response.quant;
        btn.value = "editar"
    })
}
buscar.addEventListener("keyup", () => {
    const valor = buscar.value;
    if (valor == "") {
        ListarProdutos();
    }else{
        ListarProdutos(valor);
    }
});
