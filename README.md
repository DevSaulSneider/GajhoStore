Crear Modelo: php artisan make:model Articulo

protected $fillable = [
	'name',
	'email',			Restringe los datos que pueden ser modificados.
	'password',
]

Crear Migracion: php artisan make:migration create_articulos_table

Correr Migracion: php artisan migrate

Crear Controlador: php artisan make:controller ArticuloController --resource
invocar al modelo en el controlador

Resetear Migracion: php artisan migrate:fresh --seed

Rellenar Datos: php artisan db:seed --class=nombreDelSeed