create database database_inkmask;
use database_inkmask;

create table usuario (
	nome varchar(255),
	email varchar(255) primary key,
	senha varchar(255)
);

CREATE TABLE hq_table (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  download_url varchar(60) not null,
  pdf_url VARCHAR(255) NOT NULL,
  preco varchar (10) not null,
  descricao varchar(1000) NOT NULL,
  serie varchar(60) NOT NULL
);


INSERT INTO hq_table (id, name, download_url, pdf_url, preco, descricao, serie) VALUES
  ('1','Um Conto de Batman: Veneno #1', 'download.php?hq_id=1', 'pdfs/BatmanVeneno01.pdf', '$12.00', 'A primeira edição de "Watchmen" apresenta um mundo alternativo onde super-heróis foram proibidos pelo governo. Quando um ex-herói chamado O Comediante é assassinado, o vigilante Rorschach começa a investigar o crime. Enquanto isso, outros heróis aposentados enfrentam dilemas pessoais e políticos enquanto uma ameaça global se desenvolve. A história começa a desvendar mistérios profundos e complexos que afetam o destino da humanidade.','Batman'),
  ('2','Um Conto de Batman: Veneno #2', 'download.php?hq_id=2', 'pdfs/BatmanVeneno02.pdf', '$12.00', 'Batman continua sua busca para rastrear a origem do Veneno e enfrenta desafios cada vez maiores, enquanto a droga se espalha pela cidade e ameaça destruir vidas.','Batman'),
  ('3','Um Conto de Batman: Veneno #3', 'download.php?hq_id=3', 'pdfs/BatmanVeneno03.pdf', '$12.00', 'A luta de Batman contra o Veneno culmina em um confronto decisivo com Bane, o mestre por trás da droga. Batman precisa encontrar uma maneira de superar o poder destrutivo do Veneno e salvar Gotham City.','Batman'),
  ('4','Batman: Cavaleiros das Trevas #1', 'download.php?hq_id=4', 'pdfs/BatmanTrevas101.pdf', '$25.00', 'A história se passa em um futuro distópico, onde Bruce Wayne, o Batman, está aposentado há anos. No entanto, ele é forçado a voltar à ativa quando Gotham City mergulha no caos devido à ascensão de uma gangue chamada Os Mutantes. O Batman mais velho e endurecido retorna, enfrentando um mundo mais sombrio e violento.','Batman'),
  ('5','Batman: Cavaleiro das Trevas #2', 'download.php?hq_id=5', 'pdfs/BatmanTrevas102.pdf', '$25.00', 'Batman continua sua luta contra Os Mutantes, enquanto um novo Comissário Gordon o considera um fora da lei. O Cavaleiro das Trevas também enfrenta uma ameaça familiar ressurgente: O Coringa. A história explora a relação complexa entre Batman e seu arqui-inimigo.','Batman'),
  ('6','Batman: Cavaleiro das Trevas #3', 'download.php?hq_id=6', 'pdfs/BatmanTrevas103.pdf', '$25.00', 'Batman enfrenta o governo opressivo e a crise nuclear global que ameaça a humanidade. Ele se alia a outros heróis, incluindo a Mulher-Gato e o Lanterna Verde, em uma tentativa desesperada de evitar a catástrofe nuclear e restaurar a ordem em Gotham City. A história mergulha ainda mais na psicologia obscura de Bruce Wayne e na natureza implacável de seu compromisso com a justiça.','Batman'),
  ('7','indefinido', 'download.php?hq_id=7', 'pdfs/', '$10.00', 'A definir','A definir'),
  ('8', 'Batman: A Piada Mortal', 'download.php?hq_id=8', 'pdfs/BatmanPiadaMortal.pdf', '$25.00', 'Narra o conflito entre o Batman e o Coringa enquanto explora a origem trágica do vilão. O Coringa realiza um ato terrível ao tentar enlouquecer o Comissário Gordon, desafiando os limites morais do Batman. A história aborda temas de insanidade, moralidade e a relação complexa entre os dois personagens, deixando um impacto duradouro no universo do Batman.','Batman'),
  ('9', 'V de Vingança', 'download.php?hq_id=9', 'pdfs/VdeVingança.pdf', '$40.00', '"V de Vingança" é uma história distópica que segue um misterioso vigilante chamado V enquanto ele combate um governo totalitário na Grã-Bretanha, usando táticas audaciosas e uma máscara de Guy Fawkes. A história explora temas de resistência, liberdade e vingança em um mundo opressivo.','V de Vingança'),
  ('10', 'Watchmen #1', 'download.php?hq_id=10', 'pdfs/WatchMen01.pdf', '$10.00', 'A primeira edição de "Watchmen" apresenta um mundo alternativo onde super-heróis foram proibidos pelo governo. Quando um ex-herói chamado O Comediante é assassinado, o vigilante Rorschach começa a investigar o crime. Enquanto isso, outros heróis aposentados enfrentam dilemas pessoais e políticos enquanto uma ameaça global se desenvolve. A história começa a desvendar mistérios profundos e complexos que afetam o destino da humanidade.','Watchmen'),
  ('11', 'Watchmen #2', 'download.php?hq_id=11', 'pdfs/WatchMen02.pdf', '$10.00', 'Nesta edição, a investigação do assassinato de Edward Morgan, também conhecido como O Comediante, continua. O Rorschach, um vigilante mascarado, se aprofunda na trama e descobre pistas perturbadoras que sugerem uma conspiração maior envolvendo super-heróis aposentados.','Watchmen'),
  ('12', 'Watchmen #3', 'download.php?hq_id=12', 'pdfs/WatchMen03.pdf', '$10.00', 'Na terceira edição, os leitores são apresentados a Dr. Manhattan, um ex-herói com poderes sobrenaturais. A história explora seu passado e sua relação complexa com Laurie Juspeczyk, a Espectral. Enquanto isso, a tensão global aumenta, já que o mundo à beira da guerra nuclear busca estabilidade.','Watchmen');


drop table hq_table;


select * from hq_Table
