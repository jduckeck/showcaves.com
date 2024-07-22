INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Maria SS. Addolorata a Grottasanta', '/english/it/subterranea/Grottasanta.html', 'Grottasanta', 'Europe', 'it', 'Italy', 'subterranea', 'Sicilia', 37.0859771, 15.2934441);
UPDATE `sights`
SET `Latitude`='43.4344072',
    `Longitude`='-5.0725057'
WHERE `filename` = '/english/es/caves/Cuevona.html';
UPDATE `sights`
SET `Latitude`='43.3070603',
    `Longitude`='-5.0540810'
WHERE `filename` = '/english/es/caves/Covadonga.html';
UPDATE `sights`
SET `Latitude`='43.4603631',
    `Longitude`='-5.0676301'
WHERE `filename` = '/english/es/showcaves/Ardines.html';
UPDATE `sights`
SET `Latitude`='43.4606631',
    `Longitude`='-5.0676633'
WHERE `filename` = '/english/es/showcaves/TitoBustillo.html';
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Old City Hall Station', '/english/usa/subterranea/OldCityHallStation.html', 'OldCityHallStation', 'NorthAmerica', 'usa', 'United States of America', 'subterranea', 'ny', 40.712628, -74.006821);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'New York Transit Museum', '/english/usa/subterranea/TransitMuseum.html', 'TransitMuseum', 'NorthAmerica', 'usa', 'United States of America', 'subterranea', 'ny', 40.6905176, -73.9899802);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Pozzo di Gammazita', '/english/it/springs/Gammazita.html', 'Gammazita', 'Europe', 'it', 'Italy', 'springs', 'Sicilia', 37.500350, 15.085747);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Sorgente del Gabriele', '/english/it/springs/Gabriele.html', 'Gabriele', 'Europe', 'it', 'Italy', 'springs', 'Sicilia', 38.10346, 13.31132);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, chapter, Latitude, Longitude)
VALUES ('yes', 'Shpella e Ujkut', '/english/other/caves/Ujkut.html', 'Ujkut', 'Europe', 'al', 'Albania', 'caves', 'al', 'other', 40.6720339, 20.9866578);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, chapter, Latitude, Longitude)
VALUES ('yes', 'Shpella e Haxhi Aliut', '/english/other/caves/HaxhiAli.html', 'HaxhiAli', 'Europe', 'al', 'Albania', 'caves', 'al', 'other', 40.4299661, 19.3067236);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, chapter, Latitude, Longitude)
VALUES ('yes', 'Shpella e Valit', '/english/other/caves/ValitLezhe.html', 'Valit', '$continent$', 'al', 'Albania', 'caves', 'al', 'other', 41.7174710, 20.0045310);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, chapter, Latitude, Longitude)
VALUES ('yes', 'Shpella e Valit', '/english/other/karst/ValitTirana.html', 'ValitTirana', 'Europe', 'al', 'Albania', 'karst', 'al', 'other', 41.3470245, 20.1613601);
UPDATE `sights`
SET `Latitude`='39.6752602',
    `Longitude`='20.1774259'
WHERE `filename` = '/english/al/caves/Konispol.html';
UPDATE sights
SET chapter=NULL,
    region=NULL,
    continent='Europe'
WHERE countrycode = 'al';
UPDATE sights
SET filename = REPLACE(filename, '/other/', '/al/')
WHERE countrycode = 'al';
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Gurra Antike e Domgjonit', '/english/al/subterranea/Domgjonit.html', 'Domgjonit', 'Europe', 'al', 'Albania', 'subterranea', 'Lezhe', 41.96542936425776, 20.152062123277307);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Teqehja Ballëm Sulltani', '/english/al/subterranea/BallemSulltani.html', 'BallemSulltani', 'Europe', 'al', 'Albania', 'subterranea', 'Diber', 41.3750745, 20.2691863);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES ('yes', 'Shpella e Piratëve', '/english/al/caves/Pirateve.html', 'Pirateve', 'Europe', 'al', 'Albania', 'caves', 'Vlore', 40.1291790, 19.6514375);
