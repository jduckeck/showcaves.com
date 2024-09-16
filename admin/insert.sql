INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Formula Center', '/english/fi/subterranea/FormulaCenter.html', 'FormulaCenter', 'Europe', 'fi', 'Finland', 'subterranea', 'Helsinki', 60.2216700, 25.0694457);
UPDATE `sights`
SET `Latitude`='29.4074933',
    `Longitude`='-82.4764325'
WHERE `filename` = '/english/usa/springs/DevilsDen.html';
