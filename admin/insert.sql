INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Kullaberg Grottor', '/english/se/caves/Kullaberg.html', 'Kullaberg', 'Europe', 'se', 'Sweden', 'caves', 'Skane', 56.2994936, 12.4514338);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Jons Kapel', '/english/dk/caves/JonsKapel.html', 'JonsKapel', 'Europe', 'dk', 'Denmark', 'caves', 'Hovedstaden', 55.2332685, 14.7206502);
UPDATE `sights`
SET `Latitude`='48.3792375',
    `Longitude`='9.7540170'
WHERE `filename` = '/english/de/showcaves/HohlerFels.html';
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Honzrather Keller', '/english/de/subterranea/Honzrather.html', 'Honzrather', 'Europe', 'de', 'Germany', 'subterranea', 'Saarland', 49.4295199, 6.7308146);
UPDATE `sights`
SET `Latitude`='-47.1552731',
    `Longitude`='-70.6559679'
WHERE `filename` = '/english/ar/showcaves/LasManos.html';
