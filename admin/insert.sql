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
INSERT INTO sights (visible, closed, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 1, 'Cave Bar More', '/english/hr/subterranea/More.html', 'More', 'Europe', 'hr', 'Croatia', 'subterranea', 'DubrovnikNeretva', 42.6567748, 18.0659281);
UPDATE `sights`
SET `Latitude`='43.8051495',
    `Longitude`='15.9639962'
WHERE `filename` = '/english/hr/karst/Krka.html';
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Vražji Prolaz', '/english/hr/gorges/VrazjiProlaz.html', 'VrazjiProlaz', 'Europe', 'hr', 'Croatia', 'gorges', 'GorskiKotar', 45.4257056, 14.8925037);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Maria im Stein', '/english/de/subterranea/MariaImStein.html', 'MariaImStein', 'Europe', 'de', 'Germany', 'subterranea', 'Oberschwaben', 47.8193365, 9.2240105);
UPDATE `sights`
SET `Latitude`='-33.2389218',
    `Longitude`='150.2253201'
WHERE `filename` = '/english/au/subterranea/Newnes.html';
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Helensburgh Glowworm Tunnel', '/english/au/subterranea/Helensburgh.html', 'Helensburgh', 'Australia', 'au', 'Australia', 'subterranea', 'nsw', -34.1796072, 150.9929895);
UPDATE `sights`
SET `Latitude`='-35.9342808',
    `Longitude`='174.3491243'
WHERE `filename` = '/english/nz/caves/Waipu.html';
