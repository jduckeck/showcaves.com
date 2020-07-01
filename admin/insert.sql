UPDATE sights
SET chapter=NULL,
    region=NULL,
    continent='NorthAmerica'
WHERE countrycode = 'bs';
UPDATE sights
SET filename = REPLACE(filename, '/car/', '/bs/')
WHERE countrycode = 'bs';

UPDATE sights
SET chapter=NULL,
    region=NULL,
    continent='Europe'
WHERE countrycode = 'ee';
UPDATE sights
SET filename = REPLACE(filename, '/other/', '/ee/')
WHERE countrycode = 'ee';

UPDATE sights
SET chapter=NULL,
    region=NULL,
    continent='Europe'
WHERE countrycode = 'cy';
UPDATE sights
SET filename = REPLACE(filename, '/other/', '/cy/')
WHERE countrycode = 'cy';


INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Temppeliaukion kirkko', '/english/fi/subterranea/Temppeliaukio.html', 'Temppeliaukio', 'Europe', 'fi', 'Finland', 'subterranea', 'Helsinki');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Panagia Chrysopiliotissa Church', '/english/other/subterranea/PanagiaChrysopiliotissa.html', 'PanagiaChrysopiliotissa', 'Europe', 'cy', 'Cyprus', 'subterranea', 'Nicosia');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Ayioi Saranta Cave Church', '/english/cy/subterranea/AyioiSaranta.html', 'AyioiSaranta', 'Europe', 'cy', 'Cyprus', 'subterranea', 'Famagusta');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Cave Church Kadjenica', '/english/rs/subterranea/Kadjenica.html', 'Kadjenica', 'Europe', 'rs', 'Serbia', 'subterranea', 'Serbia');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Panagia Vounarkotissa', '/english/cy/subterranea/PanagiaVounarkotissa.html', 'PanagiaVounarkotissa', 'Europe', 'cy', 'Cyprus', 'subterranea', 'Limassol');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Kamara tou Koraka Natural Bridge', '/english/cy/karst/Koraka.html', 'Koraka', 'Europe', 'cy', 'Cyprus', 'karst', 'Famagusta');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Church of Panagia Evangelistria', '/english/cy/subterranea/PanagiaEvangelistria.html', 'PanagiaEvangelistria', 'Europe', 'cy', 'Cyprus', 'subterranea', 'Larnaca');
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
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Muzey Drevnego Cheloveka', '/english/ru/subterranea/DrevnegoCheloveka.html', 'DrevnegoCheloveka', 'Asia', 'ru', 'Russia', 'subterranea', 'Adygea');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Peshchery Past\' Drakona', '/english/ru/caves/PastDrakona.html', 'PastDrakona', 'Asia', 'ru', 'Russia', 'caves', 'Krasnodar');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Dakhovskaya Cave', '/english/ru/caves/Dakhovskaya.html', 'Dakhovskaya', 'Asia', 'ru', 'Russia', 'caves', 'Adygea');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Khadzhokhskaya tesnina', '/english/ru/gorges/Khadzhokhskaya.html', 'Khadzhokhskaya', 'Asia', 'ru', 'Russia', 'gorges', 'Adygea');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Bandelier', '/english/usa/subterranea/Bandelier.html', 'Bandelier', 'NorthAmerica', 'usa', 'United States of America', 'subterranea', 'nm');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, chapter)
VALUES('yes','Pailon del Diablo', '/english/other/gorges/PailonDelDiablo.html', 'PailonDelDiablo', 'SouthAmerica', 'ec', 'Ecuador', 'gorges', 'ec', 'other');
