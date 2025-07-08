INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Földvári Aladár-barlang', '/english/hu/showcaves/Foldvari.html', 'Foldvari', 'Europe', 'hu', 'Hungary', 'showcaves', 'Aggtelek', 48.5162670, 20.7516500);
UPDATE `sights`
SET `Latitude`='47.2449256',
    `Longitude`='15.5496629'
WHERE `filename` = '/english/at/showcaves/Grassl.html';
