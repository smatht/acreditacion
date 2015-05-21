<!DOCTYPE html>
<html lang="es" ng-app="acreditacion">
<head>
	<meta charset="utf-8">
	<title>Formulario de Inscripcion</title>
	<link rel="stylesheet" media="screen" href="estilos/styles.css" >
    <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk
/html5.js"></script>
        <![endif]-->
</head>
<body>
<form class="contact_form" action="#" method="post">
    <ul>
        <li>
             <h2>Formulario de Inscripción</h2>
        </li>
        <li>
            <label for="name">Nombre:</label>
            <input type="text"  placeholder="Nombre" required />
        </li>
        <li>
            <label for="name">Apellido</label>
            <input type="text"  placeholder="Apellido" required />
        </li>
        <li>
            <label for="payment">Forma de Pago:</label>
            <select id="myList">
               <option value="1">Pago en Evento</option>
               <option value="2">Depósito Bancario</option>
               <option value="3">Transferencia Bancaria</option>
             </select>
        </li>
        <li>
            <label for="type">Tipo de Inscripción:</label>
                <select id="listaInscripcion">
                   <option value="4"> Asistentes docentes nivel medio/terciario
                   <option value="5"> Asistentes docentes UNNE
                   <option value="6"> Asistentes en General
                   <option value="7"> Asistentes estudiantes universitarios y/o terciarios
                   <option value="8"> Autores miembros de Universidades de la RedUNCI
                   <option value="9"> Otros autores
                </select>
        </li>
        <li>
            <label for="email">Correo de Contacto:</label>
            <input type="email" name="email" placeholder="email@ejemplo.com" required />
        </li>
        <li>
             <h3>Datos de facturación</h3>
        </li>
        <li>
            <label for="dni">CUIT/CUIL/DNI:</label>
            <input type="text" name="dni" placeholder=""/>
        </li>
        <li>
            <label for="nombreInst">Apellido y Nombre / Institución:</label>
            <input type="text" name="nombreInst" placeholder=""/>
        </li>
        <li>
            <label for="localidad">Localidad:</label>
            <input type="text" name="localidad" placeholder=""/>
        </li>
        <li>
            <label for="domicilio">Domicilio:</label>
            <input type="text" name="domicilio" placeholder=""/>
        </li>
        <li>
            <label for="tel">Teléfono:</label>
            <input type="text" name="tel" placeholder=""/>
        </li>
        <li>
            <label for="iva">Condición de IVA:</label>
            <input type="text" name="iva" placeholder=""/>
        </li>
        
        <li>
        	<button class="submit" type="submit">Enviar</button>
        </li>
    </ul>
</form>
    <link rel="javascript" href="js/angular.min.js">
</body>
</html>