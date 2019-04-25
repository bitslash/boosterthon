# Booster Coding Challenge

This was the first time I've ever used Laravel, so there was quite a learning curve. However, I hope this shows how dedicated I am to this prospect. Thank you for taking the time to review it.

## Notes
* I ran everything using Vagrant inside of VirtualBox using Homestead and coded the project using Vim.
* It's using a MariaDB MySQL backend, there were some manual changes to Nginx to serve FontAwesome mime-types.
* I used compiled SASS, though there wasn't much logic to it.
* I broke up the blade templates for reusability using the includes and yields.
* I utilized Bootstrap and FontAwesome for the UI. I did not have time to use VueJS, however, so there is no client-side validation at the moment.
* I added aggregation functions for the ratings. You can drill down to see individual ratings.
* I did implement phpunit tests for everything, though there wasn't much to test on such a simple site.
* I implemented a repository design pattern in order to keep the logic out of the controllers and for easier unit testing. Again, probably overkill for such a simple site.
* I extended the native Eloquent models for data retrieval.
* Due to time constraints, I did not implement error handling with exceptions, which is a really bad practice.

I haven't uploaded the site to a server yet, but I will update this with the URL once I do.
