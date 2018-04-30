A simple sign up and login form made using HTML, CSS, JavaScript/jQuery and PHP. 

This is my first project ever made using PHP. As a consequence, there might be better implementations of this, the code surely lacks optimisation and probably there are a lot of security issues (but I'm pretty sure this is safe against SQL injection, at least).

Besides all of this, this is functional for the most part. No bugs known.

If you want to test this out, here's a few things to know:

1. The 'schema.sql' creates the table needed. Alternatively, you can do it manually by creating a database and run the following query:
```sql
CREATE TABLE users (
  id int(11) NOT NULL AUTO_INCREMENT,
  first_name varchar(128) NOT NULL,
  last_name varchar(128) NOT NULL,
  user_id varchar(128) NOT NULL,
  pwd varchar(128) NOT NULL
);
```
If you decide to change any of these, make sure you make the appropriate changes to the PHP files located inside the folder 'Includes'.

2. The file 'includes/db_handler.inc.php' handles the connection to the database. Don't forget to modify it.
3. Although this uses some bootstrap elements, the design is not responsive.
