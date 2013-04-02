Description
-----------

This script allows you to share your iCloud calendars inside Google calendar.

The problem is that Apple's robots.txt doesn't allow direct linking from Google calendar, so we must pipe through this script.
The solution is to pipe the calendar through this script.

How to use
----------

1. Install this script into the root of your webserver, let's say: http://www.yourserver.com/calendar.php
2. Open your iCloud calendar and copy the link: webcal://p09-calendarws.icloud.com/... 
3. Build the URL as following: http://www.yourserver.com/calendar.php?url=http://p09-calendarws.icloud.com/.....
4. Make sure that now the page works (check the downloaded file that is iCal format)
5. Open Google calendar, click on the arrow besides "Other calendars" and select "Add by URL" and paste the URL from 3)
