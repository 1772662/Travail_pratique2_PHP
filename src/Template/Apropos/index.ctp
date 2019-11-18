<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>À propos</title>
</head>

<body>
<h1 >Amina Atmane</h1>
<p > Cours : 420-5b7 MO Applications internet <br/>Coll&eacute;ge Montmorency, Automne 2019<br/>
</p>
</br>

<h4 style="text-align:center;">Fonctionnement du site </h4>
<ol> 
  <li>Login (email : admin@gmail.com / Mot de passe : admin1) </li>
  <li>Enrgistrement d'utilisateur </li>
  <li>Menu avec infos sur l'utilisateur </li>
  <li>Traduction i18n en français,anglais et allemand</li>
  <li>Téléversement et affichage d'images liées aux hotels</li>
  <li>Envoi d'un courriel de confirmation avec UUID	</li>
  <li>Utlisation SQLite pour la base de donnee</li>
  
  
  <li>Pages "À propos" mise à jour (url : http://localhost/hotels_reservations/apropos 
  <br/>ou cliquer sur le raccourci A propos en haut du menu du site)
  <br/>La page À propos permet d'expliquer brievement les fonctionnalites qu'il y a sur le site web.
  </li>
  <li>Afichage en document pdf liee a la table hotel (url : http://localhost/hotels_reservations/hotels ) <br/> cliquer sur l'action (pdf) a droite de l'hotel choisie  <br/> afin de voir les informations sur l'hotel choisie. </li>
  <li>JQuery-ui Autocomplete (url :http://localhost/hotels_reservations/classification/autocompletedemo
  <br/>ou cliquer sur le raccourci Autocomplete en haut du menu du site) </li>
  <li>Listes liées par Ajax (les deux listes liées par Ajax sont les pays et villes de ou sont les hotels) <br/> 
  (url : http://localhost/hotels_reservations/hotels/add
  <br/>ou cliquer sur le raccourci Listes dynamiques en haut du menu du site. 
  </li>
  <li>Ajout et modification de boisson gazeuse servie a l'hotel en Ajax (url : http://localhost/hotels_reservations/breuvage ) </li>
  <li>Lecture et suppression de boisson gazeuse servie a l'hotel en Ajax (url : http://localhost/hotels_reservations/breuvage )</li>
</ol>

</br>

<table border="1" cellpadding="5" cellspacing="0" width="40%" class="tabcenter">
   <tr align="center">
      <td valign="center" >
		   Voici le diagramme original &agrave; partir duquel ma BD a &eacute;t&eacute; concue. Prendre en note que des modifications
		   ont &eacute;tait apportee. </br></br>
           Diagramme original :
				<a href="http://www.databaseanswers.org/data_models/hotels/index.htm" target="_blank"> Hotels resevations</a>
				</td>
      <tr> <td align="center" valign="top">
	  <img src="img/DbHotel.png" alt="" width="700" height="500"  />

	  </td> </tr>

	  </table>
</br></br>

<table border="1" cellpadding="5" cellspacing="0" width="40%" class="tabcenter">
   <tr align="center">
      <td valign="center" >
		Voici le diagramme de la BD qui a &eacute;t&eacute; con&ccedil;ue &agrave; partir du diagramme original.
				</td> </tr>
      <tr> <td align="center" valign="top"><img src="img/DB.png" alt="" width="700" height="500"  /></td> </tr>

</table>

</body>
</html>
