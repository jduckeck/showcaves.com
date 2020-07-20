INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Balaclava Mine', '/english/au/mines/Balaclava.html', 'Balaclava', 'Oceania', 'au', 'Australia', 'mines', 'vic');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Nakatonbetsu Limestone Cave', '/english/jp/showcaves/Nakatonbetsu.html', 'Nakatonbetsu', 'Asia', 'jp', 'Japan', 'showcaves', 'Hokkaido');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Monastery of Sant Miquel del Fai', '/english/es/subterranea/SantMiquel.html', 'SantMiquel', 'Europe', 'es', 'Spain', 'subterranea', 'Cataluna');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, chapter)
VALUES('yes','Yemrehanna Kristos Church', '/english/other/subterranea/YemrehannaKristos.html', 'YemrehannaKristos', 'Africa', 'et', 'Ethiopia', 'subterranea', 'et', 'other');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Grotta del Cammello', '/english/it/caves/Cammello.html', 'Cammello', 'Europe', 'it', 'Italy', 'caves', 'Sicilia');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Ikuno Silver Mine', '/english/jp/mines/Ikuno.html', 'Ikuno', 'Asia', 'jp', 'Japan', 'mines', 'Hyogo');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Utsuno Cave', '/english/jp/showcaves/Utsuno.html', 'Utsuno', 'Asia', 'jp', 'Japan', 'showcaves', 'Tochigi');
UPDATE sights
SET filename = REPLACE(filename, '/showcaves/', '/gorges/'),
    category = 'gorges'
WHERE sortby = 'BledneSkal';
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Kamieńczyk Gorge', '/english/pl/gorges/Kamienczyk.html', 'Kamienczyk', 'Europe', 'pl', 'Poland', 'gorges', 'Dolnoslaskie');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Panagria Hrysospiliotissa', '/english/gr/subterranea/PanagriaHrysospiliotissa.html', 'PanagriaHrysospiliotissa', 'Europe', 'gr', 'Greece', 'subterranea', 'StereaHellas');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Kipina Monastery', '/english/gr/subterranea/Kipina.html', 'Kipina', 'Europe', 'gr', 'Greece', 'subterranea', 'Epiros');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Ashio Copper Mine', '/english/jp/mines/Ashio.html', 'Ashio', 'Asia', 'jp', 'Japan', 'mines', 'Tochigi');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region)
VALUES('yes','Shitodo', '/english/jp/caves/Shitodo.html', 'Shito', 'Asia', 'jp', 'Japan', 'caves', 'Kanagawa');
INSERT INTO sights (visible, name, filename, sortby, continent, countrycode, country, category, region, chapter)
VALUES('yes','Deir Mar Antonios', '/english/other/subterranea/MarAntonios.html', 'MarAntonios', 'Africa', 'eg', 'Egypt', 'subterranea', 'eg', 'other');
