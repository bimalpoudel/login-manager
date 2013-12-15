@echo off
 
SET HOSTNAME=localhost
SET USERNAME=root
SET PASSWORD=toor
SET DATABASE=login
 
REM Backup everything
mysqldump --routines -h%HOSTNAME% -u%USERNAME% -p%PASSWORD% %DATABASE% > login-all.dmp
 
REM Backup table structures only, includes VIEWs as well
mysqldump --no-data -h%HOSTNAME% -u%USERNAME% -p%PASSWORD% %DATABASE% > login-structure.dmp
 
REM Backup data only
mysqldump --no-create-info --compact -h%HOSTNAME% -u%USERNAME% -p%PASSWORD% %DATABASE% > login-data.dmp
 
REM Backup routines only
mysqldump --routines --no-create-info --no-data -h%HOSTNAME% -u%USERNAME% -p%PASSWORD% %DATABASE% > login-routines.dmp
 
pause