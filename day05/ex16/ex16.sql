SELECT COUNT(date) AS movies FROM member_history WHERE DATE(date) BETWEEN '2006-30-10' AND '2007-27-07' or ( DAY(date) = 24 and MONTH(date) = 12 );
