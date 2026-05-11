INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Catacomba di Monte Stallone', '/english/it/subterranea/MonteStallone.html', 'MonteStallone', 'Europe', 'it', 'Italy', 'subterranea', 'Roma', 42.071612, 12.406569);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Catacomba Ad Decimum', '/english/it/subterranea/AdDecimum.html', 'AdDecimum', 'Europe', 'it', 'Italy', 'subterranea', 'Roma', 41.8029531, 12.6388251);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Catacomba dell’Isola di Pianosa', '/english/it/subterranea/IsolaDiPianosa.html', 'Toscana', 'Europe', 'it', 'Italy', 'subterranea', 'IsolaDiPianosa', 42.5877050, 10.1000720);
INSERT INTO static (path)
VALUES ('/english/no/topics/index.html');
INSERT INTO static (path)
VALUES ('/english/no/geoparks/index.html');
INSERT INTO static (path)
VALUES ('/english/no/geoparks/GeaNorvegica.html');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Pokljuška Soteska', '/english/si/gorges/Pokljuska.html', 'Pokljuska', 'Europe', 'si', 'Slovenia', 'gorges', 'Gorenjska', 46.3790354, 14.0416746);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Glasergruva', '/english/no/mines/Glaser.html', 'Glaser', 'Europe', 'no', 'Norway', 'mines', 'Telemark', 59.2525560, 9.5319450);
UPDATE `sights`
SET `Latitude`='50.1052728',
    `Longitude`='8.2216935'
WHERE `filename` = '/english/de/showcaves/Leichtweis.html';
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Dybedalsgruva', '/english/no/mines/Dybedals.html', 'Dybedals', 'Europe', 'no', 'Norway', 'mines', 'Telemark', 58.8693721, 9.4093401);
