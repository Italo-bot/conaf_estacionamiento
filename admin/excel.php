<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=Registros_" . date('Y:m:d:m:s').".xls");
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';

	$output = "";
	
	if(ISSET($_POST['export'])){
		$output .="
			<table>
				<thead>
					<tr>
                    <th>ID registro</th>
                    <th>Patente</th>
                    <th>Rut Usuario</th>
                    <th>Kilometraje</th>
                    <th>Destino</th>
                    <th>Fecha/Hora</th>
                    <th>Tipo</th>
					</tr>
				<tbody>
		";
		
		$query = mysqli_query($conn, "SELECT * FROM `registros`") or die(mysqli_errno());
		while($fetch = mysqli_fetch_array($query)){
			
		$output .= "
					<tr>
						<td>".$fetch['id_reg']."</td>
						<td>".$fetch['patente']."</td>
						<td>".$fetch['usu_rut']."</td>
						<td>".$fetch['kilometraje']."</td>
                        <td>".$fetch['destino']."</td>
                        <td>".$fetch['fecha_reg']."</td>
                        <td>".$fetch['tipo_reg']."</td>
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

