DROP TABLE IF EXISTS `users`;

CREATE TABLE IF NOT EXISTS `users`
(
    `id`               INT(20) AUTO_INCREMENT,
    `name`             VARCHAR(20) NOT NULL,
    `email`            VARCHAR(255) NOT NULL,
    `password`         VARCHAR(255) NOT NULL,
    `created_at`       Datetime DEFAULT NULL,
    `updated_at`       Datetime DEFAULT NULL,
    PRIMARY KEY (`id`)
) DEFAULT CHAR SET = utf8 COLLATE = utf8_bin;
