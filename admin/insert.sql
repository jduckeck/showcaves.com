INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Golub Špilja', '/english/hr/caves/Golub.html', 'Golub', 'Europe', 'hr', 'Croatia', 'caves', 'DubrovnikNeretva', 42.622190, 18.125310);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Izvor rijeke Bijele', '/english/hr/springs/Bijela.html', 'Bijela', 'Europe', 'hr', 'Croatia', 'springs', 'Zadar', 44.1348984, 15.6561984);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Podzemni grad Paklenice', '/english/hr/subterranea/Paklenica.html', 'Paklenica', 'Europe', 'hr', 'Croatia', 'subterranea', 'Zadar', 44.3056353, 15.4725513);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Dva Oka', '/english/hr/springs/DvaOka.html', 'DvaOka', 'Europe', 'hr', 'Croatia', 'springs', 'Split', 43.456720, 17.174996);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Rattlesnake Canyon', '/english/usa/gorges/RattlesnakeCanyon.html', 'RattlesnakeCanyon', 'NorthAmerica', 'usa', 'United States of America', 'gorges', 'co', 39.137128, -108.833471);
UPDATE `sights`
SET `Latitude`='46.1654269',
    `Longitude`='15.8632177'
WHERE `filename` = '/english/hr/showcaves/Krapina.html';
UPDATE `sights`
SET `Latitude`='46.3017576',
    `Longitude`='16.0798704'
WHERE `filename` = '/english/hr/caves/Vindija.html';
