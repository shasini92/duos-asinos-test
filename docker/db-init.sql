CREATE DATABASE IF NOT EXISTS `duos-asinos-test-db`;

GRANT ALL PRIVILEGES ON `duos-asinos-test-db.*` TO 'duos_asinos' @'%';

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL UNIQUE,
  `password` varchar(100) NOT NULL
);

INSERT INTO
  users (name, email, password)
VALUES
  (
    'Sinisa Milicic 1',
    'test@gmail.com1',
    'test'
  ),
  (
    'Sinisa Milicic 2',
    'test@gmail.com2',
    'test'
  ),
  (
    'Sinisa Milicic 3',
    'test@gmail.com3',
    'test'
  ),
  (
    'Ivan Ivanovic 1',
    'sinisa@gmail.com1',
    'test'
  ),
  (
    'Ivan Ivanovic 2',
    'sinisa@gmail.com2',
    'test'
  ),
  (
    'Ivan Ivanovic 3',
    'sinisa@gmail.com3',
    'test'
  );