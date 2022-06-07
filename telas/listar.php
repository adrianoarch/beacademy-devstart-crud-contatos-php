<div class="container mt-4">
<h1 class="text-secondary">Contatos Registrados</h1>

<table class="table table-hover table-striped mt-3">
    <thead class="" style="background:#575A89">
        <tr>
            <th class="text-light">Nome</th>
            <th class="text-light">Email</th>
            <th class="text-light">Telefone</th>
            <th class="text-light text-center">Ações</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        foreach($contatos as $id => $contato)
        {
            $partes = explode(',', $contato);
            $nome = $partes[0];
            $email = $partes[1];
            $telefone = $partes[2];
            $acoes = "<a href='/editar?id=$id' class='btn btn-sm btn-warning'>Editar</a>
                    <a href='/excluir?id=$id' class='btn btn-sm btn-danger'>Excluir</a>";
            echo "<tr>";
            echo "<td class='m-auto'>$nome</td>";
            echo "<td class='my-auto'>$email</td>";
            echo "<td class='my-auto'>$telefone</td>";
            echo "<td class='text-center align-self-center'>$acoes</td>";
            echo "</tr>";
        }
    ?>
    </tbody>
</table>
</div>