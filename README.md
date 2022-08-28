# Unbreakable User Permalink (for User Cache)
<a href="https://github.com/dgnerlab/unbreakable-user-permalink">Unbreakable User Permalink</a> 💪🏻 is a snippet to better handle <a href="https://docs.wp-rocket.me/article/313-user-cache">'User Cache - WP Rocket'</a> using <a href="https://developer.wordpress.org/reference/functions/add_query_arg/">Query string</a>.
This simple snippet was made by a fan of <a href="https://wp-rocket.me/">WP Rocket</a>. But, any plugin that can Cache query string can do the same.

<br />

# Contents
1. <a href="#-what-is-it">What is it?</a>
2. <a href="#-for-example">For example</a>
3. <a href="#learn-more">Learn more</a>
4. How to use
5. dawd

<br />

# 👀 What is it?
This simple snippet has only three features.
* The Query string '/?login=yes' is added to the login user's Permalink.
* When non-login users access the '/?login=yes' path, they are forcibly redirected to the homepage.
* To avoid nesting, WordPress 'init' and 'template_redirect' functions have been used appropriately.

Sorry, that's all! 😂 But it can do some pretty fun stuff. <a href="#-for-example">For example →</a>

<br />

# ✨ For example
The problem with the page Cache is that it is difficult to differentiate between logged in and non-logged in users. Because they share the same Permalink, it's hard to physically break them into separate pages. There is a way to utilize Cookie, but it is not simple. Therefore, the <a href="https://github.com/dgnerlab/unbreakable-user-permalink">Unbreakable User Permalink</a> can be divided into separate pages by appending the '/login=yes' query string to the logged in user's Permalink.

Cache plugin must support Query string page Cache.
Here are the benefits:
* Separate pages for logged in users and non-logged users. Therefore, the Cache file is created separately.
* This solves the Cache nesting issue where logged in users see Cache pages for non-logged in users.
* Cache files of logged in users are well preserved. Avoid unnecessary creation and save server resources.
* This snippet only affects frontend pages. Important files such as robots.txt sitemap.xml are not affected.
* When using network services like Cloudflare, you can specify page rules for logged in users. (Do without Cookie)
* User Cache can be preloaded using <a href="https://github.com/wp-media/wp-rocket-helpers/tree/master/cache/wp-rocket-cache-common-cache-loggedin">Common Cache for Logged in Users</a> and <a href="https://github.com/wp-media/wp-rocket-helpers/tree/master/cache/wp-rocket-no-cache-for-admins">No Cache for Admin</a>. As a result, the page loading speed is also faster for logged in users. <a href="#learn-more">Learn more →</a>

<br />

# Learn more
For logged in users, preloading is almost impossible because cached pages are difficult to preserve. However, if you use the two plugins below with Unbreakable User Permalink, you can also preload the cache of the logged in user.

> Caution! It is only recommended for professionals who can directly view the generated page Cache file.

* <a href="https://github.com/wp-media/wp-rocket-helpers/tree/master/cache/wp-rocket-cache-common-cache-loggedin">Common Cache for Logged in Users</a> Author: WP Rocket Support Team
* <a href="https://github.com/wp-media/wp-rocket-helpers/tree/master/cache/wp-rocket-no-cache-for-admins">No Cache for Admin</a> Author: WP Rocket Support Team

```
dadad
```
Special thanks to @x who
