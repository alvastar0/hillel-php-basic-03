-- Обновить имена ВСЕХ пользователей на указанное
UPDATE `users` SET `name` = "Александр";

-- Обновить имя указанного пользователя
UPDATE `users` SET `name` = "Иван" WHERE `id` = 2;

-- Обновить имя указанных пользователей
UPDATE `users` SET `name` = "Неизвестный Бабуин" WHERE `id` IN (3, 4, 5);
