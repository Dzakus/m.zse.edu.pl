<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Alters extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::statement("ALTER TABLE `acl`
		 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `controller` (`controller`,`action`), ADD KEY `ghost` (`ghost`);

		ALTER TABLE `acl_to_roles`
		 ADD PRIMARY KEY (`id`), ADD KEY `acl_id` (`acl_id`), ADD KEY `role_id` (`role_id`);

		ALTER TABLE `artykul`
		 ADD PRIMARY KEY (`id`), ADD KEY `id_kategorii` (`id_kategorii`,`id_srodek`,`id_lewo`);

		ALTER TABLE `artykul_lewo`
		 ADD PRIMARY KEY (`id`);

		ALTER TABLE `artykul_srodek`
		 ADD PRIMARY KEY (`id`);

		ALTER TABLE `baza`
		 ADD PRIMARY KEY (`id`);

		ALTER TABLE `kategorie`
		 ADD PRIMARY KEY (`id`), ADD KEY `nazwa` (`nazwa`);

		ALTER TABLE `kategorie_newsy`
		 ADD PRIMARY KEY (`id`);

		ALTER TABLE `klasy`
		 ADD PRIMARY KEY (`id`), ADD KEY `klasa` (`klasa`);

		ALTER TABLE `newsy`
		 ADD PRIMARY KEY (`id`), ADD KEY `id_kategorii` (`id_kategorii`,`tytul`), ADD KEY `id_tresci` (`id_tresci`);

		ALTER TABLE `newsy_tresci`
		 ADD PRIMARY KEY (`id`);

		ALTER TABLE `roles`
		 ADD PRIMARY KEY (`id`);

		ALTER TABLE `users`
		 ADD PRIMARY KEY (`id`), ADD KEY `id_group` (`id_role`);

		ALTER TABLE `zalaczniki`
		 ADD PRIMARY KEY (`id`), ADD KEY `nazwa` (`nazwa`);

		ALTER TABLE `zastepstwa`
		 ADD PRIMARY KEY (`id`), ADD KEY `plik` (`plik`);

		ALTER TABLE `acl`
		MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=87;

		ALTER TABLE `acl_to_roles`
		MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=88;

		ALTER TABLE `artykul`
		MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=386;

		ALTER TABLE `artykul_lewo`
		MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=82;

		ALTER TABLE `artykul_srodek`
		MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=351;

		ALTER TABLE `baza`
		MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=94;

		ALTER TABLE `kategorie`
		MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;

		ALTER TABLE `kategorie_newsy`
		MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;

		ALTER TABLE `klasy`
		MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=159;

		ALTER TABLE `newsy`
		MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=281;

		ALTER TABLE `newsy_tresci`
		MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=281;

		ALTER TABLE `roles`
		MODIFY `id` tinyint(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;

		ALTER TABLE `users`
		MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;

		ALTER TABLE `zalaczniki`
		MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=72;

		ALTER TABLE `zastepstwa`
		MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=83;

		ALTER TABLE `acl_to_roles`
		ADD CONSTRAINT `acl_to_roles_ibfk_1` FOREIGN KEY (`acl_id`) REFERENCES `acl` (`id`) ON DELETE CASCADE,
		ADD CONSTRAINT `acl_to_roles_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
		
		ALTER TABLE `users`
		ADD CONSTRAINT `Role` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id`);
")
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
