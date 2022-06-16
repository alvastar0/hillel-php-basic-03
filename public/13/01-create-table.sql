CREATE TABLE IF NOT EXISTS `default`.`users`
(
    -- Столбцы таблицы
    `id`       BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `email`    VARCHAR(255)    NOT NULL,
    `password` VARCHAR(500)    NOT NULL,
    `name`     VARCHAR(255)    NULL DEFAULT NULL,
    -- Индексы
    PRIMARY KEY (`id`),
    UNIQUE (`email`)
) ENGINE = InnoDB;
