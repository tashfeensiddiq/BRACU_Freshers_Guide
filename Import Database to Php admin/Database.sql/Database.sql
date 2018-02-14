--
-- Database: `final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(10) NOT NULL,
  `pin` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `pin`) VALUES
('sabit', 'sabit'),
('farhad', 'farhad');

-- --------------------------------------------------------

--
-- Table structure for table `course_book`
--

CREATE TABLE `course_book` (
  `course_id` varchar(7) NOT NULL,
  `rec_book` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_book`
--

INSERT INTO `course_book` (`course_id`, `rec_book`) VALUES
('CSE111', 'Head First Java'),
('CSE220', 'Data Structures and Algorithms'),
('CSE260', 'Digital Logic Design by Moris Mano'),
('CSE230', 'Discrete Mathematics and its Application'),
('CSE250', 'Introductory Circuit Analysis'),
('CSE251', 'Electronics Devices and Circuits by David Bell'),
('CSE341', 'Assembly Language by Marut'),
('CSE340', 'Computer Organisation');

-- --------------------------------------------------------

--
-- Table structure for table `course_link`
--

CREATE TABLE `course_link` (
  `course` varchar(7) NOT NULL,
  `links` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_link`
--

INSERT INTO `course_link` (`course`, `links`) VALUES
('CSE111', 'www.freecsebooks.com/cse111'),
('CSE220', 'www.freecsebooks.com/cse220'),
('CSE260', 'www.freecsebooks.com/cse260'),
('CSE230', 'www.freecsebooks.com/cse111'),
('CSE250', 'www.freecsebooks.com/cse250'),
('CSE251', 'www.freecsebooks.com/cse251'),
('CSE341', 'www.freecsebooks.com/cse341'),
('CSE340', 'www.freecsebooks.com/cse340');

-- --------------------------------------------------------

--
-- Table structure for table `date`
--

CREATE TABLE `date` (
  `course_id` varchar(10) NOT NULL,
  `exam_date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `date`
--

INSERT INTO `date` (`course_id`, `exam_date`) VALUES
('CSE111', 'DAY 1'),
('CSE220', 'DAY 2'),
('CSE260', 'DAY 3'),
('CSE230', 'DAY 4');

-- --------------------------------------------------------

--
-- Table structure for table `description`
--

CREATE TABLE `description` (
  `course_id` varchar(10) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `name` varchar(20) NOT NULL,
  `initial` varchar(20) NOT NULL,
  `room` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `taken_course` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`name`, `initial`, `room`, `email`, `taken_course`) VALUES
('Faraz', 'FAR', 'UB50401', 'faraz@bracu.ac.bd', 'CSE110'),
('Nabila Naushin', 'NUS', 'UB50405', 'nabila@bracu.ac.bd', 'CSE220'),
('Aniqa Nusrat Zereen', 'AIZ', 'UB50301', 'aniqa@bracu.ac.bd', 'CSE260'),
('Sonia Corraya', 'SOC', 'UB50407', 'sonia@bracu.ac.bd', 'cse230');

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE `lab` (
  `course_id` varchar(10) NOT NULL,
  `lab` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lab`
--

INSERT INTO `lab` (`course_id`, `lab`) VALUES
('CSE111', 'LAB'),
('CSE220', 'LAB'),
('CSE260', 'LAB'),
('CSE230', 'NO LAB');

-- --------------------------------------------------------

--
-- Table structure for table `post_rating`
--

CREATE TABLE `post_rating` (
  `rating_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `rating_number` int(11) NOT NULL,
  `total_points` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = Block, 0 = Unblock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post_rating`
--

INSERT INTO `post_rating` (`rating_id`, `post_id`, `rating_number`, `total_points`, `created`, `modified`, `status`) VALUES
(3, 1, 6, 24, '2016-07-26 05:33:23', '2016-07-26 08:09:54', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pre`
--

CREATE TABLE `pre` (
  `course_id` varchar(10) NOT NULL,
  `pre` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pre`
--

INSERT INTO `pre` (`course_id`, `pre`) VALUES
('CSE111', 'CSE110'),
('CSE220', 'CSE111'),
('CSE260', 'No prerequ'),
('CSE230', 'No prerequ');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `course_id` varchar(10) NOT NULL,
  `project` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`course_id`, `project`) VALUES
('CSE110', 'No project'),
('CSE220', 'No project'),
('CSE260', 'Has Projec'),
('CSE230', 'No project');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'sabit', '76d3989078c5272874c2d9677e740605'),
(2, 'brac', '7ebb8a9406c712ac3d2bb1051802392d'),
(3, 'cse370', '08932ca553c831ee697b00fec12d843e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post_rating`
--
ALTER TABLE `post_rating`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post_rating`
--
ALTER TABLE `post_rating`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
