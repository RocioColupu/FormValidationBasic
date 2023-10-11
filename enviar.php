
<?php
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $nombre= $_POST['nombre'];
        $apellido= $_POST['apellido'];
        $correo= $_POST['correo'];
        $celular= $_POST['celular'];

        $destinatario= 'gbarboza.es@gmail.com';

        $asunto= 'Actividad 2 Rocio Colupu Quinto ciclo';

        $cuerpo .= "Mi nombre es: " . $nombre . "\n";
        $cuerpo .= "Mi apellido es: ".$apellido . "\n";
        $cuerpo .= "Mi correo es: " . $correo . "\n";
        $cuerpo .= "Mi celular: " . $celular . "\n";

        if(mail($destinatario, $asunto, $cuerpo)){
            echo "El mensaje se ha enviado correctamente";
        } else{
            echo "¡Error!";
        }
    }
?>