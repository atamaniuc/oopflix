-------
Provide code for the core entities and interfaces for a netflix-like project by the following definitions
Entities :

* Videos have a title, genre, length
* Subscribers have a name, status
* Subscribers are tight to a Subscription Program that may change
* Subscribers have a watched-videos list and a interested-in list
* Subscription Programs have a monthly watch cap and a price
* You can inspire from netflix from other special details. (See : https://www.netflix.com)

---------

**NOTE! You must provide at least :**

* One abstract class and one interface
* 3 level of class/interface inheritance 
* Create methods with all type of visibility (public, ...) 
* 4 or more methods, and 2 or more proprieties in third level classes

---------

**NOTE! Is not needed to implement real functionalities, in methods you can use just  
a comment like : // body of method : "Current method"**

---------
**INSTALLATION**

Dump auto-loader via `composer dump-autoload`

---------
**Project structure** generated with `tree -a`
```
├── app
│   ├── Core
│   │   ├── Classes
│   │   │   └── Entity.php
│   │   ├── Interfaces
│   │   │   └── JsonableInterface.php
│   │   └── Traits
│   │       └── VideoInfoProvider.php
│   └── Entities
│       ├── Subscriber.php
│       ├── SubscriptionProgram.php
│       └── Video.php
├── composer.json
├── index.php
├── README.md
└── vendor
    ├── autoload.php
    └── composer
        ├── autoload_classmap.php
        ├── autoload_namespaces.php
        ├── autoload_psr4.php
        ├── autoload_real.php
        ├── autoload_static.php
        ├── ClassLoader.php
        └── LICENSE
```
---------
