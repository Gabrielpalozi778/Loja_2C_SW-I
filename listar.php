<?php

      include 'pedaco.php';
?>

<div class="container">
    <table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Preco</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Opções</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Teclado Gamer</td>
            <td>123,56</td>
            <td>7</td>
            <td>
                <div class="btn-group" role="group">
                    <a href="#" type="button" class="btn btn-danger">Atualizar</a>
                    <a href="#" type="button" class="btn btn-warning">Apagar</a>
                </div>
            </td>
        </tr>
    </tbody>
    </table>
</div>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</body>
</html>