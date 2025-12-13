INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Grottino del Campidoglio', '/english/it/subterranea/Campidoglio.html', 'Campidoglio', 'Europe', 'it', 'Italy', 'subterranea', 'Roma', 41.893359, 12.482802);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Apostle Islands Sea Caves', '/english/usa/caves/ApostleIslands.html', 'ApostleIslands', 'NorthAmerica', 'usa', 'United States of America', 'caves', 'wi', 46.965278, -90.664167);
UPDATE `sights`
SET `Latitude`='47.4305617',
    `Longitude`='11.9723899'
WHERE `filename` = '/english/at/mines/Wildschoenau.html';
