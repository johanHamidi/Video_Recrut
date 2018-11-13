INSERT INTO PERSONNE(IdPersonne,nom,prenom,numeroTel,loginPersonne,motDePasse)
values
(1,'durand','jhon','0606060606','jdurand','jhon'),
(2,'dupont','pat','0616060606','pdupont','pat'),
(3,'dupond','benjamin','0626060606','bdupond','benjamin'),
(4,'dupand','george','0636060606','gdupand','george'),
(5,'dupind','lee','0646060606','ldupind','lee')
;

INSERT INTO COMPETENCE(libelle)
values
('C#'),
('CSS'),
('PHP'),
('C++'),
('JAVASCRIPT');

INSERT INTO TYPE_DE_CONTRAT(code,libelle)
values
('1','cdi'),
('2','cdd'),
('3','alternance'),
('4','stage'),
('5','interime');

INSERT INTO RH(IdPersonne, nom, prenom, numeroTel, loginPersonne, motDePasse)
values
(1,'durand','jhon','0606060606','jdurand','jhon'),
(2,'dupont','pat','0616060606','pdupont','pat');

INSERT INTO CANDIDAT(IdPersonne,nom,prenom,numeroTel,loginPersonne,motDePasse)
values
(3,'dupond','benjamin','0626060606','bdupond','benjamin'),
(4,'dupand','george','0636060606','gdupand','george'),
(5,'dupind','lee','0646060606','ldupind','lee')
;

INSERT INTO EMPLOI(codeEmploi,libelle,description,Idpersonne,code)
values
  ('1','rh','Responsable de formation,Chargé de recrutement',1,1),
  ('2','secretaire','Prise de notes, saisie du courrier, réception et envoi de messages téléphoniques ou électroniques, organisation de réunions',2,'1'),
  ('3','assistant secretaire','Prise de notes, saisie du courrier',2,'4'),
  ('4','chef de projet','Gérer le bon développement du projet, animer une équipe',1,'2'),
  ('5','Comptable','Gestion des comptes', 2,'1');

INSERT INTO CANDIDATURE(codeCandidat,cv,lettreMotiv,video,date,IdPersonne,codeEmploi)
values
  ('1','a','a','a',2018-10-12,3,'1'),
  ('2','a','a','a',2018-10-12,3,'2'),
  ('3','a','a','a',2018-10-12,4,'1'),
  ('4','a','a','a',2018-10-12,4,'3'),
  ('5','a','a','a',2018-10-12,5,'4');

  INSERT INTO NECESSITER(libelle,codeEmploi)
  values
  ('C#','1'),
  ('C++','1'),
  ('PHP','2'),
  ('JAVASCRIPT','3'),
  ('CSS','4'),
  ('CSS','2'),
  ('PHP','4'),
  ('C#','5'),
  ('PHP','5');

  INSERT INTO POSSEDER(libelle,IdPersonne)
  values
  ('C#',3),
  ('PHP',4),
  ('C++',5),
  ('JAVASCRIPT',3),
  ('CSS',4),
  ('PHP',5),
  ('C++',2),
  ('JAVASCRIPT',2),
