# About Pluslife
---

Pluslife is a free Wordpress template designed and developed by marioyiann, based on starter theme for WordPress called underscores (a.k.a. _s). The theme is fully responsive based on Bootstrap - with SASS - and all the development process created with Gulp. 

This theme is more a scaffold with a basic layout and style. Please feel free to use it and to customize according to your needs.

---

**Features**
- Wordpress
- Underscores (_s)
- Bootstrap 3.3.7
- Fontawesome 4.7.0
- Gulp 3.9.1
- SASS

---

[Demo](http://marioyiann.com/pluslife/ "PlusLife[+]")

## Ιnstructions

If you like the theme and you want to use it "as is", git clone this repo and delete all the production files. Make a new zip folder and upload it to your server theme folder.

The production files are:
- sass folder
- package.json
- gulpfile.js
- README.md
- .gitignore
- .jscsrc
- .jshintignore

To develop and create your own theme follow these steps.

### 1. Git clone
```sh
$ git clone https://github.com/marioyiann/pluslife.git
```

### 2. Install node modules
Make sure you have installed [Node.js](https://nodejs.org) 

```sh
$ npm install
```

### 3. Make sure you are running a local server (MAMP, XAMPP, etc).

### 4. Run Gulp
```sh
$ gulp
```

### 5. Start editing

> **Note:** In gulpfile.js the proxy url is "localhost/pluslife/". If you name your project differently, don't forget to change the "pluslife" to your folder name.

#### Folder Structure
If you are familiar with underscores.me template, it will be easy to understand the folder structure.

My additions are:

In root folder:
- fonts
- img
- template-page

In sass folder:
- custom
- vendors

In js folder: 
- assets
- custom

> **Note:** If you choose to develop this theme with npm install, a new folder it will be created with all the node_modules files.

```
pluslife/
|
|
|-- fonts/
|		|-- bootstrap/					# bootstrap fonts
|		|-- fontawesome/				# fontawesome fonts
|		
|-- img 								# favicon
|
|-- inc									# custom-header, template-tags, etc
|
|-- js/									# js files
|		|-- assets/
|		|		|-- bootstrap/			# bootstrap js files
|		|
|		|-- custom/						# custom js file
|
|-- languages/							# lagnuages files (.pot, .txt)
|
|-- layouts/							# css left right sidebar from underscores
|
|-- sass/
|		|
|		|-- custom/
|		|		|
|		|		|-- elements/			# body, headers, links etc
|		|		|-- forms/				# buttons, fields
|		|		|-- layout/				# content, header layout
|		|		|-- media/				# captions, galleries
|		|		|-- navigation/			# navigation
|		|		|
|		|		|-- site/
|		|		|		|
|		|		|		|-- primary		# comments, posts and pages
|		|		|		|-- secondary 	# 404 page, widgets
|		|		|		
|		|		|-- typography/			# headers, content	
|		|		|-- variables/			# variables
|		|		
|		|-- elements/					# body, headers, links, lists, tables etc
|		|-- forms/						# buttons, fields
|		|-- layout/						# content sidebar (left-right)
|		|-- map/						# style map
|		|-- media/						# captions, galleries media
|		|-- mixins/						# mixins
|		|-- modules/					# accessibility, aligments, clearings, infinite-scroll
|		|-- navigation/					# links, menus
|		|-- site/
|		|		|
|		|		|-- primary				# comments, posts and pages
|		|		|-- secondary 			# 404 page, widgets
|		|
|		|-- typography/					# headings, content etc 
|		|-- variable-site/			    # colors, structure, typography
|		|-- vendors/
|		|		|
|		|		|-- bootstrap			# bootstrap sass files
|		|		|-- fontawesome 		# fontawesome sass files
|		
|-- template-page/					    # page template with no sidebar
|
|-- template-parts/				        # content, content-none, content-page, search templates
|
|
```

License: GPL-2.0

---
Hope you enjoy it and find it useful!  
Find me on: [Twitter](https://twitter.com/marioyiann)

---

##### Thanks and Respect to all external resources!
- Underscores: http://underscores.me/
- Bootstrap: http://getbootstrap.com/  
- Fontawesome: http://fontawesome.io/  
- Header image: https://www.pexels.com/photo/black-and-white-city-houses-skyline-2255/
- WP Bootstrap Navwalker by Edward McIntyre: https://github.com/twittem/wp-bootstrap-navwalker
- Theme Unit Test: https://codex.wordpress.org/Theme_Unit_Test
