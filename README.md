## Gestión de pacientes online

https://sistemasdesalud.herokuapp.com/

### Descripción:
El sistema desarrollado le permite al médico almacenar online los datos de sus pacientes, sus historias clínicas, patologías, imágenes, etcétera.

Una de las entidades es el ***paciente***, con todos sus datos personales y otra es la ***obra social***, la cual posee una sigla y un nombre.
El ***paciente*** tiene, además, imágenes correspondientes a sus ***estudios*** tales como radiografías, resonancias o tomografías.

Los usuarios son tres: el ***médico***, que puede realizar el ABM de los pacientes y añadir obras sociales, la ***secretaria***, que solamente puede agregar y ver pacientes y añadir obras sociales y los ***usuarios comunes*** que tienen acceso sólo a su información personal.

La API le permite a los pacientes ver su informacion personal y editar sus datos. Cada usuario tiene un token de acceso único que restringe el acceso a sus propios datos.


### Usuarios:

#### Médico:
* user: damian@gmail.com
* pwd: medico123

#### Secretaria:
* user: secretaria@gmail.com
* pwd: secretaria123

#### Paciente: (Homero Simpson)
* user: prueba@gmail.com
* pwd: prueba123
* API Token: S5Vz1zgEdFmEaA1UU9VxTAOYlwYqpA5YCBdbHlc7szn8YNlh2MsN4mRFltc02kil9w6NsTHVe2ILPHrQ

### Prueba de API

#### Ruta para obtener/enviar datos del usuario = https://sistemasdesalud.herokuapp.com/api/user

* Parámetros para hacer un HTTP request con el metodo **GET**:
    * "api_token" = S5Vz1zgEdFmEaA1UU9VxTAOYlwYqpA5YCBdbHlc7szn8YNlh2MsN4mRFltc02kil9w6NsTHVe2ILPHrQ

    Retorna todos los datos del usuario: Sus datos de contacto, su historia clinica y las imagenes de sus estudios.

* Parámetros para hacer un HTTP request con el metodo **POST**:
    * "api_token" = S5Vz1zgEdFmEaA1UU9VxTAOYlwYqpA5YCBdbHlc7szn8YNlh2MsN4mRFltc02kil9w6NsTHVe2ILPHrQ
    * "telefono" = 291424689 (opcional)
    * "direccion" = Calle Falsa 123 (opcional)
    
    Retorna los datos del usuario actualizados.
    
    Solo se le permite al usuario modificar su número de teléfono y su dirección.
    
    
La colección de Postman se encuentra dentro de la carpeta postman
    
### Librerias externas:

* select2 - https://select2.org/
* magnific-popup - https://dimsemenov.com/plugins/magnific-popup/
* dataTables - https://datatables.net/

