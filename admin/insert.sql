INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, chapter, Latitude, Longitude)
VALUES('yes','Fikirini Three Sister Caves', '/english/other/showcaves/Fikirini.html', 'Fikirini', 'Africa', 'ke', 'Kenya', 'showcaves', 'ke', 'other', -4.614126, 39.354253);
UPDATE sights SET filename = REPLACE(filename, '/caves/', '/showcaves/'), category='showcaves' WHERE countrycode = 'ke' and sortby='Shimoni';
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, chapter, Latitude, Longitude)
VALUES('yes','Shetani Caves', '/english/other/caves/Shetani.html', 'Shetani', 'Africa', 'ke', 'Kenya', 'caves', 'ke', 'other', -2.603120, 37.881290);
