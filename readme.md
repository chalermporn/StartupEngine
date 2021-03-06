# StartupEngine

A beautiful & open-source platform for launching startups.

<div>
     <img src="https://images.contentful.com/x5o3atz1wqhm/2PWSbcsefYImQyMuqcIuGi/5efaa2c98a4819ef729885a7c3aa381c/App_Icon_2x.png" width="100">    
</div>

**Table of Contents** 

- [Screenshots](#screenshots)
- [Demo](#demo)
- [Features](#features)   
- [Deploying](#deploying)
- [License](#license)

# Screenshots

<img src="https://s3.us-east-2.amazonaws.com/startupengine/screenshots/home.png" width="400" /><br>
       
<img src="https://s3.us-east-2.amazonaws.com/startupengine/screenshots/blog.png" width="400" /><br>

<img src="https://s3.us-east-2.amazonaws.com/startupengine/screenshots/editor.png" width="400" /><br>

<img src="https://s3.us-east-2.amazonaws.com/startupengine/screenshots/analytics.png" width="400" /><br>

# Demo

See it in action at http://startupenginedemo.herokuapp.com

# Features 
* [x] 1-Click Install
* [x] Completely plug-and-play - coding is optional.
* [x] Completely open-source - you can change and distribute the code.
* [x] Create pages, blog posts, and documentation, or make your own custom content types.
* [x] Display your content anywhere using the content API.
* [x] Define who can see and edit your content with role-based access control.
* [x] Use the pre-installed Boostrap 4/Vue.js theme, or build your own with the framework of your choice. 

##### Pre-Installed Pages
* [x] Landing page
* [x] Blog
* [x] Help / FAQ's
* [x] Search

# Deploying

Click the button below to deploy a new instance of StartupEngine to Heroku instantly.

[![Deploy](https://www.herokucdn.com/deploy/button.svg)](https://heroku.com/deploy?template=https://github.com/luckyrabbitllc/StartupEngine)

First, make sure the APP_KEY config variable is set.

Then run the following commands on your instance via the [Heroku CLI](https://devcenter.heroku.com/articles/heroku-cli):

`php artisan migrate:refresh --seed --force`

`php artisan command:SyncGit reset`

# License

StartupEngine is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).