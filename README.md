
## 🚀 PASOS PARA INICIAR EL PROYECTO

1. **Clonar el repositorio** dentro de la carpeta `laragon/www` si se iniciara en Laragon, si se iniciara en XAMPP seria dentro de la carpeta `xampp/htdocs`, luego hacemos click derecho y seleccionamos git bash here donde ingresaremos el siguiente comando:  
   ```
   git clone <url del repositorio>
   ```
2. **Instalar dependencias con Composer**

- Ubicarse dentro del proyecto con el comando:

```
cd <nombre_del_proyecto>
```
- Instalar dependencias:

```
composer install
```

3. Configurar el archivo **.env** 
- En este archivo se deben colocar todos los datos necesarios para la conexión a la base de datos:
```
CI_ENVIRONMENT = development

database.default.hostname =
database.default.database =
database.default.username =
database.default.password =
database.default.DBDriver =
database.default.port =

```
4. Vista del Proyecto
- Al haber realizado todos los pasos anteriores, procedemos a darle al boton de **Iniciar Todo** de laragon, en caso de XAMPP le damos click a Start de Apache y MySQL.
- Ingresamos la ruta de nuestro proyecto:
 - 'http://tarea07.test/' ejercicio.

5. Datos del usuario al migrar la database del proyecto:
    - user: afgian
    - password: franco123@

    nota: se amplió el tamaño de la imagen del avatar de 1024(1MB) a 2048(2MB) para evitar inconvenientes al registrar el usuario.
