# Sharing Intents plugin for Craft CMS 5.x

Generate social sharing intent URLs 


## Requirements

This plugin requires Craft CMS 5.0.0-beta.6 or later.

## Installation


```bash
cd /path/to/project
composer require zaengle/sharing-intents
./craft plugin/install sharing-intents
```

## Sharing Intents Overview

Generate sharing URLs using web intents

Current providers:

- Facebook
- Twitter / X
- LinkedIn

## Configuring Sharing Intents

Zero config :)

## Using Sharing Intents

Templating uses `craft.sharingIntents` which has 3 methods:

`facebook()`, `twitter()`, `linkedIn()`

all three take the same params:

`url <string>` URL to share
`description <?string>` optional description (only supported for twitter ATM, other providers won't break, it just won't affect the)
`extraParams <?array>` K/V string pairs of other params to append to the url

```twig
{# get an intent URL #}
{{ craft.sharingIntents.facebook(entry.url) }}
https://www.facebook.com/sharer/sharer.php?u=https%3A//zaengle.com/blog/making-it-work-and-doing-it-right


{# pass an optional description (only supported for twitter ATM) #}
{{ craft.sharingIntents.twitter(entry.url, entry.description) }}
https://twitter.com/intent/tweet?url=https%3A//zaengle.com/blog/making-it-work-and-doing-it-right&text=My+awesome+title


{# arbitrary params! #}
{{ craft.sharingIntents.linkedIn(entry.url, null, { foo: 'bar' }) }}
https://www.linkedin.com/shareArticle?url=https%3A//zaengle.com/blog/making-it-work-and-doing-it-right&foo=bar
```

## Sharing Intents Roadmap


- [x] Release it
- [ ] Add more providers

Brought to you by [Zaengle Corp](https://zaengle.com/)
