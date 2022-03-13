<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">


    <title>Document</title>
</head>

<body>
    <div class="base">

        <div class="box">
            <div class="registrar">
                <div>Registrar produtos</div>
                <form action="" class="form" id="frm">
    
                    <label for="codigo">Codigo</label>
                    <input type="hidden" name="idp" id="idp" value="">
                    <br>
                    <input type="text" name="codigo" id="codigo">
                    <br><br>
    
                    <label for="produto">Produto</label>
                    <br>
                    <input type="text" name="produto" id="produto">
                    <br><br>
    
                    <label for="preco">Preço</label>
                    <br>
                    <input type="text" name="preco" id="preco">
                    <br><br>
    
                    <label for="quant">Quantidade</label>
                    <br>
                    <input type="text" name="quant" id="quant">
                    <br><br>
    
                    <input type="submit" value="registrar" class="btn">
                </form>
            </div>
    
            <div class="listagem">
                <form action="" class="search" method="post">
                    <input type="search" placeholder="O que você procura" class="pes" name="buscar">
    
                </form>
    
    
                <table width="100%">
                    <thead>
    
                        <tr class="theader">
                            <th>ID</th>
                            <th>CODIGO</th>
                            <th>PRODUTO</th>
                            <th>PREÇO</th>
                            <th>QUANTIDADE</th>
                            <th>AÇÕES</th>
    
                        </tr>
                    </thead>
    
                    <tbody id="resultado">
    
    
                    </tbody>
    
    
                </table>
    
            </div>
        </div>
    </div>

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>




</body>

</html>