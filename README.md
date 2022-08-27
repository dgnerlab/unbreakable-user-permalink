# Unbreakable User Cache
<a href="https://github.com/dgnerlab/wp-rocket-unbreakable-user-cache">Unbreakable User Cache</a> 💪🏻 is a snippet to better handle <a href="https://docs.wp-rocket.me/article/313-user-cache">'User Cache - WP Rocket'</a> using <a href="https://developer.wordpress.org/reference/functions/add_query_arg/">query string</a>.
This simple snippet was made by a fan of <a href="https://wp-rocket.me/">WP Rocket</a>. But, any plugin that can cache query string can do the same.

<br />

# Contents
1. <a href="#what-is-it">What is it?</a>
2. <a href="#-for-example">For example</a>
3. dd
4. dd

<br />

# What is it?
This simple snippet has only three features.
* The Query String '/?login=yes' is added to the login user's Permalink.
* When non-login users access the '/?login=yes' path, they are forcibly redirected to the homepage.
* Use WordPress' 'init' and 'template_redirect' functions appropriately to avoid overlapping caches.

Sorry, that's all! 😂 But it can do some pretty fun stuff. <a href="#-for-example">For example</a>...

<br />

# ✨ For example
The problem with the page cache is that it is difficult to differentiate between logged in and non-logged in users. Because they share the same Permalink, it's hard to physically break them into separate pages. There is a way to utilize cookies, but the method is not simple. Therefore, the Unbreakable User Cache can be divided into separate pages by appending the '/login=yes' query string to the logged-in user's Permalink.

Here are the benefits:
* Separate pages for logged in users and non-logged users. Therefore, the cache file is created separately.
* User cache can be preloaded using 'Common cache for logged in users' and 'No cache for admin'. <a href="">Learn more ↓</a>




```
dadad
```
Special thanks to @x who
