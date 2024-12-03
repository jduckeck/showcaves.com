INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Cave of Skalia', '/english/gr/caves/Skalia.html', 'Skalia', 'Europe', 'gr', 'Greece', 'caves', 'Dodecanese', 37.0298143, 26.9582624);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Jindeng Temple', '/english/cn/subterranea/Jindeng.html', 'Jindeng', 'Asia', 'cn', 'China', 'subterranea', 'Shanxi', 36.0201079, 113.6851259);
UPDATE `sights`
SET `Latitude`='35.0387189',`Longitude`='106.6716599'
WHERE `filename`='/english/cn/caves/LongmenBaoji.html';
UPDATE `sights`
SET `Latitude`='50.6285971',`Longitude`='123.6040356'
WHERE `filename`='/english/cn/showcaves/Gaxian.html';
UPDATE `sights`
SET `Latitude`='29.7515252',`Longitude`='118.3887295'
WHERE `filename`='/english/cn/subterranea/Huashan.html';
UPDATE `sights`
SET `Latitude`='31.7907363',`Longitude`='118.1274294'
WHERE `filename`='/english/cn/showcaves/HuayangAnhui.html';
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Huayang Cave', '/english/cn/showcaves/HuayangJiangsu.html', 'HuayangJiangsu', 'Asia', 'cn', 'China', 'showcaves', 'Jiangsu', 31.792216, 119.316746);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Coal Museum of China', '/english/cn/mines/Taiyuan.html', 'Taiyuan', 'Asia', 'cn', 'China', 'mines', 'Shanxi', 37.8567817, 112.5223850);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Huangshi National Mine Park', '/english/cn/mines/Huangshi.html', 'Huangshi', 'Asia', 'cn', 'China', 'mines', 'Hubei', 30.2152499, 114.9083494);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Jinhuagong National Mine Park', '/english/cn/mines/Jinhuagong.html', 'Jinhuagong', 'Asia', 'cn', 'China', 'mines', 'Shanxi', 40.102958, 113.128699);
INSERT INTO static (path)
VALUES ('/english/cn/topics/MinePark.html');
UPDATE `sights`
SET `Latitude`='41.9769121',
    `Longitude`='121.6980551'
WHERE `filename` = '/english/cn/mines/Haizhou.html';
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Yulong Dong', '/english/cn/showcaves/Yulong.html', 'Yulong', 'Asia', 'cn', 'China', 'showcaves', 'Anhui', 30.341059, 117.835234);
