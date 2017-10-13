<?php
// Copyright � McAnam.com
// http://www.mcanam.com/articulos/PHP.php?id=8
    
    function form_mail($sPara, $sAsunto, $sTexto, $sDe)
    {
    
        $bHayFicheros = 0;
        $sCabeceraTexto = "";
        $sAdjuntos = "";
        $sCuerpo = $sTexto;
        $sSeparador = uniqid("_Separador-de-datos_");
        
        $sCabeceras = "MIME-version: 1.0\n";
        
        // Recogemos los campos del formulario
        foreach ($_POST as $sNombre => $sValor)
            $sCuerpo = $sCuerpo."\n".$sNombre." = ".$sValor;
            
        // Recorremos los Ficheros
        foreach ($_FILES as $vAdjunto)
        {
            
            if ($bHayFicheros == 0)
            {
                
                // Hay ficheros
                
                $bHayFicheros = 1;
                
                // Cabeceras generales del mail
                $sCabeceras .= "Content-type: multipart/mixed;";
                $sCabeceras .= "boundary=\"".$sSeparador."\"\n";
                
                // Cabeceras del texto
                $sCabeceraTexto = "--".$sSeparador."\n";
                $sCabeceraTexto .= "Content-type: text/plain;charset=iso-8859-1\n";
                $sCabeceraTexto .= "Content-transfer-encoding: 7BIT\n\n";
                
                $sCuerpo = $sCabeceraTexto.$sCuerpo;
                
            }
            
            // Se a�ade el fichero
            if ($vAdjunto["size"] > 0)
            {
                $sAdjuntos .= "\n\n--".$sSeparador."\n";
                $sAdjuntos .= "Content-type: ".$vAdjunto["type"].";name=\"".$vAdjunto["name"]."\"\n";
                $sAdjuntos .= "Content-Transfer-Encoding: BASE64\n";
                $sAdjuntos .= "Content-disposition: attachment;filename=\"".$vAdjunto["name"]."\"\n\n";                 
                
                $oFichero = fopen($vAdjunto["tmp_name"], 'rb');
                $sContenido = fread($oFichero, filesize($vAdjunto["tmp_name"]));
                $sAdjuntos .= chunk_split(base64_encode($sContenido));
                fclose($oFichero);
            }
            
        }
        
        // Si hay ficheros se a�aden al cuerpo
        if ($bHayFicheros)
            $sCuerpo .= $sAdjuntos."\n\n--".$sSeparador."--\n";
        
        // Se a�ade la cabecera de destinatario
        if ($sDe)$sCabeceras .= "From:".$sDe."\n";
        
        // Por �ltimo se envia el mail
        return(mail($sPara, $sAsunto, $sCuerpo, $sCabeceras));
    }
        
        //Ejemplo de como usar:
	if (form_mail("hermano_hl@hotmail.com",$_POST['email'].date("d-m-Y H:i:s"),
                                    "Correo enviado desde la web de COSISE",
                                    "usuario_enviado@dominio.com")){
        echo "Su Correo ha sido enviado con exito";
									}
									else{
										echo "no se envio";
										
										}
		
		/*
        if (form_mail("rhuauya@persystems.com",
                                    "CORREO ENVIADO DESDE LA WEB DE COSISERED",
                                    "Los datos introducidos en el formulario son:\n",
                                    "usuario_enviado@dominio.com"))
        echo "Su formulario ha sido enviado con exito";
	*/
        
        // Ejemplo de como usar, poniendo como remitente el campo pasado de E-mail
        /*
        if (form_mail("usuario_destino@dominio.com",
                                    "Activaci�n de formulario",
                                    "Los datos introducidos en el formulario son:\n",
                                    $_POST["E-mail"]))
        echo "Su formulario ha sido enviado con exito";
        */
        

?>
<script language="javascript">
//window.location="contactenos.php";
</script>	