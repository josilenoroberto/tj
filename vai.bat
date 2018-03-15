:inicio

echo off

cls

echo. ---------------------------

echo   Menu Principal

echo. ---------------------------

echo  1 - Somenta adicionar a area stage 	(git add.)

echo. 2 - Fazer um versao local do arquivo 	(git commit -m "Versao")

echo. 3 - Manda para as nuvens 		(git push -u origin master)

echo  4 - CTRL Z 				(git checkout -- .)

echo  5 - OS 3 Primeiros  			(add, comit, push )

echo  6 -  php -S localhost:8080

echo  7 -  ( git clone)

echo  0 - SAIR

echo. ---------------------------

set /p Comando= Digite uma Opcao :

if "%Comando%" equ "1" (goto:op1)

if "%Comando%" equ "2" (goto:op2)

if "%Comando%" equ "3" (goto:op3)

if "%Comando%" equ "4" (goto:op4)

if "%Comando%" equ "5" (goto:op5)

if "%Comando%" equ "6" (goto:op6)

if "%Comando%" equ "7" (goto:op7)

if "%Comando%" equ "0" (goto:exit)

:op1
git add .
pause
goto:inicio

:op2
echo Opcao 2
git commit -m "Versao"
echo. git commit -m "Versao"
goto:inicio

:op3
git push -u origin master
echo.git push -u origin master
pause
goto:inicio

:op4
echo. checkout -- .
git checkout -- leiame.txt
echo. = Caso vc tenha dado um git add . depois, usar este comando ele retorna ultima versao.
pause
goto:inicio

:op5
 
echo. git add .  +  git commit -m + git push -u origin master 
git add . 
git commit -m "Aula15_03_2018 - Terminamos o Login, cadastrar alterar excluir" 
git push -u origin master 
gitk 
goto:inicio

echo. Levanta SERVIDOR PHP
:op6
  
 CLS
php -S localhost:8080
goto:inicio


echo. *** 7 GIT CLONE
:op7
echo. 
git clone git@github.com:josilenoroberto/cursos.git
goto:inicio


:op0
CLS
ECHO.
ECHO.
ECHO.
ECHO.

ECHO. use ctrl + C para SAIR
echo. :exit

ECHO. exit