INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Hang Ngọc Rồng', '/english/vn/showcaves/NgocRong.html', 'NgocRong', 'Asia', 'vn', 'Vietnam', 'showcaves', 'QuangNinh', 20.993217, 107.298645);
UPDATE `sights`
SET `Latitude`='29.3680313',
    `Longitude`='110.6146666'
WHERE `filename` = '/english/cn/showcaves/HuanglongHunan.html';
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude, closed)
VALUES ('yes', 'Koonalda Cave', '/english/au/caves/Koonalda.html', 'Koonalda', 'Australia', 'au', 'Australia', 'caves', 'Nullarbor', -31.4043460, 129.8382583, 1);
