# BricoBio Website V3.0

Third version of the BricoBio website. Includes blog, even scheduling and social media integration functionalities.

## Setup

Requires an instance of XAMPP/LAMP/WAMP installed (see Resources), parametered so that the web root is one level above the website level:

```

  www/ <= Root is here
    bricobio/

```

Once that is installed, type localhost/bricobio in your favorite browser (Chrome, Firefox, Safari) and enjoy!
You must have an internet connection to be able to render the fonts.

## Folder Structure

```

  www/
    bricobio/
      angular/              //AngularJS App
                            //Contains remnants of another website's code
        controllers/
        models/
          json/             //Static model information that is hosted directly in variables.
          services.js       //AngularJS App services
      application/          //CodeIgniter application  
      assets/               //CSS, JS, fonts, images, name it, it's there.
                            //Contains remnants of another website's code
      system/               //CodeIgniter framework classes
      user_guide/
      index.php
      LICENSE.txt
      README.md

```


## Content display structure

Static strings and URL will be stored in the i18n.js and URL.js models and will be integrated via the AngularJS templating engine.
Non-static content, such as blog posts, events in calendars, pictures and more will be stored in a MySQL database and will be accessed via an AJAX call to a CodeIgniter PHP backend. The content will be updated in the AngularJS model and then trigger an watch/digest cycle.

## Resources

* [XAMPP Official Website](https://www.apachefriends.org/fr/index.html)
* [AngularJS Documentation](https://docs.angularjs.org/guide)
* [CodeIgniter User Guide](http://www.codeigniter.com/user_guide/)
* [Bootstrap Official Website](http://getbootstrap.com/)

## Sources of inspiration
http://cherylrios.org/
