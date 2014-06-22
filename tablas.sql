use gathr;

CREATE TABLE IF NOT EXISTS user (
  uid int NOT NULL AUTO_INCREMENT,
  username varchar(20) NOT NULL,
  password varchar(32) NOT NULL,
  PRIMARY KEY (uid),
  UNIQUE KEY uid (uid)
);

CREATE TABLE IF NOT EXISTS pairings (
	uid1 int NOT NULL,
	uid2 int NOT NULL,
	PRIMARY KEY (uid1, uid2)
	);


CREATE TABLE IF NOT EXISTS email (
	email varchar(30) NOT NULL,
	PRIMARY KEY (email)
);

CREATE TABLE IF NOT EXISTS event(
	eventid int NOT NULL AUTO_INCREMENT,
	uid int NOT NULL,
	name varchar(100) NOT NULL,
	hora TIME, 
	fecha DATE,
	PRIMARY KEY(eventid),
	FOREIGN KEY(uid) references user(uid)
);

CREATE TABLE IF NOT EXISTS RSVP(
	eventid int NOT NULL,
	guestid int NOT NULL,
	RSVP tinyint(1),
	PRIMARY KEY(eventid, guestid),
	FOREIGN KEY(eventid) references event(eventid),
	FOREIGN KEY(guestid) references user(uid)
 );

CREATE TABLE IF NOT EXISTS pending(
	requestFromUid int,
	requestToUid int,
	PRIMARY KEY(requestFromUid, requestToUid),
	FOREIGN KEY(requestFromUid) references user(uid),
	FOREIGN KEY(requestToUid) references user(uid)
);

