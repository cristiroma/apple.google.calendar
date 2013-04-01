Description
-----------

This script allows you to share your iCloud calendar inside Google calendar.

The problem is that Apple's robots.txt doesn't allow direct linking from Google calendar, so we must pipe through this script


How to use
----------

1. Install this script into the root of your webserver, let's say: http://www.yourserver.com/calendar.php
2. Open your iCloud calendar and copy the link: webcal://p09-calendarws.icloud.com/... 
3. Put the link in $url variable inside calendar.php and edit to your custom liking
4. Make sure that now http://www.yourserver.com/calendar.php successfully downloads your page
5. Open Google calendar, click on the arrow besides "Other calendars" and select "Add by URL" and paste this URL
