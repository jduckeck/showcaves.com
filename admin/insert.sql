INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Cisterna de San Roque', '/english/es/subterranea/SanRoque.html', 'SanRoque', 'Europe', 'es', 'Spain', 'subterranea', 'Extremadura', 39.4723573, -6.3690184);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Traben-Trarbacher Unterwelt', '/english/de/subterranea/TrabenTrarbach.html', 'TrabenTrarbach', 'Europe', 'de', 'Germany', 'subterranea', 'Eifel', 49.9514039, 7.1187122);
UPDATE `sights`
SET `Latitude`='50.5863080',
    `Longitude`='6.6492221'
WHERE `filename` = '/english/de/mines/Guennersdorf.html';
INSERT INTO static (path)
VALUES ('/english/es/topics/ElCalerizo.html');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Cueva de El Conejar', '/english/es/caves/ElConejar.html', 'ElConejar', 'Europe', 'es', 'Spain', 'caves', 'Extremadura', 39.4551183, -6.3635404);
UPDATE `sights`
SET `Latitude`='42.3487609',
    `Longitude`='-3.5194599'
WHERE `filename` = '/english/es/showcaves/Atapuerca.html';
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Bodega El Fabulista', '/english/es/subterranea/ElFabulista.html', 'ElFabulista', 'Europe', 'es', 'Spain', 'subterranea', 'PaisVasco', 42.552794, -2.584554);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Sewanee Natural Bridge', '/english/usa/karst/Sewanee.html', 'Sewanee', 'NorthAmerica', 'usa', 'United States of America', 'karst', 'tn', 35.1536502, -85.9213951);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Twin Arches', '/english/usa/karst/Twin.html', 'Twin', 'NorthAmerica', 'usa', 'United States of America', 'karst', 'tn', 36.5417024, -84.7356659);
