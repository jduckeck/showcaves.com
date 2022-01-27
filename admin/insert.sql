INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Feuersteinbergwerk von Abensberg-Arnhofen', '/english/de/mines/Abensberg.html', 'Abensberg', 'Europe', 'de', 'Germany', 'mines', 'Bayern', 48.814670, 11.845790);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Wolf Rock Cave', '/english/usa/caves/WolfRock.html', 'WolfRock', 'NorthAmerica', 'usa', 'United States of America', 'caves', 'la', 30.972277, -93.192258);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Qiliang Dong', '/english/cn/showcaves/Qiliang.html', 'Qiliang', 'Asia', 'cn', 'China', 'showcaves', 'Hunan', 27.9895706177, 109.5914535522);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Hoher Brunnen Berching', '/english/de/karst/Berching.html', 'Berching', 'Europe', 'de', 'Germany', 'karst', 'FraenkischeAlb', 49.124992, 11.406148);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, chapter, Latitude, Longitude)
VALUES('yes','Moonhole', '/english/car/karst/Moonhole.html', 'Moonhole', 'MiddleAmerica', 'vc', 'Saint Vincent and the Grenadines', 'karst', 'vc', 'car', 12.991820, -61.276175);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Almbachklamm', '/english/de/gorges/Almbachklamm.html', 'Almbachklamm', 'Europe', 'de', 'Germany', 'gorges', 'Alpen', 47.670515, 13.030840);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Wimbachklamm', '/english/de/gorges/Wimbachklamm.html', 'Wimbachklamm', 'Europe', 'de', 'Germany', 'gorges', 'Alpen', 47.596185, 12.920361);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Tiefenbachklamm', '/english/at/gorges/Tiefenbachklamm.html', 'Tiefenbachklamm', 'Europe', 'at', 'Austria', 'gorges', 'Tirol', 47.479608, 11.865693);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Fromosa Boulevard Station', '/english/cn/subterranea/FormosaBoulevardStation.html', 'FromosaBoulevardStation', 'Asia', 'cn', 'China', 'subterranea', 'Taiwan', 22.631389, 120.301913);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Dom Im Berg', '/english/at/subterranea/DomImBerg.html', 'DomImBerg', 'Europe', 'at', 'Austria', 'subterranea', 'Steiermark', 47.073223, 15.436903);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Beaver Falls Karst Trail', '/english/usa/karst/BeaverFalls.html', 'BeaverFalls', 'NorthAmerica', 'usa', 'United States of America', 'karst', 'ak', 56.144186, -133.232991);
UPDATE sights SET filename = REPLACE(filename, '/showcaves/Bat', '/caves/CarterBat'), category='caves', sortby='CarterBat' WHERE countrycode = 'ky' and region='ak' and sortby='Bat';
UPDATE sights SET filename = REPLACE(filename, 'CascadeCarter', 'CarterCascade'), sortby='CarterCasc' WHERE countrycode = 'us' and region='ky' and sortby='CascadeCar';
UPDATE sights SET filename = REPLACE(filename, 'Saltpetre', 'CarterSaltpetre'), sortby='CarterSalt' WHERE countrycode = 'us' and region='ky' and sortby='Saltpetre';
UPDATE sights SET filename = REPLACE(filename, 'X', 'CarterX'), sortby='CarterX' WHERE countrycode = 'us' and region='ky' and sortby='X';
