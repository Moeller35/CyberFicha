-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Nov-2019 às 14:54
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atratividade`
--

CREATE TABLE `atratividade` (
  `id` int(11) NOT NULL,
  `cuidados_pessoais` varchar(45) DEFAULT NULL,
  `roupa_estilo` varchar(45) DEFAULT NULL,
  `ficha_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `auto_controle`
--

CREATE TABLE `auto_controle` (
  `id` int(11) NOT NULL,
  `interrogatorio` varchar(45) DEFAULT NULL,
  `intimidacao` varchar(45) DEFAULT NULL,
  `oratoria` varchar(45) DEFAULT NULL,
  `resistencia` varchar(45) DEFAULT NULL,
  `manha` varchar(45) DEFAULT NULL,
  `ficha_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `campanha`
--

CREATE TABLE `campanha` (
  `id` int(11) NOT NULL,
  `nome_campanha` varchar(45) NOT NULL,
  `descricao_campanha` text,
  `jogadores` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `empatia`
--

CREATE TABLE `empatia` (
  `id` int(11) NOT NULL,
  `percepcao` varchar(45) DEFAULT NULL,
  `entrevista` varchar(45) DEFAULT NULL,
  `lideranca` varchar(45) DEFAULT NULL,
  `seducao` varchar(45) DEFAULT NULL,
  `trato_social` varchar(45) DEFAULT NULL,
  `persuacao_labia` varchar(45) DEFAULT NULL,
  `atuacao` varchar(45) DEFAULT NULL,
  `ficha_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ficha`
--

CREATE TABLE `ficha` (
  `id` int(11) NOT NULL,
  `nome_personagem` varchar(45) NOT NULL,
  `papel` int(11) NOT NULL,
  `inteligencia` int(11) NOT NULL,
  `ref` int(11) NOT NULL,
  `tec` int(11) NOT NULL,
  `aucon` int(11) NOT NULL,
  `atr` int(11) NOT NULL,
  `sor` int(11) NOT NULL,
  `mov` int(11) NOT NULL,
  `tco` int(11) NOT NULL,
  `emp` int(11) NOT NULL,
  `correr` int(11) NOT NULL,
  `saltar` int(11) NOT NULL,
  `levantar` int(11) NOT NULL,
  `cabeca` int(11) DEFAULT NULL,
  `torso` int(11) DEFAULT NULL,
  `bracod` int(11) DEFAULT NULL,
  `bracoe` int(11) DEFAULT NULL,
  `pernad` int(11) DEFAULT NULL,
  `pernae` int(11) DEFAULT NULL,
  `vit` varchar(10) NOT NULL,
  `mtc` varchar(10) NOT NULL,
  `equipamentos` varchar(500) DEFAULT NULL,
  `armas` varchar(500) DEFAULT NULL,
  `implantes` text,
  `rep` varchar(45) DEFAULT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ficha_campanha`
--

CREATE TABLE `ficha_campanha` (
  `ficha_id` int(11) NOT NULL,
  `campanha_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `habilidades_especiais`
--

CREATE TABLE `habilidades_especiais` (
  `id` int(11) NOT NULL,
  `autoridade` varchar(45) DEFAULT NULL,
  `lideranca_carismatica` varchar(45) DEFAULT NULL,
  `nocao_combate` varchar(45) DEFAULT NULL,
  `credibilidade` varchar(45) DEFAULT NULL,
  `familia` varchar(45) DEFAULT NULL,
  `interface` varchar(45) DEFAULT NULL,
  `reparos_improvisados` varchar(45) DEFAULT NULL,
  `tecnologia_medica` varchar(45) DEFAULT NULL,
  `recursos` varchar(45) DEFAULT NULL,
  `negociar` varchar(45) DEFAULT NULL,
  `ficha_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem_personagem`
--

CREATE TABLE `imagem_personagem` (
  `id` int(11) NOT NULL,
  `imagem_personagem` blob,
  `ficha_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `inteligencia`
--

CREATE TABLE `inteligencia` (
  `id` int(11) NOT NULL,
  `contabilidade` varchar(45) DEFAULT NULL,
  `antropologia` varchar(45) DEFAULT NULL,
  `atencao` varchar(45) DEFAULT NULL,
  `biologia` varchar(45) DEFAULT NULL,
  `botanica` varchar(45) DEFAULT NULL,
  `quimica` varchar(45) DEFAULT NULL,
  `composicao` varchar(45) DEFAULT NULL,
  `diagnose` varchar(45) NOT NULL,
  `educacao` varchar(45) DEFAULT NULL,
  `especialista` varchar(45) DEFAULT NULL,
  `jogo` varchar(45) DEFAULT NULL,
  `geologia` varchar(45) DEFAULT NULL,
  `esconder` varchar(45) DEFAULT NULL,
  `historia` varchar(45) DEFAULT NULL,
  `idioma` varchar(45) DEFAULT NULL,
  `biblioteca` varchar(45) DEFAULT NULL,
  `matematica` varchar(45) DEFAULT NULL,
  `fisica` varchar(45) DEFAULT NULL,
  `programacao` varchar(45) DEFAULT NULL,
  `rastreamento` varchar(45) DEFAULT NULL,
  `acoes` varchar(45) DEFAULT NULL,
  `sistemas` varchar(45) DEFAULT NULL,
  `pedagogia` varchar(45) DEFAULT NULL,
  `sobrevivencia` varchar(45) DEFAULT NULL,
  `zoologia` varchar(45) DEFAULT NULL,
  `ficha_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `reflexos`
--

CREATE TABLE `reflexos` (
  `id` int(11) NOT NULL,
  `arqueirismo` varchar(45) DEFAULT NULL,
  `atletismo` varchar(45) DEFAULT NULL,
  `briga` varchar(45) DEFAULT NULL,
  `danca` varchar(45) DEFAULT NULL,
  `esquivar` varchar(45) DEFAULT NULL,
  `conducao` varchar(45) DEFAULT NULL,
  `esgrima` varchar(45) DEFAULT NULL,
  `armas_curtas` varchar(45) DEFAULT NULL,
  `armas_pesadas` varchar(45) DEFAULT NULL,
  `artes_marciais` varchar(45) DEFAULT NULL,
  `luta_gr` varchar(45) DEFAULT NULL,
  `armas_brancas` varchar(45) DEFAULT NULL,
  `motocicleta` varchar(45) DEFAULT NULL,
  `op_maq_peseda` varchar(45) DEFAULT NULL,
  `pilotagem_giro` varchar(45) DEFAULT NULL,
  `asa_fixa` varchar(45) DEFAULT NULL,
  `dirigivel` varchar(45) DEFAULT NULL,
  `veic_imp_vet` varchar(45) DEFAULT NULL,
  `fuzil` varchar(45) DEFAULT NULL,
  `furtividade` varchar(45) DEFAULT NULL,
  `submetralhadora` varchar(45) DEFAULT NULL,
  `ficha_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tecnica`
--

CREATE TABLE `tecnica` (
  `id` int(11) NOT NULL,
  `aerotec` varchar(45) DEFAULT NULL,
  `avtec` varchar(45) DEFAULT NULL,
  `tecnologia_basica` varchar(45) DEFAULT NULL,
  `tanq_criogenicos` varchar(45) DEFAULT NULL,
  `ciberterminal` varchar(45) DEFAULT NULL,
  `cibertecnologia` varchar(45) DEFAULT NULL,
  `demolicoes` varchar(45) DEFAULT NULL,
  `disfarce` varchar(45) DEFAULT NULL,
  `eletronica` varchar(45) DEFAULT NULL,
  `seguranca_eletronica` varchar(45) DEFAULT NULL,
  `primeiros_socorros` varchar(45) DEFAULT NULL,
  `falsificacao` varchar(45) DEFAULT NULL,
  `giro_tec` varchar(45) DEFAULT NULL,
  `pintura_desenho` varchar(45) DEFAULT NULL,
  `fotografia` varchar(45) DEFAULT NULL,
  `medicamentos` varchar(45) DEFAULT NULL,
  `arrombamentos` varchar(45) DEFAULT NULL,
  `punga` varchar(45) DEFAULT NULL,
  `instrumentos` varchar(45) DEFAULT NULL,
  `armeiro` varchar(45) DEFAULT NULL,
  `ficha_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_corporal`
--

CREATE TABLE `tipo_corporal` (
  `id` int(11) NOT NULL,
  `resistencia` varchar(45) DEFAULT NULL,
  `feitos_forca` varchar(45) DEFAULT NULL,
  `natacao` varchar(45) DEFAULT NULL,
  `ficha_id` int(11) NOT NULL,
  `ficha_usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `nickname` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_campanha`
--

CREATE TABLE `usuario_campanha` (
  `usuario_id` int(11) NOT NULL,
  `campanha_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atratividade`
--
ALTER TABLE `atratividade`
  ADD PRIMARY KEY (`id`,`ficha_id`),
  ADD KEY `fk_atratividade_ficha1_idx` (`ficha_id`);

--
-- Indexes for table `auto_controle`
--
ALTER TABLE `auto_controle`
  ADD PRIMARY KEY (`id`,`ficha_id`),
  ADD KEY `fk_auto_controle_ficha1_idx` (`ficha_id`);

--
-- Indexes for table `campanha`
--
ALTER TABLE `campanha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `empatia`
--
ALTER TABLE `empatia`
  ADD PRIMARY KEY (`id`,`ficha_id`),
  ADD KEY `fk_empatia_ficha1_idx` (`ficha_id`);

--
-- Indexes for table `ficha`
--
ALTER TABLE `ficha`
  ADD PRIMARY KEY (`id`,`usuario_id`),
  ADD KEY `fk_ficha_usuario1_idx` (`usuario_id`);

--
-- Indexes for table `ficha_campanha`
--
ALTER TABLE `ficha_campanha`
  ADD PRIMARY KEY (`ficha_id`,`campanha_id`),
  ADD KEY `fk_ficha_has_campanha_campanha1_idx` (`campanha_id`),
  ADD KEY `fk_ficha_has_campanha_ficha1_idx` (`ficha_id`);

--
-- Indexes for table `habilidades_especiais`
--
ALTER TABLE `habilidades_especiais`
  ADD PRIMARY KEY (`id`,`ficha_id`),
  ADD KEY `fk_habilidades_especiais_ficha1_idx` (`ficha_id`);

--
-- Indexes for table `imagem_personagem`
--
ALTER TABLE `imagem_personagem`
  ADD PRIMARY KEY (`id`,`ficha_id`),
  ADD KEY `fk_table1_ficha1_idx` (`ficha_id`);

--
-- Indexes for table `inteligencia`
--
ALTER TABLE `inteligencia`
  ADD PRIMARY KEY (`id`,`ficha_id`),
  ADD KEY `fk_inteligencia_ficha1_idx` (`ficha_id`);

--
-- Indexes for table `reflexos`
--
ALTER TABLE `reflexos`
  ADD PRIMARY KEY (`id`,`ficha_id`),
  ADD KEY `fk_reflexos_ficha1_idx` (`ficha_id`);

--
-- Indexes for table `tecnica`
--
ALTER TABLE `tecnica`
  ADD PRIMARY KEY (`id`,`ficha_id`),
  ADD KEY `fk_tecnica_ficha1_idx` (`ficha_id`);

--
-- Indexes for table `tipo_corporal`
--
ALTER TABLE `tipo_corporal`
  ADD PRIMARY KEY (`id`,`ficha_id`,`ficha_usuario_id`),
  ADD KEY `fk_tipo_corporal_ficha1_idx` (`ficha_id`,`ficha_usuario_id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario_campanha`
--
ALTER TABLE `usuario_campanha`
  ADD PRIMARY KEY (`usuario_id`,`campanha_id`),
  ADD KEY `fk_usuario_has_campanha_campanha1_idx` (`campanha_id`),
  ADD KEY `fk_usuario_has_campanha_usuario_idx` (`usuario_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atratividade`
--
ALTER TABLE `atratividade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `auto_controle`
--
ALTER TABLE `auto_controle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `campanha`
--
ALTER TABLE `campanha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `empatia`
--
ALTER TABLE `empatia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ficha`
--
ALTER TABLE `ficha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `habilidades_especiais`
--
ALTER TABLE `habilidades_especiais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `imagem_personagem`
--
ALTER TABLE `imagem_personagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inteligencia`
--
ALTER TABLE `inteligencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reflexos`
--
ALTER TABLE `reflexos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tecnica`
--
ALTER TABLE `tecnica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tipo_corporal`
--
ALTER TABLE `tipo_corporal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `atratividade`
--
ALTER TABLE `atratividade`
  ADD CONSTRAINT `fk_atratividade_ficha1` FOREIGN KEY (`ficha_id`) REFERENCES `ficha` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `auto_controle`
--
ALTER TABLE `auto_controle`
  ADD CONSTRAINT `fk_auto_controle_ficha1` FOREIGN KEY (`ficha_id`) REFERENCES `ficha` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `empatia`
--
ALTER TABLE `empatia`
  ADD CONSTRAINT `fk_empatia_ficha1` FOREIGN KEY (`ficha_id`) REFERENCES `ficha` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `ficha`
--
ALTER TABLE `ficha`
  ADD CONSTRAINT `fk_ficha_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `ficha_campanha`
--
ALTER TABLE `ficha_campanha`
  ADD CONSTRAINT `fk_ficha_has_campanha_campanha1` FOREIGN KEY (`campanha_id`) REFERENCES `campanha` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ficha_has_campanha_ficha1` FOREIGN KEY (`ficha_id`) REFERENCES `ficha` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `habilidades_especiais`
--
ALTER TABLE `habilidades_especiais`
  ADD CONSTRAINT `fk_habilidades_especiais_ficha1` FOREIGN KEY (`ficha_id`) REFERENCES `ficha` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `imagem_personagem`
--
ALTER TABLE `imagem_personagem`
  ADD CONSTRAINT `fk_table1_ficha1` FOREIGN KEY (`ficha_id`) REFERENCES `ficha` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `inteligencia`
--
ALTER TABLE `inteligencia`
  ADD CONSTRAINT `fk_inteligencia_ficha1` FOREIGN KEY (`ficha_id`) REFERENCES `ficha` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `reflexos`
--
ALTER TABLE `reflexos`
  ADD CONSTRAINT `fk_reflexos_ficha1` FOREIGN KEY (`ficha_id`) REFERENCES `ficha` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tecnica`
--
ALTER TABLE `tecnica`
  ADD CONSTRAINT `fk_tecnica_ficha1` FOREIGN KEY (`ficha_id`) REFERENCES `ficha` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tipo_corporal`
--
ALTER TABLE `tipo_corporal`
  ADD CONSTRAINT `fk_tipo_corporal_ficha1` FOREIGN KEY (`ficha_id`,`ficha_usuario_id`) REFERENCES `ficha` (`id`, `usuario_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuario_campanha`
--
ALTER TABLE `usuario_campanha`
  ADD CONSTRAINT `fk_usuario_has_campanha_campanha1` FOREIGN KEY (`campanha_id`) REFERENCES `campanha` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_has_campanha_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
