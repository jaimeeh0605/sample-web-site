# J1 Website Agency - Custom Code Backup

This repo is a backup and version history for the custom code running on
j1webdesign.com. It does not automatically sync to the live site -
think of it as a safe copy, separate from any WP Pusher / auto-deploy
setup you might add later.

## Files

- custom-additional-css.css
-   Everything currently pasted into
-     WP Admin > Appearance > Customize > Additional CSS.
-   Fixes the Designs page gallery layout and builds the mobile hamburger
-     menu for the custom J1 header used on every page.

- - mobile-nav-toggle.php
  -   The PHP snippet currently active in the Code Snippets plugin
  -     (named "Mobile nav toggle" in WP Admin). Adds the hamburger button
  -   and its open/close behavior to the site on the front end.
 
  -   ## If you make future changes on the live site
 
  -   Update the matching file here too (or ask Claude to), so this backup
  -   stays in sync with what's actually live.
 
  -   ## If you want full GitHub -> WordPress auto-deploy later
 
  -   This is a good foundation for that. The plugin WP Pusher can connect
  -   directly to this repo and push updates to the live site automatically.
  -   
