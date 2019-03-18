-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2017 at 10:38 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collegexplorer`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id` int(11) NOT NULL,
  `answerdb` text NOT NULL,
  `user_name` varchar(19) NOT NULL,
  `qid` int(11) NOT NULL,
  `user_email` varchar(19) NOT NULL,
  `time` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='this is the table for storing the answer of the user ';

-- --------------------------------------------------------

--
-- Table structure for table `college_contact`
--

CREATE TABLE `college_contact` (
  `clg_id` int(11) NOT NULL,
  `college_name` varchar(43) DEFAULT NULL,
  `address` varchar(101) DEFAULT NULL,
  `number` varchar(30) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `college_contact`
--

INSERT INTO `college_contact` (`clg_id`, `college_name`, `address`, `number`, `email`) VALUES
(1, 'Goonj', 'J 93-Sarita Vihar-New Delhi 110076\n', '011-26972351', 'mail@goonj.org'),
(2, 'Smile Foundation', 'V 11, Level 1-Green Park Extension-New Delhi 110016\r\n', '91-11-43123700', 'info@smilefoundationindia.org'),
(3, 'HelpAge India', 'C 14, Qutab Institutional Area-New Delhi 110016\r\n', '011 41688955-56', 'headoffice@helpageindia.org');

-- --------------------------------------------------------

--
-- Table structure for table `college_list`
--

CREATE TABLE `college_list` (
  `clg_id` int(11) NOT NULL,
  `college_name` varchar(50) NOT NULL,
  `preface` text NOT NULL,
  `campus` text NOT NULL,
  `hostel` text NOT NULL,
  `ug` text NOT NULL,
  `ugpg` text NOT NULL,
  `pg` text NOT NULL,
  `forward` text NOT NULL,
  `procedure` text NOT NULL,
  `fests` text NOT NULL,
  `sports` text NOT NULL,
  `faculty` text NOT NULL,
  `senior` text NOT NULL,
  `placement` text NOT NULL,
  `hmess` text NOT NULL,
  `responsibility` text NOT NULL,
  `verdict` text NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_list`
--

INSERT INTO `college_list` (`clg_id`, `college_name`, `preface`, `campus`, `hostel`, `ug`, `ugpg`, `pg`, `forward`, `procedure`, `fests`, `sports`, `faculty`, `senior`, `placement`, `hmess`, `responsibility`, `verdict`, `latitude`, `longitude`) VALUES
(1, 'Goonj', 'The first to- Highlight clothing as a basic but unaddressed need which deserves a place on the development agenda. The first to- Reposition discard of urban households as a development resource for villages. Evolve the genesis of a parallel economy- which is not \'Cash\' based but\'Trash\' based. Evolve two powerful new currencies for development work, i.e., Material and Labor. GOONJ has the rare distinction of an equally vast reach among the masses in the villages as well as the cities across India.\r\n', 'To grow as an idea, not just as an organization across different regions, economies and countries. To use material as a tool to bring ignored issues to light, to talk about basic needs. To bring communities together, to make them aware of their own power, to increase people\'s participation, to change mindsets. To improve upon the present rural infrastructure. To value potential instead of ?xing targets. To turn the age old charitable act of giving old material into a development resource. We don\'t promote charity. To focus on the receiver\'s dignity instead of the donor\'s pride. We strongly believe that when people say we want to donate our used clothes- that it\'s actually discarding of something that has been used to the maximum. A strong belief in the wisdom of people we are working for; to ?nd solutions to their own problems. As far as possible not to spend money on our own infrastructure, furniture etc. instead use old material- right from table, chairs and computers to of?ce stationary. To make positive word of mouth spread as our biggest strength. Instead of trying to do everything on our own we use the strength of collaboration with various stake holders.\r\n', 'This organization was started in the year 1999. This NGO was started by a young journalist named Anish Gupta. This organization aims at providing clothing for every poor kids throughout the country. The corporate office of this organization is located at Delhi. Thus making it a very special organization and its placed in 3rd position.\r\n', 'https://goonj.org/wp-content/uploads/2017/GOONJAnnualReport2015-6.pdf\r\n', 'July\'16:CNBC TV18 Young Turks Change Agent awardto Anshu Gupta, July\'15:Ramon Magsaysay Award 2015 to Anshu Gupta, Nov\'14:Deutsche Bank Urban Age Award, Feb\'14: Listed by Fast Company among World\'s Top 10 Most Innovative Companies in India, Nov\'12: \'Social Entrepreneur of the year award\' by Schwab Foundation (sister concern of World Economic Forum) to Anshu Gupta., July\'12: Recognized as\'Game Changing Innovation\' by NASA & US State Dept, June\'12 GDN-Japanese Award for Most Innovative Development Project, Feb\'12: Edelgive Social honor for Not Just a Piece of Cloth (NJPC) initiative, Nov\'10: Anshu Gupta listed in Forbes as one of  India\'s most powerful rural entrepreneurs, May\'10: Nov\'09: ‘Lien i3 Challenge Award’ for the initiative Cloth for Work (CFW) award by Marico, March\'10: June\'09: Changemaker\'s Innovation Award for the initiative \'Not just a piece of cloth\' for \'Fair Practices\', March\'09: CNN IBN\'s\'Real Heros\' award to Anshu Gupta, March\'08: \'India NGO of the year\'award by Resource Alliance., May\'07: GOONJ\'s NJPC initiative won World Bank\'s Global Development Market Place Award, 2006: Changemaker\'s Innovation Award, for Not just a piece of cloth(NJPC) initiative, 2004: Ashoka Fellowship to Anshu Gupta, 2004: GOONJ won Changemaker’s Innovation Award for its School to School (S2S) initiative.\r\n', 'GOONJ has built up a network in remote parts of 21 states of India. The network has grown to over 250 partner groups like grassroots organizations, Ashoka Fellows, Indian Army, CBOS, Social Activists, Panchayat etc.\r\n', 'Education, Healthcare, Livelihood, Women Empowerment, Empowering grassroots, Child for Child, Special Support Programme and Disaster Response\r\n', '', '', '', '', '', '', '', '', '', 28.535115, 77.298002),
(2, 'Smile Foundation', 'Smile Foundation is to empower underprivileged children, youth and women through relevant education, innovative healthcare and market-focused livelihood programmes. Smile Foundation is to deploy best possible methodology and technology for achieving ideal SROI (social return on investment), to practice and promote good governance. To link business competitiveness of the corporate with social development initiatives; also to sensitize privileged children, youth and citizens in general to promote Civic Driven Change.\r\n', 'Work as a catalyst in bringing sustainable change in the lives of underprivileged children, youth and women, with a life-cycle approach of development. Enable the civil society across the world to engage proactively in the change process through the philosophy of civic driven change. Adopt highest standards of governance to emerge as a leading knowledge and technology driven, innovative and scalable international development organisation.\r\n', 'Smile Foundation was established in 2002 when a group of young corporate professionals came together to give back to the society in their own way. Driven by a passion and commitment to work with grassroots initiatives for effecting positive changes in the lives of less privileged children, they were convinced that education was the cornerstone of all progress. However, it did not take them long to realise that child education could not be done in isolation, and Smile Foundation adopted a holistic lifecycle approach, working for the welfare of children, their families and the community.\r\n', 'http://www.smilefoundationindia.org/annual-report/imfact-2016/index.html\r\n', 'Recognition for rendering valuable services under Social Responsibility by ICSI, NGO Leadership & Excellence Award 2015 by ABP News, Best NGO (Skill Development) for 2014-15 by ASSOCHAM, ICAI CSR Award for the Best CSR Project in Women Empowerment, Global CSR Excellence & Leadership Award 2014 by ABP News, Education Excellence Award 2013 by the Associated Chambers of Commerce and Industries (ASSOCHAM), Corporate Excellence Award for NGO Excellence 2013 by IPE (Institute of Public Enterprise), Healthcare Leadership Award 2012, Smile Foundation is an organisation in Special Consultative Status with the Economic and Social Council of United Nations since 2012, Quality Initiative Mission Award 2013, Represents India as nominated member of Together4Change Alliance, GE Healthcare - Modern Medicare Excellence Award,Asia-pacific Child Rights Awards, NTR Memorial Trust Award, Barclays Bank Chairman\'s Awards, I Am Kalam - 23 National and International Awards at 40 prestigious film festivals\n', 'Corporate Partnership : http://www.smilefoundationindia.org/cp-partners.html and Institutional Alliances : http://www.smilefoundationindia.org/institutional_alliances.html  \r\n', 'Education, Healthcare, Livelihood, Women Empowerment, Empowering grassroots, Child for Child, Special Support Programme and Disaster Response\r\n', '', '', '', '', '', '', '', '', '', 28.560646, 77.201485),
(3, 'HelpAge India', 'To work for the cause and care of disadvantaged older persons and to improve their quality of life.\r\n', 'HelpAge envisions a society where elderly have the Right to an active, healthy and dignified life. We are integrating our programmes and services, and consciously moving from welfare towards development and long term sustainability for seniors. We are working closely with Senior Citizen Associations and encouraging seniors to speak up for their own rights.\r\n', 'What began as a humble initiative from a rented two room office in New Delhi\'s Kasturba Gandhi Marg has now blossomed into an extensive operation spread across 26 states with 90 project offices in India and headquartered at the capital\'s Qutab Institutional Area. HelpAge India came into being in 1978 with Cecil Jackson Cole, founder of HelpAge International (UK), as its first President. Around this time two other men figured prominently in the HelpAge India story - John F. Pearson and Samson Danie Constant endowments, from the United Kingdom were something both Pearson and Cole felt would not be practical in the long run. They realized that they needed to think out of the box so that charities in the developing world could continue to have a regular inflow of funds so that they could make a positive and lasting impact. In March 1974, when Cole, visited India, an intrepid philanthropist named Samson Daniel approached him for financial help to set up a member organisation in Delhi. A far-sighted man, Cole instead offered to train him to raise funds. After a three month training course in London, Mr. Daniel and his wife returned to India and organized a sponsored walk with schoolchildren in Delhi. It was so successful that in 1975 HelpAge International recruited more staff to cover Bombay, Madras and Calcutta.\r\n', '\"HelpAge is known for its transparency. I think it\'s safe to say that the way our programs function, and the way we work as an organization has a lot of clarity and transparency. Nothing is hidden. It\'s all out there, in the public domain — for everyone to see,\" says Mathew Cherian, Chief Executive Officer, HelpAge India. HelpAge India has always worked to accurately account for and report the financial position of the Society, to promote sound financial management, and to provide quality services to the donors. The centralised finance function is performed from the Headquarters at Delhi and serves the needs of all the offices across the country. It ensures that all transactions adhere to the Society\'s policies and procedures, generally accepted accounting principles, and rules established by the statutory bodies. HelpAge India values a culture of accountability and integrity committed to doing the right thing. HelpAge India was among the pioneers in the sector to implement ERP based accounting software which enables strong internal controls and checks and balances to ensure that its financial reports are reliable, operations are effective and its activities compliant with applicable laws and regulations. The efforts of HelpAge were further recognized when it recieved a award for transparency and excellence in financial reporting in the not for profit sector by \"Institute of Chartered Accountants of India\" for three consecutive years. HelpAge was also awarded the Best Presented Accounts and Corporate Governance Disclosure Award 2010, in the NGO category by the South Asian Federation of Accountants. The following is the link for the annual report for 2016-17 : https://www.helpageindia.org/images/pdf/Annual-Report-2016-2017.pdf\r\n', 'CHAIRMAN\'S CHALLENGE AWARD 2016, NGO LEADERSHIP & EXCELLENCE AWARD 2015, TIMES SOCIAL IMPACT AWARD, VAYOSHRESHTHA SAMMAN (NATIONAL AWARD FOR SENIOR CITIZENS), THE LEADERSHIP & EXCELLENCE AWARD 2014, ICAI FOR FINANCIAL EXCELLENCE 2011-12, ICAI FOR FINANCIAL EXCELLENCE 2010-11, OUTSTANDING CONTRIBUTION TO SOCIAL WELFARE 2011, BEST NGO AWARD, HEALTHCARE LEADERSHIP AWARD 2012\n', 'HelpAge depends on donations and legacies to fund its services and activities. Resources are raised from: HelpAge\'s biggest supporters are its community of individual donors who contribute to the cause regularly, often without any expectation of returns, other than the satisfaction of doing a good deed. Among them are school children as young as five, motivated by teachers and parents, to do their bit for the elderly. More companies are now choosing to implement socially responsible policies in response to the increasing number of customers, stakeholders and employees who demand that businesses give something back to society. The internal benefits of CSR to companies are also becoming increasingly apparent: Companies engaged in CSR are reporting benefits to their reputation and their bottom line, Studies reveal a strong correlation between CSR activity and higher performance and Companies give in various ways - Cause Related Marketing, Sponsorship, Payroll giving, Gifts in kind, etc. Many corporates are fulfilling their CSR initiatives by coming forward to show their support by sponsoring events to help promote the cause and create awareness. Coming on board for such events also helps in showcasing the corporate as a sensitive and responsible member of society using their resources for the good of society. Many of our interventions such as the Restoration of Vision and the Sponsor A Grandparent programmes receive wide support from Trusts & Foundations across the country. Organisations such as the Palriwala Foundation are pillars of HelpAge. Some of HelpAge\'s biggest programmes are funded by the European Union, Disasters Emergency Committee (UK), Department for International Development (UK), Canadian International Development Agency (CIDA), US Agency for International Development, Japan Foundation, HelpAge International and Cordaid.\r\n', 'Mobile Healthcare, Cataract Surgeries, Physiocare, Cancer Care, Health Camps, Disaster Management, Active Aging Centres, Support a Gran, Livelihood Support, Old Age Homes, Elder Helplines and Research\r\n', '', '', '', '', '', '', '', '', '', 28.537073, 77.188588);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `name` varchar(70) NOT NULL,
  `contactno` varchar(153) NOT NULL,
  `email` varchar(35) NOT NULL,
  `msg` text NOT NULL COMMENT 'this is teh message given by the user.'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dates`
--

CREATE TABLE `dates` (
  `clg_id` int(11) NOT NULL,
  `college_name` varchar(43) DEFAULT NULL,
  `application` varchar(71) DEFAULT NULL,
  `exam` varchar(54) DEFAULT NULL,
  `result` varchar(47) DEFAULT NULL,
  `counselling` varchar(23) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `final_list`
--

CREATE TABLE `final_list` (
  `college_name` varchar(77) NOT NULL,
  `clg_id` int(11) NOT NULL,
  `rank` varchar(77) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `final_list`
--

INSERT INTO `final_list` (`college_name`, `clg_id`, `rank`, `id`) VALUES
('Goonj', 1, '11 4 6 7', 1),
('Smile Foundation', 2, '2 5 4 8', 2),
('HelpAge India', 3, '7 8 2 1', 3);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(22) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `username` varchar(70) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `firstname`, `lastname`, `email`, `username`, `password`) VALUES
(1, 'Raj', 'Choudhary', 'raj@gmail.com', 'raj', '65a1223dae83b8092c4edba0823a793c');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `qid` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `time` varchar(60) NOT NULL,
  `questiondb` text NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='this is the table for asking the question';

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`qid`, `user_name`, `time`, `questiondb`, `cid`) VALUES
(3, 'raj', '05th November,2017 | 2:50:52 PM', 'fsdsfd', 3);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `clg_id` int(11) NOT NULL,
  `user_name` varchar(99) NOT NULL,
  `review` text NOT NULL,
  `sno` int(11) NOT NULL,
  `time` varchar(44) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `email` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college_contact`
--
ALTER TABLE `college_contact`
  ADD PRIMARY KEY (`clg_id`);

--
-- Indexes for table `college_list`
--
ALTER TABLE `college_list`
  ADD PRIMARY KEY (`clg_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dates`
--
ALTER TABLE `dates`
  ADD PRIMARY KEY (`clg_id`);

--
-- Indexes for table `final_list`
--
ALTER TABLE `final_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `college_contact`
--
ALTER TABLE `college_contact`
  MODIFY `clg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `college_list`
--
ALTER TABLE `college_list`
  MODIFY `clg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dates`
--
ALTER TABLE `dates`
  MODIFY `clg_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `final_list`
--
ALTER TABLE `final_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
