# NURIO.ME's PHP version website

This is the source code for my old PHP based website. This website was developed around 2015 and has had small modifications since then. Now, I am moving it to ReactJs as it allows me to develop the website based on components in a better and beautiful way.

# Component based

Without using any framework, I wrote some code to make it possible, each file can be considered as a component, something like React but much smaller.

### Component loading from GET param
![Component loader](/documentation/images/component-loader.svg)

### Component router
![Component router](/documentation/images/component-router.svg)

### Component example
![Component example](/documentation/images/component-example.svg)

# Single page application

With the script [`dynamic-page.js`](https://github.com/xXNurioXx/old-php-nurio.me/blob/master/src/assets/js/dynamic-page.js) the page turns into a [single-page application](https://en.wikipedia.org/wiki/Single-page_application) without any external framework.

![Single-page application](/documentation/images/single-page-app-history.gif)

# Image loading optimization

With the script [`post-load-optimizer.js`](https://github.com/xXNurioXx/old-php-nurio.me/blob/master/src/assets/js/post-load-optimizer.js) the page loads a lighter version of the image on the first load, once the load is complete, it will load the images in full quality.

[![Image optimization preview](/documentation/images/image-optimization-preview.gif) Click here to view a better demo at Youtube.](https://youtu.be/pNtFSiZPMk8) 

# Web responsive

![Responsive web preview](/documentation/images/responsive-preview.gif)