# Novuso WordPress Project Template

WordPress project template allowing Composer to manage core version, plugins, and themes.

## Creating a Project

1. Install [Composer](https://getcomposer.org/)
2. In a terminal, change to your project directory
3. Type: `composer create-project novuso/wordpress projectname`
4. Copy the `app/parameters.php.dist` file as `app/parameters.php` and configure WordPress
5. Map the `public` folder to your server of choice or use the built-in PHP server for development
6. Browse to the site and run the web installer
6. Look into installing some plugins and themes with [WordPress Packagist](http://wpackagist.org/)

*Note*: If you run into issues with folder permissions in Linux when using
Apache, you can setup ACL for Apache with `app/scripts/apache-acl.sh`.

## License

MIT
