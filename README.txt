# Combawa wrapper

## Installation

### Standalone

1. clone the repository in your prefered location
2. run "composer install" to get all dependencies
3. add [full-wrapper-path]/bin/combawa to you PATH
   OR create a symlink to you bin directory
   example: "ln -s [full-wrapper-path]/bin/combawa /usr/bin/combawa"

### Composer based

1. add the repository to your $HOME/.config/composer/config.json file
```
{
    "repositories": {
        "combawa-wrapper": {
            "type": "vcs",
            "url": "ssh://duael@review.happyculture.coop:2222/Happyculture/infra/combawa-wrapper.git"
        }
    }
}
```
2. run `composer global require happyculture/combawa-wrapper:*@dev`

## Usage

Go to any directory in your project and type `combawa` followed by the usual Combawa arguments.
