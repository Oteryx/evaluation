CRÉER TABLE `utilisateurs` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`nom` TEXT NOT NULL,
	`prenom` TEXT NOT NULL,
	`login` TEXT NOT NULL,
	`password` TEXT NOT NULL,
	CLÉ PRIMAIRE (`id`)
);

CRÉER UNE TABLE `materiels` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`nom` TEXT NOT NULL,
	`id_salle` TEXTE NON NULL,
	CLÉ PRIMAIRE (`id`)
);

CRÉER UNE TABLE `salles` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`nom` TEXT NOT NULL,
	`lieu` TEXT NOT NULL,
	CLÉ PRIMAIRE (`id`)
);

