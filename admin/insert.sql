INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Circ romà', '/english/es/subterranea/CircRoma.html', 'CircRoma', 'Europe', 'es', 'Spain', 'subterranea', 'Cataluna', 41.115822, 1.256902);
UPDATE sights
SET chapter=NULL,
    region=NULL,
    continent='Africa'
WHERE countrycode = 'tz';
UPDATE sights
SET filename = REPLACE(filename, '/other/', '/tz/')
WHERE countrycode = 'tz';
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Kuza Cave', '/english/tz/showcaves/Kuza.html', 'Kuza', 'Africa', 'tz', 'Tanzania', 'showcaves', 'Zanzibar', -6.303449, 39.533965);
