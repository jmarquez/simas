<?php 

	if (isset($_POST["req"])){
		$op = $_POST["req"];
	}
	else{
		$op = $_GET["req"];
	}

	switch($op){
		case "A":
			//requerimiento: autenticar
			//$_POST['txt_ci'];
			$cad = "Location:autenticar.php?ci=".$_POST['txt_ci']."&clave=". $_POST['txt_clave'];
			
			header($cad);
			break;
		case "B":
			//requerimiento: crear periodo
			$cad = "Location:crear_periodo.php?codigo=".$_POST['txt_codigo']."&numero=".$_POST['sel_numero']."&fecha_inicio=".$_POST['txt_fecha_inicio']."&fecha_fin=".$_POST['txt_fecha_fin'];
			//echo $cad;
			header($cad);
			break;
			
		case "C":
			//requerimiento: eliminar periodo
			$cad = "Location:eliminar_periodo.php?codigo=".$_POST['radio_periodo'];
			//echo $cad;
			header($cad);
			break;
			
		case "D":
			//requerimiento: crear profesor
			$cad = "Location:crear_profesor.php?ci=".$_POST['txt_ci']."&primer_nombre=".$_POST['txt_primer_nombre']."&segundo_nombre=".$_POST['txt_segundo_nombre']."&primer_apellido=".$_POST['txt_primer_apellido']."&segundo_apellido=".$_POST['txt_segundo_apellido']."&tlf_hab=".$_POST['txt_tlfhab']."&tlf_ofi=".$_POST['txt_tlfofi']."&tlf_cel=".$_POST['txt_tlfcel']."&correo=".$_POST['txt_email']."&sexo=".$_POST['opt_sexo'];	
			

			header($cad);
			
			break;			
			
		case "E":
				//requerimiento:registrar_asignatura
			$cad = "Location:registrar_asignatura.php?codigo=".$_POST['txt_codigo']."&denominacion=".$_POST['txt_denominacion'];
			$cad .= "&unidades_tributaria=".$_POST['txt_unidades_tributarias'];			
			header($cad);
			//echo $cad;	
			break;
			
		case "F":
				//requerimiento:registrar_curso
			$cad = "Location:registrar_curso.php?codigo=".$_POST['txt_codigo']."&denominacion=".$_POST['txt_denominacion'];
			header($cad);
			//echo $cad;	
			break;
		
		case "G":
			$cad = "Location:desincorporar_estudiante.php?ci=".$_POST['txt_ci'];
			//echo $cad;	
			header($cad);
			break;
			
		case "H":
			$cad = "Location:preinscribir.php?ci=".$_POST['txt_ci']."&primer_nombre=".$_POST['txt_primer_nombre']."&segundo_nombre=".$_POST['txt_segundo_nombre']."&primer_apellido=".$_POST['txt_primer_apellido']."&segundo_apellido=".$_POST['txt_segundo_apellido']."&civ=".$_POST['txt_civ']."&cav=".$_POST['txt_cav']."&titulo=".$_POST['txt_titulo']."&entidad=".$_POST['txt_entidad']."&municipio=".$_POST['txt_municipio']."&parroquia=".$_POST['txt_parroquia']."&calle=".$_POST['txt_calle']."&urbanizacion=".$_POST['txt_urbanizacion']."&edificio=".$_POST['txt_edificio']."&piso=".$_POST['txt_piso']."&tlf_hab=".$_POST['txt_tlfhab']."&tlf_ofi=".$_POST['txt_tlfofi']."&tlf_cel=".$_POST['txt_tlfcel']."&correo=".$_POST['txt_email']."&sexo=".$_POST['opt_sexo']."&financiamiento=".$_POST['opt_pago']."&especificacion=".$_POST['txt_especificacion']."&monto_ut=".$_POST['txt_monto_ut']."&monto_bfs=".$_POST['txt_monto_bfs']."&numero_recibo=".$_POST['txt_numero_recibo']."&cod_curso=".$_POST['lst_postgrado']."&fecha_pago=".$_POST['txt_fecha'];	
			//echo $cad;
			if (isset($_POST['req1'])) $req ="&req1=".$_POST['req1'];
			if (isset($_POST['req2'])) $req .= "&req2=".$_POST['req2'];
			if (isset($_POST['req3'])) $req .= "&req3=".$_POST['req3'];
			if (isset($_POST['req4'])) $req .= "&req4=".$_POST['req4'];
			if (isset($_POST['req5'])) $req .= "&req5=".$_POST['req5'];
			if (isset($_POST['req6'])) $req .= "&req6=".$_POST['req6'];
			if (isset($_POST['req7'])) $req .= "&req7=".$_POST['req7'];
			if (isset($_POST['req8'])) $req .= "&req8=".$_POST['req8'];
			if (isset($_POST['req9'])) $req .= "&req9=".$_POST['req9'];
			if (isset($_POST['req10'])) $req .= "&req10=".$_POST['rq10'];
			if (isset($_POST['req11'])) $req .= "&req11=".$_POST['req11'];
			if (isset($_POST['req12'])) $req .= "&req12=".$_POST['req12'];
			if (isset($_POST['req13'])) $req .= "&req13=".$_POST['req13'];
			if (isset($_POST['req14'])) $req .= "&req14=".$_POST['req14'];
			$cad = $cad.$req;
			//echo $cad;
		
			header($cad);
			break;
		
		case "I":
			header("Location:configurar_ut.php?");	
			break;
			
		case "J":
			$cad = "Location:actualizar_ut.php?valor_ut=".$_POST['txt_nuevo_valor'];	
			header($cad);	
			break;
			
		case "K":
			$cad = "Location:configurar_arancel.php";
			header($cad);
			break;
			
		case "L":

			$cad = "Location:crear_arancel.php?denominacion=".$_POST['txt_denominacion'];
			$cad = $cad."&num_ut=".$_POST['txt_unidades_tributarias'];
			header($cad);
			break;
		
		case "M":
			
			$cad = "Location:modificar_arancel.php?codigo=".$_POST['opt_codigo'];
			header($cad);
			break;
			
		case "N":
			$cad = "Location:guardar_cambios_arancel.php?codigo=".$_POST['codigo']."&denominacion=".$_POST['txt_denominacion']."&ut=".$_POST['txt_unidades_tributarias'];
			//echo $cad;
			header($cad);			
			break;
			
		case "O":
			$cad = "Location:eliminar_arancel.php?codigo=".$_GET['codigo'];
			header($cad);			
			break;
		
		case "P":
			$cad = "Location:eliminar_profesor.php?cedula=".$_POST['txt_cedula'];
			header($cad);			
			break;
		
		case "Q":	
			$cad = "Location:guardar_pago.php?cedula=".$_POST['txt_ci'];
			$cad .= "&concepto=".$_POST['txt_concepto'];
			$cad .= "&num_recibo=".$_POST['txt_num_recibo'];
			$cad .= "&pago=".$_POST['opt_pago'];
			$cad .= "&monto_pagado=".$_POST['txt_monto_pagado'];
			$cad .= "&fecha_pago=".$_POST['txt_fecha_pago'];
			$cad .= "&codigo_arancel=".$_POST['lst_aranceles'];
			header($cad);	
			break;
			
			
		case "R":
			$cad= "Location:configurar_preinscribir.php";
			header($cad);	
			break;
		
		case "S":
			$cad= "Location:configurar_eliminar_curso.php";
			header($cad);	
			break;
			
		case "T":
			$cad= "Location:eliminar_curso.php?codigo=".$_POST['opt_codigo'];
			//echo $cad;
			header($cad);	
			break;
			
		case "U":
			$cad= "Location:cargar_nota.php?ci=".$_POST['txt_ci'];
			$cad.= "&cod_asignatura=".$_POST['lst_asignaturas'];
			$cad.="&nota=".$_POST['txt_nota'];			
		
			//echo($cad);
			header($cad);	
			break;
			
		case "V":
			$cad= "Location:configurar_eliminar_asignatura.php";
			header($cad);	
			break;
			
		case "X":
			$cad= "Location:eliminar_asignatura.php?codigo=".$_POST['opt_codigo'];
			//echo $cad;
			header($cad);	
			break;			
	
		case "Y":
			$cad= "Location:modificar_estudiante.php?ci=".$_POST['txt_ci'];
			$cad.="&entidad=".$_POST['txt_entidad']."&municipio=".$_POST['txt_municipio'];
			$cad.="&parroquia=".$_POST['txt_parroquia']."&calle=".$_POST['txt_calle'];
			$cad.="&urbanizacion=".$_POST['txt_urbanizacion']."&edificio=".$_POST['txt_edificio'];
			
			$cad.="&tlf_hab=".$_POST['txt_tlfhab']."&tlf_ofi=".$_POST['txt_tlfofi'];
			$cad.="&tlf_cel=".$_POST['txt_tlfcel']."&email=".$_POST['txt_email'];
			
			
			header($cad);	
			break;			
			
			
	}
?>
