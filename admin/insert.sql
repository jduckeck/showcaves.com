INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Kullaberg Grottor', '/english/se/caves/Kullaberg.html', 'Kullaberg', 'Europe', 'se', 'Sweden', 'caves', 'Skane', 56.2994936, 12.4514338);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Jons Kapel', '/english/dk/caves/JonsKapel.html', 'JonsKapel', 'Europe', 'dk', 'Denmark', 'caves', 'Hovedstaden', 55.2332685, 14.7206502);
UPDATE `sights`
SET `Latitude`='48.3792375',
    `Longitude`='9.7540170'
WHERE `filename` = '/english/de/showcaves/HohlerFels.html';
