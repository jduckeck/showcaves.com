INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Cave of Skalia', '/english/gr/caves/Skalia.html', 'Skalia', 'Europe', 'gr', 'Greece', 'caves', 'Dodecanese', 37.0298143, 26.9582624);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Jindeng Temple', '/english/cn/subterranea/Jindeng.html', 'Jindeng', 'Asia', 'cn', 'China', 'subterranea', 'Shanxi', 36.0201079, 113.6851259);
UPDATE `sights`
SET `Latitude`='35.0387189',`Longitude`='106.6716599'
WHERE `filename`='/english/cn/caves/LongmenBaoji.html';
