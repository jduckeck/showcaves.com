INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Awhum Cave and Waterfall', '/english/ng/gorges/Awhum.html', 'Awhum', 'Africa', 'ng', 'Nigeria', 'gorges', 'Enugu', 6.533098, 7.434031);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Ngwo Cave and Waterfall', '/english/ng/gorges/Ngwo.html', 'Ngwo', 'Africa', 'ng', 'Nigeria', 'gorges', 'Enugu', 6.422759, 7.455343);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Amakama Wooden Cave', '/english/ng/caves/Amakama.html', 'Amakama', 'Africa', 'ng', 'Nigeria', 'caves', 'Abia', 5.469920, 7.484474);
UPDATE `sights`
SET `Latitude`='5.544198',
    `Longitude`='7.485902'
WHERE `filename` = '/english/ng/subterranea/Ojukwu.html';
