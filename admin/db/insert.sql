INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'The Rockhouse Retreat', '/english/gb/subterranea/RockhouseRetreat.html', 'RockhouseRetreat', 'Europe', 'gb', 'Great Britain', 'subterranea', 'Worcestershire', 52.4066493753216, -2.2902601787313577);
UPDATE `sights`
SET `Latitude`='52.427065',
    `Longitude`='-2.265344'
WHERE `filename` = '/english/gb/subterranea/Drakelow.html';
