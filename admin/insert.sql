INSERT INTO `static` (`path`)
VALUES ('/german/explain/Misc/DestroyedCaves.html');
INSERT INTO `static` (`path`)
VALUES ('/english/explain/Misc/DestroyedCaves.html');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Přečerpávací vodní elektrárna Dlouhé Stráně', '/english/cz/subterranea/DlouheStrane.html', 'DlouheStrane', 'Europe', 'cz', 'Czech Republic', 'subterranea', 'Olomoucky', 50.0999844, 17.1160165);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Aufberger Loch', '/english/de/karst/AufbergerLoch.html', 'AufbergerLoch', 'Europe', 'de', 'Germany', 'karst', 'SchwaebischeAlb', 48.404179, 9.244968);
UPDATE `sights`
SET `Latitude`='44.6429890',
    `Longitude`='15.3559334'
WHERE `filename` = '/english/hr/showcaves/Samograd.html';
UPDATE `sights`
SET `Latitude`='42.5595015',
    `Longitude`='18.2640066'
WHERE `filename` = '/english/hr/showcaves/Djurovica.html';
UPDATE `sights`
SET `Latitude`='42.9802120',
    `Longitude`='16.0221078'
WHERE `filename` = '/english/hr/showcaves/Modra.html';
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Vela Špilja', '/english/hr/showcaves/Vela.html', 'Vela', 'Europe', 'hr', 'Croatia', 'showcaves', 'Split', 42.9697318, 16.7183568);
