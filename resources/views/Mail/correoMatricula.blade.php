<!DOCTYPE html>
<html lang="es" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
	<meta charset="utf-8"> <!-- utf-8 works for most cases -->
	<meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
	<meta name="x-apple-disable-message-reformatting"> <!-- Disable auto-scale in iOS 10 Mail entirely -->
	<title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

</head>

<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f1f1f1;">
	<center style="width: 100%;">
		<div style="display: none; font-size: 1px;max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
			&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
		</div>
		<div style="max-width: 600px; margin: 0 auto; background: #255086; height: 100vh; display: flex;">
			<!-- BEGIN BODY -->
			<table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
				<tr>
					<td valign="middle" colspan="2">
                        <img src="https://matricula.talentotechregion3.com.co/public/assets/img/TalentoTech.png" alt="" style="width: 70%; height: auto; margin: auto; display: block;">
					</td>
				</tr><!-- end tr -->
				<tr>
					<td valign="middle" style="padding: 2em;" colspan="2">
						<table>
							<tr>
								<td>
									<div style="padding: 0 2.5em; text-align: justify;">
										<h2 style="color: #fff; font-weight: 400; line-height: 1.4;">
											@php
												$opcionHorario = $contentMail->horario_formacion;
												$opciones = ['Opción 1 ', 'Opción 2 ', 'Opción 3 ', 'Opción 4 '];
												$horario = str_replace($opciones, '', $opcionHorario);
											@endphp
											<p style="color: #fff">🎉 {{$contentMail->primer_nombre}} {{$contentMail->primer_apellido}} Queremos informarte que tu matrícula en Talento Tech 2024 ha sido confirmada. ¡Oficialmente eres parte de nuestra familia! 🚀 Queremos compartirte que te encuentras inscrito en la temática de {{$contentMail->eje_final_formacion}} y en el nivel {{$contentMail->nivel_formacion}}, al correo estaremos confirmando la fecha de inicio del curso.
											</p>
											<br>
											<br>
											<p style="color: #fff">Estamos emocionados de tenerte con nosotros, estamos seguros de que vivirás una experiencia increíble. ¡Nos vemos muy pronto para iniciar!</p>
										</h2>
									</div>
								</td>
							</tr>
						</table>
					</td>
				</tr><!-- end tr -->
                <tr>
                    <td>
                        <img src="https://matricula.talentotechregion3.com.co/public/assets/img/logo_potenciadelavida.png" alt="" style="width: 300px; width: 50%; height: auto; margin: auto; display: block;">
                    </td>
                    <td>
                        <img src="https://matricula.talentotechregion3.com.co/public/assets/img/logo_mintic.png" alt="" style="width: 300px; width: 50%; height: auto; margin: auto; display: block;">
                    </td>
                </tr>
				<!-- 1 Column Text + Button : END -->
			</table>

		</div>
	</center>
</body>

</html>