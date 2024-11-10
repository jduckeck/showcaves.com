INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Natural Bridge of Arkansas', '/english/usa/karst/NaturalBridgeAR.html', 'NaturalBridgeAR', 'NorthAmerica', 'usa', 'United States of America', 'karst', 'ar', 35.6563300, -92.4490580);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Pivot Rock Park', '/english/usa/karst/Pivot.html', 'Pivot', 'NorthAmerica', 'usa', 'United States of America', 'karst', 'ar', 36.431792, -93.748661);
UPDATE `sights`
SET `Latitude`='36.402059',
    `Longitude`='-93.737559'
WHERE `filename` = '/english/usa/subterranea/EurekaSprings.html';
UPDATE `sights`
SET `Latitude`='64.13210036498107',
    `Longitude`='-16.22148004885958'
WHERE `filename` = '/english/is/caves/Vatnajokull.html';
UPDATE `sights`
SET `Latitude`='36.462067',
    `Longitude`='25.385451'
WHERE `filename` = '/english/gr/subterranea/Alexander.html';
