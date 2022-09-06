# A setup which reproduces the bug described in https://forge.typo3.org/issues/81893

## Requirements

* ddev

## Setup

* ``ddev start``
* ``ddev composer install -a``
* ``ddev import-db --src=dump.sql.gz``
* ``ddev launch``
* Open TYPO3 backend (should be by default: https://typo3-81893.ddev.site/typo3)
* Credentials: `admin` / `12345678`
* Check video for reproduction

### Video


https://user-images.githubusercontent.com/568633/188592917-4732b9e3-edda-4b8d-a6d5-247bd027e4be.mp4


#### Content element used

* *Icon Teaser*. 

Override configuration can be found ``packages/mb_teasers/Configuration/TCA/Overrides/tt_content.php:3``
