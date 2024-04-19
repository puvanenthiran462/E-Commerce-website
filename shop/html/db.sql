--
-- Database: `sellproducts`
--


CREATE TABLE `prodect` (
   `id` int(10) NOT NULL,
  `type` varchar(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` varchar(10) NOT NULL,
  `number` varchar(10) NOT NULL,
  `image` varchar(100) NOT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



ALTER TABLE `prodect`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;


--- table = `login` 

  CREATE TABLE `login` (
   `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL
 
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;