INSERT INTO PERSONNE(IdPersonne,nom,prenom,numeroTel,loginPersonne,motDePasse)
values
("1","durand","jhon","0606060606","jdurand","jhon"),
("2","dupont","pat","0616060606","pdupont","pat"),
("3","dupond","benjamin","0626060606","bdupond","benjamin"),
("4","dupand","george","0636060606","gdupand","george"),
("5","dupind","lee","0646060606","ldupind","lee")
;

INSERT INTO COMPETENCE(libelle)
values
('a'),
('b'),
('c'),
('d'),
('e');

INSERT INTO TYPE_DE_CONTRAT(code,libelle)
values
('1','cdi'),
('2','cdd'),
('3','alternance'),
('4','stage'),
('5','internime');

INSERT INTO EMPLOI(codeEmploi,libelle,description,Idpersonne,code)
values
  ('1','rh','azerazgfag','1','1'),
  ('2','secretaire','azerazgfag','2','1'),
  ('3','assistant secretaire','azerazgfag','2','4'),
  ('4','chef de projet','aezr','1','2');

INSERT INTO CANDIDATURE(codeCandidat,cv,lettreMotiv,video,date,IdPersonne,codeEmploi)
values
  ('1','a','a','a',2018-10-12,'3','1'),
  ('2','a','a','a',2018-10-12,'3','2'),
  ('3','a','a','a',2018-10-12,'4','1'),
  ('3','a','a','a',2018-10-12,'4','3'),
  ('3','a','a','a',2018-10-12,'5','4');

  INSERT INTO NECESSITER(libelle,codeEmploi)
  values
  ('a','1'),
  ('b','1'),
  ('c','2'),
  ('a','3'),
  ('b','4'),
  ('a','4'),
  ('d','4');

  INSERT INTO POSSEDER(libelle,IdPersonne)
  values
  ('a','3'),
  ('a','4'),
  ('a','5'),
  ('c','3'),
  ('b','4'),
  ('d','5'),
  ('a','5'),
  ('b','5');
