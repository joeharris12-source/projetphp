CREATE TABLE inscriptions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username varchar(50) NOT NULL UNIQUE,
    mot_de_passe varchar(50),
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE informations (
    id_candidature INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(20) NOT NULL,
    prenom VARCHAR(40) NOT NULL,
    photo_d_identite VARCHAR(100),
    date_de_naissance DATE,
    sexe ENUM('M','F'),
    nationalite VARCHAR(25),
    annee_bac INT,
    serie_bac ENUM('C','D','E','F1','F2'),
    naissance_pdf VARCHAR(100), 
    nationalite_pdf VARCHAR(100), 
    attestation_pdf VARCHAR(100), 
    username varchar(50),
    FOREIGN KEY(username) REFERENCES inscriptions(username),
    date_creation2 TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE admin (
    id_admin INT AUTO_INCREMENT PRIMARY KEY,
    mot_de_passe varchar(50),
    date_creation3 TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
