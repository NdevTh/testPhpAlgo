<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description texte="nombre entre 1 et 10" courant="FIN_SINON"/>
    <extension extnom="inactif"/>
    <fonction fctcode="" fctetat="inactif"/>
    <F2 F2lignes="" F2etat="inactif" F2defaut="" F2para=""/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param totalBoucles="5000000" epaisseurPoint="2" arrondiAuto="vrai" maxBoucle="500000" nbDecimales="8" totalAffichages="1000" epaisseurLigne="2"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#NOMBRE#entier" algoitem="entier EST_DU_TYPE NOMBRE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="4#veuillez entrez un NOMBRE entre 1 et 10#0" algoitem="AFFICHER &quot;veuillez entrez un NOMBRE entre 1 et 10&quot;"/>
        <item code="2#entier#pasliste" algoitem="LIRE entier"/>
        <item code="6#entier &lt;= 10 et entier >= 1" algoitem="SI (entier &lt;= 10 et entier >= 1) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="4#bon NOMBRE#0" algoitem="AFFICHER &quot;bon NOMBRE&quot;"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
            <item code="9#sinon" algoitem="SINON">
                <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                <item code="4#mauvais#0" algoitem="AFFICHER &quot;mauvais&quot;"/>
                <item code="11#finsinon" algoitem="FIN_SINON"/>
            </item>
        </item>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
