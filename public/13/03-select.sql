-- Выбрать всех полььзователей
SELECT * FROM `users`;

-- Выбрать идентификаторы пользователей и их адреса электронной почты
SELECT `id`, `email` FROM `users`;

-- Выбрать идентификатор пользователя, `email` которого равен указанному
SELECT `id` FROM `users` WHERE `email` = "alvastarua@gmail.com";

-- Выбрать всех пользователей, имена которых не заполнены
SELECT `id`, `email` FROM `users` WHERE `name` IS NULL;

-- Выбрать пользователей, имена которых заполнены
SELECT `id`, `email` FROM `users` WHERE `name` IS NOT NULL;

-- Выбрать данные пользователей, у которых не заполнены имена и
-- отсортировать их по идентификатору в порядке возрастания
SELECT `id`, `email`, `name`
FROM `users`
WHERE `name` IS NULL
ORDER BY `id`;

-- Выбрать данные пользователей, у которых не заполнены имена и
-- отсортировать их по идентификатору в порядке убывания
SELECT `id`, `email`, `name`
FROM `users`
WHERE `name` IS NULL
ORDER BY `id` DESC;

-- Выбрать первых двух пользователей
SELECT * FROM `users` LIMIT 2;

-- Выбрать последних двух пользователей
SELECT * FROM `users` ORDER BY `id` DESC LIMIT 2;

-- Последовательная выборка пользователей по 2 строки за запрос (аналог пагинации)
SELECT * FROM `users` LIMIT 0, 2;
SELECT * FROM `users` LIMIT 2, 2;
SELECT * FROM `users` LIMIT 4, 2;
