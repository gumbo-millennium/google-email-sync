# Google Email Sync

[![GitHub test status](https://img.shields.io/github/workflow/status/gumbo-millennium/google-email-sync/Run%20unit%20tests/main)](https://github.com/gumbo-millennium/google-email-sync/actions/workflows/run-unit-tests.yml?query=branch%3Amain)
[![Codacy grade](https://img.shields.io/codacy/grade/1bc661cd1477440f98ec68f94f4e8292/main)](https://app.codacy.com/gh/gumbo-millennium/google-email-sync/dashboard?branch=main)
[![Codacy coverage](https://img.shields.io/codacy/coverage/1bc661cd1477440f98ec68f94f4e8292/main)](https://app.codacy.com/gh/gumbo-millennium/google-email-sync/dashboard?branch=main)
[![LGPL-3.0 license](https://img.shields.io/github/license/gumbo-millennium/google-email-sync)](./LICENSE)
[![Latest release](https://img.shields.io/github/v/release/gumbo-millennium/google-email-sync)](https://github.com/gumbo-millennium/google-email-sync/releases)

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
