# Combawa wrapper

This is the wrapper of the Combawa project to build your Drupal projects: https://github.com/Happyculture/combawa

## Installation

### Standalone

1. clone the repository in your prefered location
2. run "composer install" to get all dependencies
3. add [full-wrapper-path]/bin/combawa to you PATH
   OR create a symlink to you bin directory
   example: "ln -s [full-wrapper-path]/bin/combawa /usr/bin/combawa"

### Composer based

1. run `composer global require happyculture/combawa-wrapper:*@dev`

## Usage

Go to any directory in your project and type `combawa` followed by the usual Combawa arguments.
