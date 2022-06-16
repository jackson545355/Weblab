CREATE TABLE `member` (
        `username` VARCHAR(255) NOT NULL,
        `password` VARCHAR(255) NOT NULL,
        `email` VARCHAR(255) NOT NULL,
        `fullname` VARCHAR(255) NOT NULL,
        `birthday` VARCHAR(10) NOT NULL,
        `sex` VARCHAR(3) NOT NULL
) ENGINE = MyISAM'