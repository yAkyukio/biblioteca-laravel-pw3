<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content1="width=device-width, initial-scale=1.0">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Produtos</title>
</head>

<body>
    <h1>Produtos</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Produto</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Estoque</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produto as $tblProduto)
                <tr>
                    <th scope="row">{{ $tblProduto->id }}</th>
                    <td>{{ $tblProduto->nome }}</td>
                    <td>{{ $tblProduto->valor }}</td>
                    <td>{{ $tblProduto->estoque }}</td>
                    <td>
                        <button  type="button" class="btn btn-outline-warning" onclick="document.location.href = '/editar-produto/{{$tblProduto->id}}' ">Editar</button>
                        <button type="button" class="btn btn-outline-danger" onclick="document.location.href = '/excluir-produto/{{$tblProduto->id}}' ">Excluir</button>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

    <button type="button" class="btn btn-outline-primary" onclick="document.location.href = '/'">Cadastrar</button>

</body>

</html>