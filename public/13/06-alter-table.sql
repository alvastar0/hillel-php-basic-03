-- Изменение таблицы: добавление двух столбцов
ALTER TABLE `users`
    ADD `is_admin`   BOOLEAN  NOT NULL AFTER `name`,
    ADD `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP AFTER `is_admin`;
