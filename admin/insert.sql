UPDATE sights SET chapter=NULL,region=NULL,continent='SouthAmerica' WHERE countrycode = 'co';
UPDATE sights SET filename = REPLACE(filename, '/other/', '/co/') WHERE countrycode = 'co';
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Museo del Oro Bogotá', '/english/co/subterranea/OroBogota.html', 'OroBogota', 'SouthAmerica', 'co', 'Colombia', 'subterranea', 'Cundinamarca', 4.601739, -74.072013);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Los Tuneles', '/english/co/caves/Tuneles.html', 'Tuneles', 'SouthAmerica', 'co', 'Colombia', 'caves', 'Guaviare', 2.496572, -72.686329);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Cerro Azul', '/english/co/caves/CerroAzul.html', 'CerroAzul', 'SouthAmerica', 'co', 'Colombia', 'caves', 'Guaviare', 1.291716, -72.633748);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Nuevo Tolima', '/english/co/caves/NuevoTolima.html', 'NuevoTolima', 'SouthAmerica', 'co', 'Colombia', 'caves', 'Guaviare', 2.462356, -72.753196);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Puerta de Orion', '/english/co/karst/PuertaOrion.html', 'PuertaOrion', 'SouthAmerica', 'co', 'Colombia', 'karst', 'Guaviare', 2.5108354, -72.7073170);
