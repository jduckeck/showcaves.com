INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Monastery Cave Hotel', '/english/tr/subterranea/MonasteryCaveHotel.html', 'MonasteryCaveHotel', 'Europe', 'tr', 'Turkey', 'subterranea', 'Cappadocia', 38.5825292, 34.8968632);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Boiling Hole', '/english/bz/springs/Boiling.html', 'Boiling', 'MiddleAmerica', 'bz', 'Belize', 'springs', 'Cayo', 17.1610815, -88.6770151);
UPDATE `sights`
SET `Latitude`='39.7997773',
    `Longitude`='-79.7116259'
WHERE `filename` = '/english/usa/showcaves/Laurel.html';
UPDATE `sights`
SET `Latitude`='16.168966',
    `Longitude`='-88.941995'
WHERE `filename` = '/english/bz/caves/Laguna.html';
UPDATE `sights`
SET `Latitude`='14.2997043',
    `Longitude`='98.9828067'
WHERE `filename` = '/english/th/showcaves/Lawa.html';
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Vevčanski Izvori', '/english/mk/springs/Vevcanski.html', 'Vevcanski', 'Europe', 'mk', 'North Macedonia', 'springs', 'WesternMacedonian', 41.2393271, 20.5851923);

