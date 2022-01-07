USE filamu254;
	CREATE TABLE movies(
		id 			INT(255) NOT NULL PRIMARY KEY AUTO_INCREMENT,
        cat_id 		INT(255) NOT NULL,
        title 		VARCHAR(255) NOT NULL,
        description VARCHAR(255) NOT NULL,
        location VARCHAR(255) NOT NULL) ENGINE= InnoDB DEFAULT CHARSET = utf8;
        DROP TABLE movies;
        
	CREATE TABLE tvshows(
		id 			INT(255) NOT NULL PRIMARY KEY AUTO_INCREMENT,
        cat_id 		INT(255) NOT NULL,
        title 		VARCHAR(255) NOT NULL,
        description VARCHAR(255) NOT NULL,
        location VARCHAR(255) NOT NULL) ENGINE= InnoDB DEFAULT CHARSET = utf8;
        DROP TABLE tvshows;
	
	CREATE TABLE categories(
		id INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
        category VARCHAR(255) NOT NULL) ENGINE = InnoDB DEFAULT CHARSET =utf8;
        DROP TABLE categories;
	CREATE TABLE user(
		id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        first_name VARCHAR(45) NOT NULL,
        surname VARCHAR(45) NOT NULL,
        email VARCHAR(70) NOT NULL UNIQUE,
        username VARCHAR(45) NOT NULL UNIQUE,
        password VARCHAR (20) NOT NULL) ENGINE = InnoDB DEFAULT CHARSET = utf8;
        DROP TABLE user;
        
	CREATE TABLE messages(
		id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        country VARCHAR(255) NOT NULL,
        subject VARCHAR(255) NOT NULL,
        message VARCHAR(255) NOT NULL) ENGINE = InnoDB DEFAULT CHARSET = utf8;
        DROP TABLE messages;
       /* USE filamu254;*/
      
	CREATE TABLE dmin(
		id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        first_name VARCHAR(45) NOT NULL,
        surname VARCHAR(45) NOT NULL,
        email VARCHAR(70) NOT NULL UNIQUE,
        username VARCHAR(45) NOT NULL UNIQUE,
        password VARCHAR (20) NOT NULL) ENGINE = InnoDB DEFAULT CHARSET = utf8;
        
	/*USE filamu254;
    
    INSERT INTO admin(first_name, surname, email, username, password)
				VALUES('admin', 'admin', 'admin@filamu254.com', 'admin', 'admin@filamu254');
     */   
	CREATE TABLE trailers(
		id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        title VARCHAR(100) NOT NULL,
        location VARCHAR(255) NOT NULL) ENGINE = InnoDB DEFAULT CHARSET = utf8;