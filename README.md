Website
===========

Editing Hum's website is relatively easy. It's mostly a static site, save for the blog, which is powered by Wordpress. To make changes, you can mess around in the `development` folder. Once you've got your changes looking good there, you can build the site for `production`.

Open `development` in Terminal. Then, type `grunt build`. This will replace all the static local file paths and replace them with CDN URLs. It also takes our JS and CSS and minifies them into a single documents.

Typing `grunt deploy` will upload all the static HTML and blog theme to their proper directories via SFTP. You'll need the SFTP password to complete this task. Additionally, it'll throw all our JS and CSS up to S3 and invalidate any previous versions.

Typing `grunt deploy-s3` only changes the JS and CSS.

Similarly, `grunt deploy-html` only updates the static HTML and blog theme files.

For now, images are copied to S3 manually.
