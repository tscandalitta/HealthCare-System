## Gestión de pacientes online

Como mi padre es médico, se me ocurrió hacer una aplicación que le permita almacenar los datos de sus pacientes, sus historias clínicas, patologías, datos personales, etcétera.

Una de las entidades es el ***paciente***, con todos sus datos personales y otra es la ***obra social***, la cual posee una sigla y un nombre.
El ***paciente*** tendría, además, imágenes correspondientes a sus ***estudios*** tales como radiografías, resonancias o tomografías.

Los usuarios serían tres: el ***médico***, que puede realizar el ABM de los pacientes y obras sociales, la ***secretaria***, que solamente puede agregar pacientes y ver sus datos y los ***usuarios comunes*** que tienen acceso sólo a su información personal.

La API le permite a los pacientes ver su informacion personal y editar sus datos. Cada usuario tiene un token de acceso único y sólo puede acceder a sus propios datos.

### Librerias externas:

* select2 - https://select2.org/
* magnific-popup - https://dimsemenov.com/plugins/magnific-popup/
* dataTables - https://datatables.net/

