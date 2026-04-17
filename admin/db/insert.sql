INSERT INTO static (path)
VALUES ('/english/tr/region/EsbelliUrgup.html');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Barbarian Medieval Tavern', '/english/tr/subterranea/BarbarianMedieval.html', 'BarbarianMedieval', 'Europe', 'tr', 'Turkey', 'subterranea', 'Cappadocia', 38.632428, 34.907844);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Ürgüp Büyükakten Yeraltı Evi Müzesi', '/english/tr/subterranea/BuyukaktenMuseum.html', 'BuyukaktenMuseum', 'Europe', 'tr', 'Turkey', 'subterranea', 'Cappadocia', 38.6317581, 34.9108929);
UPDATE `sights`
SET `Latitude`='38.6344998',
    `Longitude`='34.9036425'
WHERE `filename` = '/english/tr/subterranea/EsbelliEvi.html';
