Website
===========

Editing Hum's website is relatively easy. It's mostly a static site, save for the blog, which is powered by Wordpress. To make changes, you can mess around in the `src` folder.

Open the `website` repo in the Terminal. Then, type `grunt build`. This will build the website into the `build` directory. While you're making changes to `src`, it may make sense to run `grunt watch`. This will watch for any changes and automatically rebuild the site. You'll probably want to serve `build` locally.

Typing `grunt deploy` will upload the static `build` directory and blog theme to their proper directories via SFTP. You'll need the SFTP password to complete this task.

### SSL Renewal

Login as root at Digital Ocean's IP address. You'll then want to run `./certbot-auto renew --no-self-upgrade`. This will provide fresh certs. Then, you'll want to restart `nginx` so it actually uses the new certs. To do this, run `service nginx-sp restart`
