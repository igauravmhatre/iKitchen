-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 02, 2019 at 07:04 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iKitchen`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL,
  `banner_name` varchar(255) NOT NULL,
  `banner_image` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `banner_name`, `banner_image`) VALUES
(8, 'Chutneys', 0x636875746e65792e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `content_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` blob,
  `content_protein` varchar(255) NOT NULL,
  `des` mediumtext,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`content_id`, `title`, `image`, `content_protein`, `des`, `user_id`) VALUES
(29, 'Beef Stroganoff', 0x626565662d7374726f67616e6f66662e6a7067, 'Steak', 'Prepare egg noodles according to package instructions and toss with butter while still hot.\r\nIn a large skillet over medium-high heat, heat vegetable oil. Add beef and sear 8 to 10 minutes, until golden on all sides, and season with salt and pepper. Work in batches if needed. Remove beef and place in a large bowl.\r\nLower heat to medium and add one tablespoon olive oil. Add mushrooms and cook until golden and tender, 8 to 10 minutes. Remove from skillet and place in bowl with beef.\r\nAdd remaining olive oil and add onion. Cook until tender, 6 minutes. Add garlic, thyme, and tomato paste and cook until fragrant, 2 minutes more. Stir in broth, mustard, and Worcestershire sauce and bring to a simmer. \r\nIn a small bowl, whisk some of the hot broth into your cornstarch. Stir into broth along with reserved beef and mushrooms and continue to simmer until thickened by about half, 10 to 12 minutes. Remove from heat and stir in sour cream. Season with salt and pepper.\r\nSpoon beef mixture over prepared egg noodles and garnish with a dollop of sour cream and parsley.', 15),
(30, 'Chicken pot Pie', 0x636869636b656e2d706f742d7069652e6a7067, 'Chicken', 'Make dough: Place flour and butter into freezer for 30 minutes before starting crust process. In a large food processor, pulse flour, baking powder, and salt until combined. Add butter and pulse until pea-sized and some slightly larger pieces form. With the machine running, add ice water into feed tube, 1 tablespoon at a time, until dough just come together and is moist but not wet and sticky (test by squeezing some with your fingers).\r\nTurn dough onto a lightly floured surface, form into 2 balls, and flatten into 2 discs (making sure there are no/minimal cracks). Cover with plastic wrap and refrigerate for at least 30 minutes.\r\nCook chicken: Preheat oven to 400Â°. Grease a large baking dish with butter and grease one side of a large piece of parchment with butter. Season chicken all over with salt and pepper then place in baking dish. Place buttered side of parchment paper over chicken, so that chicken is completely covered. Bake until chicken is cooked through, 30 to 40 minutes. Let reset 10 minutes before cutting into cubes.\r\nMeanwhile, start filling: In a large pot over medium heat, melt butter. Add onions and carrots and cook until vegetables are beginning to soften, about 10 minutes. Stir in garlic, then stir in flour and cook until the flour mixture is golden and beginning to bubble. Gradually whisk in chicken broth. Bring mixture to a boil and cook until thickened, about 5 minutes. Stir in heavy cream, cubed chicken, peas, parsley and thyme. Season mixture with salt and pepper.\r\nAssemble pie: On a lightly floured surface, roll out one disc of dough into a large round about Â¼â€ thick. Place in a shallow pie dish then add filling. Roll out second disc of dough into a large round about Â¼â€ thick and place on top of filling. Trim and crimp edges, then use a paring knife to create slits on top. Brush with egg wash and sprinkle with flaky sea salt.\r\nReduce heat to 375Â° and bake pie until crust is golden, about 45 minutes. Let cool for at least 15 minutes before serving.', 15),
(31, 'Shrimp Pad thai', 0x7061642d746861692e6a7067, 'Fish', 'In a large pot of salted boiling water, cook noodles until al dente. Drain.\r\nIn a small bowl, whisk together lime juice, brown sugar, fish sauce, soy sauce, and cayenne pepper. Set aside.\r\nIn a large nonstick pan over medium-high heat, heat oil. Add bell pepper and cook until tender, about 4 minutes. Stir in garlic and cook until fragrant, about 1 minute more. Add the shrimp and season with salt and pepper. Cook until pink, about 2 minutes per side.\r\nPush the shrimp and vegetables to one side of the pan and pour in the egg. Scramble until just set then mix with the shrimp mixture. Add the cooked noodles and toss until combined. Pour in the lime juice mixture and toss until the noodles are coated.\r\nGarnish with green onions and roasted peanuts before serving.', 15),
(32, 'Pulled Pork Burger', 0x70756c6c65642d706f726b2e6a7067, 'Pork', 'Preheat oven to 300Â°. Trim excess fat from pork and cut into large pieces to fit in a large Dutch oven.\r\nIn a small bowl, combine brown sugar, salt, paprika, garlic powder, onion powder, and cumin then season with black pepper. Rub all over pork. (This can be done the night before.)\r\nIn a large dutch oven over medium high heat, heat oil. Working in batches, add pork, and sear on all sides. (Spices can burn quickly so donâ€™t let it go for too long!)\r\nPour beer around pork and cover with lid. Transfer to oven and cook until pork is beginning to turn tender, about 2 Â½ to 3 hours. Remove lid and cook until pork is very tender and pulls apart easily with a fork.\r\nRemove pork from Dutch oven and let rest while you prepare barbecue sauce. To the pan drippings in the Dutch oven, whisk in ketchup, apple cider vinegar, brown sugar and Worcestershire. Put over medium-high heat and bring mixture to a boil. Reduce heat, and simmer until thickened slightly, about 5 minutes.\r\nShred pork using two forks. Toss shredded meat with about half the barbecue sauce.\r\nServe warm with buns and more barbecue sauce.', 15),
(39, 'Chicken Tikka Masala', 0x6162742e6a7067, 'Chicken', 'Step 1\r\nCombine garlic and ginger on a cutting board. Sprinkle with salt, and mash to a paste by dragging and pressing broad side of knife over mixture several times. Combine garlic mixture, yogurt, and next 5 ingredients (through ground red pepper) in a large zip-top plastic bag. Add chicken; seal and marinate in refrigerator 8 to 24 hours, turning bag occasionally.\r\n\r\nStep 2\r\nPlace tomatoes in a food processor; process until pureed to measure 2 cups. Heat a Dutch oven over medium heat. Add oil to pan; swirl to coat. Add onion; sautÃ© 4 minutes or until browned. Add ginger and garlic; sautÃ© 1 minute. Add coriander, paprika, turmeric, and ground red pepper; cook 1 minute. Stir in tomato puree, and bring to boil. Cover, reduce heat to low, and simmer 20 minutes or until thick.\r\n\r\nStep 3\r\nPreheat grill or broiler.\r\n\r\nStep 4\r\nWhile masala sauce simmers, remove chicken from marinade; discard marinade. Thread chicken onto 4 (12-inch) metal skewers. Place skewers on grill rack or broiler pan; cook 3 minutes. Turn skewers over; cook 3 minutes or until browned on all sides but still undercooked in center (chicken will finish cooking in sauce).\r\n\r\nStep 5\r\nRemove chicken from skewers; add to masala sauce. Stir in salt and garam masala; cover and simmer an additional 6 minutes or until chicken is done. Remove from heat; stir in yogurt and cilantro. Serve over rice.\r\n\r\nChef\'s Notes\r\nMyRecipes is working with Let\'s Move!, the Partnership for a Healthier America, and USDA\'s MyPlate to give anyone looking for healthier options access to a trove of recipes that will help them create healthy, tasty plates.', 15),
(41, 'Honey garlic pork chop', 0x486f6e65792d4761726c69632d506f726b2d43686f70732d494d4147452d35362e6a7067, 'Pork', 'easy honey garlic pork chops\r\njuicy honey garlic pork chops with caramelised edges ready and on your table in less than 15 minutes! smothered in the best 4-ingredient sauce!\r\nThis Honey Garlic Pork Chops Recipe is so easy you wonâ€™t believe it when itâ€™s done! No marinating needed, this recipe is an incredibly quick and delicious way to serve bone in or boneless pork chops â€” seared until golden then simmered and broiled (or grilled) in the most amazing honey garlic sauce! THE BEST part are those crispy, charred and caramelised edges!\r\n\r\n\r\nEasy Honey Garlic Pork Chops made simple, with the most amazing and addictive 4-ingredient honey garlic sauce that is so good youâ€™ll want it on everything! | cafedelites.com\r\n\r\n\r\npork chop recipes\r\nThe demand for this recipe has been overwhelming! Since publishing my Easy Honey Garlic Chicken recipe years ago, the amount of emails coming in asking for a pork chops version has been crazy! Crazy GOOD because this recipe is one of the best pork recipes weâ€™ve ever had. Delicious, juicy and tender chops that melt-in-your mouth.\r\n\r\nAll done in a skillet or oven-proof pan then finished off under the broiler (or grill) for a couple of minutes to get those crisp edges. That last step is so worth it! Just look at the colour! You will not regret serving these Honey Garlic Pork Chops to your family!\r\n\r\nMY LATEST VIDEOS\r\nEasy Honey Garlic Pork Chops made simple, with the most amazing and addictive 4-ingredient honey garlic sauce that is so good youâ€™ll want it on everything! | cafedelites.com\r\n\r\n\r\neasy to find ingredients\r\nDonâ€™t be in doubt of the 4-ingredient sauce. The flavour combination in this pork recipe is absolutely incredible! All you need is sitting in your kitchen:\r\n\r\nHoney\r\nGarlic\r\nUnsalted butter (we use unsalted to better adjust the quantity of salt to your tastes)\r\nRice wine vinegar (or apple cider vinegar/white vinegar).\r\nA small amount of water (or broth) is added to cut through the sweetness of the honey.', 15),
(42, 'SKILLET GARLIC BUTTER HERB STEAK AND POTATOES', 0x736b696c6c65745f6761726c69635f6275747465725f686572625f737465616b2d312d6f662d312e6a7067, 'Steak', 'In a large cast iron skillet over medium high heat, add olive oil and butter, potatoes, garlic, thyme, rosemary and oregano. Cook for about 3 minutes, stir and cook and additional 3 minutes or until fork tender. Remove and set on a plate.\r\nTurn the skillet to high heat. Add the steaks. Cook on each side for 3 minutes or until outside is browned. Reduce heat to medium high. Cook the steaks to desired doneness. Mine took about 10 minutes flipping 3 times to get a medium well.\r\n\r\nRight before the steaks are done, make the garlic butter compound. Mix the butter, garlic and fresh chopped herbs. Slather on top of steaks. Add the potatoes back to the pan and heat through and let the butter melt into the steaks.', 15),
(43, 'Radish and Carrot Salad with Tuna and Capers', 0x45502d30343233323031353638646f6c6c617267726f636572796261672d436172726f742d616e642d5261646973682d53616c61642d776974682d54756e612d616e642d4361706572732d3678342e6a7067, 'Fish', 'INGREDIENTS\r\n1 bunch radishes (about 1/2 pound)\r\n2â€“3 medium carrots (about 1/2 pound)\r\n2 1/4 teaspoons kosher salt, divided\r\n2 teaspoons fresh lemon juice\r\n2 teaspoons white wine or Champagne vinegar\r\n3/4 teaspoon Dijon mustard\r\n1/4 teaspoon freshly ground black pepper, plus more\r\n2 tablespoons olive oil\r\n1 1/2 tablespoons capers\r\n4 ounces drained oil-packed canned flaked tuna (about 3/4 cup)\r\n2 tablespoons parsley leaves', 15),
(44, 'Vegetable Manchurian', 0x7665672d6d616e6368757269616e2d6472792d7265636970652d737465702d62792d737465702d696e737472756374696f6e732d31302e6a7067, 'Veg', 'Ingredients For Dry Veg Manchurian Recipe\r\nFor the Manchurian Balls\r\n\r\n1 Cup Shredded Cabbage\r\n1/2 Cup Shredded or Grated Carrot\r\n1/4 Cup Capsicum, finely chopped\r\n1/2 Cup Onion, finely chopped\r\n1/4 Cup Spring Onions, finely chopped\r\n1/2 Tablespoon Ginger-Garlic Paste\r\n2 Tablespoon Cornstarch or Cornflour\r\n1/4 Cup All purpose Flour (Maida)\r\n1 Teaspoon Salt, or to taste\r\n1/2 Teaspoon Black Pepper\r\n1 Teaspoon Soy Sauce\r\nOil for Frying\r\nFor the Gravy\r\n\r\n3-4 Cloves of Garlic\r\n~1 Inch Piece of Ginger\r\n1-2 Green Chillies, finely chopped\r\n1/2 Cup Onion, finely chopped\r\n1/2 Cup Spring Onion, finely chopped\r\n1 Teaspoon Soy Sauce\r\n1 Teaspoon Vinegar\r\n2 Teaspoons Green Chilli Sauce\r\n1 Teaspoon Red Chilli Sauce\r\n1/2 Teaspoon Salt, or to taste\r\n1/2 Teaspoon Black Pepper\r\n2 Teaspoons Oil', 15),
(45, 'mushroom risotto', 0x4d757368726f6f6d205269736f74746f2e6a7067, 'Veg', 'wdfgfqefwretryterweqdwqefwrge', 15);

-- --------------------------------------------------------

--
-- Table structure for table `entitlement`
--

CREATE TABLE `entitlement` (
  `ent_id` int(11) NOT NULL,
  `ent_role` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entitlement`
--

INSERT INTO `entitlement` (`ent_id`, `ent_role`, `user_id`) VALUES
(11, 'Restauranter', 15),
(12, 'Customer', 16),
(13, 'Restauranter', 17),
(14, 'Admin', 18),
(15, 'Customer', 19);

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `fav_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `content_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favorite`
--

INSERT INTO `favorite` (`fav_id`, `user_id`, `content_id`) VALUES
(83, 15, 29),
(84, 15, 30);

-- --------------------------------------------------------

--
-- Table structure for table `sub_del`
--

CREATE TABLE `sub_del` (
  `subdel_id` int(11) NOT NULL,
  `sub_status` int(11) NOT NULL,
  `del_status` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_del`
--

INSERT INTO `sub_del` (`subdel_id`, `sub_status`, `del_status`, `user_id`) VALUES
(4, 1, 0, 15),
(5, 1, 0, 16),
(6, 1, 0, 17),
(7, 1, 0, 19);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_email`, `user_pass`) VALUES
(15, 'Welroy', 'welroy@test.com', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(16, 'Gaurav Mhatre', 'gaurav@test.com', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(17, 'cheryl Rodrigues', 'cheryl@test.com', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(18, 'Admin', 'Admin', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(19, 'jesmi', 'jesmiteja@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`content_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `entitlement`
--
ALTER TABLE `entitlement`
  ADD PRIMARY KEY (`ent_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`fav_id`);

--
-- Indexes for table `sub_del`
--
ALTER TABLE `sub_del`
  ADD PRIMARY KEY (`subdel_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `entitlement`
--
ALTER TABLE `entitlement`
  MODIFY `ent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `favorite`
--
ALTER TABLE `favorite`
  MODIFY `fav_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `sub_del`
--
ALTER TABLE `sub_del`
  MODIFY `subdel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `content`
--
ALTER TABLE `content`
  ADD CONSTRAINT `content_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `entitlement`
--
ALTER TABLE `entitlement`
  ADD CONSTRAINT `entitlement_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `sub_del`
--
ALTER TABLE `sub_del`
  ADD CONSTRAINT `sub_del_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
