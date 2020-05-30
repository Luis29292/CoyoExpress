<?php

//----------------------CIFRADO-------------------------------------
/*El primer define define  en el metodo que queramos, Secure Hash Algorithm, genera
//un hash de 256 bits de longitud en este caso*/
define("HASH", "sha256");
/**/
define("PASSWORD","Secure password, plz make ec¿veryth!ng s3cUr3");
/* Define el metodo  de cifrado por bloques en este caso por 128 bits
El vector de inicialización se utiliza para asegurar que se generen textos
 cifrados distintos, aun cuando sea el mismo texto el que se encripte varias veces y con la misma clave*/
define("METHOD","aes-128-cbc");
//Mediante esta función vamos a cifrar
function Cifrar($men){
//Hashea una contraseña para poder usarla como password en  openssl_encrypt()
  $key= openssl_digest(PASSWORD,HASH);
  //Regresa la longitud  del vetor de inicializador para cda cifrado
  $iv_len= openssl_cipher_iv_length(METHOD);
//Regresa una cadena que sera el vector de inicializacion para que ningun cifrado sea el mismo
  $iv= openssl_random_pseudo_bytes($iv_len);

  $textoCifrado= openssl_encrypt(
    $men, //Mensaje en texto plano
    METHOD, //método que escogimos para cifrar
    $key, //Contraseña hasheada :)
    OPENSSL_RAW_DATA, //Para que nos regrese sin base64
    $iv //Iv para cifrar
  );

  $ciffWIv=base64_encode($iv.$textoCifrado);

  return $ciffWIv;
}
//Lo mismo pero en este caso para decifrar
function Descifrar($cifradoWIv){

  $cifradoWIv=base64_decode($cifradoWIv);

  $iv_len= openssl_cipher_iv_length(METHOD);
  $iv= substr($cifradoWIv,0,$iv_len);
  $cifrado = substr($cifradoWIv,$iv_len);

  $key= openssl_digest(PASSWORD,HASH);

  $desciff=openssl_decrypt(
    $cifrado, //Mensaje cifrado a descifrar
    METHOD, //El método acordado para cifrar
    $key, //La contraseña hasheada
    OPENSSL_RAW_DATA, //PAra que nos retorne los valores en un código
    $iv //iv para descifar
  );

  return $desciff;
}
/*Aqui ya deben de ser la contraseña que mande el usuario, esta sera hasheada y la ya hasheada se subira a la base de datos*/
$men = (isset($_POST['contraseña']) && $_POST['contraseña'] != "") ? $_POST['contraseña'] : "vacio";
//Nuestras variables que llamaran a las funciones ya establecidas previamente
$ciff= Cifrar($men);
$desciff= Descifrar($ciff);
//Se imprime nustro mensae original cifrado y descifrado
echo "Mensaje Original: ".$men."<br>";
echo "Mensaje Cifrado: ". $ciff."<br>";
echo "Mensaje Descifrado: ".$desciff."<br>";

//--------------------------------------------------------------------------
//----------------------------HASH----------------------------------------
/*El conocido Hash es un algoritmo matemático que transforma cualquier bloque arbitrario de datos en una nueva
serie de caracteres con una longitud fija. Independientemente de la longitud de los datos de entrada, el valor hash de salida tendrá siempre la misma longitud.*/
//Un dato interesante es que no existen dos entradas que produzcan el mismo hash de salida.
//El valor del hash es unico todo depende de que tan seurola quieres normalmente son de 40 pero tambien sirve como identificador pues en teoria su parametro de salida es unico
$contrasenia= (isset($_POST['contraseña']) && $_POST['contraseña'] != "") ? $_POST['contraseña'] : "vacio";

//creará una sal aleatoria si no se proporciona una, siendo esta generalmente la estrategia más sencilla y segura.
$hash= password_hash($contrasenia, PASSWORD_BCRYPT);
/**/
echo "<br>";
echo "Mi contraseña: ".$contrasenia."<br>";
echo "Hash de la contraseña: ".$hash."<br>";
//En el caso de que sea la contraseña correcta, línea 67, en caso de que no, línea 69
if(password_verify($contrasenia,$hash)){
  echo "Contraseña correcta";
}else {
    echo "You shall not paaaassssss";
}
//--------------------------------------------------------------------------
/*Esto solo es para que vean que funciona el hasheo, solo es cosa de borra los echos e ingresar "INSERT INTO contraseña(id_usuario,id_Producto,id_Direccion) VALUES ($nC,$prod,$direc)"
Y ya saben todoeso para que se suba automaticamente, lo de las sales y eso ya viene explicito en el password hash
Y el de verify veridfica si se ha hasheado con salado
Una vez tenido eso estaria bien poner esto mysqli_real_escape_string ( mysqli $link , string $escapestr ) : string
escapar acdenas que sean validas en consulta, validar la consulta en pocas palabras*/
?>
