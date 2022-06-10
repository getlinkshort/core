# LinkShort
**PHP 8 Ready!**
## The Open-Sourced PHP Link Shortener
Welcome to LinkShort, the open-sourced link shortener.
Here are the steps to install LinkShort:
1. Create a new MySQL database.
2. Run the SQL file `INSTALL.sql` in your MySQL database
3. Configure `init.php`:
`name`: The name of your link shortener. Not used for much, but this variable might be used for more in future versions.
`shorturl`: The URL of your link shortener. Make sure LinkShort is installed on that URL!
`db_host`: The host of your database.
`db_user`: The username of your database.
`db_pass`: The password of your database.
`db_name`: The name of your database.

`conn`: The MySQLi connection. No need to change this variable!
4. Upload to your web server. **Make sure you have a suitable short domain name!**
5. Try it out!
## Important Legal Notice
**You may not remove _or_ modify the attribution to LinkShort from this product!**

&copy; 2022. All rights reserved.
