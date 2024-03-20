# Prueba técnica

### Comandos usados para crear el proyecto
```
curl -s https://laravel.build/prueba-tecnica-pokemon | bash

cd prueba-tecnica-pokemon

./vendor/bin/sail up -d

./vendor/bin/sail artisan migrate
```

### Apartados realizados
- 1 Crear un proyecto de Laravel con Sail
- 2 Migraciones y modelos
- 3 Comando para importar pokedex de un CSV
- 4 Seeders y factories para crear datos de prueba
- 5.1 Crear un endpoint para obtener un listado de pokemons
- 6.1 Listado paginado de pokémon capturado ordenado por fecha de captura
- 6.3 Creación de tabla Guild y relación con Pokemon
- 7.1 Asignar bayas y pociones a un pokemon
