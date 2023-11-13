INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', "Huangdi Dong - Emperor's Cave", '/english/cn/caves/Huangdi.html', 'Huangdi', 'Asia', 'cn', 'China', 'caves', 'Hainan', 18.961762, 109.139493);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Izvir Krupe', '/english/si/springs/Krupe.html', 'Krupe', 'Europe', 'si', 'Slovenia', 'springs', 'Dolenjska', 45.6349253, 15.2166396);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Santuario di Santa Rosalia', '/english/it/subterranea/SantaRosalia.html', 'SantaRosalia', 'Europe', 'it', 'Italy', 'subterranea', 'Sicilia', 38.168054, 13.351390);
UPDATE `sights`
SET `Latitude`='4.4169565',
    `Longitude`='101.1879494'
WHERE `filename` = '/english/my/showcaves/Tempurung.html';
UPDATE `sights`
SET `Latitude`='3.900341734223693',
    `Longitude`='102.47298515471287'
WHERE `filename` = '/english/my/showcaves/TerangBulan.html';
