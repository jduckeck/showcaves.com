INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Technisches Museum Wien', '/english/at/mines/TechnischesMuseumWien.html', 'TechnischesMuseumWien', 'Europe', 'at', 'Austria', 'mines', 'Wien', 48.1904070, 16.3177667);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Bergbaumuseum Goberling', '/english/at/mines/Goberling.html', 'Goberling', 'Europe', 'at', 'Austria', 'mines', 'Burgenland', 47.361366, 16.284058);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Südfeldstollen Thomasroith', '/english/at/mines/Sudfeldstollen.html', 'Sudfeldstollen', 'Europe', 'at', 'Austria', 'mines', 'Ober', 48.077781, 13.618197);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Bergbaumuseum Knappenhaus Unterlaussa', '/english/at/mines/Unterlaussa.html', 'Unterlaussa', 'Europe', 'at', 'Austria', 'mines', 'Ober', 47.719424, 14.561007);
UPDATE `sights`
SET `Latitude`='47.080074',
    `Longitude`='13.097272'
WHERE `filename` = '/english/at/mines/Gastein.html';
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Montanmuseum Böckstein', '/english/at/mines/Bockstein.html', 'Bockstein', 'Europe', 'at', 'Austria', 'mines', 'Salzburg', 47.088026, 13.11398);
