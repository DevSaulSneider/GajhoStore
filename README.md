Crear Modelo,Migracion,Seeder y Controlador: php artisan make:model Articulo -mscr

protected $fillable = [
	'name',
	'email',			Restringe los datos que pueden ser modificados.
	'password',
]

Crear Migracion: php artisan make:migration create_articulos_table

Correr Migracion: php artisan migrate

Crear Controlador: php artisan make:controller ArticuloController --resource
invocar al modelo en el controlador

Resetear base de datos: php artisan migrate:fresh --seed

Crear seeder: php artisan db:seed --class=nombreDelSeed

Crear rama: git checkout -b NAME

Agregar Cambios: git add .

Agregar correo: git config --global user.email "correo@gmail.com"

Agregar username: git config --global user.name "username"

Crear commit: git commit -m 'especificacion'

Subir cambios: git push origin NAMERAMA

Bajar cambios: git pull origin NAMERAMA

Linkear imagenes del storage: php artisan storage:link



Pasos despues de bajar cambios:

1) npm install
2) composer install
3) Refrescar bd (php artisan migrate:fresh --seed)

4) SOLO SI RECIEN SE CLONA EL PROYECTO: php artisan storage:link

Para que corra el SASS: npm run watch-poll