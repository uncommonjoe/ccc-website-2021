
-- Use this chunk to clear and reset values to 0
DROP TABLE `wp_service_attendees`;
CREATE TABLE `wp_service_attendees` (
    `id` INT(5) AUTO_INCREMENT PRIMARY KEY,
    `time` DATETIME NOT NULL,
    `name` VARCHAR(25) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
    `email` VARCHAR(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
    `kindergarden` TINYINT(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
    `firstService` INT(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
    `secondService` INT(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
    `firstServiceOverflow` INT(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
    `secondServiceOverflow` INT(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
    `expired` DATETIME NULL
);
SET @@time_zone = 'SYSTEM';
INSERT INTO `wp_service_attendees`
    (`id`,
    `time`,
     `name`,
     `kindergarden`,
     `firstService`,
     `secondService`, 
     `firstServiceOverflow`,
     `secondServiceOverflow`,
     `expired`)
      VALUES (1,CURRENT_TIMESTAMP(), 'INITIAL RESET',0,0,0,0,0,null);
SELECT * FROM `wp_service_attendees` WHERE 1;



-- AUTO ARCHIVE

SET GLOBAL event_scheduler = ON

CREATE EVENT archive
    ON SCHEDULE
        EVERY 1 WEEK STARTS '2020-06-21 12:00:00' 
    DO
        UPDATE `wp_service_attendees`
            SET `expired` = CURRENT_TIMESTAMP()
            WHERE (`id` > 1 AND `expired` IS NULL)

-- END AUTO ARCHIVE

-- Change expired to unexpired (null)
UPDATE `wp_service_attendees` 
    SET `expired` = NULL
        WHERE (
            `id` > 1 AND
            `time`>='2020-06-29' AND
            `time`< '2020-07-02'
        

   
INSERT INTO `wp_service_attendees`
    (`id`,
     `name`,
     `kindergarden`,
     `firstService`,
     `secondService`, 
     `firstServiceOverflow`,
     `secondServiceOverflow`)
      VALUES (
          2,
          CURRENT_TIMESTAMP(),
          'Joe McLean',1,6,12,2,4);



SELECT SUM(firstService), SUM(secondService) FROM `wp_service_attendees` WHERE 1;


INSERT INTO `wp_service_attendees`(`id`, `firstService`, `secondService`) VALUES (1,0,0)

INSERT INTO `wp_service_attendees` (name, email, firstService) VALUES ('Joe', 'uncommonjoe@gmail.com',  56);

-- Add people to the services
UPDATE `wp_service_attendees` SET `firstService` = 85, `secondService` = 80,`firstServiceOverflow` = 0, `secondServiceOverflow` = 0 WHERE 1;
SELECT * FROM `wp_service_attendees` WHERE 1;



SELECT CURDATE() + INTERVAL 6 - weekday(CURDATE()) DAY AS Sunday;


-- Swap Service & Update
UPDATE wp_service_attendees
SET firstService=firstService+secondService,secondService=firstService-secondService,firstService=firstService-secondService
WHERE id = 6;
SELECT * FROM `wp_service_attendees` WHERE 1;

-- Updates table to add two new columns
ALTER TABLE `wp_service_attendees`
ADD `firstServiceOverflow` INT(2) NOT NULL AFTER `secondService`,
ADD `seconedServiceOverflow` INT(2) NOT NULL AFTER `firstServiceOverflow`;