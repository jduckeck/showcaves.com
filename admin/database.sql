
UPDATE sights SET chapter=NULL,region=NULL,continent='Europe' WHERE countrycode = 'ee';

UPDATE sights SET filename = REPLACE(filename, '/other/', '/ee/') WHERE countrycode = 'ee';
UPDATE sights SET filename = REPLACE(filename, '/other/', '/lb/') WHERE countrycode = 'lb';

UPDATE sights SET region='MountLebanon' WHERE  countrycode = 'lb' AND sortby='Afqua';

UPDATE sights SET filename = REPLACE(filename, '/ch/', '/it/'), country='it', Latitude=45.934304, Longitude=9.025211 WHERE sortby = 'Orso';
