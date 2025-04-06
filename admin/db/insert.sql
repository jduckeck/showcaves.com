INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Gruta India', '/english/ar/caves/India.html', 'India', 'SouthAmerica', 'ar', 'Argentina', 'caves', 'Misiones',  -26.7586574, -54.9234052);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Chapel of Our Lady of the Crag', '/english/gb/subterranea/Crag.html', 'Crag', 'Europe', 'gb', 'Great Britain', 'subterranea', 'NorthYorkshire', 54.0030157, -1.4655233);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Sumidouro da Ribeira dos Amiais', '/english/pt/karst/Amiais.html', 'Amiais', 'Europe', 'pt', 'Portugal', 'karst', 'Santarem', 39.4461104, -8.7154277);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Gorges du Verdon', '/english/fr/gorges/Verdon.html', 'Verdon', 'Europe', 'fr', 'France', 'gorges', 'PACA', 43.8016706, 6.2494422);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, chapter, Latitude, Longitude)
VALUES ('yes', 'Huella de Santo Tomás', '/english/other/caves/SantoTomas.html', 'SantoTomas', 'SouthAmerica', 'py', 'Paraguay', 'caves', 'py', 'other', -25.5680629, -57.2934703);
INSERT INTO static (path)
VALUES ('/english/usa/topics/NumberOfCaves.html');
INSERT INTO static (path)
VALUES ('/english/usa/topics/closed.html');
INSERT INTO static (path)
VALUES ('/english/si/topics/closed.html');
INSERT INTO static (path)
VALUES ('/english/at/topics/closed.html');
INSERT INTO static (path)
VALUES ('/english/cn/topics/Top10.html');
UPDATE `sights`
SET `Latitude`='48,5894646',
    `Longitude`='10,0613369'
WHERE `filename` = '/german/de/karst/Hungerbrunnen.html';
UPDATE `sights`
SET `Latitude`='-35.071801',
    `Longitude`='148.660602'
WHERE `filename` = '/english/au/showcaves/Carey.html';
UPDATE `sights`
SET `Latitude`='-19,1434427',
    `Longitude`='44,8126353'
WHERE `filename` = '/english/other/karst/Bemaraha.html';
