UPDATE sights
SET chapter=NULL,
    region=NULL,
    continent='MiddleAmerica'
WHERE countrycode = 'do';
UPDATE sights
SET filename = REPLACE(filename, '/car/', '/do/')
WHERE countrycode = 'do';
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','San Juan de la Peña', '/english/es/subterranea/SanJuanPena.html', 'SanJuanPena', 'Europe', 'es', 'Spain', 'subterranea', 'Aragon');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Ayios Sozomenos Cave Church', '/english/cy/subterranea/AyiosSozomenos.html', 'AyiosSozomenos', 'Europe', 'cy', 'Cyprus', 'subterranea', 'Nicosia');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Ayia Thekla Cave Church', '/english/cy/subterranea/AyiaThekla.html', 'AyiaThekla', 'Europe', 'cy', 'Cyprus', 'subterranea', 'Famagusta');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Ayias Solomonis Cave Church and Catacombs', '/english/cy/subterranea/AyiasSolomonis.html', 'AyiasSolomonis', 'Europe', 'cy', 'Cyprus', 'subterranea', 'Paphos');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Farkaskői Alkotótelep', '/english/hu/subterranea/Noszvaj.html', 'Noszvaj', 'Europe', 'hu', 'Hungary', 'subterranea', 'Lillafured');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Ayia Napa Sea Caves', '/english/cy/caves/AyiaNapa.html', 'AyiaNapa', 'Europe', 'cy', 'Cyprus', 'caves', 'Famagusta');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Playa Escondida', '/english/mx/karst/PlayaEscondida.html', 'PlayaEscondida', 'MiddleAmerica', 'mx', 'México', 'karst', 'Nayarit');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Love Bridge', '/english/cy/karst/LoveBridge.html', 'LoveBridge', 'Europe', 'cy', 'Cyprus', 'karst', 'Famagusta');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Hermitage of St. Cirijaka', '/english/hr/subterranea/StCirijaka.html', 'StCirijaka', 'Europe', 'hr', 'Croatia', 'subterranea', 'Dalmatia');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Hundraðmannahellir', '/english/is/caves/Hundradmannahellir.html', 'Hundradmannahellir', 'Europe', 'is', 'Iceland', 'caves', 'Vestmannaeyjar');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Páskahellir', '/english/is/caves/Paskahellir.html', 'Paskahellir', 'Europe', 'is', 'Iceland', 'caves', 'Vestmannaeyjar');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Gýgagjá', '/english/is/caves/Gygagja.html', 'Gygagja', 'Europe', 'is', 'Iceland', 'caves', 'Sudurland');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Hálsanefshellir Cave', '/english/is/caves/Halsanefshellir.html', 'Halsanefshellir', 'Europe', 'is', 'Iceland', 'caves', 'Sudurland');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Tintron Cave Tour', '/english/is/caves/Tintron.html', 'Tintron', 'Europe', 'is', 'Iceland', 'caves', 'Sudurland');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Litli Björn - Vörðuhellir', '/english/is/caves/LitliBjorn.html', 'LitliBjorn', 'Europe', 'is', 'Iceland', 'caves', 'Sudurland');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Sönghellir', '/english/is/caves/Songhellir.html', 'Songhellir', 'Europe', 'is', 'Iceland', 'caves', 'Vesturland');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','þakgilshellir', '/english/is/caves/Thakgilshellir.html', 'Thakgilshellir', 'Europe', 'is', 'Iceland', 'caves', 'Sudurland');
