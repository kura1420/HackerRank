SELECT 
MAX(MONTHS * SALARY), COUNT(*) 
FROM EMPLOYEE 
WHERE (SALARY*MONTHS) = (SELECT MAX(SALARY*MONTHS) FROM EMPLOYEE)