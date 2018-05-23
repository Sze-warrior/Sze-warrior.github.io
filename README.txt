Front end build:

------------------------------------------

These website was built for my application for Dominon Software. The site was built with HTML, CSS/SASS, JavaScript and Gulp.js for building the SASS.

------------------------------------------

For the CSS and SASS build, I followed the BEM process (Block Element Modifiers) to help set up rules and clearer structure to make editing styles clearer for others to step in and edit. 

The base folder is holding styling used that is foundational to the project (eg Typography is in the base folder as it is a style that is unlikely to change)

The modules folder is holding styling that can be used in multiple places and scenarios. (eg the buttons module is used on the page once but can be used in many global places)

The components folder holds specific styling. (eg the hamburger styling is placed here because it is not likely to change and relates to a specific item on the project)

------------------------------------------

To compile my project, I used Gulp.JS and its postCSS package to help me with browser compatability when compiling my CSS. The gulp-sass package was used to compile my SASS to pure CSS.

I seperateed my JavaScript up into smaller files to help with readability of my code and outline what each event handler and function is doing. 

------------------------------------------

Incompleted tasks:

If I had a bit more time, I would of completed the following extra tasks:

Building mobile slider/carousel
Adding arrows to accordian and dropdown in the header
Fix search form placement on mobile 
UI animations for slidetoggle