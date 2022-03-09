UPDATE sights SET filename = REPLACE(filename, '/showcaves/', '/caves/'), category='caves', Latitude=33.515735, Longitude=133.357614 WHERE countrycode = 'jp' and sortby='Saruta';
UPDATE sights SET filename = REPLACE(filename, '/showcaves/', '/caves/'), category='caves', Latitude=35.492319, Longitude=133.184247 WHERE countrycode = 'jp' and sortby='Yuki';


INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Ryukeido', '/english/jp/showcaves/Ryukei.html', 'Ryukei', 'Asia', 'jp', 'Japan', 'showcaves', 'Shimane', 35.497762, 133.175965);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Ioki Cave', '/english/jp/showcaves/Ioki.html', 'Ioki', 'Asia', 'jp', 'Japan', 'showcaves', 'Kohchi', 33.491273, 133.933227);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Mikurodo Cave', '/english/jp/subterranea/Mikuro.html', 'Mikurodo', 'Asia', 'jp', 'Japan', 'subterranea', 'Kohchi', 33.251646, 134.180541);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Shikoku Karst Natural Park', '/english/jp/karst/Shikoku.html', 'Shikoku', 'Asia', 'jp', 'Japan', 'karst', 'Kohchi', 33.471955, 132.980926);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Nakatsu Gorge', '/english/jp/gorges/Nakatsu.html', 'Nakatsu', 'Asia', 'jp', 'Japan', 'gorges', 'Kohchi', 33.561209, 133.129554);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Underground Kingdom Mikawa Mu Valley', '/english/jp/mines/MikawaMu.html', 'MikawaMu', 'Asia', 'jp', 'Japan', 'mines', 'Yamaguchi', 34.189092, 131.994904);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Iwaya Kannon Cave', '/english/jp/subterranea/IwayaKannonNekasa.html', 'IwayaKannonNekasa', 'Asia', 'jp', 'Japan', 'subterranea', 'Yamaguchi', 34.189646, 131.986960);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Osawa Limestone Cave', '/english/jp/caves/Osawa.html', 'Osawa', 'Asia', 'jp', 'Japan', 'caves', 'Niigata', 37.682692, 139.100978);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Iwayayama Cave', '/english/jp/subterranea/Iwayayama.html', 'Iwayayama', 'Asia', 'jp', 'Japan', 'subterranea', 'Niigata', 37.812470, 138.249210);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Gujo Limestone Cave', '/english/jp/showcaves/Gujo.html', 'Gujo', 'Asia', 'jp', 'Japan', 'showcaves', 'Gifu', 35.753194, 137.044041);
