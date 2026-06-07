INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Kızören Gölü', '/english/tr/karst/KizorenGolu.html', 'KizorenGolu', 'Europe', 'tr', 'Turkey', 'karst', 'CentralAnatolia', 38.174670, 33.185536);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Bergbaumuseum Nentershausen', '/english/de/mines/Nentershausen.html', 'Nentershausen', 'Europe', 'de', 'Germany', 'mines', 'Weserbergland', 51.010250, 9.934457);
UPDATE `sights`
SET `Latitude`='44.8907447',
    `Longitude`='0.9347111'
WHERE `filename` = '/english/fr/showcaves/Proumeyssac.html';
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Bergbaumuseum Bleicherode', '/english/de/mines/Bleicherode.html', 'Bleicherode', 'Europe', 'de', 'Germany', 'mines', 'ThueringerBecken', 51.452697, 10.597011);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Bergisches Museum für Bergbau, Handwerk und Gewerbe', '/english/de/mines/Bergisches.html', 'Bergisches', 'Europe', 'de', 'Germany', 'mines', 'Sauerland', 50.965036, 7.164416);
INSERT INTO static (path)
VALUES ('/english/explain/Topic/Closed.html');
INSERT INTO static (path)
VALUES ('/english/au/topics/index.html');
INSERT INTO static (path)
VALUES ('/english/au/geoparks/index.html');
INSERT INTO static (path)
VALUES ('/english/au/topics/closed.html');
INSERT INTO static (path)
VALUES ('/english/de/topics/closed.html');
INSERT INTO static (path)
VALUES ('/german/de/topics/closed.html');
INSERT INTO static (path)
VALUES ('/english/fr/topics/closed.html');
INSERT INTO static (path)
VALUES ('/english/gb/topics/closed.html');
INSERT INTO static (path)
VALUES ('/english/gb/geoparks/index.html');
INSERT INTO static (path)
VALUES ('/english/gb/topics/index.html');
