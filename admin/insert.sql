UPDATE sights
SET chapter=NULL,
    region=NULL
WHERE countrycode = 'bm';
UPDATE sights
SET chapter=NULL,
    region=NULL
WHERE countrycode = 'jm';
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES ('yes', 'Rock Spring Cave', '/english/jm/showcaves/RockSpring.html', 'RockSpring', 'MiddleAmerica', 'jm', 'Jamaica', 'showcaves', 'Trelawny');
UPDATE sights
SET chapter=NULL,
    region=NULL
WHERE countrycode = 'id';
UPDATE sights
SET chapter=NULL,
    region=NULL
WHERE countrycode = 'is';
