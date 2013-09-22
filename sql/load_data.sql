INSERT INTO User (username, firstname, lastname, password, email)
VALUES ('sportslover', 'Paul', 'Walker', 'paulpass93', 'sportslover@hotmail.com');
INSERT INTO User (username, firstname, lastname, password, email)
VALUES ('traveler', 'Rebecca', 'Travolta', 'rebeccapass15', 'rebt@explorer.org');
INSERT INTO User (username, firstname, lastname, password, email)
VALUES ('spacejunkie', 'Bob', 'Spacey', 'bob1pass', 'bspace@spacejunkies.net');

INSERT INTO Album (albumid, title, created, lastupdated, username, access)
VALUES (1, 'I love sports', '2012-01-05', '2013-09-17', 'sportslover', 'public');
INSERT INTO Album (albumid, title, created, lastupdated, username)
VALUES (2, 'I love football', '2012-01-05', '2013-09-17', 'sportslover', 'public');
INSERT INTO Album (albumid, title, created, lastupdated, username)
VALUES (3, 'Around The World', '2012-01-05', '2013-09-17', 'traveler', 'public');
INSERT INTO Album (albumid, title, created, lastupdated, username)
VALUES (4, 'Cool Space Shots', '2012-01-05', '2013-09-17', 'spacejunkie', 'private');

INSERT INTO Photo (picid, url, format, date)
VALUES (1, '/photos/football_s1.jpg', 'jpg', '2012-01-05');
INSERT INTO Photo (picid, url, format, date)
VALUES (2, '/photos/football_s2.jpg', 'jpg', '2012-01-05');
INSERT INTO Photo (picid, url, format, date)
VALUES (3, '/photos/football_s3.jpg', 'jpg', '2012-01-05');
INSERT INTO Photo (picid, url, format, date)
VALUES (4, '/photos/football_s4.jpg', 'jpg', '2012-01-05');
INSERT INTO Photo (picid, url, format, date)
VALUES (5, '/photos/space_EagleNebula.jpg', 'jpg', '2012-01-05');
INSERT INTO Photo (picid, url, format, date)
VALUES (6, '/photos/space_GalaxyCollision.jpg', 'jpg', '2012-01-05');
INSERT INTO Photo (picid, url, format, date)
VALUES (7, '/photos/space_HelixNebula.jpg', 'jpg', '2012-01-05');
INSERT INTO Photo (picid, url, format, date)
VALUES (8, '/photos/space_MilkyWay.jpg', 'jpg', '2012-01-05');
INSERT INTO Photo (picid, url, format, date)
VALUES (9, '/photos/space_OrionNebula.jpg', 'jpg', '2012-01-05');
INSERT INTO Photo (picid, url, format, date)
VALUES (10, '/photos/sports_s1.jpg', 'jpg', '2012-01-05');
INSERT INTO Photo (picid, url, format, date)
VALUES (11, '/photos/sports_s2.jpg', 'jpg', '2012-01-05');
INSERT INTO Photo (picid, url, format, date)
VALUES (12, '/photos/sports_s3.jpg', 'jpg', '2012-01-05');
INSERT INTO Photo (picid, url, format, date)
VALUES (13, '/photos/sports_s4.jpg', 'jpg', '2012-01-05');
INSERT INTO Photo (picid, url, format, date)
VALUES (14, '/photos/sports_s5.jpg', 'jpg', '2012-01-05');
INSERT INTO Photo (picid, url, format, date)
VALUES (15, '/photos/sports_s6.jpg', 'jpg', '2012-01-05');
INSERT INTO Photo (picid, url, format, date)
VALUES (16, '/photos/sports_s7.jpg', 'jpg', '2012-01-05');
INSERT INTO Photo (picid, url, format, date)
VALUES (17, '/photos/sports_s8.jpg', 'jpg', '2012-01-05');
INSERT INTO Photo (picid, url, format, date)
VALUES (18, '/photos/world_EiffelTower.jpg', 'jpg', '2012-01-05');
INSERT INTO Photo (picid, url, format, date)
VALUES (19, '/photos/world_firenze.jpg', 'jpg', '2012-01-05');
INSERT INTO Photo (picid, url, format, date)
VALUES (20, '/photos/world_GreatWall.jpg', 'jpg', '2012-01-05');
INSERT INTO Photo (picid, url, format, date)
VALUES (21, '/photos/world_Isfahan.jpg', 'jpg', '2012-01-05');
INSERT INTO Photo (picid, url, format, date)
VALUES (22, '/photos/world_Istanbul.jpg', 'jpg', '2012-01-05');
INSERT INTO Photo (picid, url, format, date)
VALUES (23, '/photos/world_Persepolis.jpg', 'jpg', '2012-01-05');
INSERT INTO Photo (picid, url, format, date)
VALUES (24, '/photos/world_Reykjavik.jpg', 'jpg', '2012-01-05');
INSERT INTO Photo (picid, url, format, date)
VALUES (25, '/photos/world_Seoul.jpg', 'jpg', '2012-01-05');
INSERT INTO Photo (picid, url, format, date)
VALUES (26, '/photos/world_Stonehenge.jpg', 'jpg', '2012-01-05');
INSERT INTO Photo (picid, url, format, date)
VALUES (27, '/photos/world_TajMahal.jpg', 'jpg', '2012-01-05');
INSERT INTO Photo (picid, url, format, date)
VALUES (28, '/photos/world_TelAviv.jpg', 'jpg', '2012-01-05');
INSERT INTO Photo (picid, url, format, date)
VALUES (29, '/photos/world_tokyo.jpg', 'jpg', '2012-01-05');
INSERT INTO Photo (picid, url, format, date)
VALUES (30, '/photos/world_WashingtonDC.jpg', 'jpg', '2012-01-05');

INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES (2, 1, 'picture 1', 1);
INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES (2, 2, 'picture 2', 2);
INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES (2, 3, 'picture 3', 3);
INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES (2, 4, 'picture 4', 4);

INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES (4, 5, 'picture 1', 1);
INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES (4, 6, 'picture 2', 2);
INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES (4, 7, 'picture 3', 3);
INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES (4, 8, 'picture 4', 4);
INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES (4, 9, 'picture 5', 5);

INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES (1, 10, 'picture 1', 1);
INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES (1, 11, 'picture 2', 2);
INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES (1, 12, 'picture 3', 3);
INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES (1, 13, 'picture 4', 4);
INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES (1, 14, 'picture 5', 5);
INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES (1, 15, 'picture 6', 6);
INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES (1, 16, 'picture 7', 7);
INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES (1, 17, 'picture 8', 8);

INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES (3, 18, 'picture 1', 1);
INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES (3, 19, 'picture 2', 2);
INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES (3, 20, 'picture 3', 3);
INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES (3, 21, 'picture 4', 4);
INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES (3, 22, 'picture 5', 5);
INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES (3, 23, 'picture 6', 6);
INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES (3, 24, 'picture 7', 7);
INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES (3, 25, 'picture 8', 8);
INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES (3, 26, 'picture 9', 9);
INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES (3, 27, 'picture 10', 10);
INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES (3, 28, 'picture 11', 11);
INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES (3, 29, 'picture 12', 12);
INSERT INTO Contain (albumid, picid, caption, sequencenum)
VALUES (3, 30, 'picture 13', 13);

INSERT INTO AlbumAccess(albumid, username)
VALUES (4, 'traveler');
INSERT INTO AlbumAccess(albumid, username)
VALUES (4, 'spacejunkie');
