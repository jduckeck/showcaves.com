UPDATE sights SET filename = REPLACE(filename, '/showcaves/', '/caves/'), category='caves', Latitude=33.515735, Longitude=133.357614 WHERE countrycode = 'jp' and sortby='Saruta';
UPDATE sights SET filename = REPLACE(filename, '/showcaves/', '/caves/'), category='caves', Latitude=35.492319, Longitude=133.184247 WHERE countrycode = 'jp' and sortby='Yuki';


INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Ryukeido', '/english/jp/showcaves/Ryukei.html', 'Ryukei', 'Asia', 'jp', 'Japan', 'showcaves', 'Shimane', 35.497762, 133.175965);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Ioki Cave', '/english/jp/showcaves/Ioki.html', 'Ioki', 'Asia', 'jp', 'Japan', 'showcaves', 'Kohchi', 33.491273, 133.933227);
