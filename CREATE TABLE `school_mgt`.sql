CREATE TABLE `school_mgt`.`student` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `student_name` VARCHAR(100) NOT NULL,
    `eno` VARCHAR(15) NOT NULL,
    `class` VARCHAR(10) NOT NULL,
    `division` CHAR(1) NOT NULL,
    `mobile` VARCHAR(10) NOT NULL,
    `parents_mobile` VARCHAR(10) NOT NULL,
    `dob` DATE NOT NULL,
    `roll_no` VARCHAR(3) NOT NULL,
    `added_by` VARCHAR(50) NOT NULL,
    `added_time` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `status` CHAR(1) NOT NULL DEFAULT 'Y',
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

CREATE TABLE `school_mgt`.`temp` (`id` INT NOT NULL AUTO_INCREMENT) ENGINE = InnoDB;