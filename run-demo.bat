:: Why? because windows can't do an OR within the conditional
IF NOT DEFINED API_KEY GOTO defkeysecret
IF NOT DEFINED API_SECRET GOTO defkeysecret
GOTO skipdef

:defkeysecret

SET API_KEY=45713882
SET API_SECRET=e6e13f083a2bbeea27dd6df7d6789152de13ac4f

:skipdef

RD /q /s cache

php.exe -S localhost:8080 -t web web/index.php
