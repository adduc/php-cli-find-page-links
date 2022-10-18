# Exercise: Find Page Links

Given a URL, fetch it, and parse it for links.


## Example Usage

```sh
# Fetch 
./run.php "https://reddit.com/"
```


## Example Output

```json
{
    "urls": [
        "http:\/\/meyerweb.com\/eric\/tools\/css\/reset\/\n",
        "https:\/\/www.redditstatic.com\/crypto-assets\/v2\/-core-styles-fonts-redditsans-redditsans-regular-48854d9ae7.woff2",
        "https:\/\/www.redditstatic.com\/crypto-assets\/v2\/-core-styles-fonts-redditsans-redditsans-bold-c4a5ab79eb.woff2",
        "https:\/\/www.redditstatic.com\/crypto-assets\/v2\/-core-styles-fonts-redditsans-redditsans-extrabold-5d96a4e524.woff2",
        .,
        .,
        .,
        "https:\/\/www.redditstatic.com\/desktop2x\/reddit-components-BlankPost.3fb97829c6575745a9d6.js",
        "https:\/\/www.redditstatic.com\/desktop2x\/js\/tags-slim.js"
    ],
    "domains": [
        "meyerweb.com",
        "www.redditstatic.com",
        "www.reddit.com",
        "schema.org",
        "www.w3.org",
        "styles.redditmedia.com",
        "preview.redd.it",
        "www.msn.com",
        "emoji.redditmedia.com",
        "b.thumbs.redditmedia.com",
        "www.redditinc.com",
        "i.redd.it",
        "out.reddit.com",
        "external-preview.redd.it",
        "a.thumbs.redditmedia.com",
        "alb.reddit.com",
        "v.redd.it",
        "www.theverge.com",
        "www.psypost.org",
        "www.reuters.com",
        "www.lgbtqnation.com",
        "www.thedailybeast.com",
        "chat.reddit.com"
    ]
}
```
