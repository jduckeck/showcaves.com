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
