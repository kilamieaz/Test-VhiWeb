# Indogram

---

## Prerequisites

1. PHP > 7.1
1. MySQL or MariaDB
1. [Composer](http://getcomposer.org)
1. [Yarn](https://yarnpkg.com)

## Getting Started

1. Clone to your base project directory.

	```
	git clone https://github.com/kilamieaz/Test-VhiWeb.git <project-name>
	```

2. Install composer dependencies.

	```
	composer install
	```

3. Create configuration file `.env` (copy from `.env.example`) and set the database configuration.

	```
	DB_HOST=localhost
	DB_DATABASE=<database-name>
	DB_USERNAME=<database-user>
	DB_PASSWORD=<database-password>
	```

4. Migrate October database.

	```
	php artisan october:up
	```

5. Install frontend library using Yarn. Go to theme directory first.

    ```
    cd themes/my-theme
	yarn install
	```

6. For security reason, please generate new application key.

	```
	php artisan key:generate
	```
	
7. Register and login

## Plugins

In this boilerplate, **we've installed**:

1. [RainLab.User](https://octobercms.com/plugin/rainlab-user)
1. [RainLab.Pages](https://octobercms.com/plugin/rainlab-pags)
1. [RainLab.Sitemap](https://octobercms.com/plugin/rainlab-sitemap)
1. [RainLab.GoogleAnalytics](https://octobercms.com/plugin/rainlab-googleanalytics)
1. [October.Drivers](https://octobercms.com/plugin/october-drivers)
1. [Bedard.Debugbar](https://octobercms.com/plugin/bedard-debugbar)
1. [Mja.Mail](https://octobercms.com/plugin/mja-mail)
1. [Jacob.Horizon](https://octobercms.com/plugin/jacob-horizon)

More plugins that we recommend (not installed yet):

1. [RainLab.Blog](https://octobercms.com/plugin/rainlab-blog)
1. [RainLab.Translate](https://octobercms.com/plugin/rainlab-translate)
1. [Responsiv.Uploader](https://octobercms.com/plugin/responsiv-uploader)
1. [eBussola.Feedback](https://octobercms.com/plugin/ebussola-feedback)

To install plugin, run the command:

```
php artisan plugin:install <plugin-name>
```

To enable Laravel Horizon, run the command:

```
php artisan vendor:publish --provider="Laravel\Horizon\HorizonServiceProvider"
```

## Frontend Libraries

All frontend libraries are managed using **bower**. These packages are installed by default:

1. [Bootstrap](https://getbootstrap.com)
1. [Font Awesome](https://fortawesome.github.io/Font-Awesome)
1. [FastClick](https://github.com/ftlabs/fastclick)

To install additional library, run the command:

```
yarn add <package-name>
```

## Coding Standards

Please follow the following guide:

* [OctoberCMS Developer Guide](https://octobercms.com/help/guidelines/developer)
