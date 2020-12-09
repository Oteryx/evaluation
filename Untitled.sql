CREATE TABLE `utilisateurs` (
  `id` INT PRIMARY KEY NOT NULL,
  `prenom nom` TEXT NOT NULL,
  `mail` TEXT NOT NULL,
  `mot de passe` TEXT NOT NULL,
  `téléphone` TEXT NOT NULL,
  `role` INT(1) NOT NULL
);

CREATE TABLE `lieux` (
  `id` INT PRIMARY KEY NOT NULL,
  `nom` TEXT NOT NULL,
  `adresse` TEXT NOT NULL
);

CREATE TABLE `event` (
  `id` INT PRIMARY KEY NOT NULL,
  `id_lieux` INT NOT NULL,
  `titre` TEXT NOT NULL,
  `description` TEXT NOT NULL,
  `dateheure_debut` DATETIME NOT NULL,
  `dateheure_fin` DATETIME NOT NULL,
  `image` TEXT NOT NULL,
  `nrb_place` INT NOT NULL,
  `gratuit_statut` INT(1) NOT NULL
);

CREATE TABLE `paypal` (
  `id` INT,
  `id_lieux` INT,
  `id_event` INT,
  `id_utilisateurs` INT
);

ALTER TABLE `lieux` ADD FOREIGN KEY (`id`) REFERENCES `event` (`id_lieux`);

ALTER TABLE `paypal` ADD FOREIGN KEY (`id_event`) REFERENCES `event` (`id`);

ALTER TABLE `paypal` ADD FOREIGN KEY (`id_utilisateurs`) REFERENCES `utilisateurs` (`id`);

ALTER TABLE `paypal` ADD FOREIGN KEY (`id_lieux`) REFERENCES `lieux` (`id`);
