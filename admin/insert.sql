INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Ulmener Maar-Stollen', '/english/de/subterranea/UlmenerMaar.html', 'UlmenerMaar', 'Europe', 'de', 'Germany', 'subterranea', 'Eifel', 50.2132699, 6.9802944);
INSERT INTO static (path)
VALUES ('/german/de/geoparks/Vulkaneifel.html');
INSERT INTO static (path)
VALUES ('/english/de/geoparks/Vulkaneifel.html');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Three Sisters Springs', '/english/usa/springs/ThreeSisters.html', 'ThreeSisters', 'NorthAmerica', 'usa', 'United States of America', 'springs', 'fl', 28.888589, -82.589266);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Great Chamber', '/english/usa/caves/GreatChamber.html', 'GreatChamber', 'NorthAmerica', 'usa', 'United States of America', 'caves', 'ut',);
UPDATE `sights`
SET `Latitude`='28.7564458',
    `Longitude`='-81.5017342'
WHERE `filename` = '/english/usa/springs/Rock.html';
UPDATE `sights`
SET `Latitude`='28.2931977',
    `Longitude`='-82.7178949'
WHERE `filename` = '/english/usa/springs/WernerBoyce.html';
UPDATE `sights`
SET `Latitude`='29.8738124',
    `Longitude`='-82.5915348'
WHERE `filename` = '/english/usa/springs/RiverRise.html';
UPDATE `sights`
SET `Latitude`='28.517396',
    `Longitude`='-82.573359'
WHERE `filename` = '/english/usa/springs/WeekiWachee.html';
UPDATE `sights`
SET `Latitude`='29.1024756',
    `Longitude`='-82.4374660'
WHERE `filename` = '/english/usa/springs/Rainbow.html';
