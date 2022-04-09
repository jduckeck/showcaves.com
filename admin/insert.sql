INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Tianzhong Dong', '/english/cn/showcaves/Tianzhong.html', 'Tianzhong', 'Asia', 'cn', 'China', 'showcaves', 'Guizhou', 25.240308, 107.678781);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Daqikong', '/english/cn/karst/Daqikong.html', 'Yaofeng', 'Asia', 'cn', 'China', 'karst', 'Guizhou', 25.283645, 107.751905);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Zhongdong', '/english/cn/showcaves/Zhongdong.html', 'Zhongdong', 'Asia', 'cn', 'China', 'showcaves', 'Guizhou', 25.687212, 106.293911);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Mine de Sel Varangéville', '/english/fr/mines/Varangeville.html', 'Varangeville', 'Europe', 'fr', 'France', 'mines', 'Lorraine', 48.637454, 6.308598);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Carreau Rodolphe', '/english/fr/mines/CarreauRodolphe.html', 'CarreauRodolphe', 'Europe', 'fr', 'France', 'mines', 'Alsace', 47.846700, 7.281590);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Mines de Fer de Bourbach-le-Bas', '/english/fr/mines/Bourbach-le-Bas.html', 'Bourbach-le-Bas', 'Europe', 'fr', 'France', 'mines', 'Alsace', 47.774607, 7.055540);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Mines d’Argent de Wegscheid', '/english/fr/mines/Wegscheid.html', 'Wegscheid', 'Europe', 'fr', 'France', 'mines', 'Alsace', 47.800584, 6.957250);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Fort Casso', '/english/fr/subterranea/FortCasso.html', 'FortCasso', 'Europe', 'fr', 'France', 'subterranea', 'Lorraine', 49.058738, 7.266720);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Musée du Pétrole', '/english/fr/mines/Petrole.html', 'Petrole', 'Europe', 'fr', 'France', 'mines', 'Alsace', 48.936827, 7.827664);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Ouvrage du Four-à-Chaux', '/english/fr/subterranea/FourAChaux.html', 'FourAChaux', 'Europe', 'fr', 'France', 'subterranea', 'Alsace', 48.993896, 7.795720);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Fort de Schoenenbourg', '/english/fr/subterranea/Schoenenbourg.html', 'Schoenenbourg', 'Europe', 'fr', 'France', 'subterranea', 'Alsace', 48.966500, 7.912370);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Grotte du Wolfloch', '/english/fr/caves/Wolfloch.html', 'Wolfloch', 'Europe', 'fr', 'France', 'caves', 'Alsace', 47.7611876, 7.0323577);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Cueva de los Panaderos', '/english/cu/showcaves/Panaderos.html', 'Panaderos', 'MiddleAmerica', 'cu', 'Cuba', 'showcaves', 'Holguin', 21.116040, -76.140010);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Cueva de Sao Corona', '/english/cu/showcaves/SaoCorona.html', 'SaoCorona', 'MiddleAmerica', 'cu', 'Cuba', 'showcaves', 'Holguin', 20.4868585, -75.8958425);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Cuevas de los Cimarrones', '/english/cu/subterranea/Cimarrones.html', 'Cimarrones', 'MiddleAmerica', 'cu', 'Cuba', 'subterranea', 'PinarDelRio', 22.652990, -83.717310);
UPDATE sights SET filename = REPLACE(filename, '/caves/', '/showcaves/'), category='showcaves' WHERE countrycode = 'cu' and sortby='SanMiquel';
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Cueva de Saturno', '/english/cu/showcaves/Saturno.html', 'Saturno', 'MiddleAmerica', 'cu', 'Cuba', 'showcaves', 'Matanzas', 23.070850, -81.436610);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Cueva de Martín Infierno', '/english/cu/caves/MartinInfierno.html', 'MartinInfierno', 'MiddleAmerica', 'cu', 'Cuba', 'caves', 'Cienfuegos', 21.895111, -80.152087);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Cueva de la Vaca', '/english/cu/showcaves/Vaca.html', 'Vaca', 'MiddleAmerica', 'cu', 'Cuba', 'showcaves', 'PinarDelRio', 22.626061, -83.716382);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Cueva del Palmarito', '/english/cu/showcaves/Palmarito.html', 'Palmarito', 'MiddleAmerica', 'cu', 'Cuba', 'showcaves', 'PinarDelRio', 22.643199, -83.733298);
