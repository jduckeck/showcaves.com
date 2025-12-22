INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Naida Caves', '/english/in/subterranea/Naida.html', 'Naida', 'Asia', 'in', 'India', 'subterranea', 'Dadra', 20.7109607, 70.9807830);
UPDATE `sights`
SET `Latitude`='46.977804',
    `Longitude`='12.641565'
WHERE `filename` = '/german/at/mines/Fallwindes.html';
