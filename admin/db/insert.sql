UPDATE `sights`
SET `Latitude`='40.5649265',
    `Longitude`='8.1602377'
WHERE `filename` = '/english/it/showcaves/Nettuno.html';
UPDATE `sights`
SET `Latitude`='39.8154960',
    `Longitude`='9.4867997'
WHERE `filename` = '/english/it/showcaves/SuMarmuri.html';
UPDATE `sights`
SET `Latitude`='40.6149249',
    `Longitude`='14.5675886'
WHERE `filename` = '/english/it/showcaves/Smeralda.html';
UPDATE `sights`
SET `Latitude`='41.1770556',
    `Longitude`='16.4691389'
WHERE `filename` = '/english/it/showcaves/SantaCroce.html';
INSERT INTO static (path)
VALUES ('/english/it/topics/DomusDeJanas.html');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Necropoli di Sant’Andrea Priu', '/english/it/subterranea/SantAndreaPriu.html', 'SantAndreaPriu', 'Europe', 'it', 'Italy', 'subterranea', 'Sardinia', 40.4214926, 8.8473733);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Su Stampu de su Turrunu', '/english/it/caves/Stampu.html', 'Stampu', 'Europe', 'it', 'Italy', 'caves', 'Sardinia', 39.8506066, 9.2651267);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Grotte Domus de Janas', '/english/it/showcaves/DomusDeJanas.html', 'DomusDeJanas', 'Europe', 'it', 'Italy', 'showcaves', 'Sardinia', 39.8575159, 9.2618152);
