CREATE TABLE `repertoire`.`users` ( `user_id` INT NOT NULL AUTO_INCREMENT , `nom` VARCHAR(100) NOT NULL , `prenom` VARCHAR(100) NOT NULL , `adresse_mail` VARCHAR(200) NOT NULL , `message` VARCHAR(10000) NOT NULL , PRIMARY KEY (`user_id`)) ENGINE = InnoDB;
CREATE TABLE `repertoire`.`message` ( `user_id` INT NOT NULL AUTO_INCREMENT , `nom` VARCHAR(100) NOT NULL , `prenom` VARCHAR(100) NOT NULL , `adresse_mail` VARCHAR(200) NOT NULL , `message` VARCHAR(10000) NOT NULL , PRIMARY KEY (`user_id`)) ENGINE = InnoDB;




insert into `users` (`message`, `adresse_mail`, `nom`, `prenom`, `user_id`) values ('Bonjour', 'diarrassouba.lamine@exemple.com', 'Diarrassouba', 'Lamine', 1);
insert into `users` (`message`, `adresse_mail`, `nom`, `prenom`, `user_id`) values ('Salut', 'diarrassouba.nabe@exemple.com', 'Diarrassouba', 'Nabé', 2);
insert into `users` (`message`, `adresse_mail`, `nom`, `prenom`, `user_id`) values ('Bonsoir', 'diarrassouba.karitio@exemple.com', 'Diarrassouba', 'Karitio', 3);