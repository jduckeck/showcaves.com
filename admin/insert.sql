UPDATE sights
SET chapter=NULL,
    region=NULL,
    continent='MiddleAmerica'
WHERE countrycode = 'pr';
UPDATE sights
SET filename = REPLACE(filename, '/car/', '/pr/')
WHERE countrycode = 'pr';
