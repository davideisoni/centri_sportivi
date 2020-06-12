/*
* Query che mostra, per tutte le prenotazioni, la data prenotata, il nome utente del prenotatore e il campo che è stato prenotato
**/
SELECT prenotazioni.data_prenotazione, users.username, campi.nome
FROM prenotazioni, users, campi
WHERE users.id = prenotazioni.id_prenotatore AND campi.id = prenotazioni.campo

/*
* Query che mostra, per le prenotazioni di campi da calcetto, la data prenotata, il nome utente del prenotatore e il campo che è stato prenotato
**/
SELECT prenotazioni.data_prenotazione, users.username, campi.nome
FROM prenotazioni, users, campi
WHERE users.id = prenotazioni.id_prenotatore AND campi.id = prenotazioni.campo AND campi.sport = "calcetto"

/*
* Query che mostra, per le prenotazioni di campi da volley//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////, la data prenotata, il nome utente del prenotatore e il campo che è stato prenotato
**/
SELECT prenotazioni.data_prenotazione, users.username, campi.nome
FROM prenotazioni, users, campi
WHERE users.id = prenotazioni.id_prenotatore AND campi.id = prenotazioni.campo AND campi.sport = "volley"

/*
* Query che mostra, per le prenotazioni di campi da tennis, la data prenotata, il nome utente del prenotatore e il campo che è stato prenotato
**/
SELECT prenotazioni.data_prenotazione, users.username, campi.nome
FROM prenotazioni, users, campi
WHERE users.id = prenotazioni.id_prenotatore AND campi.id = prenotazioni.campo AND campi.sport = "tennis"

/*
* Query che mostra, per le prenotazioni di campi da basket, la data prenotata, il nome utente del prenotatore e il campo che è stato prenotato
**/
SELECT prenotazioni.data_prenotazione, users.username, campi.nome
FROM prenotazioni, users, campi
WHERE users.id = prenotazioni.id_prenotatore AND campi.id = prenotazioni.campo AND campi.sport = "basket"
