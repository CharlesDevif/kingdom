CREATE TABLE IF NOT EXISTS users (id INTEGER PRIMARY KEY, username TEXT, password TEXT, role TEXT);
DELETE FROM users;
INSERT INTO users (username, password, role) VALUES ('student', '5f4dcc3b5aa765d61d8327deb882cf99', 'user'); -- password
INSERT INTO users (username, password, role) VALUES ('archivist', '21232f297a57a5a743894a0e4a801fc3', 'admin'); -- admin

CREATE TABLE IF NOT EXISTS secrets (id INTEGER PRIMARY KEY, name TEXT, value TEXT);
DELETE FROM secrets;
INSERT INTO secrets (name, value) VALUES ('kingdom_key_2','KDR{ARCHIVIST-SECOND-KEY}');
