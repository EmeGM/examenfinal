Examen Final - Aplicación Web CRUD con MySQL
Este repositorio contiene una aplicación web CRUD para gestionar datos de una base de datos de restaurantes y platos, creada como proyecto final de evaluación. La aplicación está diseñada en arquitectura MVC, lo que permite separar las capas de modelos, vistas y controladores, y facilita una estructura más limpia y mantenible.

Descripción
La aplicación permite realizar operaciones CRUD (Crear, Leer, Actualizar y Eliminar) sobre varias tablas en una base de datos MySQL configurada con MySQL Workbench. Además, utiliza una relación maestro-detalle para gestionar las entidades principales (restaurantes) y sus detalles (tipos de platos y platos).

Características y Funcionalidades
Operaciones CRUD: Permite agregar, visualizar, editar y eliminar registros de la base de datos.
Relación Maestro-Detalle: Configura una relación entre entidades principales y secundarias para facilitar la gestión de datos complejos.
Modelo de Base de Datos: Implementado en MySQL usando MySQL Workbench, con esquema y tablas específicas.
Modelo de Base de Datos
La base de datos mydb fue diseñada y creada en MySQL Workbench utilizando la herramienta de ingeniería directa (Forward Engineering). A continuación, se describe la estructura de las tablas y relaciones:

Tipos (tipos)
Campos: id_plato, nombre_plato, precio, id_rest, id_tipo_plato
Llave primaria: id_plato
Relación única en el campo id_plato.
Restaurantes (restaurantes)

Campos: id, nombre_rest, direccion, telefono, tipos_id_plato
Llave primaria: id
Llave foránea: tipos_id_plato, enlazada a la tabla tipos.
Platos (platos)

Campos: id_plato, nombre, tipos_id_plato
Llave primaria: id_plato
Llave foránea: tipos_id_plato, enlazada a la tabla tipos.
Configuración e Instalación
Clonar el Repositorio

Clona este repositorio en tu máquina local:


git clone https://github.com/EmeGM/examenfinal.git
cd examenfinal
Configurar la Base de Datos

Importa el esquema mydb en tu instancia de MySQL utilizando MySQL Workbench y ejecuta las instrucciones SQL incluidas en este archivo README o en tu script de creación de base de datos.

Conectar la Base de Datos

Actualiza la configuración de conexión en el backend de la aplicación para enlazarla con la base de datos MySQL. Asegúrate de proporcionar las credenciales correctas y el nombre del servidor SQL Server donde está alojada la base de datos.

Instalar Dependencias (si aplica)

-npm install
Iniciar el Servidor de Desarrollo

-npm start

Uso
Accede a la aplicación desde tu navegador en http://localhost:3000.
Utiliza la interfaz para realizar operaciones CRUD en las tablas de la base de datos.
Explora la relación maestro-detalle para visualizar la vinculación entre restaurantes y sus platos.
Estructura del Proyecto
models/: Define las estructuras de las tablas y sus relaciones.
controllers/: Contiene la lógica para manejar las solicitudes y las operaciones CRUD.
views/: Define las vistas de la aplicación en HTML y CSS para la interacción del usuario.

Contribuciones
Si deseas contribuir:

Haz un fork del repositorio.
Crea una rama para tus cambios (git checkout -b feature/nueva-funcionalidad).
Realiza tus cambios y haz un commit (git commit -m 'Agrega nueva funcionalidad').
Envía un pull request.
Licencia
Este proyecto es de uso educativo y sin fines comerciales.

