UPDATE sights
SET chapter=NULL,
    region=NULL,
    continent='MiddleEast'
WHERE countrycode = 'lb';
UPDATE sights
SET filename = REPLACE(filename, '/other/', '/lb/')
WHERE countrycode = 'lb';
UPDATE sights SET region='MountLebanon' WHERE  countrycode = 'lb' AND sortby='Afqua';
UPDATE sights SET region='MountLebanon' WHERE  countrycode = 'lb' AND sortby='Jeita';
UPDATE sights SET region='North' WHERE  countrycode = 'lb' AND sortby='Kadisha';
UPDATE sights SET region='MountLebanon' WHERE  countrycode = 'lb' AND sortby='KfarHim';
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, chapter)
VALUES('yes','Cueva Ventana', '/english/car/showcaves/Ventana.html', 'Ventana', 'Caribbean Islands', 'pr', 'Puerto Rico', 'showcaves', 'pr', 'car');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Ain Wazein Cave', '/english/lb/showcaves/AinWazein.html', 'AinWazein', 'MiddleEast', 'lb', 'Lebanon', 'showcaves', 'MountLebanon');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Mabaj Cave', '/english/lb/showcaves/Mabaj.html', 'Mabaj', 'MiddleEast', 'lb', 'Lebanon', 'showcaves', 'MountLebanon');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Zahlan Cave', '/english/lb/showcaves/Zahlan.html', 'Zahlan', 'MiddleEast', 'lb', 'Lebanon', 'showcaves', 'North');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Baatara Cave', '/english/lb/caves/Baatara.html', 'Baatara', 'MiddleEast', 'lb', 'Lebanon', 'caves', 'North');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Rouiess Cave', '/english/lb/caves/Rouiess.html', 'Rouiess', 'MiddleEast', 'lb', 'Lebanon', 'caves', 'MountLebanon');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Faqra Natural Bridge', '/english/lb/karst/Faqra.html', 'Faqra', 'MiddleEast', 'lb', 'Lebanon', 'karst', 'MountLebanon');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Mar Antonios Kozhaya', '/english/lb/subterranea/MarAntoniosKozhaya.html', 'MarAntoniosKozhaya', 'MiddleEast', 'lb', 'Lebanon', 'subterranea', 'North');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Fortress of Niha', '/english/lb/subterranea/Niha.html', 'Niha', 'MiddleEast', 'lb', 'Lebanon', 'subterranea', 'MountLebanon');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Habis Caves', '/english/lb/subterranea/Habis.html', 'Habis', 'MiddleEast', 'lb', 'Lebanon', 'subterranea', 'MountLebanon');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Our Lady Of Quannoubine Monastry', '/english/lb/subterranea/Quannoubine.html', 'Quannoubine', 'MiddleEast', 'lb', 'Lebanon', 'subterranea', 'North');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Monastery of Our Lady of Hawqa', '/english/lb/subterranea/Hawqa.html', 'Hawqa', 'MiddleEast', 'lb', 'Lebanon', 'subterranea', 'North');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Hamatoura Monastery', '/english/lb/subterranea/Hamatoura.html', 'Hamatoura', 'MiddleEast', 'lb', 'Lebanon', 'subterranea', 'North');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Monastery of Mar Lishaa', '/english/lb/subterranea/MarLishaa.html', 'MarLishaa', 'MiddleEast', 'lb', 'Lebanon', 'subterranea', 'North');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Sötétkapu', '/english/hu/subterranea/Sotetkapu.html', 'Sotetkapu', 'Europe', 'hu', 'Hungary', 'subterranea', 'Komarom');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Szelim-barlang', '/english/hu/caves/Szelim.html', 'Szelim', 'Europe', 'hu', 'Hungary', 'caves', 'Komarom');
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
