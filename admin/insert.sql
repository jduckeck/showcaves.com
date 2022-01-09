INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Grottes de Cravanche', '/english/fr/caves/Cravanche.html', 'Cravanche', 'Europe', 'fr', 'France', 'caves', 'FrancheComte', 47.650000,  6.825278);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Serapeum of Saqqara', '/english/eg/subterranea/Saqqara.html', 'Saqqara', 'Africa', 'eg', 'Egypt', 'subterranea', 'Giza', 29.876059, 31.210234);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Lago di Andalo', '/english/it/karst/Andalo.html', 'Andalo', 'Europe', 'it', 'Italy', 'karst', 'Trentino', 46.175279, 11.006403);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Jezuïetenberg', '/english/nl/subterranea/Jezuietenberg.html', 'Jezuietenberg', 'Europe', 'nl', 'Netherlands', 'subterranea', 'Limburg', 50.822835, 5.664715);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Nilometer', '/english/eg/subterranea/NilometerRhoda.html', 'Nilometer', 'Africa', 'eg', 'Egypt', 'subterranea', 'Cairo', 30.006916, 31.225007);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Cave of Nicanor', '/english/il/subterranea/Nicanor.html', 'Nicanor', 'MiddleEast', 'il', 'Israel', 'subterranea', 'Jerusalem', 31.79325021930714, 35.244913458259774);
UPDATE sights SET chapter=NULL,region=NULL,continent='Asia' WHERE countrycode = 'am';
UPDATE sights SET filename = REPLACE(filename, '/other/', '/am/') WHERE countrycode = 'am';
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Areni Cave', '/english/am/caves/Areni.html', 'Areni', 'Asia', 'am', 'Armenia', 'caves', 'VayotsDzor', 39.731570, 45.202740);
UPDATE sights SET region='VayotsDzor',Latitude=39.709590,Longitude=45.262486 WHERE sortBy = 'Arjeri' AND countrycode = 'am';
UPDATE sights SET region='VayotsDzor',Latitude=39.719913,Longitude=45.204695 WHERE sortBy = 'Magili' AND countrycode = 'am';
UPDATE sights SET region='VayotsDzor',Latitude=39.709209,Longitude=45.275119 WHERE sortBy = 'Mozrovi' AND countrycode = 'am';
UPDATE sights SET region='VayotsDzor',Latitude=39.684301,Longitude=45.232975 WHERE sortBy = 'Noravank' AND countrycode = 'am';
UPDATE sights SET region='Yerevan',Latitude=40.216719,Longitude=44.567015 WHERE sortBy = 'Avan' AND countrycode = 'am';
UPDATE sights SET region='Yerevan',Latitude=40.230358,Longitude=44.570460 WHERE sortBy = 'Levon' AND countrycode = 'am';
UPDATE sights SET region='Ararat',Latitude=40.139935,Longitude=44.818476 WHERE sortBy = 'Geghard' AND countrycode = 'am';
UPDATE sights SET region='Syunik',Latitude=39.500457,Longitude=46.433253 WHERE sortBy = 'Khndzoresk' AND countrycode = 'am';
