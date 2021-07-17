# HealthCare System

https://sistemasdesalud.herokuapp.com/

## Descripción:
HealthCare System es un sistema que le permite al médico almacenar de forma online los datos de sus pacientes, sus historias clínicas, patologías, imágenes, etcétera. Fue desarrollado como parte de la materia Ingeniería de Aplicaciones Web utilizando **Laravel** y **Vue.js**.

Hay tres tipos de usuarios: 
-   **Médico**: puede realizar el ABM de los pacientes y añadir obras sociales.
-   **Secretaria**: solamente puede agregar y ver pacientes y añadir obras sociales.
-   **Paciente**: tiene acceso sólo a su información personal.

La API le permite a los pacientes ver su informacion personal y editar sus datos. Cada usuario tiene un token de acceso único que restringe el acceso a sus propios datos.


## Datos para probar la app:

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

## Prueba de API

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
       
## Librerias externas:

* select2 - https://select2.org/
* magnific-popup - https://dimsemenov.com/plugins/magnific-popup/
* dataTables - https://datatables.net/

