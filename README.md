## Gestión de pacientes online

Como mi padre es médico, se me ocurrió hacer una aplicación que le permita almacenar los datos de sus pacientes, sus historias clínicas, patologías, datos personales, etcétera.

Una de las entidades sería el ***paciente***, con todos sus datos personales y otra sería la ***obra social***, la cual posee una sigla y un nombre.
El ***paciente*** tendría, además, imágenes correspondientes a sus estudios tales como radiografías, resonancias o tomografías.

Los usuarios autorizados serían tres: el ***médico***  que puede realizar el ABM de los pacientes y obras sociales, la ***secretaria*** que solamente puede agregar pacientes y ver sus datos y el ***admin*** que tiene acceso total a todas las tablas.

Una funcionalidad que me gustaría implementar también es la de permitirle a los pacientes ingresar con su nombre de usuario y ver su propia información, pero no sé si esta funcionalidad corresponde a esta entrega o debería realizarse como parte del proyecto 3 utilizando la API.

En un principio, como los datos de los pacientes son privados, la API brindaría sólamente información estadística como cantidad de pacientes, tipos de patologías, cantidad de pacientes con una determinada patología, etc. 
Dado el caso en que los usuarios se puedan loguear utilizando la API en el proyecto 3, esta API también permitiría visualizar la información del propio paciente así como modificarla.
