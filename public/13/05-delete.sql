-- Удаление пользователя по его идентификатору
-- Значение AUTO INCREMENT при этом не сбрасывается
DELETE FROM `users` WHERE `id` = 5;

-- Очистка данных таблицы и сброс AUTO INCREMENT
TRUNCATE `users`;
