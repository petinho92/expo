ALTER TABLE `user`
  CHANGE COLUMN `group` `group` enum('admin','staff','visitor') DEFAULT NULL AFTER `email`;