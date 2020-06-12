INSERT INTO campi (id, nome, sport) VALUES
(2, 'calcetto_al_coperto', 'calcetto'),
(3, 'calcetto_all_aperto', 'calcetto'),
(4, 'calcetto_su_cemento', 'calcetto'),
(5, 'calcetto_in_spiaggia', 'calcetto'),
(6, 'tennis_al_coperto', 'tennis'),
(7, 'tennis_all_aperto', 'tennis'),
(8, 'tennis_nel_verde', 'tennis'),
(9, 'tennis_al_mare', 'tennis'),
(10, 'volley_al_coperto', 'volley'),
(11, 'volley_all_aperto', 'volley'),
(12, 'volley_di_classe', 'volley'),
(13, 'volley_in_spiaggia', 'volley'),
(14, 'basket_al_coperto', 'basket'),
(15, 'basket_all_aperto', 'basket'),
(16, 'basket_professionale', 'basket'),
(17, 'basket_in_spiaggia', 'basket');

INSERT INTO prenotazioni (id, campo, data_prenotazione, id_prenotatore) VALUES
(10, 3, '2020-06-13', 11),
(23, 2, '2020-06-10', 14),
(40, 5, '2020-06-22', 19),
(41, 17, '2020-06-22', 19),
(42, 14, '2020-06-22', 19),
(45, 8, '2020-06-18', 11),
(46, 6, '2020-06-18', 11),
(47, 10, '2020-06-13', 11),
(48, 11, '2020-06-13', 11),
(49, 5, '2020-06-12', 11);

INSERT INTO users (id, username, password, email) VALUES
(11, 'davide', '446fca5553df49ad9c6348cf1ff71d51', 'davide@gmail.com'),
(12, 'davideisoni', '59a3d70ba63297b996c42e2dde226539', 'davideisoni@gmail.com'),
(13, 'isotheking', '7f670e25dd086b1302ddfcc26aeef5a1', 'isotheking@gmail.com'),
(14, 'iso', 'e906ec779ab4ac6cbfdf30db5cbb3f1c', 'iso@gmail.com'),
(15, 'paola', '72a86026abb289634ec64d7f3b544f0c', 'paola@gmail.com'),
(16, 'isoni', 'aba3f0b2b3b12255c033e6dc5649ffb9', 'isoni@gmail.com'),
(19, 'prova', '189bbbb00c5f1fb7fba9ad9285f193d1', 'prova@gmail.com');
