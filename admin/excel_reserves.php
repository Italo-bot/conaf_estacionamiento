<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=Solicitudes_" . date('Y:m:d:m:s').".xls");
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';

	$output = "";
	
	if(ISSET($_POST['export'])){
		$output .="
			<table>
				<thead>
					<tr>
                    <th>ID solicitud</th>
                    <th>Correo Administrador</th>
                    <th>Rut Usuario</th>
                    <th>Asunto</th>
                    <th>Detalles</th>
                    <th>Fecha/Hora</th>
					</tr>
				<tbody>
		";
		
		$query = mysqli_query($conn, "SELECT * FROM `solicitudes`") or die(mysqli_errno());
		while($fetch = mysqli_fetch_array($query)){
			
		$output .= "
					<tr>
						<td>".$fetch['id_soli']."</td>
						<td>".$fetch['ad_email']."</td>
						<td>".$fetch['usu_rut']."</td>
						<td>".$fetch['asunto']."</td>
                        <td>".$fetch['mensaje']."</td>
                        <td>".$fetch['fecha_soli']."</td>
					</tr>
		";
		}
		
		$output .="
				</tbody>
				
			</table>
		";
		
		echo $output;
	}
	
?>
