INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Queensway Mersey Tunnel', '/english/gb/subterranea/Queensway.html', 'Queensway', 'Europe', 'gb', 'Great Britain', 'subterranea', 'Merseyside', 53.404486, -2.994064);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Dumdalen Grotter', '/english/no/caves/Dumdalen.html', 'Dumdalen', 'Europe', 'no', 'Norway', 'caves', 'Innlandet', 61.629974, 8.048961);
INSERT INTO sights (visible, closed, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 1, 'Floyd Collins’ Crystal Cave', '/english/usa/showcaves/FloydCollinsCrystal.html', 'FloydCollinsCrystal', 'NorthAmerica', 'usa', 'United States of America', 'showcaves', 'ky', 37.2117827, -86.0549720);
UPDATE `sights`
SET `Latitude`='37.2190432',
    `Longitude`='-86.0781341'
WHERE `filename` = '/english/usa/showcaves/GreatOnyx.html';
