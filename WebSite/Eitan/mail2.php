<?php
    print phpinfo();  
     // Plusieurs destinataires
     $to  = 'eitan.elbaz58@gmail.com, ayrege69@gmail.com'; // notez la virgule

     // Sujet
     $subject = 'Test de message en html';

     // message
     $message = '
     <html>
      <head>
       <title>Test de message en html</title>
      </head>
      <body>
       <p>Voici les anniversaires à venir au mois d\'Août !</p>
       <table>
        <tr>
         <th>Personne</th><th>Jour</th><th>Mois</th><th>Année</th>
        </tr>
        <tr>
         <td>Eitan</td><td>17</td><td>Juillet</td><td>2004</td>
        </tr>
        <tr>
         <td>Leah</td><td>07</td><td>Juillet</td><td>2002</td>
        </tr>
       </table>
      </body>
     </html>
     ';

     // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
     $headers['MIME-Version'] = '1.0';
     $headers['Content-type'] = 'text/html; charset=iso-8859-1';

     // En-têtes additionnels
     $headers['To'] = 'Maman <ayrege69@gmail.com>, Eitan <eitan.elbaz58@gmail.com>';
     $headers['From'] = 'Devine <admin@anneyaelrege.uk>';
     $headers['Cc'] = 'archive@anneyaelrege.uk';
     $headers['Bcc'] = 'verif@anneyaelrege.uk';

     // Envoi
     mail($to, $subject, $message, $headers);
?>