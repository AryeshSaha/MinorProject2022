<!-- * Databases -->

-----COURSES TABLE(dummy table)

CREATE TABLE `minor_project`.`courses` (`crid` INT NOT NULL AUTO_INCREMENT , `crnaam` VARCHAR(50) NOT NULL , `dur` BIGINT NOT NULL , `amt` INT NOT NULL , PRIMARY KEY (`crid`)) ENGINE = InnoDB;

INSERT INTO `courses` (`crid`, `crnaam`, `dur`, `amt`) VALUES (1, 'javascript', '230400', '1349');
INSERT INTO `courses` (`crid`, `crnaam`, `dur`, `amt`) VALUES (NULL, 'php', '302400', '1499');
INSERT INTO `courses` (`crid`, `crnaam`, `dur`, `amt`) VALUES (NULL, 'html', '36000', '799');
INSERT INTO `courses` (`crid`, `crnaam`, `dur`, `amt`) VALUES (NULL, 'css', '81357', '899');
INSERT INTO `courses` (`crid`, `crnaam`, `dur`, `amt`) VALUES (NULL, 'mysql', '52000', '799');

-----DETAILS TABLE

CREATE TABLE `minor_project`.`details` (`uid` INT NOT NULL AUTO_INCREMENT , `naam` TEXT NOT NULL , `f/h_naam` TEXT NOT NULL , `dob` DATE NOT NULL , `sex` VARCHAR(255) NOT NULL , `phn` INT NOT NULL , `wap` INT NOT NULL , `edu` VARCHAR(255) NOT NULL , `aop` VARCHAR(255) NOT NULL , `med_regno` VARCHAR(255) NOT NULL , `sponsor` VARCHAR(255) NOT NULL , `dp` VARCHAR(255) NOT NULL , `usign` VARCHAR(255) NOT NULL , PRIMARY KEY (`uid`)) ENGINE = InnoDB;

-----CANDIDATE COURSE TABLE

CREATE TABLE `minor_project`.`candi_course` (`s/n` INT NOT NULL AUTO_INCREMENT , `uid` INT NOT NULL , `crid` INT NOT NULL , `start` DATETIME NOT NULL , `end` DATETIME NOT NULL , PRIMARY KEY (`s/n`)) ENGINE = InnoDB;

-----LOGIN TABLE

CREATE TABLE `minor_project`.`login` (`lid` INT NOT NULL AUTO_INCREMENT , `email` VARCHAR(50) NOT NULL , `pass` VARCHAR(50) NOT NULL , `last_login` DATETIME NOT NULL , PRIMARY KEY (`lid`)) ENGINE = InnoDB;

-----primary key change in login
ALTER TABLE `minor_project`.`login` DROP PRIMARY KEY, ADD PRIMARY KEY (`email`) USING BTREE;

---forign key in details
ALTER TABLE `details` ADD CONSTRAINT `Email` FOREIGN KEY (`email`) REFERENCES `login`(`email`) ON DELETE RESTRICT ON UPDATE RESTRICT

----foregin key in canidate courses table---
ALTER TABLE `candi_course` ADD CONSTRAINT `Foregn_email` FOREIGN KEY (`email`) REFERENCES `details`(`email`) ON DELETE RESTRICT ON UPDATE RESTRICT; ALTER TABLE `candi_course` ADD CONSTRAINT `Foregen_course` FOREIGN KEY (`crid`) REFERENCES `courses`(`crid`) ON DELETE RESTRICT ON UPDATE RESTRICT;

<!-- !To Do List: -->

1. Payment Page
2. Pass Chg & Forget Pass
3. Edit option - add picture - display picture
4. Front end - dashboard dp, login bg, Completed Courses= Null
5. Backend - Database courses add img, Query sec_to_time(seconds)
6. MiddleWare - Fetch Your Courses
   EXTRAS:
7. Remove Dp & Confirm Dp
8. Navbar in Courses section(search, dashbord, all course)
9. form sign and wap
10. refresh validation
