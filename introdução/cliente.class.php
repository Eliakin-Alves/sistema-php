<?php
class cliente{
    private $id;
    private $nome;
    private $telefone;
    private $email;
    private $cpf;
    public function setEmail($email) {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        }
        else{
            throw new Exception('E-mail Inválido');
        } 
    }
    public function getEmail() {
        return $this->email;
    }
    public static function mensagem() {
        echo "Olá Mundo! <br ?>";
    }
}
Cliente::mensagem(); // uso estático
$obj = new Cliente();
$obj->setEmail("eli@email.com"); // com encapsulamento
echo $obj->getEmail(); // com encapsulamento
echo "<br/>";
$obj->email = "eli@email.com"; // sem encapsulamento
echo $obj->email; // sem encapsulamento
?>