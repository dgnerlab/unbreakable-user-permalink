# Unbreakable User Cache
<a href="https://github.com/dgnerlab/wp-rocket-unbreakable-user-cache">Unbreakable User Cache</a> 💪🏻 is a snippet to better handle <a href="https://docs.wp-rocket.me/article/313-user-cache">'User Cache - WP Rocket'</a> using <a href="https://developer.wordpress.org/reference/functions/add_query_arg/">Query string</a>.
This simple snippet was made by a fan of <a href="https://wp-rocket.me/">WP Rocket</a>. But, any plugin that can cache query string can do the same.

> Caution! This is not an official plugin. It's a simple snippet, but it affects every page in WordPress. This can be ok if you use it standalone, but it is a different story when used with the Cache plugin. A malfunctioning page Cache can cause serious security problems. It is only recommended for professionals who can directly view the generated page Cache file. Developer has no take responsibility for management. This plugin user has responsibility for all problems.

<br />

# Contents
1. <a href="#what-is-it">What is it?</a>
2. <a href="#-for-example">For example</a>
3. <a href="#learn-more">Learn more</a>
4. How to use
5. dawd

<br />

# What is it?
This simple snippet has only three features.
* The Query string '/?login=yes' is added to the login user's Permalink.
* When non-login users access the '/?login=yes' path, they are forcibly redirected to the homepage.
* To avoid nesting, WordPress 'init' and 'template_redirect' functions have been used appropriately.

Sorry, that's all! 😂 But it can do some pretty fun stuff. <a href="#-for-example">For example →</a>

<br />

# ✨ For example
The problem with the page Cache is that it is difficult to differentiate between logged in and non-logged in users. Because they share the same Permalink, it's hard to physically break them into separate pages. There is a way to utilize Cookie, but it is not simple. Therefore, the <a href="https://github.com/dgnerlab/wp-rocket-unbreakable-user-cache">Unbreakable User Cache</a> can be divided into separate pages by appending the '/login=yes' query string to the logged-in user's Permalink.

Here are the benefits:
* Separate pages for logged in users and non-logged users. Therefore, the Cache file is created separately. Cache plugin must support Query string page Cache.
* This solves the Cache nesting issue where logged in users see Cache pages for non-logged-in users.
* When using network services like Cloudflare, you can specify page rules for logged in users. (without Cookie)
* User Cache can be preloaded using <a href="https://github.com/wp-media/wp-rocket-helpers/tree/master/cache/wp-rocket-cache-common-cache-loggedin">Common Cache for Logged in Users</a> and <a href="https://github.com/wp-media/wp-rocket-helpers/tree/master/cache/wp-rocket-no-cache-for-admins">No Cache for Admin</a>. As a result, the page loading speed is also faster for logged-in users. <a href="#learn-more">Learn more →</a>

<br />

# Learn more



```
dadad
```
Special thanks to @x who
