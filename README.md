| :warning: Please do not download the code from the green Code button and the "Download ZIP" button. This GitHub repo has the latest features, but they may be unstable. Please instead [download our latest release, v1.9.2-beta](https://github.com/getlinkshort/LinkShort/releases/tag/v1.9.2). :warning:
| ---

# LinkShort (aka [rdr.fyi](https://rdr.fyi/))
**PHP 8 Ready! Available for public use on [rdr.fyi](https://rdr.fyi/)! [GET THE CHROME EXTENSION](https://chrome.google.com/webstore/detail/linkshort/gkkakbcefmklabnpefmpbjngidibdbdi)!!!**
## The Open-Sourced PHP Link Shortener
Welcome to LinkShort, the open-sourced link shortener.

**Check out our blog [here](https://rdr.fyi/blog)!**

Here are the steps to install LinkShort:
1. Create a new MySQL database and [download LinkShort](https://github.com/fakerybakery/LinkShort/releases/tag/linkshort).
2. Run the SQL file `INSTALL.sql` in your MySQL database
3. Configure `init.php`:

> `name`: The name of your link shortener. Not used for much, but this variable might be used for more in future versions.
> 
> `shorturl`: The URL of your link shortener. Make sure LinkShort is installed on that URL!
> 
> `db_host`: The host of your database.
> 
> `db_user`: The username of your database.
> 
> `db_pass`: The password of your database.
> 
> `db_name`: The name of your database.
> 
> `conn`: The MySQLi connection. No need to change this variable!

4. Upload to your web server. Remember to show hidden files and make sure you also move the hidden files. **⚠️THE LINK SHORTENER WILL NOT WORK WITHOUT THE `.htaccess` FILE!⚠️** _Make sure you have a suitable short domain name!_
5. Try it out!
## Important Legal Notice
**You may not remove _or_ modify the attribution to LinkShort from this product!**
```
If you run this product on your own web server, you must first make a pull request with your instance. You may only make your instance of this product publicly available _after_ the pull request is merged. If it is not merged, you may not publish your instance.

We reserve the right to request that you remove your instance at any time for any reason. After the request, you will have 24 (twenty-four) hours to remove your instance. After this time, you MUST have your instance removed (deleted) permanently from your web server.

You are responsible for all links transmitted through your instance. We take no responsibility or liability whatsoever for any harm and/or damage caused through this product.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

THIS PRODUCT SHALL NOT BE REDISTRIBUTED OR REPACKAGED IN ANY OTHER PRODUCT!

THE ATTRIBUTION SHALL NOT BE REMOVED FROM THIS PRODUCT WITHOUT PRIOR WRITTEN PERMISSION FROM THE OWNER!

THIS PRODUCT SHALL NOT BE USED FOR COMMERCIAL USE!
```
## Why Open Source It?
This product was open sourced to show how it respects your privacy and to be transparent about your privacy.
## How do I Report a Security Vulnerability?
Please email me at hello@rdr.fyi. If you get no response and it is important, feel free to email me@mrfake.name! Thank you!
## Instances

There are currently no running instances of LinkShort. If you run one, make a pull request to this file to add your instance!

---
&copy; 2022. All rights reserved. Created with :hearts: in the 🇺🇸!
