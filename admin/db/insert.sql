INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Grottino del Campidoglio', '/english/it/subterranea/Campidoglio.html', 'Campidoglio', 'Europe', 'it', 'Italy', 'subterranea', 'Roma',);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Apostle Islands Sea Caves', '/english/usa/caves/ApostleIslands.html', 'ApostleIslands', 'NorthAmerica', 'usa', 'United States of America', 'caves', 'wi',);
UPDATE `sights`
SET `Latitude`='47.3257064',
    `Longitude`='15.3794560'
WHERE `filename` = '/english/at/caves/Drachen.html';
