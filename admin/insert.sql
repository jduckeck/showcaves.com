UPDATE sights SET filename = REPLACE(filename, '/caves/', '/subterranea/'), category='subterranea', Latitude=38.968226, Longitude=141.058270 WHERE countrycode = 'jp' and sortby='Takkoku';

INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Mt Omuro Lava Caves', '/english/jp/caves/MtOmuro.html', 'MtOmuro', 'Asia', 'jp', 'Japan', 'caves', 'Yamanashi', 35.4525407, 138.6475598);
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, Latitude, Longitude)
VALUES('yes','Suse Jaana Cave', '/english/jp/caves/SuseJaana.html', 'SuseJaana', 'Asia', 'jp', 'Japan', 'caves', 'Aichi', 34.797260, 137.485300);


