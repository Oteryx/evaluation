CREATE TABLE `utilisateurs` (
	`id` INT NOT NULL,
	`prenom nom` TEXT NOT NULL,
	`mail` TEXT NOT NULL,
	`mot de passe` TEXT NOT NULL,
	`téléphone` TEXT NOT NULL,
	`role` INT(1) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `lieux` (
	`id` INT NOT NULL,
	`nom` TEXT NOT NULL,
	`adresse` TEXT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `event` (
	`id` INT NOT NULL,
	`id_lieux` INT NOT NULL,
	`titre` TEXT NOT NULL,
	`description` TEXT NOT NULL,
	`dateheure_debut` DATETIME NOT NULL,
	`dateheure_fin` DATETIME NOT NULL,
	`image` TEXT NOT NULL,
	`nrb_place` INT NOT NULL,
	`gratuit_statut` INT(1) NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `lieux` ADD CONSTRAINT `lieux_fk0` FOREIGN KEY (`id`) REFERENCES `event`(`id_lieux`);

