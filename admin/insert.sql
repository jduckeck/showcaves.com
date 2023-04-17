INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Kryvyi Rih Mine', '/english/ua/mines/KryvyiRih.html', 'Rodina', 'Europe', 'ua', 'Ukraine', 'mines', 'Dnipropetrovsk', 47.961839, 33.411051);
UPDATE sights
SET chapter=NULL,
    region=NULL,
    continent='Europe'
WHERE countrycode = 'dk';
UPDATE sights
SET filename = REPLACE(filename, '/other/', '/dk/')
WHERE countrycode = 'dk';
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Christiansborg Slot', '/english/dk/subterranea/Christiansborg.html', 'Christiansborg', 'Europe', 'dk', 'Denmark', 'subterranea', 'dk', 55.676322, 12.580327);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Koldkrigsmuseet REGAN Vest', '/english/dk/subterranea/REGANVest.html', 'REGANVest', 'Europe', 'dk', 'Denmark', 'subterranea', 'dk', 56.823712, 9.801189);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Koldkrigsmuseum Stevnsfort', '/english/dk/subterranea/Stevnsfort.html', 'Stevnsfort', 'Europe', 'dk', 'Denmark', 'subterranea', 'dk', 55.264586, 12.409783);
