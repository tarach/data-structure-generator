Table of contents
=================

<!--ts-->
   * [Table of contents](#table-of-contents)
   * [ORM Interfaces](#orm-interface)
   * [Features](#features)
   * [Installation](#installation)
   * Usage
      * [Programmatically ( as library )](#programmatically-as-library)
      * [Commands](#commands)
          * [diff-generate](dsg:diff-generate)
          * [diff-apply](dsg:diff-apply)
          * [find-all](dsg:find-all)
          * [from-db](dsg:from-db)
          * [from-json](dsg:from-json)
          * [from-php-conf](dsg:from-php-conf)
          * [from-php-class](dsg:from-php-class)
          * [from-yaml](dsg:from-yaml)
          * [from-xml](dsg:from-xml)
   * [Tests](#tests)
   * [Dependencies](#dependencies)
<!--te-->

ORM Interfaces
==============
```Data Structure Generator``` ( ```DSG``` ) is a part of ```Webfront ORM``` project. 
Providing loosely coupled set of tools and libraries completely separating domain layer from
infrastructure which is preferred approach according to ```Domain Driven Design``` ( ```DDD``` )

Other components include:

|  Acronym  |              Name                 |
| --------- | --------------------------------- |
|    DSG    |  [Data Structure Generator](github.com/webfront-io/data-structure-generator) (this)  |
|    DSD    |  [Data Structure Definition](github.com/webfront-io/data-structure-definition)       |
|    DEG    |  Domain Entity Generator          |
|    DQD    |  Domain Query Definition          |
|    DQG    |  Domain Query Generator           |
|    DQI    |  Domain Query Invoker             |

|      DSD       |      DED      |      DQG      |
| -------------- | ------------- | ------------- |
| Content Cell   | Content Cell  | Content Cell  |
| Content Cell   | Content Cell  | Content Cell  |

Features
========

* Intuitive structure definition
* Database reverse engineering tool [from-db](dsg:from-db)
* Many definition file formats supported including conversion between them ( [XML](dsg:from-xml), 
[PHP Config](dsg:from-php-conf), [PHP Class](dsg:from-php-class), [YAML](dsg:from-yaml) and [JSON](dsg:from-json) )
* Easily extensible thanks to SOLID principles
* Easily accessible definition structure
* Builder for PHP made with fluent interfaces allowing to leverage OPCache

Installation
============

```composer require webfront/data-structure-generator```

Programmatically ( As library )
===============================

Commands
========

You can easily leverage docker container to always get the same running environment for commands.
```docker run -it --rm -v $(pwd):/app webfront/data-structure-generator ./vendor/webfront/data-structure-generator/bin/dsg```
It is also recommended to create an alias for the command above:
```bash
echo 'alias dsg="<command>"' >> ~/bashrc
source ~/.bashrc
```
After that you will able to call commands using an alias ```dsg ```

dsg:diff-generate
=================

```dsg dsg:diff-generate <resource1> <resource2>``` 
Generates data structures modification commands
```dsg dsg:diff-generate config/data-structure.php mysql:dbname=test;host=127.0.0.1;port=3306```

dsg:diff-apply
==============

```dsg dsg:diff-apply <> <invoker-name|"default">``` 
Requires ```DQI ( Domain Query Invoker )```
Make changes in data st

dsg:find-all
============

Find all definitions in given directory and subdirectories. 
Use ```-r``` option to disable directory recursion or ```-d``` to set recursions maximum depth.

dsg:from-db
===========

Convert ```Database``` to ```\<x>```

dsg:from-json
=============

Convert ```JSON``` to ```\<x>```

dsg:from-php
============

Convert ```PHP``` to ```\<x>```

dsg:from-yaml
=============

Convert ```YAML``` to ```\<x>```

dsg:from-xml
============

Convert ```XML``` to ```\<x>```

Tests
=====

Dependencies
============
Relies on ```webfront/data-structure-definition``` in all cases 
and on ```webfront/domain-query-invoker``` for [from-db](dsg:from-db) and [diff-apply](dsg:diff-apply) commands.
