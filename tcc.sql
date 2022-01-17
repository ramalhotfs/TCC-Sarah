-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Jan-2022 às 19:36
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(5) NOT NULL,
  `nome` varchar(70) NOT NULL,
  `user` varchar(45) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `user`, `senha`) VALUES
(3, 'Patrick Santos', 'patrick', 'ec6a6536ca304edf844d1d248a4f08dc'),
(4, 'Alexandre Ramalho Oliveira', 'alexandre', 'ec6a6536ca304edf844d1d248a4f08dc');

-- --------------------------------------------------------

--
-- Estrutura da tabela `filmes`
--

CREATE TABLE `filmes` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `elenco` varchar(100) NOT NULL,
  `valor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `filmes`
--

INSERT INTO `filmes` (`id`, `nome`, `descricao`, `elenco`, `valor`) VALUES
(1, 'Vingadores A Era de Ultron', 'Ao tentar proteger o planeta de ameaças, Tony Stark constrói um sistema de inteligência artificial que cuidaria da paz mundial. O projeto acaba dando errado e gera o nascimento do Ultron. Com o destino da Terra em jogo, Capitão América, Homem de Ferro, Thor, Hulk, Viúva Negra e Gavião Arqueiro terão que se unir para mais uma vez salvar a raça humana da extinção.', 'Robert Downey Jr, Scarlett Johansson, Chris Evans, Elizabeth Olsen', 50),
(2, 'Animais Fantásticos e Onde Habitam', 'Um excêntrico magizoologista carrega uma maleta cheia de animais mágicos coletados durante suas viagens pelo mundo. As criaturas acabam saindo de sua mala em Nova York, e agora ele precisa usar suas habilidades para capturá-las.', 'Katherine Waterston, Ezra Miller, Dan Fogler, Johnny Depp', 20),
(3, 'Baby Driver', 'O talentoso motorista de fuga Baby confia nas batidas de sua própria trilha sonora para ser o melhor que existe. A música silencia um zumbido que o perturba desde um acidente na infância. Após conhecer a mulher dos seus sonhos, ele reconhece uma oportunidade de se livrar do estilo de vida questionável e recomeçar do zero. Obrigado a trabalhar para um chefão do crime, Baby lida com a música ao mesmo tempo em que um golpe fadado ao fracasso ameaça sua vida, seu amor e sua liberdade.', 'Ansel Elgort, Lily James, Jon Hamm, Jamie Foxx', 0),
(4, 'Django Livre', 'No sul dos Estados Unidos, o ex-escravo Django faz uma aliança inesperada com o caçador de recompensas Schultz para caçar os criminosos mais procurados do país e resgatar sua esposa de um fazendeiro que força seus escravos a participar de competições mortais.', 'Quentin Tarantino, Jamie Foxx, Leonardo DiCaprio, Christoph Waltz', 0),
(5, 'Infiltrado', 'Harry, conhecido apenas como H, é um homem misterioso que trabalha para uma empresa de carros-fortes e movimenta grandes quantias de dinheiro pela cidade de Los Angeles. Quando, ao impedir um assalto, ele surpreende a todos com suas habilidades de combate, suas verdadeiras intenções começam a ser questionadas e um plano maior é revelado.', 'Jason Statham, Scott Eastwood, Niamh Algar, Josh Hartnett', 0),
(6, 'John Wick 2', 'John Wick é forçado a deixar a aposentadoria mais uma vez por causa de uma promessa antiga e viaja para Roma, com o objetivo de ajudar um velho amigo a derrubar uma organização secreta, perigosa e mortal de assassinos procurados em todo o mundo.', 'Keanu Reeves, Ian McShane, Lance Reddick, Laurence Fishburne', 0),
(7, 'Joker', 'Isolado, intimidado e desconsiderado pela sociedade, o fracassado comediante Arthur Fleck inicia seu caminho como uma mente criminosa após assassinar três homens em pleno metrô. Sua ação inicia um movimento popular contra a elite de Gotham City, da qual Thomas Wayne é seu maior representante.', 'Joaquin Phoenix, Robert De Niro, Zazie Beetz, Frances Conroy', 0),
(8, 'Matrix', 'Da visionária realizadora Lana Wachowski chega-nos MATRIX RESURRECTIONS o tão aguardado 4º filme do inovador franchise que redefiniu o género. O novo filme reúne os protagonistas originais Keanu Reeves e Carrie-Anne Moss nos icónicos personagens que os tornaram famosos, Neo e Trinity.', 'Keanu Reeves, Laurence Fishburne, Jessica Henwick, Carrie‑Anne Moss', 0),
(9, 'Venom', 'O jornalista Eddie Brock desenvolve força e poder sobre-humanos quando seu corpo se funde com o alienígena Venom. Dominado pela raiva, Venom tenta controlar as novas e perigosas habilidades de Eddie.', 'Tom Hardy, Michelle Williams, Reid Scott, Riz Ahmed.', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `filmes`
--
ALTER TABLE `filmes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `filmes`
--
ALTER TABLE `filmes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
