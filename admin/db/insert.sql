UPDATE `sights`
SET `Latitude`='47.313415',
    `Longitude`='13.189752'
WHERE `filename` = '/english/at/gorges/Liechtenstein.html';
UPDATE `sights`
SET `Latitude`='47.3788808',
    `Longitude`='13.2038693'
WHERE `filename` = '/english/at/mines/Arthurstollen.html';
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Rastenbachklamm', '/english/it/gorges/Rastenbachklamm.html', 'Rastenbachklamm', 'Europe', 'it', 'Italy', 'gorges', 'Trentino', 46.3808139, 11.2405173);
