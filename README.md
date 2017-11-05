# A Sensible D8 Starter
A Drupal 8 starter kit copied from Elevated Third's Paragon and made available for students in the ATLAS program.

## Local Environment Setup
This project uses Amazee's Cachalot local environment. To get started with Cachalot and install all dependencies read [this](https://elevatedthird.github.io/docs/docs_amazee_local_setup.html).

## Drupal Environment Install Instructions
1. Clone this repo.
2. Temporarily rename `docroot/sites/default/settings.php` to something else.
3. Visit d8starter.docker.amazee.io (assuming you're using the included Cachalot environemt) to start the install process.
4. Once you're on install screen follow these steps:
	1. *Choose Profile*: "Config Installer"
	1. *Verify Requirements*: You can ignore the "PHP OPcode caching" issue and click "continue anyway" at the bottom.
	1. *Set up database*: configure with your local settings.
	1. *Upload config*: change "Synchronisation directory" to `../config/default`.
5. You should be redirected to the homepage if everything went correctly. If you get errors, you can try checking the homepage to see if it worked anyway.
6. Open your newly created `settings.php` file and copy the value of `$settings['hash_salt]` into your original `settings.php` file.
7. Once you've updated `$settings['hash_salt]` in your original `settings.php` file, delete the new one and rename your original back to `settings.php`.

## Dependencies
1. [NVM](https://github.com/creationix/nvm) - Node Version Manager
2. [Composer](https://getcomposer.org/) - PHP package manager