@echo off
chcp 65001 >nul
echo ========================================================
echo   DANG CAP NHAT DU LIEU TU PHP SANG HTML VA GITHUB
echo ========================================================

:: 1. Render file index.php thanh index.html tinh
"C:\xampp\php\php.exe" index.php > index.html

:: 2. Day len GitHub
git add .
git commit -m "Cap nhat noi dung CV"
git push origin main

echo.
echo ========================================================
echo   DA CAP NHAT THANH CONG LEN GITHUB!
echo   Website CV Online cua ban:
echo   https://khanh665.github.io/my-CV/
echo ========================================================
pause
