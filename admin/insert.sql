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
