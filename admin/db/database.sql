
UPDATE sights SET chapter=NULL,region=NULL,continent='Europe' WHERE countrycode = 'ee';

UPDATE sights SET filename = REPLACE(filename, '/other/', '/ee/') WHERE countrycode = 'ee';
UPDATE sights SET filename = REPLACE(filename, '/other/', '/lb/') WHERE countrycode = 'lb';

UPDATE sights SET region='MountLebanon' WHERE  countrycode = 'lb' AND sortby='Afqua';

UPDATE sights SET filename = REPLACE(filename, '/ch/', '/it/'), country='it', Latitude=45.934304, Longitude=9.025211 WHERE sortby = 'Orso';

UPDATE sights SET region='MidiPyrenees' WHERE  countrycode = 'fr' AND region='Midi-Pyrenees';

UPDATE sights SET filename = REPLACE(filename, '/caves/', '/karst/'), category='karst' WHERE countrycode = 'fr' and sortby='PontDArc';

DELETE FROM sights WHERE countrycode = 'ee' AND sortby='';
