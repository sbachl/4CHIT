## MEDT GK7.1 ITSI GK2 Kombinierte Angriffe auf Webseiten 

#### von Simon Bachl 4CHIT 

## GK:

1) Die Anmeldung erfolgt durch eine SQL Injection. Wir geben im Loginfeld des Benutzers "' OR 1=1 --" ein. Im Hintergrund schaut das in etwa so aus: 
"SELECT * FROM Benutzertabelle WHERE Ort = '' OR 1=1 --'". Mit diesem SQL Kommand sorgen wir dafür das der SELECT Befehl beendet und mit dem 1=1 auf des Benutzer auf true gesetzt wird, mit den -- sorgen wir dafür das alles danach auf einen Kommentar gesetzt wird, also das Passwort. 

2) Der nächste Schritt ist es sich Adminrechte zu beschaffen. Zu aller erst lässt man sich seine Cookies anzeigen und kopiert den Wert. ![Bildschirmfoto 2021-10-05 um 13.53.16](/Users/simon/Desktop/Bildschirmfoto 2021-10-05 um 13.53.16.png)

Den Wert fügen wir dann auf der Seite https://gchq.github.io/CyberChef/ ein 
![Bildschirmfoto 2021-10-05 um 14.04.35](/Users/simon/Desktop/Bildschirmfoto 2021-10-05 um 14.04.35.png)

Den Wert entschlüsselt man dadürch.
Das entschlüsselte kopiert man fügt man oben ein und fügt bei dem Admin eine 1 ein und verschafft sich dadruch Adminrecht. 

![Bildschirmfoto 2021-10-05 um 13.56.19](/Users/simon/Desktop/Bildschirmfoto 2021-10-05 um 13.56.19.png)

Den neu verschlüsselten Wert kopiert man und fügt man erneut bei den Cookies ein.![Bildschirmfoto 2021-10-05 um 13.56.48](/Users/simon/Desktop/Bildschirmfoto 2021-10-05 um 13.56.48.png)

![Bildschirmfoto 2021-10-05 um 14.10.46](/Users/simon/Desktop/Bildschirmfoto 2021-10-05 um 14.10.46.png)

3) Ich habe mir den Quelltext der Seite angeschaut und mir ist aufgefallen das wenn man auf einen Downloadlink auf der Seite drückt die URL geändert wird![Bildschirmfoto 2021-10-05 um 14.21.16](/Users/simon/Desktop/Bildschirmfoto 2021-10-05 um 14.21.16.png)

Durch die veränderung der URL kann man eine andere Datei  runterladen wie zB die index.php was ich dann auch gemacht habe. 

![Bildschirmfoto 2021-10-05 um 14.23.09](/Users/simon/Desktop/Bildschirmfoto 2021-10-05 um 14.23.09.png)

Das gleiche habe ich auch bei der login.php gemacht![Bildschirmfoto 2021-10-05 um 14.23.19](/Users/simon/Desktop/Bildschirmfoto 2021-10-05 um 14.23.19.png)

Daraufhin habe ich beide geöffnet und geschaut wie die Datenbank heißt. In der index.php hat man den Filenamen der Datenbank gefunden. ![Bildschirmfoto 2021-10-05 um 14.27.58](/Users/simon/Desktop/Bildschirmfoto 2021-10-05 um 14.27.58.png)

Dann habe ich auf dem gleichen Weg wie die php Datein auch die Datenbank runtergeladen und in DB Browser for SQLite geöffnet.

Wenn man die Datenbank geöffnet hat geht man auf Daten durchsuchen und dann kann man die User auslesen![Bildschirmfoto 2021-10-05 um 14.38.55](/Users/simon/Desktop/Bildschirmfoto 2021-10-05 um 14.38.55.png)

## Schutz vor den Sicherheitslücken 

SQL Injections: überprüfen ob die Eingabe überhaupt Sinn ergibt
Cookies: Diese nicht frei zugänglich machen
Travelpath: Whitelisten die der User benutzen darf 

