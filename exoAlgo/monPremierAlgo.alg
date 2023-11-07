<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="C PREND_LA_VALEUR 3" texte="inversion ABC"/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2etat="inactif" F2para="" F2lignes="" F2defaut=""/>
    <repere repcode="-10#10#-10#10#2#2" repetat="inactif"/>
    <param totalAffichages="1000" epaisseurLigne="2" arrondiAuto="vrai" maxBoucle="500000" totalBoucles="5000000" nbDecimales="8" epaisseurPoint="2"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#NOMBRE#A" algoitem="A EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#B" algoitem="B EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#C" algoitem="C EST_DU_TYPE NOMBRE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="5#A#1#pasliste" algoitem="A PREND_LA_VALEUR 1"/>
        <item code="5#B#2#pasliste" algoitem="B PREND_LA_VALEUR 2"/>
        <item code="5#C#3#pasliste" algoitem="C PREND_LA_VALEUR 3"/>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
