
CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `name`, `email`) VALUES
(1, 'valerier2000', '12345678', 'Valerie', 'valerie00@yandex.ru'),
(2, 'valerier2000', '12345678', 'Valerie', 'valerie00@yandex.ru'),
(3, 'valerier2000', '12345678', 'Valerie', 'valerierogatynskaya@gmail.com'),
(4, 'valerier2000', '826ee260144a3a0e36a0aca5752d0acc', 'Valerie', 'valerierogatynskaya@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;
