-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2018 at 01:08 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `libro`
--

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `book_id` int(255) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `book_cover` varchar(255) NOT NULL,
  `book_writer` varchar(255) NOT NULL,
  `book_type` varchar(255) NOT NULL,
  `book_detail` varchar(500) NOT NULL,
  `book_genre` varchar(255) NOT NULL,
  `book_loc` varchar(255) NOT NULL,
  `rank_point` float NOT NULL,
  `clicks` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`book_id`, `book_name`, `book_cover`, `book_writer`, `book_type`, `book_detail`, `book_genre`, `book_loc`, `rank_point`, `clicks`) VALUES
(1, 'Harry Potter and the cursed child', 'book_covers/11524866554.jpg', 'J K Rowling', 'Novel/Hardback', 'Harry Potter and the Cursed Child is a two-part stage play written by Jack Thorne based on an original new story by Thorne, J. K. Rowling and John Tiffany. ', 'Fantasy', 'book/test.pdf', 6.1, 10),
(2, 'Harry Potter And The Chamber Of Secrets', 'book_covers/21524870191.jpg', 'J K Rowling', 'Fantasy Novel', 'Harry Potter and the Chamber of Secrets is a fantasy novel written by British author J. K. Rowling and the second novel in the Harry Potter series. The plot follows Harry\'s second year at Hogwarts School of Witchcraft and Wizardry, during which a series of messages on the walls of the school\'s corridors warn that the \"Chamber of Secrets\" has been opened and that the \"heir of Slytherin\" would kill all pupils who do not come from all-magical families.', 'Fantasy', 'book/test.pdf', 2.9, 2),
(3, 'Im Not Your Perfect Mexican Daughter', 'book_covers/11525106146.jpg', 'Erika L Sanchez', 'Novel/Paper Back', 'The Absolutely True Diary of a Part-Time Indian meets Jane the Virgin in this poignant but often laugh-out-loud funny contemporary YA about losing a sister and finding yourself amid the pressures, expectations, and stereotypes of growing up in a Mexican-American home. ', 'Novel', 'book/test.pdf', 1.7, 5),
(4, 'A Game Of Thrones', 'book_covers/11525371897.jpg', 'George R R Martin', 'Novel/Paper Back', 'A Game of Thrones is the first novel in A Song of Ice and Fire, a series of fantasy novels by American author George R. R. Martin. It was first published on August 1, 1996.', 'Fantasy', 'book/test.pdf', 1.1, 3),
(5, 'The Fault In Our Stars', 'book_covers/11525372330.jpg', 'Jhon Green', 'Novel/Paper Back', 'The Fault in Our Stars. Brought to us by a master of young adult literature, The Fault in Our Stars will have you laughing, weeping, and perhaps even depressed for a few days after you read it.', 'Young Adult Literature', 'book/test.pdf', 0.9, 3),
(6, 'Harry Potter And The Order Of Pheonix', 'book_covers/11525373961.jpg', 'J K Rowling', 'Childern/Novel/Hardback', 'Harry Potter and the Order of the Phoenix is a fantasy novel written by J. K. Rowling and the fifth novel in the Harry Potter series. It follows Harry Potter\'s struggles through his fifth year at Hogwarts School of Witchcraft and Wizardry, including the surreptitious return of the antagonist Lord Voldemort,', 'Fantasy Novel', 'book/test.pdf', 0.8, 2),
(7, 'IT', 'book_covers/11525374855.jpg', 'Stephen King', 'Horror/Mystery/Fantasy', 'The story follows the experiences of seven children as they are terrorized by an entity that exploits the fears and phobias of its victims to disguise itself while hunting its prey. It primarily appears in the form of a clown to attract its preferred prey of young children.', 'Horror', 'book/test.pdf', 0.3, 1),
(8, 'Looking For Alaska', 'book_covers/11525375057.jpg', 'Jhon Green', 'Novel/Paper Back', 'Miles Halter, obsessed with last words, leaves Florida to attend Culver Creek Preparatory High School in Alabama for his junior year, quoting FranÃ§ois Rabelais\'s last words: \"I go to seek a Great Perhaps\".[12] Miles\' new roommate, Chip \"The Colonel\" Martin, ironically nicknames Miles \"Pudge\" and introduces Pudge to his friends: hip-hop emcee Takumi Hikohito and Alaska Young, a beautiful but emotionally unstable girl..', 'Young adult fiction', 'book/test.pdf', 0.6, 2),
(9, 'Harry Potter and the Philosopher\'s Stone', 'book_covers/161525971491.jpeg', 'J K Rowling', 'Fantasy Novel', 'Harry Potter and the Philosopher\'s Stone is a fantasy novel written by British author J. K. Rowling. It is the first novel in the Harry Potter series and Rowling\'s debut novel, first published in 1997 by Bloomsbury. It was published in the United States as Harry Potter and the Sorcerer\'s Stone by Scholastic Corporation in 1998.', 'Fantasy Novel', 'book/1525971491stone.pdf', 0, 0),
(10, 'Harry Potter and the Deathly Hallows', 'book_covers/161525971675.jpeg', 'J K Rowling', 'Fantasy Novel', 'Harry Potter and the Deathly Hallows is a fantasy novel written by British author J. K. Rowling and the seventh and final novel of the Harry Potter series.', 'Fantasy Novel', 'book/15259716751525558777J. K. Rowling - Harry Potter and the Deathly Hallows.pdf', 1.8, 4),
(11, 'Harry Potter and the Goblet of Fire', 'book_covers/161525971780.jpeg', 'J K Rowling', 'Fantasy Novel', 'Harry Potter and the Goblet of Fire is a fantasy book written by British author J. K. Rowling and the fourth novel in the Harry Potter series. It follows Harry Potter, a wizard in his fourth year at Hogwarts School of Witchcraft and Wizardry', 'Fantasy Novel', 'book/1525971780J. K. Rowling - Harry Potter and the Goblet of Fire.pdf', 1, 2),
(12, 'Harry Potter and the Half Blood Prince', 'book_covers/161525971878.jpeg', 'J K Rowling', 'Fantasy Novel', 'Harry Potter and the Half-Blood Prince is a fantasy novel written by British author J. K. Rowling and the sixth and penultimate novel in the Harry Potter series. Set during protagonist Harry Potter\'s sixth year at Hogwarts, the novel explores the past of Harry\'s nemesis, Lord Voldemort, and Harry\'s preparations for the final battle', 'Fantasy Novel', 'book/1525971878J. K. Rowling - Harry Potter and the Half-Blood Prince.pdf', 0.5, 1),
(13, 'Harry Potter and the Prisoner Of Azkaban', 'book_covers/161525972019.jpeg', 'J K Rowling', 'Fantasy Novel', 'Harry Potter and the Prisoner of Azkaban is a fantasy novel written by British author J. K. Rowling and the third in the Harry Potter series. The book follows Harry Potter, a young wizard, in his third year at Hogwarts School of Witchcraft and Wizardry.', 'Fantasy Novel', 'book/1525972019J. K. Rowling - Harry Potter and the Prisoner of Azkaban.pdf', 0.5, 1),
(14, 'How To Be The Perfect Dutch', 'book_covers/161525972172.jpg', 'Kathian Bands', 'Lifestyle', 'Details', 'Biography Fiction ', 'book/1525972172test.pdf', 0.9, 1),
(15, 'A Game Of Thrones', 'book_covers/161525972326.jpg', 'George R. R. Martin', 'Fantasy Novel', 'A Game of Thrones is the first novel in A Song of Ice and Fire, a series of fantasy novels by American author George R. R. Martin. It was first published on August 1, 1996.', 'Fantasy Novel', 'book/1525972326test.pdf', 0, 0),
(16, 'Misery', 'book_covers/161525972404.jpg', 'Stephen King', 'Horror/Mistry', 'Miles Halter, obsessed with last words, leaves Florida to attend Culver Creek Preparatory High School in Alabama for his junior year, quoting FranÃ§ois Rabelais\'s last words: \"I go to seek a Great Perhaps\".[12] Miles\' new roommate, Chip \"The Colonel\" Martin, ironically nicknames Miles \"Pudge\" and introduces Pudge to his friends: hip-hop emcee Takumi Hikohito and Alaska Young, a beautiful but emotionally unstable girl..', 'Horror Fiction', 'book/15259724041525830321Stephen_King_-_Misery__1987_.pdf', 2, 6),
(17, 'The Great Gatsby', 'book_covers/161525972661.jpg', 'F Scott Fitzgerald', 'Paperback/Novel/Ficton', 'The Great Gatsby\" is a novel by the American author F. Scott Fitzgerald. The story takes place in 1922, during the Roaring Twenties, a time of prosperity in the United States after World War I. The book received critical acclaim and is generally considered Fitzgerald\'s best work. It is also widely regarded as a \"Great American Novel\" and a literary classic, capturing the essence of an era. The Modern Library named it the second best English language novel of the 20th century. The novel takes pla', 'literary fiction', 'book/1525972661test.pdf', 0, 0),
(18, 'The Oxford Handbook of Science Fiction', 'book_covers/161525972820.jpg', ' Rob Latham', 'Hardback', 'The Oxford Handbook of Science Fiction attempts to descry the historical and cultural contours of SF in the wake of technoculture studies. Rather than treating the genre as an isolated aesthetic formation, it examines SFâ€™s many lines of cross-pollination with technocultural realities since its inception in the nineteenth century, showing how SFâ€™s unique history and subcultural identity have been constructed in ongoing dialogue with popular discourses of science and technology. The volume con', 'Science Fiction', 'book/15259728201525559624The Oxford Handbook of Science Fiction.pdf', 1.3, 3),
(19, 'A Brief History of Time', 'book_covers/161525972939.jpeg', 'Stephen Hawking', 'Paperback', 'A Brief History of Time (1988) is a book written by the scientist and mathematician Stephen Hawking. This book is about physics, or the study of laws that predict how things work in the universe. It is also about cosmology, or how we see the universe and how the universe exists', 'Academic Litrature', 'book/15259729391525632866stephen_hawking_a_brief_history_of_time.pdf', 1.4, 4),
(20, 'Lord Of The Ring', 'book_covers/161525973077.jpg', 'J R R Tolkien', 'Epic/Novel/Hardback', 'Thousands of years before the events of the novel, the Dark Lord Sauron had forged the One Ring to rule the other Rings of Power and corrupt those who wore them: the leaders of Men, Elves and Dwarves. Sauron was defeated by an alliance of Elves and Men led by Gil-galad and Elendil, respectively. In the final battle, Isildur, son of Elendil, cut the One Ring from Sauron\'s finger, causing Sauron to lose his physical form. Isildur claimed the Ring as an heirloom for his line, but when he was later ', 'Fantasy Epic Novel', 'book/15259730771525635481-.pdf', 0, 0),
(21, 'To kill a Mockingbird', 'book_covers/161525973214.JPG', 'Harper Lee', 'Paperback', 'To Kill a Mockingbird is a novel by Harper Lee published in 1960. It was immediately successful, winning the Pulitzer Prize, and has become a classic of modern American literature. The plot and characters are loosely based on Lee\'s observations of her family, her neighbors and an event that occurred near her hometown of Monroeville, Alabama, in 1936, when she was 10 years old. The story is told by the six-year-old Jean Louise Finch.', 'Fantasy Horror Gothic', 'book/1525973214 To Kill a Mockingbird-Abridged Version.pdf', 0.3, 1),
(22, 'Flamingo', 'book_covers/161525973280.jpg', 'NCERT', 'Acedemic', 'Course book fro NCERT class 12th CBSE students ', 'Academic Litrature', 'book/15259732801525828132Chap-01 final.pdf', 0.6, 2),
(23, 'Pride and Prejudice', 'book_covers/161525973343.jpg', 'Jane Austen', 'Paperback/Novel/Ficton', 'Pride and Prejudice is a romantic novel by Jane Austen, first published in 1813.Mr. Bennet of the Longbourn estate has five daughters, but his property is entailed, meaning that none of the girls can inherit it. His wife has no fortune, so it is imperative that at least one of the girls marry well in order to support the others upon his death. Jane Austen\'s opening line, â€œIt is a truth universally acknowledged that a single man in possession of a good fortune must be in want of a wife\", is a s', 'Fantasy love Novel', 'book/1525973343pride-and-prejudice.pdf', 0, 0),
(24, 'English Grammar Understanding the basics', 'book_covers/161525973466.jpg', 'Robert M Vago', 'Acedemic', 'This book teaches you rules of English grammar easily and with fun', 'Academic', 'book/1525973466cambridge-english-grammar-understanding-the-basics.pdf', 0, 0),
(25, 'Zits from Python Pit', 'book_covers/11526013666.jpg', 'M. D. Payne', 'Paper Back', 'The boys continue their African adventure as a mysterious calling leads them to the heart of the Congo in search of a \'lost\' group of monsters', 'Children Fantasy', 'book/1526013666MJ06. Zits from Python Pit - M. D. Payne.pdf', 0, 0),
(26, 'Laws of Power', 'book_covers/11526014808.jpg', 'Greene Robert', 'Paper Back', 'The 48 Laws of Power is the first book by American author Robert Greene. The book is a bestseller, selling over 1.2 million copies in the United States, and is popular with prison inmates and celebrities.', 'Fiction', 'book/152601480848 Laws of Power - Greene_ Robert.pdf', 0.3, 1),
(27, 'A Brief History of Time', 'book_covers/11526015536.jpg', 'Stephen Hawking', 'Paper Back', 'A Brief History of Time: From the Big Bang to Black Holes is a popular-science book on cosmology by British physicist Stephen Hawking. It was first published in 1988.', 'Cosmology Academic Literature', 'book/1526015536A Brief History of Time - Hawking_ Stephen.pdf', 0, 0),
(28, 'A Caribbean Mystery', 'book_covers/11526015679.jpg', 'Agatha Christie', 'Paper Back', 'A Caribbean Mystery is a work of detective fiction by Agatha Christie, first published in the UK by the Collins Crime Club on 16 November 1964 and in the United States by Dodd, Mead and Company the following year.', 'Crime Fiction', 'book/1526015679A Caribbean Mystery - Christie_ Agatha.pdf', 0, 0),
(29, 'A New Earth', 'book_covers/11526015872.jpg', 'Eckhart Tolle', 'Paper Back', 'A New Earth: Awakening to Your Lifeâ€™s Purpose is a self-help book by Eckhart Tolle. First published in 2005, it sold 5 million copies in North America by 2009.', 'Psychology', 'book/1526015872A New Earth - Tolle_ Eckhart.pdf', 0, 0),
(30, 'A Clockwork Orange', 'book_covers/11526016136.jpg', 'Burgess Anthony', 'Paper Back', 'Alex, a psychopathic delinquent, is imprisoned for murder and rape. In order to reduce his sentence, he volunteers for an experimental therapy conducted by the government, but it goes askew.', 'Psychology', 'book/1526016136A Clockwork Orange - Burgess_ Anthony.pdf', 0, 0),
(31, 'A God in Ruins', 'book_covers/11526016370.jpg', 'Uris Leon', 'Paper Back', 'A God in Ruins, the ninth novel by Kate Atkinson, was published in 2015. The main character, Teddy Todd is the younger brother of Ursula Todd, the protagonist in Atkinson\'s 2013 novel, Life After Life.', 'Fiction', 'book/1526016370A God In Ruins - Uris_ Leon.pdf', 0, 0),
(32, 'A Clossal Failure of Common Sense', 'book_covers/11526016713.jpg', 'McDonald_G. Lawrence', 'Paper Back', 'A Colossal Failure of Common Sense: The Inside Story of the Collapse of Lehman Brothers is a 2009 non-fiction book written by Lawrence G. McDonald and Patrick Robinson', 'Fiction', 'book/1526016713A Colossal Failure of Common Sense_ The - McDonald_ G. Lawrence.pdf', 0, 0),
(33, 'Outliers- The Story of Success', 'book_covers/11526016948.jpg', 'Gladwell Malcolm', 'Paper Back', 'Outliers: The Story of Success is the third non-fiction book written by Malcolm Gladwell and published by Little, Brown and Company on November 18, 2008. In Outliers, Gladwell examines the factors that contribute to high levels of success.', 'Fiction', 'book/1526016948Outliers_ The Story of Success - Gladwell_ Malcolm.pdf', 0, 0),
(34, 'And Then There were None', 'book_covers/11526017271.jpg', 'Agatha Christie', 'Paper Back', 'And Then There Were None is a mystery novel by English writer Agatha Christie, widely considered her masterpiece and described by her as the most difficult of her books to write.', 'Mystery', 'book/1526017271And Then There Were None - Christie_ Agatha.pdf', 0, 0),
(35, 'Hauted', 'book_covers/11526017455.jpg', 'Chuck Palahniuk', 'Paper Back', 'Haunted is a 2005 novel by Chuck Palahniuk. The plot is a frame story for a series of 23 short stories, most preceded by a free verse poem', 'Horror Fiction', 'book/1526017455Haunted - Palahniuk_ Chuck.pdf', 0.3, 1),
(36, 'Diary', 'book_covers/11526017674.jpg', 'Palahniuk_ Chuck', 'Paper Back', 'Diary is a 2003 novel by Chuck Palahniuk. The book is written like a diary. Its protagonist is Misty Wilmot, a once-promising young artist currently working as a waitress in a hotel. Her husband, a contractor, is in a coma after a suicide attempt.', 'Horror Fiction', 'book/1526017674Diary - Palahniuk_ Chuck.pdf', 0, 0),
(37, 'Change of Heart', 'book_covers/11526017889.jpg', 'Jodi Picoult', 'Paper Back', 'Change of Heart is a novel by Jodi Picoult published in 2008', 'Fiction', 'book/1526017889Change of Heart - Picoult_ Jodi.pdf', 0.3, 1),
(38, 'A Time to Kill', 'book_covers/11526018042.jpg', 'John Grisham', 'Paper Back', 'A Time to Kill is a 1988 legal thriller by John Grisham. It was Grisham\'s first novel. The novel was rejected by many publishers before Wynwood Press eventually gave it a modest 5,000-copy printing.', 'Mystery', 'book/1526018042A Time to Kill - Grisham_ John.pdf', 0, 0),
(39, 'Under The Dome', 'book_covers/11526018202.jpg', 'Stephen King', 'Paper Back', 'Under the Dome is a science fiction novel by American writer Stephen King, published in November 2009. It is the 58th book published by Stephen King and it was his 48th novel.', 'Fiction', 'book/1526018202Under the Dome - King_ Stephen.pdf', 0.6, 2),
(40, 'Ender in Exile', 'book_covers/11526018377.jpg', 'Orson Scott Card', 'Paper Back', 'Ender in Exile is a science fiction novel by Orson Scott Card, part of the Ender\'s Game series, published on November 11, 2008. It takes place between the two award-winning novels: Ender\'s Game and Speaker for the Dead.', 'Fiction', 'book/1526018377Ender in Exile - Card_ Orson Scott.pdf', 0.3, 1),
(41, 'An Appointment with Death', 'book_covers/11526018717.jpg', 'Agatha Christie', 'Paper Back', 'Appointment with Death is a work of detective fiction by Agatha Christie, first published in the UK by the Collins Crime Club on 2 May 1938 and in the US by Dodd, Mead and Company later in the same year.', 'Crime Fiction', 'book/1526018717Appointment with Death - Christie_ Agatha.pdf', 0.9, 3),
(42, 'True Beliver', 'book_covers/11526019136.jpg', 'Sparks Nicholas', 'Paper Back', 'True Believer is a 2005 romance novel written by American author Nicholas Sparks.', 'Fiction', 'book/1526019136True Believer - Sparks_ Nicholas.pdf', 1.2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `shelf`
--

CREATE TABLE `shelf` (
  `shelf_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `book_name` varchar(255) DEFAULT NULL,
  `book_cover` varchar(255) NOT NULL,
  `book_writer` varchar(255) DEFAULT NULL,
  `book_type` varchar(255) DEFAULT NULL,
  `book_detail` varchar(1000) DEFAULT NULL,
  `book_id` int(255) NOT NULL,
  `book_loc` varchar(255) NOT NULL,
  `book_genre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shelf`
--

INSERT INTO `shelf` (`shelf_id`, `user_id`, `book_name`, `book_cover`, `book_writer`, `book_type`, `book_detail`, `book_id`, `book_loc`, `book_genre`) VALUES
(675, 9, 'Im Not Your Perfect Mexican Daughter', 'book_covers/11525106146.jpg  ', 'Erika L Sanchez ', 'Novel/Paper Back ', 'The Absolutely True Diary of a Part-Time Indian meets Jane the Virgin in this poignant but often laugh-out-loud funny contemporary YA about losing a sister and finding yourself amid the pressures, expectations, and stereotypes of growing up in a Mexican-American home.  ', 3, 'book/test.pdf ', 'Novel '),
(676, 16, 'How To Be The Perfect Dutch', 'book_covers/161525972172.jpg  ', 'Kathian Bands ', 'Lifestyle ', 'Details ', 14, 'book/1525972172test.pdf ', 'Biography Fiction  ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_image` varchar(255) NOT NULL DEFAULT 'user_profile/avatar.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `timestamp`, `user_image`) VALUES
(1, 'Nikhil Pandey', 'nikhilpandey.pandey9@gmail.com', '123456789', '2018-04-20 06:57:47', 'user_profile/11530570436.png'),
(2, 'Koro', 'assassination@class.com', '123456789', '2018-04-20 07:02:54', 'user_profile/21530003069.jpg'),
(9, 'Hemant Kumar', 'hemat@gmail.com', '123456789', '2018-04-22 22:37:39', 'user_profile/91524938835.jpg'),
(15, 'Himanshu Agarwal', 'himanshu@gmail.com', '123456789', '2018-04-30 21:52:34', 'user_profile/avatar.jpg'),
(16, 'nikhil', 'admin', 'admin', '2018-05-10 19:06:31', 'user_profile/161526546991.jpg'),
(17, 'Ravindra Kumar Pandey', 'ravindra.rkt1969@gmail.com', '123456789', '2018-05-28 12:44:16', 'user_profile/avatar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `weight`
--

CREATE TABLE `weight` (
  `id` int(255) NOT NULL,
  `bais_weight` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weight`
--

INSERT INTO `weight` (`id`, `bais_weight`) VALUES
(1, 0.3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `shelf`
--
ALTER TABLE `shelf`
  ADD PRIMARY KEY (`shelf_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_id_2` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `UNIQUE` (`user_email`);

--
-- Indexes for table `weight`
--
ALTER TABLE `weight`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `book_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `shelf`
--
ALTER TABLE `shelf`
  MODIFY `shelf_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=688;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
