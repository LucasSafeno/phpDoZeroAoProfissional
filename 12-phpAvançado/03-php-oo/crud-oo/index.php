<?php 
include "contato.class.php";
// $contato->adicionar("Fulano", "email@email.com");
// $nome = $contato-getNome("email@email.com");
// $ista = $contato->getAll(); print_r($lista);
// $contato->editar("Lucas Update", "teste@teste.com");

$contato = new Contato();
 ?>

 <h1>Contatos</h1>

 <table border="1" width="600">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>E-Mail</th>
        <th>Ações</th>
    </tr>

<?php 
$lista = $contato->getAll();
    foreach($lista as $item):
        ?>
    <tr>
        <td> <?php echo $item['id']?> </td>
        <td><?php echo $item['nome'];?></td>
        <td><?php echo $item['email'];?></td>
        <td>
            <a href="editar.php?id=<?php echo $item['id'];?>">[ EDITAR ]</a>
            <a href="excluir.php?id=<?php echo $item['id'];?>">[ EXCLUIR ]</a>
        </td>
    </tr>



<?php endforeach; ?>

 </table> 