<?php
  // Getting the timestamp from strings
  echo strtotime('last month'),'<br />';
  echo strtotime('02 September 2006'),'<br />';
  echo strtotime('+2 days'),'<br />';
  echo strtotime('+1 week'),'<br />';
  echo strtotime('+1 week 2 days 4 hours 2 seconds'),'<br />';
  echo strtotime('next Thursday'),'<br />';

  // Using getdate() and strtotime()
  $tomorrow = strtotime('+1 day');  // Convert string to timestamp
  $tomorrow = getdate($tomorrow);   // Use timestamp to get readable date
  echo "Tomorrow is $tomorrow[month] $tomorrow[mday], $tomorrow[year].<br />";

  $next_week = strtotime('next week');
  $next_week = getdate($next_week);
  echo "I go on vacation next $next_week[weekday].<br />";

  // Using strftime() and strtotime()
  echo "Last Monday was ", strftime('%m/%d/%y', strtotime('last Monday')),'.<br />';
  echo "Last month was ", strftime('%B', strtotime('last month')),'.<br />';
  echo "Next month is ", strftime('%B', strtotime('+1 month')),'.<br />';
?>
