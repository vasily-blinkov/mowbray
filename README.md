# Intro

Checklists web applicaton

# Stack

* HTML, CSS
* Bootstrap
* PHP
* Twig

# Guidelines

## Indentation

2 spaces!

# Processes

## Local run

Being in the `src/` directory, run the next command to start the PHP server for development purposes:

```bash
php -S 127.0.0.1:6635
```

and then open this address in your web browser using one more command.

```bash
firefox 127.0.0.1:6635 > & /dev/null &
```

## Navigation

The Twig is used in the role of a template engine.
Navigation performed using the `page` request variable.

E.g.:

Authentication page:

```bash
http://127.0.0.1:6635/?page=auth
```

Sign up page:

```bash
http://127.0.0.1:6635/?page=reg
```

Default is index:

```bash
http://127.0.0.1/?page=index
```

or just:

```bash
http://127.0.0.1:6635/
```

Code of the pages is in the src/templates directory of the project.
