INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Grottes du Pic du Jer', '/english/fr/showcaves/Jer.html', 'Jer', 'Europe', 'fr', 'France', 'showcaves', 'MidiPyrenees', 43.080390, -0.032528);
UPDATE sights SET filename = REPLACE(filename, '/ch/', '/it/'), country='it', Latitude=45.934304, Longitude=9.025211 WHERE sortby = 'Orso';
