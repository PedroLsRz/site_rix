<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o arquivo foi enviado sem erros
    if (isset($_FILES["file_path"]) && $_FILES["file_path"]["error"] == 0) {
        $target_directory = "/xampp/htdocs/site_rix/storage/";
        $target_file = $target_directory . basename($_FILES["file_path"]["name"]);

            // Move o arquivo temporário para o diretório de destino
            if (move_uploaded_file($_FILES["file_path"]["tmp_name"], $target_file)) {
                header('Location: ../html/obrigado.html');
            } else {
                echo "Desculpe, houve um problema ao enviar o arquivo.";
            }
        
    } else {
        echo "Erro ao fazer upload do arquivo.";
    }
}

// Verifica se os dados foram enviados via método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Dados a serem inseridos no arquivo
    $dados = "Nome: " . $_POST['name'] . "\n";
    $dados .= "Email: " . $_POST['email'] . "\n";

    // Caminho para o arquivo de texto
    $file = '../storage/dados.txt';

    // Abre o arquivo em modo de escrita
    $handle = fopen($file, 'w');

    // Verifica se o arquivo foi aberto com sucesso
    if ($handle !== false) {
        // Escreve os dados no arquivo
        fwrite($handle, $dados);
        
        // Fecha o arquivo após a escrita
        fclose($handle);
        
        echo "Arquivo de texto gerado com sucesso.";
    } else {
        echo "Não foi possível gerar o arquivo de texto.";
    }
}
?>