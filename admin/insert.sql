INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Monastery Cave Hotel', '/english/tr/subterranea/MonasteryCaveHotel.html', 'MonasteryCaveHotel', 'Europe', 'tr', 'Turkey', 'subterranea', 'Cappadocia', 38.5825292, 34.8968632);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Boiling Hole', '/english/bz/springs/Boiling.html', 'Boiling', 'MiddleAmerica', 'bz', 'Belize', 'springs', 'Cayo', 17.1610815, -88.6770151);
UPDATE `sights`
SET `Latitude`='17.1660527',
    `Longitude`='-88.6832679'
WHERE `filename` = '/english/bz/caves/CavesBranch.html';
