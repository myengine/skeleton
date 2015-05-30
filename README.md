Installation
------------

Using Composer
----------------------------
The recommended way to get a working copy of this project is to clone the repository
and use `composer` to install dependencies using the `create-project` command:

    composer create-project myengine/skeleton ./

Installing Composer
----------------------------
Installing Composer locally is a matter of just running the installer in your project directory:

	curl -sS https://getcomposer.org/installer | php

Note: If the above fails for some reason, you can download the installer with php instead:

	php -r "readfile('https://getcomposer.org/installer');" | php
	
You can place this file anywhere you wish. If you put it in your PATH, you can access it globally. On unixy systems you can even make it executable and invoke it without php.
You can run these commands to easily access composer from anywhere on your system:

	mv composer.phar /usr/local/bin/composer