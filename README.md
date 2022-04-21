# Google Email Sync

Syncs Google Directory email lists with email models, removing excess emails, ensuring
roles are up-to-date and creating missing email lists.

This system will only touch email lists existing in the database. Extra email lists
are not touched.

## Requirements

To get this package working, you'll need the following:

-   PHP 8.1
-   Composer
-   Laravel 8.x or newer
-   Google API credentials

## Installation

1.  Install the package:
    ```shell
    composer require gumbo-millennium/google-email-sync
    ```

2.  Update your `GOOGLE_KEY_FILE` environment variable to point to your JSON file.

3.  *TODO*

4.  …
