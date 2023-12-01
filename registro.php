<?PHP
$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];
$diagnostico = $_POST['diagnostico'];
$transtorno = $_POST['transtorno'];
$depoimento = $_POST['depoimento'];

$conexao = @mysqli_connect('localhost', 'root', 'usbw', 'kulmi' ) 
	or die ("Problemas com a conexão do Banco de Dados");

$query = "INSERT INTO `produtofinal`(`email`, `nome`, `idade`, `diagnostico`, `transtorno`, `depoimento`) VALUES ('$email', '$nome', '$idade', '$diagnostico', '$transtorno', '$depoimento')";

mysqli_query($conexao, $query) or die ("erro de instrução");

header('Location: depoimentos.php');

mysqli_close($conexao);