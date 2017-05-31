# Nolte base theme for Freelancers
This is a basic theme structure for projects done by freelancers. 
It has the minimum files and folders for a WP Theme to work, without any other library or compiler.

**Please, read all the README before starting!**

## How to start
1. Clone or download the repository
2. Change the name of the theme `<your_theme>` in the folder `wp-content/themes/<your_theme>/`
3. Change the information of the theme in `wp-content/themes/<your_theme>/style.css`
4. Install the theme in your WP and activate it
5. Happy coding! :)

## Structure

## Composer
In order to follow our standards, you will be able to install Composer globally. 

## Git Ignore
Tip: Update .gitignore with the folders we don't need in the repo (for example, `/vendor/`, or `/node_modules/`)

## Linter
We use Bitbucket Pipelines to ensure all the projects follow the basic PHP standards for code. Essentially, any code
that doesn't pass the "code lint" **won't** be merged in the repository. This allows us to keep the code
clean and easy to maintain in the future.

To activate the PHP linter: 
1. Uncomment all the lines in the file `bitbucket-pipelines.yml`
2. Change the `<your_theme>` name inside the script for your chosen name for the theme
3. Go to your theme `cd wp-content/themes/<your_theme>` 
4. Run `composer install` and `composer lint` before you create any PR to pass the linter in your local.

## Useful Links
[WP Template Hierarchy]: https://developer.wordpress.org/themes/basics/template-hierarchy/
[Composer]: https://getcomposer.org/
[Bitbucket Pipelines]: https://bitbucket.org/product/features/pipelines