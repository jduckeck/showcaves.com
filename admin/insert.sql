INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'La maison des Terrils', '/english/be/mines/Terrils.html', 'Terrils', 'Europe', 'be', 'Belgium', 'mines', 'Liege', 50.6287510, 5.5115341);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Taforalt', '/english/ma/caves/Taforalt.html', 'Taforalt', 'Africa', 'ma', 'Morocco', 'caves', 'Oriental', 34.8138284, -2.4037466);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Wat Tham Khao Kuha', '/english/th/caves/KhaoKuha.html', 'KhaoKuha', 'Asia', 'th', 'Thailand', 'caves', 'SuratThani', 9.1545867, 99.4707766);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Buca del Corno', '/english/it/showcaves/Corno.html', 'Corno', 'Europe', 'it', 'Italy', 'showcaves', 'Lombardia', 45.6943539, 9.8801034);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Çayır Mağarası', '/english/tr/caves/Cayir.html', 'Cayir', 'Europe', 'tr', 'Turkey', 'caves', 'BlackSea', 41.4518580, 31.9872469);
UPDATE `sights`
SET `Latitude`='50.8470547',
    `Longitude`='2.8917740'
WHERE `filename` = '/english/be/subterranea/KazemattenBrewery.html';
UPDATE `sights`
SET `Latitude`='50.8505012',
    `Longitude`='2.8911355'
WHERE `filename` = '/english/be/subterranea/KasemattenBrasserie.html';
UPDATE `sights`
SET `Latitude`='35.958201',
    `Longitude`='14.352117'
WHERE `filename` = '/english/mt/caves/Mellieha.html';
INSERT INTO static (path)
VALUES ('/english/tr/topics/Longest.html');
INSERT INTO static (path)
VALUES ('/english/tr/topics/Deepest.html');
UPDATE `sights`
SET `Latitude`='40.124157',
    `Longitude`='28.700994'
WHERE `filename` = '/english/tr/caves/Ayvaini.html';
