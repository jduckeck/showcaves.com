INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Grottes du Pic du Jer', '/english/fr/showcaves/Jer.html', 'Jer', 'Europe', 'fr', 'France', 'showcaves', 'MidiPyrenees', 43.080390, -0.032528);
UPDATE sights SET filename = REPLACE(filename, '/ch/', '/it/'), country='it', Latitude=45.934304, Longitude=9.025211 WHERE sortby = 'Orso';
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Příhrazské Skály', '/english/cz/gorges/PrihrazskeSkaly.html', 'PrihrazskeSkaly', 'Europe', 'cz', 'Czech Republic', 'gorges', 'Stredocesky', 50.522586, 15.060569);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Adršpašsko-teplické skály', '/english/cz/gorges/AdrspachTeplice.html', 'AdrspachTeplice', 'Europe', 'cz', 'Czech Republic', 'gorges', 'Kralovehradecky', 50.615173, 16.122832);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Broumovské stěny', '/english/cz/gorges/BroumovskeSteny.html', 'BroumovskeSteny', 'Europe', 'cz', 'Czech Republic', 'gorges', 'Kralovehradecky', 50.564791, 16.266911);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Skalní město Ostaš', '/english/cz/gorges/Ostas.html', 'Ostas', 'Europe', 'cz', 'Czech Republic', 'gorges', 'Kralovehradecky', 50.558262, 16.207577);
