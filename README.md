# Meridian Chrono Group website (staging)

The whole site is `index.html` (markup, styles and script in one file). Logo files are in `brand/`.

## Pages

Home, Buy, Sell or trade, Source a watch, Authentication, Learn (journal and glossary), Questions, About us, Contact, Terms of use and Privacy policy. Pages switch on the URL hash, for example `#shop`, `#about`, `#watch-8` and `#article-2`.

## Before launch

- The 15 watches and prices in the `W` array in `index.html` are samples. Their photos, and the hero, banner and journal photos, are free-licence placeholders loaded from Unsplash (the `ph` ids). Replace them with real stock and photographs. If a photo fails to load, the site falls back to a drawing of the watch.
- Forms do not send anywhere yet. Each one prepares the request text for the visitor to copy or send on Instagram. Connect them to an email address or a form service.
- Terms of use and Privacy policy are drafts and need legal review.
- The page carries `<meta name="robots" content="noindex">`. Remove it when the site goes live.
