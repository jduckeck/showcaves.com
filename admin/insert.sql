UPDATE sights
SET chapter=NULL,
    region=NULL,
    continent='Europe'
WHERE countrycode = 'me';
UPDATE sights
SET filename = REPLACE(filename, '/other/', '/me/')
WHERE countrycode = 'me';
