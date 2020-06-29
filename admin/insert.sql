UPDATE sights
SET chapter=NULL,
    region=NULL,
    continent='NorthAmerica'
WHERE countrycode = 'bs';
UPDATE sights
SET chapter=NULL,
    region=NULL,
    continent='Europe'
WHERE countrycode = 'ee';

INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Vortex Spring', '/english/usa/springs/Vortex.html', 'Vortex', 'NorthAmerica', 'usa', 'United States of America', 'springs', 'fl');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Punker Baar', '/english/other/subterranea/PunkerBaar.html', 'PunkerBaar', 'Europe', 'ee', 'Estonia', 'subterranea', 'Harju');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Mermaid’s Lair Cave', '/english/bs/caves/MermaidsLair.html', 'MermaidsLair', 'NorthAmerica', 'bs', 'Bahamas', 'caves', 'GrandBahamas');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','The Caves', '/english/bs/caves/TheCaves.html', 'TheCaves', 'NorthAmerica', 'bs', 'Bahamas', 'caves', 'NewProvidence');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Henry Morgan\'s Cave', '/english/bs/caves/HenryMorgan.html', 'HenryMorgan', 'NorthAmerica', 'bs', 'Bahamas', 'caves', 'Andros');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Ben\'s Cave', '/english/bs/caves/Ben.html', 'Ben', 'NorthAmerica', 'bs', 'Bahamas', 'caves', 'GrandBahamas');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Preacher\'s Cave', '/english/bs/caves/Preacher.html', 'Preacher', 'NorthAmerica', 'bs', 'Bahamas', 'caves', 'Eleuthera');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Shrimp Hole', '/english/bs/karst/Shrimp.html', 'Shrimp', 'NorthAmerica', 'bs', 'Bahamas', 'karst', 'Long');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Hatchet Bay Cave', '/english/bs/caves/HatchetBay.html', 'HatchetBay', 'NorthAmerica', 'bs', 'Bahamas', 'caves', 'Eleuthera');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Ten Bay Cave', '/english/bs/caves/TenBay.html', 'TenBay', 'NorthAmerica', 'bs', 'Bahamas', 'caves', 'Eleuthera');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Kaunos Kral Mezarları', '/english/tr/subterranea/Kaunos.html', 'Kaunos', 'Europe', 'tr', 'Turkey', 'subterranea', 'Lycia');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Rock-cut Tombs in Myra', '/english/tr/subterranea/Myra.html', 'Myra', 'Europe', 'tr', 'Turkey', 'subterranea', 'Lycia');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Oneota Gorge', '/english/usa/gorges/Oneonta.html', 'Oneota', 'NorthAmerica', 'usa', 'United States of America', 'gorges', 'or');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Madonna della Corona', '/english/it/subterranea/MadonnaDellaCorona.html', 'MadonnaDellaCorona', 'Europe', 'it', 'Italy', 'subterranea', 'Veneto');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Fukiya Copper Mine', '/english/jp/mines/Fukiya.html', 'Fukiya', 'Asia', 'jp', 'Japan', 'mines', 'Okayama');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Witches Gulch', '/english/usa/gorges/Witches.html', 'Witches', 'NorthAmerica', 'usa', 'United States of America', 'gorges', 'wi');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Black Hole', '/english/bs/karst/BlackHole.html', 'BlackHole', 'NorthAmerica', 'bs', 'Bahamas', 'karst', 'Andros');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','The Cathedral', '/english/bs/caves/Cathedral.html', 'Cathedral', 'NorthAmerica', 'bs', 'Bahamas', 'caves', 'Eleuthera');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Smuggler\'s Cave', '/english/bs/caves/Smuggler.html', 'Smuggler', 'NorthAmerica', 'bs', 'Bahamas', 'caves', 'Eleuthera');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Narva Victoria Bastioni kasematid', '/english/ee/subterranea/Narva.html', 'Narva', 'Europe', 'ee', 'Estonia', 'subterranea', 'IdaViru');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Muuseum Kiek in de Kök', '/english/ee/subterranea/KiekKok.html', 'KiekKok', 'Europe', 'ee', 'Estonia', 'subterranea', 'Harju');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Eesti Kaevandusmuusem', '/english/ee/mines/Kaevandus.html', 'Kaevandus', 'Europe', 'ee', 'Estonia', 'mines', 'IdaViru');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Kohtla-Järve Põlevkivimuuseum', '/english/ee/mines/Kohtla.html', 'Kohtla', 'Europe', 'ee', 'Estonia', 'mines', 'IdaViru');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Syanovskie Quarry', '/english/ru/subterranea/Syanovskie.html', 'Syanovskie', 'Asia', 'ru', 'Russia', 'subterranea', 'Moscow');
