INSERT INTO `users` (`email`, `password`) VALUES ("alvastarua@gmail.com", "81dc9bdb52d04dc20036dbd8313ed055");
INSERT INTO `users` (`email`, `password`) VALUES ("example@gmail.com", "81dc9bdb52d04dc20036dbd8313ed055");
INSERT INTO `users` (`email`, `password`) VALUES ("example@ukr.net", "81dc9bdb52d04dc20036dbd8313ed055");

-- Можно вставить и несколько записей одним запросом,
-- если перечислить данные через запятую.
INSERT INTO `users` (`email`, `password`) VALUES
                                              ("another@gmail.com", "81dc9bdb52d04dc20036dbd8313ed055"),
                                              ("another@ukr.net", "81dc9bdb52d04dc20036dbd8313ed055");
