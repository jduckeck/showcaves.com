INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, chapter, Latitude, Longitude)
VALUES('yes','Cuevas de Pencaligüe', '/english/other/caves/Pencaligue.html', 'Pencaligue', 'MiddleAmerica', 'hn', 'Honduras', 'caves', 'hn', 'other', 14.961734, -88.504168);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, chapter, Latitude, Longitude)
VALUES('yes','La Caverna', '/english/other/subterranea/LaCaverna.html', 'LaCaverna', 'MiddleAmerica', 'hn', 'Honduras', 'subterranea', 'hn', 'other', 15.479352, -88.034695);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, chapter, Latitude, Longitude)
VALUES('yes','Cueva de Piedra Blanca', '/english/hn/caves/PiedraBlanca.html', 'PiedraBlanca', 'MiddleAmerica', 'hn', 'Honduras', 'caves', 'hn', 'other', 15.772734, -85.678295);
UPDATE sights SET chapter=NULL,region=NULL,continent='MiddleAmerica' WHERE countrycode = 'hn';
UPDATE sights SET filename = REPLACE(filename, '/other/', '/hn/') WHERE countrycode = 'hn';
