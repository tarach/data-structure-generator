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
          * [diff-generate](diff-generate)
          * [diff-apply](diff-apply)
          * [find-all](find-all)
          * [from-db](from-db)
          * [from-json](from-json)
          * [from-php-conf](from-php-conf)
          * [from-php-class](from-php-class)
          * [from-yaml](from-yaml)
          * [from-xml](from-xml)
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

|      DSD                                                     |      DED      |      DQG      |
| ------------------------------------------------------------ | ------------- | ------------- |
| [<img src="https://bit.ly/2LFXXBX">](https://bit.ly/2vpSi8c) | diagram thumb | diagram thumb |
~ click for full diagram

Features
========

* Intuitive structure definition
* Database reverse engineering tool [from-db](from-db)
* Many definition file formats supported including conversion between them ( [XML](from-xml), 
[PHP Config](from-php-conf), [PHP Class](from-php-class), [YAML](from-yaml) and [JSON](from-json) )
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

diff-generate
=============

```dsg dsg:diff-generate <resource1> <resource2>``` 
Generates data structures modification commands
```dsg dsg:diff-generate config/data-structure.php mysql:dbname=test;host=127.0.0.1;port=3306```

diff-apply
==========

```dsg dsg:diff-apply <> <invoker-name|"default">``` 
Requires ```DQI ( Domain Query Invoker )```
Make changes in data st

find-all
========

Find all definitions in given directory and subdirectories. 
Use ```-r``` option to disable directory recursion or ```-d``` to set recursions maximum depth.

from-db
=======

Convert ```Database``` to ```\<x>```

from-json
=========

Convert ```JSON``` to ```\<x>```

from-php
========

Convert ```PHP``` to ```\<x>```

from-yaml
=========

Convert ```YAML``` to ```\<x>```

from-xml
========

Convert ```XML``` to ```\<x>```

Tests
=====

Dependencies
============
Relies on ```webfront/data-structure-definition``` in all cases 
and on ```webfront/domain-query-invoker``` for [from-db](from-db) and [diff-apply](diff-apply) commands.
