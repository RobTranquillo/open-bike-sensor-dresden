<?php

function get_main()
{
    return '
    <p>
        Hallo, hier ist die Seite für alle Menschen die Interesse am <a href="https://www.openbikesensor.org/">Open Bike Sensor</a> in Dresden haben.
        Meldet euch in der Gruppe regio-dresden im Slack oder schaut euch im <a href="https://forum.openbikesensor.org">Forum</a> um.
    </p>

    <h2>Deine Daten hochladen</h2>
    <p>
        Hier kannst Du Deine durch den Open Bike Sensor gesammelten Daten hochladen, damit wir diese gemeinsam auswerten können und daraus Sichtbarkeit für Problemzonen in Dresden entwicklen und entsprechende Forderungen an die Politik formulieren können.
    </p>
    <h3>Haftungsbla, DSGVO und so..</h3>
    <p>
        <ol>
            <li>
                Mit dem Klick auf den upload-button stimmst Du der Verarbeitung Deiner gesammelten Daten durch uns zu.
            </li>
            <li>
                Da wir keine Kontaktdaten von Dir haben möchten, können wir auch nicht feststellen wer Du bist. Eine individualisierung Deiner Daten kann also aktuell nicht erfolgen.
            </li>
            <li>
                Wir werden Deine Daten niemals an Dritte weitergeben.
            </li>
            <li>
                Du versicherst, das Du allein die hochzuladenden Daten erzeugt hast und keine Daten von Dritten ohne deren Zustimmung hochlädst.
            </li>
        </ol>
    </p>
    <iframe id="inlineFrameExample"
        title="upload script"
        src="upload_script/index.php">
    </iframe>
    <p>

        Vielen Dank für Deine Mithilfe.
    </p>
    ';
}

function get_impress()
{
    return '
    <p>
        <a href="index.php">Zurück zur Startseite</a>
    </p>

    <h2>Impressum</h2>

    <p>
        Diese ist eine private Seite, mit der keinerlei finanzielles Interesse verfolgt wird.
        Es werden neben den spärlichen access logs von des web hosters <a href="https://uberspace.de">uberspace</a> keine weiteren Daten erhoben, gespeichert oder gar ausgewertet.
    </p>

    <p>
        Für selbst gemachte Fehler bin ich nicht haftbar.
        Das Internet kann gefährlich sein, wenn die bedienende Person nicht nachdenkt beim klicken.
    </p>

    <p>
        Alle Fragen, Beschwerden und Heiratsanträge können an <a href="mailto:openbikesensor@boogiedev.net">openbikesensor@boogiedev.net</a> gesendet werden.
        Ich bin auch bei <a href="https://www.twitter.com/robtranquillo">Twitter</a> erreichbar.
    </p>
    ';
}
