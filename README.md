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

https://s3.eu-central-1.amazonaws.com/kr.public/tmp/typo3_81893.mp4

#### Content element used

* *Icon Teaser*. 

Override configuration can be found ``packages/mb_teasers/Configuration/TCA/Overrides/tt_content.php:3``
