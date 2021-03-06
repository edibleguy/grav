# Git Sync Plugin

**Git Sync** is a Plugin for [Grav CMS](http://github.com/getgrav/grav) that allows to seamlessly synchronize a Git repository with your Grav site, and vice-versa. 

Git Sync captures any change that you make on your site and instantly updates your git repository. In the same way, Git Sync supports _webhooks_, allowing to automatically synchronize your site if the repository changes.

Thanks to this powerful bi-directional flow, Git Sync can now turn your site into a collaborative environment where the source of truth is always your git repository and unlimited collaborators and sites can share and contribute to the same content.

## Features

<img src="wizard.png" width="500" />
 
* Easy step-by-step Wizard setup will guide you through a detailed process for setting things up
* Supported hosting services: [GitHub](https://github.com), [BitBucket](https://bitbucket.org), [GitLab](https://gitlab.com)
* Private repository
* Webhooks support allow for automatic synchronization from the Git Repository
* Automatically handles simple merges behind the scenes
* Easy one-click button to reset your local changes and restores it to the actual state of the git repository
* Easy one-click button to manually synchronize
* With the built-in Form Process action `gitsync`, you can trigger the synchronization anytime someone submits a post.
* Any 3rd party plugin can integrate with Git Sync and trigger the synchronization through the `synchronize` event.

# Requirements

In order for the plugin to work, the server needs to run `git` 1.7.1 and above.

# Sponsored by

This plugin could not have been realized without the sponsorship of [Paul Hibbitts](http://www.hibbittsdesign.org/blog/) and the development of [Trilby Media](http://trilby.media).
