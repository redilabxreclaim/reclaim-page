# Notes from Adrian: 

## Intro
This is Kirby's starter kit. It's an instance of Kirby filled with example content already to show you what it can do. I thought this might make more sense than using a completely plain one. When starting with developing the REDI page it might make sense to choose an empty one, but for now priority should be to make this work on your machine.

## Clone this repository
Clone this repository with `git clone`. If you have trouble consult google or help each other :-) 

## Set up dev environment
- Kirby is run on the Server and is PHP based. So just opening it in the browser won't work and a PHP server is required. 
- Setting this up can be a bit complicated and painful but the most easy one I used so far is MAMP which you can download here: [click](https://www.mamp.info/en/mac/). 
- Make sure to download the right version for your operating system of course.
- When you start it go to 'Settings' and as a Document Root choose the folder of the repository you just cloned. PHP version should be at least 8. Click on start and it will open a page in your Browser showing something about MAMP. The URL in my case is `localhost:8888/.....`
- In the address bar remove everything after `localhost:8888/` hit enter and you should see the Kirby page

## Git workflow
Currently we have 2 branches:
- main
- dev

The default branch is `main` right now which contains the status of the project that is able to show to the customer. `dev` contains newer changes.
- If we are working on tickets we never work on main or dev directly and we're not pushing commits on these branches directly. For every ticket we create a new branch based on `dev` with name prefixed with `feat-`.
- If a feature is ready we create a Pull Request (PR) to merge into `dev`. This PR shows all changes and will be reviewed by another developer before it gets merged into `dev`.
- If the status of dev is in a way that we want it to show to the customer we merge `dev` in `main`

It might sound a bit complicated but is common practice and will save us a lot of trouble. It's inspired by Gitflow, here you can read [more](https://nvie.com/posts/a-successful-git-branching-model/).

## Goals for 15.06.2023
- Have the page running for every member of the dev team
- Check the example page, what sections does it have?
- Go to `localhost:8888/panel` to check out how the CMS looks and what the content editors of Reclaim will see when they use the CMS. Our responsibility will be to shape this area to make it possible for Reclaim staff to create and edit the pages.




<img src="http://getkirby.com/assets/images/github/starterkit.jpg" width="300">


**Kirby: the CMS that adapts to any project, loved by developers and editors alike.**  
The Starterkit is a full-blown Kirby installation with a lot of example content, blueprints, templates and more.  
It is ideal for new users to explore many of Kirby's options and get to know the Panel.

You can learn more about Kirby at [getkirby.com](https://getkirby.com).

<img src="http://getkirby.com/assets/images/github/starterkit-screen.png" />

### Try Kirby for free  
You can try Kirby and the Starterkit on your local machine or on a test server as long as you need to make sure it is the right tool for your next project. … and when you’re convinced, [buy your license](https://getkirby.com/buy).

The Starterkit is a demo of basic Kirby features. It's not recommended to be used "as is" in production. Please, follow our documentation closely for more features and guides on how to build secure, high-quality websites with Kirby.

While Kirby as the CMS software itself requires you to purchase a license, we consider the files primarily connected to this Starterkit (assets, templates, snippets...) free to use under the MIT license. Feel free to start building your own project with them.

### Get going
Read our guide on [how to get started with Kirby](https://getkirby.com/docs/guide/quickstart).

You can download the latest version of the Starterkit from https://download.getkirby.com/.  
If you are familiar with Git, you can clone Kirby's Starterkit repository from Github.

    git clone https://github.com/getkirby/starterkit.git

## What's Kirby?
- **[getkirby.com](https://getkirby.com)** – Get to know the CMS.
- **[Try it](https://getkirby.com/try)** – Take a test ride with our online demo. Or download one of our kits to get started.
- **[Documentation](https://getkirby.com/docs/guide)** – Read the official guide, reference and cookbook recipes.
- **[Issues](https://github.com/getkirby/kirby/issues)** – Report bugs and other problems.
- **[Feedback](https://feedback.getkirby.com)** – You have an idea for Kirby? Share it.
- **[Forum](https://forum.getkirby.com)** – Whenever you get stuck, don't hesitate to reach out for questions and support.
- **[Discord](https://chat.getkirby.com)** – Hang out and meet the community.
- **[YouTube](https://youtube.com/kirbyCasts)** - Watch the latest video tutorials visually with Bastian.
- **[Mastodon](https://mastodon.social/@getkirby)** – Spread the word.
- **[Instagram](https://www.instagram.com/getkirby/)** – Share your creations: #madewithkirby.

---

© 2009-2022 Bastian Allgeier  
[getkirby.com](https://getkirby.com) · [License agreement](https://getkirby.com/license)
