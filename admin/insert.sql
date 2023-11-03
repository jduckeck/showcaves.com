INSERT INTO static (path)
VALUES ('/english/de/topics/Schieferstrasse.html');
INSERT INTO static (path)
VALUES ('/german/de/topics/Schieferstrasse.html');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'URÊKA', '/english/fr/mines/UREKA.html', 'UREKA', 'Europe', 'fr', 'France', 'mines', 'Limousin', 46.12341, 1.37204);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Musée de la mine d’Escaro-Aytua', '/english/fr/mines/EscaroAytua.html', 'EscaroAytua', 'Europe', 'fr', 'France', 'mines', 'Languedoc', 42.536420, 2.315540);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Gießenbachklamm', '/english/de/gorges/Giessenbachklamm.html', 'Gießenbachklamm', 'Europe', 'de', 'Germany', 'gorges', 'Alpen', 47.6120181, 12.1463993);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Pskov-Pechory Monastery', '/english/ru/subterranea/Pechory.html', 'Pechory', 'Asia', 'ru', 'Russia', 'subterranea', 'Pskov', 57.8094377, 27.6146563);
UPDATE `sights`
SET `Latitude`='-35.800719',
    `Longitude`='-69.820506'
WHERE `filename` = '/english/ar/showcaves/Brujas.html';
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Nacedero del Larráun', '/english/es/springs/Larraun.html', 'Larraun', 'Europe', 'es', 'Spain', 'springs', 'Navarra', 42.9767335, -1.9176393);
UPDATE `sights`
SET `Latitude`='43.268099',
    `Longitude`='-1.549402'
WHERE `filename` = '/english/es/showcaves/Brujas.html';
UPDATE `sights`
SET `Latitude`='42.9737848',
    `Longitude`='-1.8969241'
WHERE `filename` = '/english/es/showcaves/Mendukilo.html';
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Nacimiento Río Urederra', '/english/es/springs/Urederra.html', 'Urederra', 'Europe', 'es', 'Spain', 'springs', 'Navarra', 42.8046460, -2.1364276);
UPDATE `sights`
SET `Latitude`='48.4258740',
    `Longitude`='7.4017117'
WHERE `filename` = '/english/de/caves/Druides.html';
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Grotte des Druides', '/english/fr/caves/Druides.html', 'Druides', 'Europe', 'fr', 'France', 'caves', 'Alsace', 48.4258740, 7.4017117);
