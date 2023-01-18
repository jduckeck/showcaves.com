UPDATE sights
SET chapter=NULL,
    region=NULL,
    continent='Europe'
WHERE countrycode = 'me';
UPDATE sights
SET filename = REPLACE(filename, '/other/', '/me/')
WHERE countrycode = 'me';
INSERT INTO static (path)
VALUES ('/english/me/topics/Deep.html');
INSERT INTO static (path)
VALUES ('/english/me/topics/Long.html');
