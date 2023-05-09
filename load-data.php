<?php

require "config.php";

use App\Pet;

try {
	Pet::register('Max', 'Male', 'canlas.chloeanne@auf.edu.ph', '18/11/03', 'Chloe Anne Canlas', 'San Fernando, Pampanga', '09876543211');
	echo "<li>Added 1 pet";

	$petrec = [
		[
			'name' => 'Snoopy',
			'gender' => 'Male',
			'email' => 'charlie.brown@gmail.com',
			'birthdate' => '15/08/10',
			'owner' => 'Charlie Brown',
			'address' => 'James Street, Minneapolis',
			'contact_number' => '09111111111'

		],
		[
			'name' => 'Pluto',
			'gender' => 'Male',
			'email' => 'mickey.mouse@gmail.com',
			'birthdate' => '1930/09/05',
			'owner' => 'Mickey Mouse',
			'address' => 'Disney Street, Clubhouse',
			'contact_number' => '09190090923'

		]
	];
	Pet::registerMany($petrec);
	echo "<li>Added " . count($petrec) . " more petrec";
	echo "<br /><a href='index.php'>Proceed to Index Page</a>";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

