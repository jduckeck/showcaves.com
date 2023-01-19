UPDATE sights
SET chapter=NULL,
    region=NULL,
    continent='Europe'
WHERE countrycode = 'me';
UPDATE sights
SET filename = REPLACE(filename, '/other/', '/me/')
WHERE countrycode = 'me';
INSERT INTO static (path)
VALUES ('/english/me/topics/Deep.html');
INSERT INTO static (path)
VALUES ('/english/me/topics/Long.html');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Plava pećina', '/english/me/caves/Plava.html', 'Plava', 'Europe', 'me', 'Montenegro', 'caves', NULL, 42.373974, 18.596841);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Ledena pećina', '/english/me/caves/Ledena.html', 'Ledena', 'Europe', 'me', 'Montenegro', 'caves', NULL, 43.1395828, 19.0495994);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Titova pećina', '/english/me/caves/Tito.html', 'Tito', 'Europe', 'me', 'Montenegro', 'caves', NULL, 43.14333, 19.09194);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Mokranjska Miljacka', '/english/ba/caves/MokranjskaMiljacka.html', 'MokranjskaMiljacka', 'Europe', 'ba', 'Bosnia and Herzegovina', 'caves', 'Federation', 43.9252286, 18.5953481);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Tunel Ponikve', '/english/ba/showcaves/Ponikve.html', 'Ponikve', 'Europe', 'ba', 'Bosnia and Herzegovina', 'showcaves', 'Federation', 44.179669, 18.337533);
