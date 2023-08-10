<?php
session_start();
    //  print_r($_REQUEST);
    include_once('config.php');
    $sql = "SELECT * FROM formulario";
// 
    $result = $conexao->query($sql);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem do banco de dados</title>
    <link rel="stylesheet" href="css/estilo_lista.css"> 
    
</head>
<body>
    <h1>Listagem do banco de dados</h1>  
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="d-flex">
                    <a href="login.php" class="btn btn-danger me-5"> Sair</a>
                </div>        
    </nav>
    <br>
<?php
    echo "<h1>Bem vindo <u>$logado</u></h1>";

?>
<div class="m-5">
    <table class="table text-white table-bg">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Senha</th>
            <th scope="col">Cpf</th>
            <th scope="col">Telefone</th>
            <th scope="col">Dt_nascimento</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php
           foreach($result as $key)
            {
                ?>
                <tr>
                    <td><?= $key['id'] ?></td>
                    <td><?= $key['nome'] ?></td>
                    <td><?= $key['email'] ?></td>
                    <td><?= $key['senha'] ?></td>
                    <td><?= $key['cpf'] ?></td>
                    <td><?= $key['telefone'] ?></td>
                    <td><?= $key['dt_nascimento'] ?></td>

                    <td>
                        <a class='btn btn-sm btn-primary' href="edit.php?id=<?= $key['id'] ?>" > <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg> 
                    </a>
                        <a class='btn btn-sm btn-danger' href="delete.php?id=<?= $key['id'] ?>" onclick="return confirm('você deseja apagar?');"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                    </svg>
                    </a>
                    </td>
                </tr> 
                         
            <?php } ?>          
    </tbody>
    </table>
    </div>

  

</body>
</html>
 
