UPDATE sights SET filename = REPLACE(filename, '/caves/', '/karst/'), category='karst' WHERE countrycode = 'fr' and sortby='PontDArc';
UPDATE sights SET filename = REPLACE(filename, '/caves/', '/karst/'), category='karst' WHERE countrycode = 'it' and sortby='ArcoNatura';
UPDATE sights SET filename = REPLACE(filename, '/caves/', '/karst/'), category='karst' WHERE countrycode = 'it' and sortby='Faraglioni';
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Vari Cave', '/english/gr/caves/Vari.html', 'Vari', 'Europe', 'gr', 'Greece', 'caves', 'Attica', 37.858146558158346, 23.80184857762393);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Cave Of The Dragon Kastoria', '/english/gr/showcaves/DragonKastoria.html', 'DragonKastoria', 'Europe', 'gr', 'Greece', 'showcaves', 'WesternMacedonia', 40.505614,  21.284696);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Nacimiento del Rio Ebro', '/english/es/springs/Fontibre.html', 'Fontibre', 'Europe', 'es', 'Spain', 'springs', 'Cantabria', 43.016917964121326, -4.190839385801606);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Cueva del Agua in Orbaneja del Castillo', '/english/es/showcaves/AguaOrbaneja.html', 'AguaOrbaneja', 'Europe', 'es', 'Spain', 'showcaves', 'Leon', 42.83393136135049, -3.7943697484255967);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Cascada de Orbaneja del Castillo', '/english/es/karst/OrbanejaDelCastillo.html', 'OrbanejaDelCastillo', 'Europe', 'es', 'Spain', 'karst', 'Leon', 42.8345230522435, -3.7925753844575003);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Desfiladero de la Yecla', '/english/es/gorges/Yecla.html', 'Yecla', 'Europe', 'es', 'Spain', 'gorges', 'Leon', 41.94964144182949, -3.4425464384721147);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Grotte de Lastournelle', '/english/fr/showcaves/Lastournelle.html', 'Lastournelle', 'Europe', 'fr', 'France', 'showcaves', 'Aquitaine', 44.3416, 0.6574);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Phosphatières du Cloup d\'Aural', '/english/fr/mines/CloupDAural.html', 'CloupDAural', 'Europe', 'fr', 'France', 'mines', 'Aquitaine', 44.35215243943495, 1.690909352478695);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, chapter, Latitude, Longitude)
VALUES('yes','Devil\'s Bridge', '/english/car/karst/DevilsBridge.html', 'DevilsBridge', 'Caribbean Islands', 'car', 'Antigua & Barbuda', 'karst', 'car', 'car', 17.100501, -61.678347);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, chapter, Latitude, Longitude)
VALUES('yes','Two Foot Bay Cave', '/english/car/caves/TwoFootBay.html', 'TwoFootBay', 'Caribbean Islands', 'car', 'Antigua & Barbuda', 'caves', 'car', 'car', 17.669066232058363, -61.768800935823805);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, chapter, Latitude, Longitude)
VALUES('yes','Hell\'s Gate', '/english/car/karst/HellsGate.html', 'HellsGate', 'Caribbean Islands', 'car', 'Antigua & Barbuda', 'karst', 'car', 'car', 17.140767, -61.721750);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Cuevas de Ortigosa', '/english/es/showcaves/Ortigosa.html', 'Ortigosa', 'Europe', 'es', 'Spain', 'showcaves', 'LaRioja', 42.1792926, -2.7010182);
