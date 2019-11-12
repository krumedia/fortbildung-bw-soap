# SOAP-Client Demo von fortbildung-bw.de
Dies demonstriert die Verwendung eines SOAP-Clients.

## Alle verfügbaren Funktionen anzeigen
Liest die externe wsdl ein und zeigt die verfügbaren Funktionen an.
```bash
php example/basicExample.php
```
oder in ihrem Test-WebProjekt : /basicExample.php

# Beispielhafte Implementierung eines Aufrufes zum Abrufen der Veranstalter
CLI     : php example/basicExample.php '{"function":"getVeranstalter"}'

Browser : basicExample.php?function=getVeranstalter

## Beispielhafte Implementierung eines Aufrufes zum Abrufen der Kurse
CLI     : php example/basicExample.php '{"function":"getKurs"}'

Browser : basicExample.php?function=getKurs
