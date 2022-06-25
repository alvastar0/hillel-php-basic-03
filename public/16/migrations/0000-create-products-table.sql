--
-- Структура таблицы `products`
--

CREATE TABLE `products`
(
    `id`    bigint UNSIGNED                             NOT NULL,
    `name`  varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
    `image` varchar(500) COLLATE utf8mb4_unicode_520_ci NOT NULL,
    `price` decimal(18, 2)                              NOT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_520_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
    ADD PRIMARY KEY (`id`);
