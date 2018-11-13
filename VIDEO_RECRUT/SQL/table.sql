#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
CREATE DATABASE video_recrut;
USE video_recrut;

#------------------------------------------------------------
# Table: PERSONNE
#------------------------------------------------------------

CREATE TABLE PERSONNE(
        IdPersonne    int (50) NOT NULL auto_increment ,
        nom           Varchar (50) NOT NULL ,
        prenom        Varchar (50) NOT NULL ,
        numeroTel     Varchar (50) NOT NULL ,
        loginPersonne Varchar (50) NOT NULL ,
        motDePasse    Varchar (50) NOT NULL
	,CONSTRAINT PERSONNE_PK PRIMARY KEY (IdPersonne)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: COMPETENCE
#------------------------------------------------------------

CREATE TABLE COMPETENCE(
        libelle Varchar (50) NOT NULL
	,CONSTRAINT COMPETENCE_PK PRIMARY KEY (libelle)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: TYPE DE CONTRAT
#------------------------------------------------------------

CREATE TABLE TYPE_DE_CONTRAT(
        code    Varchar (50) NOT NULL ,
        libelle Varchar (50) NOT NULL
	,CONSTRAINT TYPE_DE_CONTRAT_PK PRIMARY KEY (code)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: CANDIDAT
#------------------------------------------------------------

CREATE TABLE CANDIDAT(
        IdPersonne    int (50) NOT NULL auto_increment ,
        nom           Varchar (50) NOT NULL ,
        prenom        Varchar (50) NOT NULL ,
        numeroTel     Varchar (50) NOT NULL ,
        loginPersonne Varchar (50) NOT NULL ,
        motDePasse    Varchar (50) NOT NULL
	,CONSTRAINT CANDIDAT_PK PRIMARY KEY (IdPersonne)

	,CONSTRAINT CANDIDAT_PERSONNE_FK FOREIGN KEY (IdPersonne) REFERENCES PERSONNE(IdPersonne)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: RH
#------------------------------------------------------------

CREATE TABLE RH(
        IdPersonne    int (50) NOT NULL auto_increment ,
        nom           Varchar (50) NOT NULL ,
        prenom        Varchar (50) NOT NULL ,
        numeroTel     Varchar (50) NOT NULL ,
        loginPersonne Varchar (50) NOT NULL ,
        motDePasse    Varchar (50) NOT NULL
	,CONSTRAINT RH_PK PRIMARY KEY (IdPersonne)

	,CONSTRAINT RH_PERSONNE_FK FOREIGN KEY (IdPersonne) REFERENCES PERSONNE(IdPersonne)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: EMPLOI
#------------------------------------------------------------

CREATE TABLE EMPLOI(
        codeEmploi  Varchar (50) NOT NULL ,
        libelle     Varchar (50) NOT NULL ,
        description Varchar (500) NOT NULL ,
        type        Varchar (50) NOT NULL ,
        IdPersonne  int (50) NOT NULL ,
        code        Varchar (50) NOT NULL
	,CONSTRAINT EMPLOI_PK PRIMARY KEY (codeEmploi)

	,CONSTRAINT EMPLOI_RH_FK FOREIGN KEY (IdPersonne) REFERENCES RH(IdPersonne)
	,CONSTRAINT EMPLOI_TYPE_DE_CONTRAT0_FK FOREIGN KEY (code) REFERENCES TYPE_DE_CONTRAT(code)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: CANDIDATURE
#------------------------------------------------------------

CREATE TABLE CANDIDATURE(
        codeCandidat Varchar (50) NOT NULL ,
        cv           Varchar (100) NOT NULL ,
        lettreMotiv  Varchar (100) NOT NULL ,
        video        Varchar (50) NOT NULL ,
        date         Date NOT NULL ,
        IdPersonne   int (50) NOT NULL ,
        codeEmploi   Varchar (50) NOT NULL
	,CONSTRAINT CANDIDATURE_PK PRIMARY KEY (codeCandidat)

	,CONSTRAINT CANDIDATURE_CANDIDAT_FK FOREIGN KEY (IdPersonne) REFERENCES CANDIDAT(IdPersonne)
	,CONSTRAINT CANDIDATURE_EMPLOI0_FK FOREIGN KEY (codeEmploi) REFERENCES EMPLOI(codeEmploi)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: NECESSITER
#------------------------------------------------------------

CREATE TABLE NECESSITER(
        libelle    Varchar (50) NOT NULL ,
        codeEmploi Varchar (50) NOT NULL
	,CONSTRAINT NECESSITER_PK PRIMARY KEY (libelle,codeEmploi)

	,CONSTRAINT NECESSITER_COMPETENCE_FK FOREIGN KEY (libelle) REFERENCES COMPETENCE(libelle)
	,CONSTRAINT NECESSITER_EMPLOI0_FK FOREIGN KEY (codeEmploi) REFERENCES EMPLOI(codeEmploi)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: POSSEDER
#------------------------------------------------------------

CREATE TABLE POSSEDER(
        libelle    Varchar (50) NOT NULL ,
        IdPersonne int (50) NOT NULL
	,CONSTRAINT POSSEDER_PK PRIMARY KEY (libelle,IdPersonne)

	,CONSTRAINT POSSEDER_COMPETENCE_FK FOREIGN KEY (libelle) REFERENCES COMPETENCE(libelle)
	,CONSTRAINT POSSEDER_CANDIDAT0_FK FOREIGN KEY (IdPersonne) REFERENCES CANDIDAT(IdPersonne)
)ENGINE=InnoDB;
