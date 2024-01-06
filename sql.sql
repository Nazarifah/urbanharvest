CREATE TABLE IF NOT EXISTS ROLE (
    roleID INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    description VARCHAR(255),
    status INT
);

CREATE TABLE IF NOT EXISTS USER (
    userID INT AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(255),
    lastName VARCHAR(255),
    email VARCHAR(255),
    contactNo VARCHAR(255),
    homeAddress VARCHAR(255),
    status INT,
    password VARCHAR(255),
    roleID INT,
    CONSTRAINT FOREIGN KEY (roleID) REFERENCES ROLE(roleID) 
);

CREATE TABLE IF NOT EXISTS GARDEN (
    gardenID INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    address VARCHAR(255),
    status INT
);

CREATE TABLE IF NOT EXISTS PLOT (
    plotID INT AUTO_INCREMENT PRIMARY KEY,
    size VARCHAR(255),
    availability INT,
    status INT,
    gardenID INT,
    CONSTRAINT FOREIGN KEY (gardenID) REFERENCES GARDEN(gardenID)
);

CREATE TABLE IF NOT EXISTS BOOKING (
    bookingID INT AUTO_INCREMENT PRIMARY KEY,
    bookDateTime DateTime,
    paymentStatus INT,
    paymentDateTime DateTime,
    paidAmount DECIMAL(8, 2),
    bookYear INT,
    bookApproval INT,
    status INT,
    plotID INT,
    userID INT,
    CONSTRAINT FOREIGN KEY (plotID) REFERENCES PLOT(plotID),
    CONSTRAINT FOREIGN KEY (userID) REFERENCES USER(userID)
);

CREATE TABLE IF NOT EXISTS QUESTION (
    questionID INT AUTO_INCREMENT PRIMARY KEY,
    sentence VARCHAR(255),
    status INT
);

CREATE TABLE IF NOT EXISTS ANSWER (
    answerID INT AUTO_INCREMENT PRIMARY KEY,
    answerSentence VARCHAR(255),
    status INT,
    questionID INT,
    userID INT,
    CONSTRAINT FOREIGN KEY (questionID) REFERENCES QUESTION(questionID),
    CONSTRAINT FOREIGN KEY (userID) REFERENCES USER(userID)
);

INSERT INTO ROLE (name, description, status) VALUES
("Admin", "People who are responsible for managing staff", 1),
("Staff", "People who are responsible for managing customers, gardens, and bookings", 1),
("Customer", "People who use the system to book a plot", 1);

INSERT INTO USER (firstName, lastName, email, contactNo, homeAddress, roleID, status, password) VALUES
("Yu Qin", "Gui", "yuqin1161@gmail.com", "0129231224", "Taman Desa Idaman", 1, 1, "abc123");

INSERT INTO GARDEN (name, address, status) VALUES
('Taman Desa Idaman', 'Taman Desa Idaman, 76100, Durian Tunggal, Melaka', 1),
('Taman Nuri Sentosa', 'Kampung Tengah, 76100 Durian Tunggal, Melaka', 1),
('Taman Daya', 'Taman Daya, 81100 Johor Bahru, Johor', 1);

INSERT INTO PLOT (size, gardenID, status, availability) VALUES
('12 x 30', 1, 1, 1);