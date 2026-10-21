INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Fyllingsdalstunnelen', '/english/no/subterranea/Fyllingsdalstunnelen.html', 'Fyllingsdalstunnelen', 'Europe', 'no', 'Norway', 'subterranea', 'Hordaland', 60.3475511, 5.2935983);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Raschpëtzer', '/english/lu/subterranea/Raschpetzer.html', 'Raschpetzer', 'Europe', 'lu', 'Luxembourg', 'subterranea', 'Luxembourg', 49.6662513, 6.1480079);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Yeni Dünya Mağarası', '/english/tr/caves/YeniDunya.html', 'YeniDunya', 'Europe', 'tr', 'Turkey', 'caves', 'CentralAnatolia', 36.902758, 33.091362);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Deliktaş Mağarası', '/english/tr/caves/Deliktas.html', 'Deliktas', 'Europe', 'tr', 'Turkey', 'caves', 'Marmara', 40.105535, 28.862127);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'İncesu Mağarası', '/english/tr/showcaves/Incesu.html', 'Incesu', 'Europe', 'tr', 'Turkey', 'showcaves', 'CentralAnatolia', 37.0872031, 33.6633834);
INSERT INTO static (path)
VALUES ('/english/tr/topics/Hallucinations.html');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Maraspoli Mağarası', '/english/tr/showcaves/Maraspoli.html', 'Maraspoli', 'Europe', 'tr', 'Turkey', 'showcaves', 'CentralAnatolia', 36.641656, 32.892056);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Kayaönü Mağarası', '/english/tr/caves/Kayaonu.html', 'Kayaonu', 'Europe', 'tr', 'Turkey', 'caves', 'CentralAnatolia', 36.6269306, 32.9835052);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Kırıkkale Keskin Sulu Mağara', '/english/tr/showcaves/SuluKeskin.html', 'SuluKeskin', 'Europe', 'tr', 'Turkey', 'showcaves', 'CentralAnatolia', 39.677102, 33.604905);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Gaziantep Sulu Mağara', '/english/tr/subterranea/SuluGaziantep.html', 'SuluGaziantep', 'Europe', 'tr', 'Turkey', 'subterranea', 'SoutheastAnatolia', 37.0552606, 37.3934832);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Kaleoğlu Mağarası', '/english/tr/subterranea/Kaleoglu.html', 'Kaleoglu', 'Europe', 'tr', 'Turkey', 'subterranea', 'SoutheastAnatolia', 37.064032, 37.385120);
INSERT INTO static (path)
VALUES ('/english/explain/Humor/Esoteric.html');
INSERT INTO static (path)
VALUES ('/german/explain/Humor/Esoteric.html');
UPDATE `sights`
SET `Latitude`='39.9436265',
    `Longitude`='29.5905632'
WHERE `filename` = '/english/tr/showcaves/Oylat.html';
