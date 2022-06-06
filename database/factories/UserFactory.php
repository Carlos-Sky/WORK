<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Estado;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {

  return [
    'name' => $faker->name,
    'email' => $faker->unique()->safeEmail,
    'email_verified_at' => now(),
    'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
    'remember_token' => Str::random(10),
  ];
});






$factory->define(Alumno::class, function (Faker $faker) {
  return [
    'No' => $faker->numberBetween(0, 50),
    'matricula' => $faker->numberBetween(0, 50),
    'correo' => $faker->unique()->safeEmail,
    'nombre' => $faker->name,
    'apellido_paterno' => $faker->firstName,
    'apellido_materno' => $faker->lastName,
  ];
});

$factory->define(Tutor::class, function (Faker $faker) {
  return [

    'nombre' => $faker->name,
    'apellido_paterno' => $faker->firstName,
    'apellido_materno' => $faker->lastName,
    'grupo' => $faker->name,
  ];
});



$factory->define(Programaeducativo::class, function (Faker $faker) {
  return [

    'nombre' => $faker->name,
    'nivel' => $faker->text(rand(10, 40)),
    'descripcion' => $faker->realText(rand(20, 300)),
  ];
});

$factory->define(Materia::class, function (Faker $faker) {
  return [

    'siglas' => $faker->name,
    'materia' => $faker->text(rand(10, 40)),
    'horas' => $faker->numberBetween(0, 23),
  ];
});



$factory->define(Cuatrimestre::class, function (Faker $faker) {
  return [
    'semana' => $faker->name,
    'inicio' => $faker->date(),
    'final' => $faker->date(),
    'generation_id' => $faker->numberBetween(1, 10),
    'estado_id' => $faker->numberBetween(1, 10),
  ];
});

$factory->define(Generation::class, function (Faker $faker) {
  return [
    'generacion' => $faker->name,
    'descripcion' => $faker->text,
    'programaeducativo_id' => $faker->numberBetween(),
  ];
});






$factory->define(Profesore::class, function (Faker $faker) {
  return [
    'nombre' => $faker->name,
    'apellido_paterno' => $faker->firstName,
    'apellido_materno' => $faker->lastName,
    'direccion' => $faker->streetName,
    'telefono' => $faker->phoneNumber,
    'correo' => $faker->unique()->safeEmail,
    'usuario' => $faker->name,    
     'contrasena' => Hash::make('camila'),
       ];
});

$factory->define(Psicologo::class, function (Faker $faker) {
  return [
    'nombre' => $faker->name,
    'apellido_paterno' => $faker->firstName,
    'apellido_materno' => $faker->lastName,
    'descripcion' => $faker->realText(rand(20, 300)),
    'programaeducativo_id' => $faker->numberBetween(),
  ];
});


$factory->define(Antecedente::class, function (Faker $faker) {
  return [
    'antecedentes' => $faker->realText(rand(20, 300)),
    'alumno_id' => $faker->numberBetween(),
  ];
});

$factory->define(Seguimientosemana::class, function (Faker $faker) {
  return [
    'semana' => $faker->numberBetween(1, 5),
    'obs_psicologo' => $faker->realText(rand(20, 300)),
    'obs_tutor' => $faker->realText(rand(20, 300)),
    'alumno_grupo_id' => $faker->numberBetween(),
  ];
});

$factory->define(Seguimientomateria::class, function (Faker $faker) {
  return [
    'semana' => $faker->numberBetween(1, 5),
    'obs_materia' => $faker->realText(rand(20, 300)),
    'estado_materia' => $faker->realText(rand(20, 300)),
    'faltas_materia' => $faker->numberBetween(),
    'materia_profesore_id' => $faker->numberBetween(),
    'alumno_grupo_id' => $faker->numberBetween(),
  ];
});

$factory->define(Estado::class, function (Faker $faker) {
  return [
    'activo' => $faker->realText(rand(10, 40)),
    'grupo_id' => $faker->numberBetween(0, 10),
    'generation_id' => $faker->numberBetween(0, 10),
  ];
});

$factory->define(Alumno_grupo::class, function (Faker $faker) {
  return [
    'beca' => $faker->realText(rand(0, 150)),
    'alumno_id' => $faker->numberBetween(0, 10),
    'grupo_id' => $faker->numberBetween(0, 10),
  ];
});

$factory->define(Materia_profesore::class, function (Faker $faker) {
  return [
    'materia_id' => $faker->numberBetween(0, 10),
    'profesore_id' => $faker->numberBetween(0, 10),
   'grupo_id' => $faker->numberBetween(0, 10),
  ];
});

$factory->define(Grupo::class, function (Faker $faker) {
  return [
    'grupo' => $faker->name,

    'cuatrimestre_id' => $faker->numberBetween(0, 10),
    'tutor_id' => $faker->numberBetween(0, 10),
  ];
});
