# Nolte base theme for Freelancers
This is a basic theme structure for projects done by freelancers. 
It has the minimum files and folders for a WP Theme to work, without any other library or compiler.

**Please, read all the README before starting!**

## How to start
1. Clone or download the repository
2. Change the name of the theme `<your_theme>` in the folder `wp-content/themes/<your_theme>/`
3. Change the information of the theme in `wp-content/themes/<your_theme>/style.css`
4. Install composer globally (see next point)
5. Run `composer install` inside your theme directory
6. Install the theme in your WP and activate it
7. Happy coding! :)

## Composer
In order to follow our standards, you need to install Composer globally. 

Composer is a PHP package manager, just like npm for node modules. In fact, it works practically the same.
More information can be found in its official page https://getcomposer.org/

## Git Ignore
1. Open .gitignore and change all the `<your_theme>` with your theme name.

Tip: Update .gitignore with the folders or files we don't need in the repo (for example, `/vendor/`, or `/node_modules/`)

## Linter
We use Bitbucket Pipelines to ensure all the projects follow the basic PHP standards for code. Essentially, any code
that doesn't pass the "code lint" **won't** be merged in the repository. This allows us to keep the code
clean and easy to maintain in the future.

To activate bitbucket pipelines: 

1. Uncomment all the lines in the file `bitbucket-pipelines.yml`
2. Change the `<your_theme>` name inside the script for your chosen name for the theme
3. Go to your theme `cd wp-content/themes/<your_theme>` 
4. Run `composer install` and `composer lint` before you create any PR to pass the linter in your local.
5. The linter should tell you if there is any issue in your code.

**Note:** If you create a new folder with PHP files inside, add that folder to the `composer.json` lint script!

## Plugins that we use
* Advanced Custom Fields PRO
In order to make backend fields, at Nolte we use ACF pro. More documentation will be sent once the dev starts the project.
This theme has some integration with ACF by default. If the plugin is activated, all the fields will
be stored in a folder called `acf`. We do that, so we can import and export fields in the JSON files generated
by the plugins, so the fields don't get lost in the database between servers.

## Useful Links

[WP Template Hierarchy](https://developer.wordpress.org/themes/basics/template-hierarchy/)

[Composer](https://getcomposer.org/)

[Bitbucket Pipelines](https://bitbucket.org/product/features/pipeline)

If you have any question, please contact Nolte Team.