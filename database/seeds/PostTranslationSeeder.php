<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_translations')->delete();
        DB::table('post_translations')->insert([
            [
                'title' => 'Se laver fréquemment les mains',
                'content' => 'Se laver fréquemment les mains avec une solution hydroalcoolique ou à l’eau et au savon<br><b>Pourquoi?</b> Se laver les mains avec une solution hydroalcoolique ou à l’eau et au savon tue le virus s’il est présent sur vos mains.',
                'slug' => 'se-laver-frequemment-les-mains',
                'locale' => 'fr',
                'post_id' => 1
            ],
            [
                'title' => 'Se laver fréquemment les mains',
                'content' => 'Se laver fréquemment les mains avec une solution hydroalcoolique ou à l’eau et au savon<br><b>Pourquoi?</b> Se laver les mains avec une solution hydroalcoolique ou à l’eau et au savon tue le virus s’il est présent sur vos mains.',
                'slug' => 'se-laver-frequemment-les-mains',
                'locale' => 'kg',
                'post_id' => 1
            ],
            [
                'title' => 'Se laver fréquemment les mains',
                'content' => 'Se laver fréquemment les mains avec une solution hydroalcoolique ou à l’eau et au savon<br><b>Pourquoi?</b> Se laver les mains avec une solution hydroalcoolique ou à l’eau et au savon tue le virus s’il est présent sur vos mains.',
                'slug' => 'se-laver-frequemment-les-mains',
                'locale' => 'ln',
                'post_id' => 1
            ],
            [
                'title' => 'Se laver fréquemment les mains',
                'content' => 'Se laver fréquemment les mains avec une solution hydroalcoolique ou à l’eau et au savon<br><b>Pourquoi?</b> Se laver les mains avec une solution hydroalcoolique ou à l’eau et au savon tue le virus s’il est présent sur vos mains.',
                'slug' => 'se-laver-frequemment-les-mains',
                'locale' => 'sw',
                'post_id' => 1
            ],
            [
                'title' => 'Se laver fréquemment les mains',
                'content' => 'Se laver fréquemment les mains avec une solution hydroalcoolique ou à l’eau et au savon<br><b>Pourquoi?</b> Se laver les mains avec une solution hydroalcoolique ou à l’eau et au savon tue le virus s’il est présent sur vos mains.',
                'slug' => 'se-laver-frequemment-les-mains',
                'locale' => 'ts',
                'post_id' => 1
            ],
            [
                'title' => 'Éviter les contacts proches',
                'content' => '<p>
Maintenir une distance d’au moins 1 mètre avec les autres personnes, en particulier si elles toussent, éternuent ou ont de la fièvre.
</p><p><b>Pourquoi?</b> Lorsqu’une personne infectée par un virus respiratoire, comme la COVID-19, tousse ou éternue, elle projette de petites gouttelettes contenant le virus. Si vous êtes trop près, vous pouvez inhaler le virus.
</p>',
                'slug' => 'eviter-les-contacts-proches',
                'locale' => 'fr',
                'post_id' => 2
            ],
            [
                'title' => 'Éviter les contacts proches',
                'content' => '<p>
Maintenir une distance d’au moins 1 mètre avec les autres personnes, en particulier si elles toussent, éternuent ou ont de la fièvre.
</p><p><b>Pourquoi?</b> Lorsqu’une personne infectée par un virus respiratoire, comme la COVID-19, tousse ou éternue, elle projette de petites gouttelettes contenant le virus. Si vous êtes trop près, vous pouvez inhaler le virus.
</p>',
                'slug' => 'eviter-les-contacts-proches',
                'locale' => 'kg',
                'post_id' => 2
            ],
            [
                'title' => 'Éviter les contacts proches',
                'content' => '<p>
Maintenir une distance d’au moins 1 mètre avec les autres personnes, en particulier si elles toussent, éternuent ou ont de la fièvre.
</p><p><b>Pourquoi?</b> Lorsqu’une personne infectée par un virus respiratoire, comme la COVID-19, tousse ou éternue, elle projette de petites gouttelettes contenant le virus. Si vous êtes trop près, vous pouvez inhaler le virus.
</p>',
                'slug' => 'eviter-les-contacts-proches',
                'locale' => 'ln',
                'post_id' => 2
            ],
            [
                'title' => 'Éviter les contacts proches',
                'content' => '<p>
Maintenir une distance d’au moins 1 mètre avec les autres personnes, en particulier si elles toussent, éternuent ou ont de la fièvre.
</p><p><b>Pourquoi?</b> Lorsqu’une personne infectée par un virus respiratoire, comme la COVID-19, tousse ou éternue, elle projette de petites gouttelettes contenant le virus. Si vous êtes trop près, vous pouvez inhaler le virus.
</p>',
                'slug' => 'eviter-les-contacts-proches',
                'locale' => 'sw',
                'post_id' => 2
            ],
            [
                'title' => 'Éviter les contacts proches',
                'content' => '<p>
Maintenir une distance d’au moins 1 mètre avec les autres personnes, en particulier si elles toussent, éternuent ou ont de la fièvre.
</p><p><b>Pourquoi?</b> Lorsqu’une personne infectée par un virus respiratoire, comme la COVID-19, tousse ou éternue, elle projette de petites gouttelettes contenant le virus. Si vous êtes trop près, vous pouvez inhaler le virus.
</p>',
                'slug' => 'eviter-les-contacts-proches',
                'locale' => 'ts',
                'post_id' => 2
            ],
            [
                'title' => 'Éviter de se toucher les yeux, le nez et la bouche.',
                'content' => '<b>Pourquoi?</b> Les mains sont en contact avec de nombreuses surfaces qui peuvent être contaminées par le virus. Si vous vous touchez les yeux, le nez ou la bouche, vous risquez d’être en contact avec le virus présent sur ces surfaces.',
                'slug' => 'eviter-de-se-toucher-les-yeux-le-nez-et-la-bouche',
                'locale' => 'fr',
                'post_id' => 3
            ],
            [
                'title' => 'Éviter de se toucher les yeux, le nez et la bouche.',
                'content' => '<b>Pourquoi?</b> Les mains sont en contact avec de nombreuses surfaces qui peuvent être contaminées par le virus. Si vous vous touchez les yeux, le nez ou la bouche, vous risquez d’être en contact avec le virus présent sur ces surfaces.',
                'slug' => 'eviter-de-se-toucher-les-yeux-le-nez-et-la-bouche',
                'locale' => 'kg',
                'post_id' => 3
            ],
            [
                'title' => 'Éviter de se toucher les yeux, le nez et la bouche.',
                'content' => '<b>Pourquoi?</b> Les mains sont en contact avec de nombreuses surfaces qui peuvent être contaminées par le virus. Si vous vous touchez les yeux, le nez ou la bouche, vous risquez d’être en contact avec le virus présent sur ces surfaces.',
                'slug' => 'eviter-de-se-toucher-les-yeux-le-nez-et-la-bouche',
                'locale' => 'ln',
                'post_id' => 3
            ],
            [
                'title' => 'Éviter de se toucher les yeux, le nez et la bouche.',
                'content' => '<b>Pourquoi?</b> Les mains sont en contact avec de nombreuses surfaces qui peuvent être contaminées par le virus. Si vous vous touchez les yeux, le nez ou la bouche, vous risquez d’être en contact avec le virus présent sur ces surfaces.',
                'slug' => 'eviter-de-se-toucher-les-yeux-le-nez-et-la-bouche',
                'locale' => 'sw',
                'post_id' => 3
            ],
            [
                'title' => 'Éviter de se toucher les yeux, le nez et la bouche.',
                'content' => '<b>Pourquoi?</b> Les mains sont en contact avec de nombreuses surfaces qui peuvent être contaminées par le virus. Si vous vous touchez les yeux, le nez ou la bouche, vous risquez d’être en contact avec le virus présent sur ces surfaces.',
                'slug' => 'eviter-de-se-toucher-les-yeux-le-nez-et-la-bouche',
                'locale' => 'ts',
                'post_id' => 3
            ],
            [
                'title' => 'Mesures prises par le Gouvernement 18 mars 2020',
                'content' => '<p>

Suite à son adresse à la nation de ce 18 mars 2020, voici les décisions prises ce mercredi 18 mars 2020 par le Chef de l’État Son Excellence Monsieur Félix-Antoine Tshisekedi Tshilombo, au sujet de l’épidémie au Coronavirus-COVID-19.</p><h3>Mesures Générales<br></h3><ol><li>De suspendre, jusqu’à nouvel ordre, dès ce vendredi 20 mars 2020, tous les vols en provenance des pays à risque et des pays de transit. Seuls les avions et les navires cargos et autres moyens de transport frets seront autorisés à accéder au territoire national et leurs personnels soumis aux contrôles ;</li><li>De reporter les voyages à destination de la République Démocratique du Congo de tous les passagers résidant dans les pays à risque jusqu’à nouvel </li><li>D’imposer à tous les passagers, à leur arrivée aux frontières nationales, de remplir une fiche de renseignements et de se soumettre, sans exception, à l’obligation de lavage des mains et du prélèvement de la température ;</li><li>D’imposer une mise en quarantaine de 14 jours maximum à toute personne suspectée à l’issue du test de température, pour un examen approfondi et au besoin d’interner, dans les hôpitaux prévus à cet effet, les personnes qui seront testées positives ;</li><li>De doter tous les postes d’entrée maritime, fluviale, lacustre et terrestre du territoire national du même dispositif de surveillance pour renforcer le contrôle des passagers en provenance de l’étranger ;</li><li>De soumettre systématiquement les personnes en partance de Kinshasa vers les différentes Provinces de notre pays aux mesures de contrôle dans le but d’éviter la propagation de cette pandémie sur le reste de notre pays.</li></ol><h3> Mesures concernant les rassemblements</h3><p><b>Le Chef de l’État a décidé:</b><br></p><ol><li><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;" id="docs-internal-guid-953ca373-7fff-554b-2100-cfbd74310b2e">D’interdire tous rassemblements, réunions, célébrations, de plus de 20 personnes sur les lieux publics en dehors du domicile familial ;</span></li><li><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;" id="docs-internal-guid-953ca373-7fff-554b-2100-cfbd74310b2e">De la fermeture des écoles, des universités, des instituts supérieurs officiels et privés sur l’ensemble du territoire national à dater de ce jeudi 19 mars 2020 pour une durée de 4 semaines ;</span></li><li><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;" id="docs-internal-guid-953ca373-7fff-554b-2100-cfbd74310b2e">De suspendre tous les cultes pour une période de 4 semaines à compter de ce jeudi 19 mars 2020 ;</span></li><li><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;" id="docs-internal-guid-953ca373-7fff-554b-2100-cfbd74310b2e">De suspendre les activités sportives dans les stades et autres lieux de regroupement sportif jusqu’à nouvel </span></li><li><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;" id="docs-internal-guid-953ca373-7fff-554b-2100-cfbd74310b2e">D’interdire, toujours jusqu’à nouvel ordre, l’ouverture des discothèques, bars, cafés, terrasses et restaurants ;</span></li><li><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;" id="docs-internal-guid-953ca373-7fff-554b-2100-cfbd74310b2e">D’interdire, l’organisation des deuils dans les salles et les domiciles. Les dépouilles mortelles seront conduites directement de la morgue jusqu’au lieu d’inhumation et en nombre restreint d\'accompagnateurs;</span></li><li><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;" id="docs-internal-guid-953ca373-7fff-554b-2100-cfbd74310b2e">De prendre en charge aux frais du Gouvernement tous les cas testés positifs sur l’ensemble du territoire.<br><br></span><b><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;" id="docs-internal-guid-953ca373-7fff-554b-2100-cfbd74310b2e"></span></b></li></ol>',
                'slug' => 'mesures-prises-par-le-gouvernement-18-mars-2020',
                'locale' => 'fr',
                'post_id' => 4
            ],
            [
                'title' => 'Mesures prises par le Gouvernement 18 mars 2020',
                'content' => '<p>

Suite à son adresse à la nation de ce 18 mars 2020, voici les décisions prises ce mercredi 18 mars 2020 par le Chef de l’État Son Excellence Monsieur Félix-Antoine Tshisekedi Tshilombo, au sujet de l’épidémie au Coronavirus-COVID-19.</p><h3>Mesures Générales<br></h3><ol><li>De suspendre, jusqu’à nouvel ordre, dès ce vendredi 20 mars 2020, tous les vols en provenance des pays à risque et des pays de transit. Seuls les avions et les navires cargos et autres moyens de transport frets seront autorisés à accéder au territoire national et leurs personnels soumis aux contrôles ;</li><li>De reporter les voyages à destination de la République Démocratique du Congo de tous les passagers résidant dans les pays à risque jusqu’à nouvel </li><li>D’imposer à tous les passagers, à leur arrivée aux frontières nationales, de remplir une fiche de renseignements et de se soumettre, sans exception, à l’obligation de lavage des mains et du prélèvement de la température ;</li><li>D’imposer une mise en quarantaine de 14 jours maximum à toute personne suspectée à l’issue du test de température, pour un examen approfondi et au besoin d’interner, dans les hôpitaux prévus à cet effet, les personnes qui seront testées positives ;</li><li>De doter tous les postes d’entrée maritime, fluviale, lacustre et terrestre du territoire national du même dispositif de surveillance pour renforcer le contrôle des passagers en provenance de l’étranger ;</li><li>De soumettre systématiquement les personnes en partance de Kinshasa vers les différentes Provinces de notre pays aux mesures de contrôle dans le but d’éviter la propagation de cette pandémie sur le reste de notre pays.</li></ol><h3> Mesures concernant les rassemblements</h3><p><b>Le Chef de l’État a décidé:</b><br></p><ol><li><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;" id="docs-internal-guid-953ca373-7fff-554b-2100-cfbd74310b2e">D’interdire tous rassemblements, réunions, célébrations, de plus de 20 personnes sur les lieux publics en dehors du domicile familial ;</span></li><li><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;" id="docs-internal-guid-953ca373-7fff-554b-2100-cfbd74310b2e">De la fermeture des écoles, des universités, des instituts supérieurs officiels et privés sur l’ensemble du territoire national à dater de ce jeudi 19 mars 2020 pour une durée de 4 semaines ;</span></li><li><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;" id="docs-internal-guid-953ca373-7fff-554b-2100-cfbd74310b2e">De suspendre tous les cultes pour une période de 4 semaines à compter de ce jeudi 19 mars 2020 ;</span></li><li><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;" id="docs-internal-guid-953ca373-7fff-554b-2100-cfbd74310b2e">De suspendre les activités sportives dans les stades et autres lieux de regroupement sportif jusqu’à nouvel </span></li><li><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;" id="docs-internal-guid-953ca373-7fff-554b-2100-cfbd74310b2e">D’interdire, toujours jusqu’à nouvel ordre, l’ouverture des discothèques, bars, cafés, terrasses et restaurants ;</span></li><li><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;" id="docs-internal-guid-953ca373-7fff-554b-2100-cfbd74310b2e">D’interdire, l’organisation des deuils dans les salles et les domiciles. Les dépouilles mortelles seront conduites directement de la morgue jusqu’au lieu d’inhumation et en nombre restreint d\'accompagnateurs;</span></li><li><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;" id="docs-internal-guid-953ca373-7fff-554b-2100-cfbd74310b2e">De prendre en charge aux frais du Gouvernement tous les cas testés positifs sur l’ensemble du territoire.<br><br></span><b><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;" id="docs-internal-guid-953ca373-7fff-554b-2100-cfbd74310b2e"></span></b></li></ol>',
                'slug' => 'mesures-prises-par-le-gouvernement-18-mars-2020',
                'locale' => 'kg',
                'post_id' => 4
            ],
            [
                'title' => 'Mesures prises par le Gouvernement 18 mars 2020',
                'content' => '<p>

Suite à son adresse à la nation de ce 18 mars 2020, voici les décisions prises ce mercredi 18 mars 2020 par le Chef de l’État Son Excellence Monsieur Félix-Antoine Tshisekedi Tshilombo, au sujet de l’épidémie au Coronavirus-COVID-19.</p><h3>Mesures Générales<br></h3><ol><li>De suspendre, jusqu’à nouvel ordre, dès ce vendredi 20 mars 2020, tous les vols en provenance des pays à risque et des pays de transit. Seuls les avions et les navires cargos et autres moyens de transport frets seront autorisés à accéder au territoire national et leurs personnels soumis aux contrôles ;</li><li>De reporter les voyages à destination de la République Démocratique du Congo de tous les passagers résidant dans les pays à risque jusqu’à nouvel </li><li>D’imposer à tous les passagers, à leur arrivée aux frontières nationales, de remplir une fiche de renseignements et de se soumettre, sans exception, à l’obligation de lavage des mains et du prélèvement de la température ;</li><li>D’imposer une mise en quarantaine de 14 jours maximum à toute personne suspectée à l’issue du test de température, pour un examen approfondi et au besoin d’interner, dans les hôpitaux prévus à cet effet, les personnes qui seront testées positives ;</li><li>De doter tous les postes d’entrée maritime, fluviale, lacustre et terrestre du territoire national du même dispositif de surveillance pour renforcer le contrôle des passagers en provenance de l’étranger ;</li><li>De soumettre systématiquement les personnes en partance de Kinshasa vers les différentes Provinces de notre pays aux mesures de contrôle dans le but d’éviter la propagation de cette pandémie sur le reste de notre pays.</li></ol><h3> Mesures concernant les rassemblements</h3><p><b>Le Chef de l’État a décidé:</b><br></p><ol><li><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;" id="docs-internal-guid-953ca373-7fff-554b-2100-cfbd74310b2e">D’interdire tous rassemblements, réunions, célébrations, de plus de 20 personnes sur les lieux publics en dehors du domicile familial ;</span></li><li><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;" id="docs-internal-guid-953ca373-7fff-554b-2100-cfbd74310b2e">De la fermeture des écoles, des universités, des instituts supérieurs officiels et privés sur l’ensemble du territoire national à dater de ce jeudi 19 mars 2020 pour une durée de 4 semaines ;</span></li><li><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;" id="docs-internal-guid-953ca373-7fff-554b-2100-cfbd74310b2e">De suspendre tous les cultes pour une période de 4 semaines à compter de ce jeudi 19 mars 2020 ;</span></li><li><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;" id="docs-internal-guid-953ca373-7fff-554b-2100-cfbd74310b2e">De suspendre les activités sportives dans les stades et autres lieux de regroupement sportif jusqu’à nouvel </span></li><li><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;" id="docs-internal-guid-953ca373-7fff-554b-2100-cfbd74310b2e">D’interdire, toujours jusqu’à nouvel ordre, l’ouverture des discothèques, bars, cafés, terrasses et restaurants ;</span></li><li><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;" id="docs-internal-guid-953ca373-7fff-554b-2100-cfbd74310b2e">D’interdire, l’organisation des deuils dans les salles et les domiciles. Les dépouilles mortelles seront conduites directement de la morgue jusqu’au lieu d’inhumation et en nombre restreint d\'accompagnateurs;</span></li><li><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;" id="docs-internal-guid-953ca373-7fff-554b-2100-cfbd74310b2e">De prendre en charge aux frais du Gouvernement tous les cas testés positifs sur l’ensemble du territoire.<br><br></span><b><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;" id="docs-internal-guid-953ca373-7fff-554b-2100-cfbd74310b2e"></span></b></li></ol>',
                'slug' => 'mesures-prises-par-le-gouvernement-18-mars-2020',
                'locale' => 'ln',
                'post_id' => 4
            ],
            [
                'title' => 'Mesures prises par le Gouvernement 18 mars 2020',
                'content' => '<p>

Suite à son adresse à la nation de ce 18 mars 2020, voici les décisions prises ce mercredi 18 mars 2020 par le Chef de l’État Son Excellence Monsieur Félix-Antoine Tshisekedi Tshilombo, au sujet de l’épidémie au Coronavirus-COVID-19.</p><h3>Mesures Générales<br></h3><ol><li>De suspendre, jusqu’à nouvel ordre, dès ce vendredi 20 mars 2020, tous les vols en provenance des pays à risque et des pays de transit. Seuls les avions et les navires cargos et autres moyens de transport frets seront autorisés à accéder au territoire national et leurs personnels soumis aux contrôles ;</li><li>De reporter les voyages à destination de la République Démocratique du Congo de tous les passagers résidant dans les pays à risque jusqu’à nouvel </li><li>D’imposer à tous les passagers, à leur arrivée aux frontières nationales, de remplir une fiche de renseignements et de se soumettre, sans exception, à l’obligation de lavage des mains et du prélèvement de la température ;</li><li>D’imposer une mise en quarantaine de 14 jours maximum à toute personne suspectée à l’issue du test de température, pour un examen approfondi et au besoin d’interner, dans les hôpitaux prévus à cet effet, les personnes qui seront testées positives ;</li><li>De doter tous les postes d’entrée maritime, fluviale, lacustre et terrestre du territoire national du même dispositif de surveillance pour renforcer le contrôle des passagers en provenance de l’étranger ;</li><li>De soumettre systématiquement les personnes en partance de Kinshasa vers les différentes Provinces de notre pays aux mesures de contrôle dans le but d’éviter la propagation de cette pandémie sur le reste de notre pays.</li></ol><h3> Mesures concernant les rassemblements</h3><p><b>Le Chef de l’État a décidé:</b><br></p><ol><li><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;" id="docs-internal-guid-953ca373-7fff-554b-2100-cfbd74310b2e">D’interdire tous rassemblements, réunions, célébrations, de plus de 20 personnes sur les lieux publics en dehors du domicile familial ;</span></li><li><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;" id="docs-internal-guid-953ca373-7fff-554b-2100-cfbd74310b2e">De la fermeture des écoles, des universités, des instituts supérieurs officiels et privés sur l’ensemble du territoire national à dater de ce jeudi 19 mars 2020 pour une durée de 4 semaines ;</span></li><li><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;" id="docs-internal-guid-953ca373-7fff-554b-2100-cfbd74310b2e">De suspendre tous les cultes pour une période de 4 semaines à compter de ce jeudi 19 mars 2020 ;</span></li><li><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;" id="docs-internal-guid-953ca373-7fff-554b-2100-cfbd74310b2e">De suspendre les activités sportives dans les stades et autres lieux de regroupement sportif jusqu’à nouvel </span></li><li><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;" id="docs-internal-guid-953ca373-7fff-554b-2100-cfbd74310b2e">D’interdire, toujours jusqu’à nouvel ordre, l’ouverture des discothèques, bars, cafés, terrasses et restaurants ;</span></li><li><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;" id="docs-internal-guid-953ca373-7fff-554b-2100-cfbd74310b2e">D’interdire, l’organisation des deuils dans les salles et les domiciles. Les dépouilles mortelles seront conduites directement de la morgue jusqu’au lieu d’inhumation et en nombre restreint d\'accompagnateurs;</span></li><li><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;" id="docs-internal-guid-953ca373-7fff-554b-2100-cfbd74310b2e">De prendre en charge aux frais du Gouvernement tous les cas testés positifs sur l’ensemble du territoire.<br><br></span><b><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;" id="docs-internal-guid-953ca373-7fff-554b-2100-cfbd74310b2e"></span></b></li></ol>',
                'slug' => 'mesures-prises-par-le-gouvernement-18-mars-2020',
                'locale' => 'sw',
                'post_id' => 4
            ],
            [
                'title' => 'Mesures prises par le Gouvernement 18 mars 2020',
                'content' => '<p>

Suite à son adresse à la nation de ce 18 mars 2020, voici les décisions prises ce mercredi 18 mars 2020 par le Chef de l’État Son Excellence Monsieur Félix-Antoine Tshisekedi Tshilombo, au sujet de l’épidémie au Coronavirus-COVID-19.</p><h3>Mesures Générales<br></h3><ol><li>De suspendre, jusqu’à nouvel ordre, dès ce vendredi 20 mars 2020, tous les vols en provenance des pays à risque et des pays de transit. Seuls les avions et les navires cargos et autres moyens de transport frets seront autorisés à accéder au territoire national et leurs personnels soumis aux contrôles ;</li><li>De reporter les voyages à destination de la République Démocratique du Congo de tous les passagers résidant dans les pays à risque jusqu’à nouvel </li><li>D’imposer à tous les passagers, à leur arrivée aux frontières nationales, de remplir une fiche de renseignements et de se soumettre, sans exception, à l’obligation de lavage des mains et du prélèvement de la température ;</li><li>D’imposer une mise en quarantaine de 14 jours maximum à toute personne suspectée à l’issue du test de température, pour un examen approfondi et au besoin d’interner, dans les hôpitaux prévus à cet effet, les personnes qui seront testées positives ;</li><li>De doter tous les postes d’entrée maritime, fluviale, lacustre et terrestre du territoire national du même dispositif de surveillance pour renforcer le contrôle des passagers en provenance de l’étranger ;</li><li>De soumettre systématiquement les personnes en partance de Kinshasa vers les différentes Provinces de notre pays aux mesures de contrôle dans le but d’éviter la propagation de cette pandémie sur le reste de notre pays.</li></ol><h3> Mesures concernant les rassemblements</h3><p><b>Le Chef de l’État a décidé:</b><br></p><ol><li><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;" id="docs-internal-guid-953ca373-7fff-554b-2100-cfbd74310b2e">D’interdire tous rassemblements, réunions, célébrations, de plus de 20 personnes sur les lieux publics en dehors du domicile familial ;</span></li><li><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;" id="docs-internal-guid-953ca373-7fff-554b-2100-cfbd74310b2e">De la fermeture des écoles, des universités, des instituts supérieurs officiels et privés sur l’ensemble du territoire national à dater de ce jeudi 19 mars 2020 pour une durée de 4 semaines ;</span></li><li><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;" id="docs-internal-guid-953ca373-7fff-554b-2100-cfbd74310b2e">De suspendre tous les cultes pour une période de 4 semaines à compter de ce jeudi 19 mars 2020 ;</span></li><li><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;" id="docs-internal-guid-953ca373-7fff-554b-2100-cfbd74310b2e">De suspendre les activités sportives dans les stades et autres lieux de regroupement sportif jusqu’à nouvel </span></li><li><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;" id="docs-internal-guid-953ca373-7fff-554b-2100-cfbd74310b2e">D’interdire, toujours jusqu’à nouvel ordre, l’ouverture des discothèques, bars, cafés, terrasses et restaurants ;</span></li><li><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;" id="docs-internal-guid-953ca373-7fff-554b-2100-cfbd74310b2e">D’interdire, l’organisation des deuils dans les salles et les domiciles. Les dépouilles mortelles seront conduites directement de la morgue jusqu’au lieu d’inhumation et en nombre restreint d\'accompagnateurs;</span></li><li><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;" id="docs-internal-guid-953ca373-7fff-554b-2100-cfbd74310b2e">De prendre en charge aux frais du Gouvernement tous les cas testés positifs sur l’ensemble du territoire.<br><br></span><b><span style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;" id="docs-internal-guid-953ca373-7fff-554b-2100-cfbd74310b2e"></span></b></li></ol>',
                'slug' => 'mesures-prises-par-le-gouvernement-18-mars-2020',
                'locale' => 'ts',
                'post_id' => 4
            ],
            [
                'title' => 'Le virus de la COVID-19 peut se transmettre sous les climats chauds et humides.',
                'content' => 'D’après les données dont on dispose jusqu’à présent, le virus de la COVID-19 peut se transmettre dans TOUTES LES RÉGIONS, y compris les zones chaudes et humides. Indépendamment du climat, prenez des mesures de protection si vous vivez ou si vous vous rendez dans une zone où il y a des cas de COVID-19. Le meilleur moyen de se protéger contre l’infection est de se laver souvent les mains. Le lavage des mains élimine les virus qui pourraient s’y trouver et évite qu’on ne soit contaminé en se touchant les yeux, le nez ou la bouche.',
                'slug' => 'le-virus-de-la-covid-19-peut-se-transmettre-sous-les-climats-chauds-et-humides',
                'locale' => 'fr',
                'post_id' => 5
            ],
            [
                'title' => 'Le virus de la COVID-19 peut se transmettre sous les climats chauds et humides.',
                'content' => 'D’après les données dont on dispose jusqu’à présent, le virus de la COVID-19 peut se transmettre dans TOUTES LES RÉGIONS, y compris les zones chaudes et humides. Indépendamment du climat, prenez des mesures de protection si vous vivez ou si vous vous rendez dans une zone où il y a des cas de COVID-19. Le meilleur moyen de se protéger contre l’infection est de se laver souvent les mains. Le lavage des mains élimine les virus qui pourraient s’y trouver et évite qu’on ne soit contaminé en se touchant les yeux, le nez ou la bouche.',
                'slug' => 'le-virus-de-la-covid-19-peut-se-transmettre-sous-les-climats-chauds-et-humides',
                'locale' => 'kg',
                'post_id' => 5
            ],
            [
                'title' => 'Le virus de la COVID-19 peut se transmettre sous les climats chauds et humides.',
                'content' => 'D’après les données dont on dispose jusqu’à présent, le virus de la COVID-19 peut se transmettre dans TOUTES LES RÉGIONS, y compris les zones chaudes et humides. Indépendamment du climat, prenez des mesures de protection si vous vivez ou si vous vous rendez dans une zone où il y a des cas de COVID-19. Le meilleur moyen de se protéger contre l’infection est de se laver souvent les mains. Le lavage des mains élimine les virus qui pourraient s’y trouver et évite qu’on ne soit contaminé en se touchant les yeux, le nez ou la bouche.',
                'slug' => 'le-virus-de-la-covid-19-peut-se-transmettre-sous-les-climats-chauds-et-humides',
                'locale' => 'ln',
                'post_id' => 5
            ],
            [
                'title' => 'Le virus de la COVID-19 peut se transmettre sous les climats chauds et humides.',
                'content' => 'D’après les données dont on dispose jusqu’à présent, le virus de la COVID-19 peut se transmettre dans TOUTES LES RÉGIONS, y compris les zones chaudes et humides. Indépendamment du climat, prenez des mesures de protection si vous vivez ou si vous vous rendez dans une zone où il y a des cas de COVID-19. Le meilleur moyen de se protéger contre l’infection est de se laver souvent les mains. Le lavage des mains élimine les virus qui pourraient s’y trouver et évite qu’on ne soit contaminé en se touchant les yeux, le nez ou la bouche.',
                'slug' => 'le-virus-de-la-covid-19-peut-se-transmettre-sous-les-climats-chauds-et-humides',
                'locale' => 'sw',
                'post_id' => 5
            ],
            [
                'title' => 'Le virus de la COVID-19 peut se transmettre sous les climats chauds et humides.',
                'content' => 'D’après les données dont on dispose jusqu’à présent, le virus de la COVID-19 peut se transmettre dans TOUTES LES RÉGIONS, y compris les zones chaudes et humides. Indépendamment du climat, prenez des mesures de protection si vous vivez ou si vous vous rendez dans une zone où il y a des cas de COVID-19. Le meilleur moyen de se protéger contre l’infection est de se laver souvent les mains. Le lavage des mains élimine les virus qui pourraient s’y trouver et évite qu’on ne soit contaminé en se touchant les yeux, le nez ou la bouche.',
                'slug' => 'le-virus-de-la-covid-19-peut-se-transmettre-sous-les-climats-chauds-et-humides',
                'locale' => 'ts',
                'post_id' => 5
            ],
            [
                'title' => 'Prendre un bain chaud ne protège pas contre le nouveau coronavirus.',
                'content' => 'Prendre un bain chaud n’empêche pas de contracter la COVID-19. La température du corps reste normale, entre 36,5°C et 37°C, quelle que soit celle de votre bain ou de votre douche. Par ailleurs, il peut être dangereux de prendre un bain très chaud à cause du risque de brûlure. Le meilleur moyen de se protéger contre la COVID-19 est de se laver souvent les mains. Le lavage des mains élimine les virus qui pourraient s’y trouver et évite qu’on ne soit contaminé en se touchant les yeux, la bouche ou le nez.',
                'slug' => 'prendre-un-bain-chaud-ne-protege-pas-contre-le-nouveau-coronavirus',
                'locale' => 'fr',
                'post_id' => 6
            ],
            [
                'title' => 'Prendre un bain chaud ne protège pas contre le nouveau coronavirus.',
                'content' => 'Prendre un bain chaud n’empêche pas de contracter la COVID-19. La température du corps reste normale, entre 36,5°C et 37°C, quelle que soit celle de votre bain ou de votre douche. Par ailleurs, il peut être dangereux de prendre un bain très chaud à cause du risque de brûlure. Le meilleur moyen de se protéger contre la COVID-19 est de se laver souvent les mains. Le lavage des mains élimine les virus qui pourraient s’y trouver et évite qu’on ne soit contaminé en se touchant les yeux, la bouche ou le nez.',
                'slug' => 'prendre-un-bain-chaud-ne-protege-pas-contre-le-nouveau-coronavirus',
                'locale' => 'kg',
                'post_id' => 6
            ],
            [
                'title' => 'Prendre un bain chaud ne protège pas contre le nouveau coronavirus.',
                'content' => 'Prendre un bain chaud n’empêche pas de contracter la COVID-19. La température du corps reste normale, entre 36,5°C et 37°C, quelle que soit celle de votre bain ou de votre douche. Par ailleurs, il peut être dangereux de prendre un bain très chaud à cause du risque de brûlure. Le meilleur moyen de se protéger contre la COVID-19 est de se laver souvent les mains. Le lavage des mains élimine les virus qui pourraient s’y trouver et évite qu’on ne soit contaminé en se touchant les yeux, la bouche ou le nez.',
                'slug' => 'prendre-un-bain-chaud-ne-protege-pas-contre-le-nouveau-coronavirus',
                'locale' => 'ln',
                'post_id' => 6
            ],
            [
                'title' => 'Prendre un bain chaud ne protège pas contre le nouveau coronavirus.',
                'content' => 'Prendre un bain chaud n’empêche pas de contracter la COVID-19. La température du corps reste normale, entre 36,5°C et 37°C, quelle que soit celle de votre bain ou de votre douche. Par ailleurs, il peut être dangereux de prendre un bain très chaud à cause du risque de brûlure. Le meilleur moyen de se protéger contre la COVID-19 est de se laver souvent les mains. Le lavage des mains élimine les virus qui pourraient s’y trouver et évite qu’on ne soit contaminé en se touchant les yeux, la bouche ou le nez.',
                'slug' => 'prendre-un-bain-chaud-ne-protege-pas-contre-le-nouveau-coronavirus',
                'locale' => 'sw',
                'post_id' => 6
            ],
            [
                'title' => 'Prendre un bain chaud ne protège pas contre le nouveau coronavirus.',
                'content' => 'Prendre un bain chaud n’empêche pas de contracter la COVID-19. La température du corps reste normale, entre 36,5°C et 37°C, quelle que soit celle de votre bain ou de votre douche. Par ailleurs, il peut être dangereux de prendre un bain très chaud à cause du risque de brûlure. Le meilleur moyen de se protéger contre la COVID-19 est de se laver souvent les mains. Le lavage des mains élimine les virus qui pourraient s’y trouver et évite qu’on ne soit contaminé en se touchant les yeux, la bouche ou le nez.',
                'slug' => 'prendre-un-bain-chaud-ne-protege-pas-contre-le-nouveau-coronavirus',
                'locale' => 'ts',
                'post_id' => 6
            ],
            [
                'title' => 'Les vaccins contre la pneumonie protègent-ils contre le nouveau coronavirus ?',
                'content' => '<p dir="ltr" style="line-height:1.38;margin-top:12pt;margin-bottom:12pt;" id="docs-internal-guid-94ace5c5-7fff-72fc-6e1a-d7d15cc5870d">Non. Les vaccins contre la pneumonie tels que le vaccin antipneumococcique et le vaccin anti-Haemophilus influenza type B (Hib) ne confèrent pas de protection contre le nouveau coronavirus.</p>
<p dir="ltr" style="line-height:1.38;margin-top:12pt;margin-bottom:12pt;">Le virus est si nouveau et différent qu’il nécessite un vaccin qui lui est propre. Les chercheurs travaillent à la mise au point d’un vaccin contre le 2019-nCoV et l’OMS soutient leurs travaux.</p>
<p dir="ltr" style="line-height:1.38;margin-top:12pt;margin-bottom:12pt;">Bien que ces vaccins ne soient pas efficaces contre le 2019-nCoV, la vaccination contre les maladies respiratoires est fortement recommandée pour protéger votre santé.</p>',
                'slug' => 'les-vaccins-contre-la-pneumonie-protegent-ils-contre-le-nouveau-coronavirus',
                'locale' => 'fr',
                'post_id' => 7
            ],
            [
                'title' => 'Les vaccins contre la pneumonie protègent-ils contre le nouveau coronavirus ?',
                'content' => '<p dir="ltr" style="line-height:1.38;margin-top:12pt;margin-bottom:12pt;" id="docs-internal-guid-94ace5c5-7fff-72fc-6e1a-d7d15cc5870d">Non. Les vaccins contre la pneumonie tels que le vaccin antipneumococcique et le vaccin anti-Haemophilus influenza type B (Hib) ne confèrent pas de protection contre le nouveau coronavirus.</p>
<p dir="ltr" style="line-height:1.38;margin-top:12pt;margin-bottom:12pt;">Le virus est si nouveau et différent qu’il nécessite un vaccin qui lui est propre. Les chercheurs travaillent à la mise au point d’un vaccin contre le 2019-nCoV et l’OMS soutient leurs travaux.</p>
<p dir="ltr" style="line-height:1.38;margin-top:12pt;margin-bottom:12pt;">Bien que ces vaccins ne soient pas efficaces contre le 2019-nCoV, la vaccination contre les maladies respiratoires est fortement recommandée pour protéger votre santé.</p>',
                'slug' => 'les-vaccins-contre-la-pneumonie-protegent-ils-contre-le-nouveau-coronavirus',
                'locale' => 'kg',
                'post_id' => 7
            ],
            [
                'title' => 'Les vaccins contre la pneumonie protègent-ils contre le nouveau coronavirus ?',
                'content' => '<p dir="ltr" style="line-height:1.38;margin-top:12pt;margin-bottom:12pt;" id="docs-internal-guid-94ace5c5-7fff-72fc-6e1a-d7d15cc5870d">Non. Les vaccins contre la pneumonie tels que le vaccin antipneumococcique et le vaccin anti-Haemophilus influenza type B (Hib) ne confèrent pas de protection contre le nouveau coronavirus.</p>
<p dir="ltr" style="line-height:1.38;margin-top:12pt;margin-bottom:12pt;">Le virus est si nouveau et différent qu’il nécessite un vaccin qui lui est propre. Les chercheurs travaillent à la mise au point d’un vaccin contre le 2019-nCoV et l’OMS soutient leurs travaux.</p>
<p dir="ltr" style="line-height:1.38;margin-top:12pt;margin-bottom:12pt;">Bien que ces vaccins ne soient pas efficaces contre le 2019-nCoV, la vaccination contre les maladies respiratoires est fortement recommandée pour protéger votre santé.</p>',
                'slug' => 'les-vaccins-contre-la-pneumonie-protegent-ils-contre-le-nouveau-coronavirus',
                'locale' => 'ln',
                'post_id' => 7
            ],
            [
                'title' => 'Les vaccins contre la pneumonie protègent-ils contre le nouveau coronavirus ?',
                'content' => '<p dir="ltr" style="line-height:1.38;margin-top:12pt;margin-bottom:12pt;" id="docs-internal-guid-94ace5c5-7fff-72fc-6e1a-d7d15cc5870d">Non. Les vaccins contre la pneumonie tels que le vaccin antipneumococcique et le vaccin anti-Haemophilus influenza type B (Hib) ne confèrent pas de protection contre le nouveau coronavirus.</p>
<p dir="ltr" style="line-height:1.38;margin-top:12pt;margin-bottom:12pt;">Le virus est si nouveau et différent qu’il nécessite un vaccin qui lui est propre. Les chercheurs travaillent à la mise au point d’un vaccin contre le 2019-nCoV et l’OMS soutient leurs travaux.</p>
<p dir="ltr" style="line-height:1.38;margin-top:12pt;margin-bottom:12pt;">Bien que ces vaccins ne soient pas efficaces contre le 2019-nCoV, la vaccination contre les maladies respiratoires est fortement recommandée pour protéger votre santé.</p>',
                'slug' => 'les-vaccins-contre-la-pneumonie-protegent-ils-contre-le-nouveau-coronavirus',
                'locale' => 'sw',
                'post_id' => 7
            ],
            [
                'title' => 'Les vaccins contre la pneumonie protègent-ils contre le nouveau coronavirus ?',
                'content' => '<p dir="ltr" style="line-height:1.38;margin-top:12pt;margin-bottom:12pt;" id="docs-internal-guid-94ace5c5-7fff-72fc-6e1a-d7d15cc5870d">Non. Les vaccins contre la pneumonie tels que le vaccin antipneumococcique et le vaccin anti-Haemophilus influenza type B (Hib) ne confèrent pas de protection contre le nouveau coronavirus.</p>
<p dir="ltr" style="line-height:1.38;margin-top:12pt;margin-bottom:12pt;">Le virus est si nouveau et différent qu’il nécessite un vaccin qui lui est propre. Les chercheurs travaillent à la mise au point d’un vaccin contre le 2019-nCoV et l’OMS soutient leurs travaux.</p>
<p dir="ltr" style="line-height:1.38;margin-top:12pt;margin-bottom:12pt;">Bien que ces vaccins ne soient pas efficaces contre le 2019-nCoV, la vaccination contre les maladies respiratoires est fortement recommandée pour protéger votre santé.</p>',
                'slug' => 'les-vaccins-contre-la-pneumonie-protegent-ils-contre-le-nouveau-coronavirus',
                'locale' => 'ts',
                'post_id' => 7
            ],
            [
                'title' => 'Respecter les règles d’hygiène respiratoire',
                'content' => 'Se couvrir la bouche et le nez avec le pli du coude ou avec un mouchoir en cas de toux ou d’éternuement – jeter le mouchoir immédiatement après dans une poubelle fermée et se laver les mains avec une solution hydroalcoolique ou à l’eau et au savon.<br><b>Pourquoi ?</b> Se couvrir la bouche et le nez en cas de toux ou d’éternuement permet d’éviter la propagation des virus et autres agents pathogènes.',
                'slug' => 'respecter-les-regles-d-hygiene-respiratoire',
                'locale' => 'fr',
                'post_id' => 8
            ],
            [
                'title' => 'Respecter les règles d’hygiène respiratoire',
                'content' => 'Se couvrir la bouche et le nez avec le pli du coude ou avec un mouchoir en cas de toux ou d’éternuement – jeter le mouchoir immédiatement après dans une poubelle fermée et se laver les mains avec une solution hydroalcoolique ou à l’eau et au savon.<br><b>Pourquoi ?</b> Se couvrir la bouche et le nez en cas de toux ou d’éternuement permet d’éviter la propagation des virus et autres agents pathogènes.',
                'slug' => 'respecter-les-regles-d-hygiene-respiratoire',
                'locale' => 'kg',
                'post_id' => 8
            ],
            [
                'title' => 'Respecter les règles d’hygiène respiratoire',
                'content' => 'Se couvrir la bouche et le nez avec le pli du coude ou avec un mouchoir en cas de toux ou d’éternuement – jeter le mouchoir immédiatement après dans une poubelle fermée et se laver les mains avec une solution hydroalcoolique ou à l’eau et au savon.<br><b>Pourquoi ?</b> Se couvrir la bouche et le nez en cas de toux ou d’éternuement permet d’éviter la propagation des virus et autres agents pathogènes.',
                'slug' => 'respecter-les-regles-d-hygiene-respiratoire',
                'locale' => 'ln',
                'post_id' => 8
            ],
            [
                'title' => 'Respecter les règles d’hygiène respiratoire',
                'content' => 'Se couvrir la bouche et le nez avec le pli du coude ou avec un mouchoir en cas de toux ou d’éternuement – jeter le mouchoir immédiatement après dans une poubelle fermée et se laver les mains avec une solution hydroalcoolique ou à l’eau et au savon.<br><b>Pourquoi ?</b> Se couvrir la bouche et le nez en cas de toux ou d’éternuement permet d’éviter la propagation des virus et autres agents pathogènes.',
                'slug' => 'respecter-les-regles-d-hygiene-respiratoire',
                'locale' => 'sw',
                'post_id' => 8
            ],
            [
                'title' => 'Respecter les règles d’hygiène respiratoire',
                'content' => 'Se couvrir la bouche et le nez avec le pli du coude ou avec un mouchoir en cas de toux ou d’éternuement – jeter le mouchoir immédiatement après dans une poubelle fermée et se laver les mains avec une solution hydroalcoolique ou à l’eau et au savon.<br><b>Pourquoi ?</b> Se couvrir la bouche et le nez en cas de toux ou d’éternuement permet d’éviter la propagation des virus et autres agents pathogènes.',
                'slug' => 'respecter-les-regles-d-hygiene-respiratoire',
                'locale' => 'ts',
                'post_id' => 8
            ],
            [
                'title' => 'Tenez-vous informé et suivez les conseils de votre médecin',
                'content' => 'Tenez-vous au courant des dernières évolutions concernant la COVID-19. Suivez les conseils de votre médecin, des autorités de santé nationales et locales ou de votre employeur pour savoir comment vous protéger et protéger les autres de la COVID-19. <br><b>Pourquoi ?</b> Ce sont les autorités nationales et locales qui disposent des informations les plus récentes sur la propagation ou non de la COVID-19 dans la région où vous vous trouvez. Elles sont les mieux placées pour expliquer ce que les personnes dans votre région devraient faire pour se protéger.<br><br>',
                'slug' => 'tenez-vous-informe-et-suivez-les-conseils-de-votre-medecin',
                'locale' => 'fr',
                'post_id' => 9
            ],
            [
                'title' => 'Tenez-vous informé et suivez les conseils de votre médecin',
                'content' => 'Tenez-vous au courant des dernières évolutions concernant la COVID-19. Suivez les conseils de votre médecin, des autorités de santé nationales et locales ou de votre employeur pour savoir comment vous protéger et protéger les autres de la COVID-19. <br><b>Pourquoi ?</b> Ce sont les autorités nationales et locales qui disposent des informations les plus récentes sur la propagation ou non de la COVID-19 dans la région où vous vous trouvez. Elles sont les mieux placées pour expliquer ce que les personnes dans votre région devraient faire pour se protéger.<br><br>',
                'slug' => 'tenez-vous-informe-et-suivez-les-conseils-de-votre-medecin',
                'locale' => 'kg',
                'post_id' => 9
            ],
            [
                'title' => 'Tenez-vous informé et suivez les conseils de votre médecin',
                'content' => 'Tenez-vous au courant des dernières évolutions concernant la COVID-19. Suivez les conseils de votre médecin, des autorités de santé nationales et locales ou de votre employeur pour savoir comment vous protéger et protéger les autres de la COVID-19. <br><b>Pourquoi ?</b> Ce sont les autorités nationales et locales qui disposent des informations les plus récentes sur la propagation ou non de la COVID-19 dans la région où vous vous trouvez. Elles sont les mieux placées pour expliquer ce que les personnes dans votre région devraient faire pour se protéger.<br><br>',
                'slug' => 'tenez-vous-informe-et-suivez-les-conseils-de-votre-medecin',
                'locale' => 'ln',
                'post_id' => 9
            ],
            [
                'title' => 'Tenez-vous informé et suivez les conseils de votre médecin',
                'content' => 'Tenez-vous au courant des dernières évolutions concernant la COVID-19. Suivez les conseils de votre médecin, des autorités de santé nationales et locales ou de votre employeur pour savoir comment vous protéger et protéger les autres de la COVID-19. <br><b>Pourquoi ?</b> Ce sont les autorités nationales et locales qui disposent des informations les plus récentes sur la propagation ou non de la COVID-19 dans la région où vous vous trouvez. Elles sont les mieux placées pour expliquer ce que les personnes dans votre région devraient faire pour se protéger.<br><br>',
                'slug' => 'tenez-vous-informe-et-suivez-les-conseils-de-votre-medecin',
                'locale' => 'sw',
                'post_id' => 9
            ],
            [
                'title' => 'Tenez-vous informé et suivez les conseils de votre médecin',
                'content' => 'Tenez-vous au courant des dernières évolutions concernant la COVID-19. Suivez les conseils de votre médecin, des autorités de santé nationales et locales ou de votre employeur pour savoir comment vous protéger et protéger les autres de la COVID-19. <br><b>Pourquoi ?</b> Ce sont les autorités nationales et locales qui disposent des informations les plus récentes sur la propagation ou non de la COVID-19 dans la région où vous vous trouvez. Elles sont les mieux placées pour expliquer ce que les personnes dans votre région devraient faire pour se protéger.<br><br>',
                'slug' => 'tenez-vous-informe-et-suivez-les-conseils-de-votre-medecin',
                'locale' => 'ts',
                'post_id' => 9
            ],
            [
                'title' => 'Mesures de protection pour les personnes qui se trouvent ou qui se sont récemment rendues (au cours des 14 derniers jours) dans des régions où la COVID-19 se propage',
                'content' => '<ul><li>
Suivez les conseils présentés ci-dessus.<br></li><li>Si vous commencez à vous sentir mal, même si vous n’avez que des symptômes bénins comme des maux de tête et un faible écoulement nasal, restez chez vous jusqu’à la guérison. Pourquoi ? Éviter d’entrer en contact avec d’autres personnes et de se rendre dans des établissements de santé permettra à ces établissements de fonctionner plus efficacement et vous protègera, ainsi que les autres personnes, de la COVID-19 et d’autres maladies virales. </li><li>En cas de fièvre, de toux et de difficultés respiratoires, consultez un médecin sans tarder, car il peut s’agir d’une infection respiratoire ou d’une autre affection grave. Appelez votre médecin et indiquez-lui si vous avez récemment voyagé ou été en contact avec des voyageurs. Pourquoi ? Si vous l’appelez, votre médecin pourra vous orienter rapidement vers l’établissement de santé le plus adapté. En outre, cela vous protègera et évitera la propagation de la COVID-19 et d’autres maladies virales</li></ul>',
                'slug' => 'mesures-de-protection-pour-les-personnes-qui-se-trouvent-ou-qui-se-sont-recemment-rendues-au-cours-des-14-derniers-jours-dans-des-regions-ou-la-covid-19-se-propage',
                'locale' => 'fr',
                'post_id' => 10
            ],
            [
                'title' => 'Mesures de protection pour les personnes qui se trouvent ou qui se sont récemment rendues (au cours des 14 derniers jours) dans des régions où la COVID-19 se propage',
                'content' => '<ul><li>
Suivez les conseils présentés ci-dessus.<br></li><li>Si vous commencez à vous sentir mal, même si vous n’avez que des symptômes bénins comme des maux de tête et un faible écoulement nasal, restez chez vous jusqu’à la guérison. Pourquoi ? Éviter d’entrer en contact avec d’autres personnes et de se rendre dans des établissements de santé permettra à ces établissements de fonctionner plus efficacement et vous protègera, ainsi que les autres personnes, de la COVID-19 et d’autres maladies virales. </li><li>En cas de fièvre, de toux et de difficultés respiratoires, consultez un médecin sans tarder, car il peut s’agir d’une infection respiratoire ou d’une autre affection grave. Appelez votre médecin et indiquez-lui si vous avez récemment voyagé ou été en contact avec des voyageurs. Pourquoi ? Si vous l’appelez, votre médecin pourra vous orienter rapidement vers l’établissement de santé le plus adapté. En outre, cela vous protègera et évitera la propagation de la COVID-19 et d’autres maladies virales</li></ul>',
                'slug' => 'mesures-de-protection-pour-les-personnes-qui-se-trouvent-ou-qui-se-sont-recemment-rendues-au-cours-des-14-derniers-jours-dans-des-regions-ou-la-covid-19-se-propage',
                'locale' => 'kg',
                'post_id' => 10
            ],
            [
                'title' => 'Mesures de protection pour les personnes qui se trouvent ou qui se sont récemment rendues (au cours des 14 derniers jours) dans des régions où la COVID-19 se propage',
                'content' => '<ul><li>
Suivez les conseils présentés ci-dessus.<br></li><li>Si vous commencez à vous sentir mal, même si vous n’avez que des symptômes bénins comme des maux de tête et un faible écoulement nasal, restez chez vous jusqu’à la guérison. Pourquoi ? Éviter d’entrer en contact avec d’autres personnes et de se rendre dans des établissements de santé permettra à ces établissements de fonctionner plus efficacement et vous protègera, ainsi que les autres personnes, de la COVID-19 et d’autres maladies virales. </li><li>En cas de fièvre, de toux et de difficultés respiratoires, consultez un médecin sans tarder, car il peut s’agir d’une infection respiratoire ou d’une autre affection grave. Appelez votre médecin et indiquez-lui si vous avez récemment voyagé ou été en contact avec des voyageurs. Pourquoi ? Si vous l’appelez, votre médecin pourra vous orienter rapidement vers l’établissement de santé le plus adapté. En outre, cela vous protègera et évitera la propagation de la COVID-19 et d’autres maladies virales</li></ul>',
                'slug' => 'mesures-de-protection-pour-les-personnes-qui-se-trouvent-ou-qui-se-sont-recemment-rendues-au-cours-des-14-derniers-jours-dans-des-regions-ou-la-covid-19-se-propage',
                'locale' => 'ln',
                'post_id' => 10
            ],
            [
                'title' => 'Mesures de protection pour les personnes qui se trouvent ou qui se sont récemment rendues (au cours des 14 derniers jours) dans des régions où la COVID-19 se propage',
                'content' => '<ul><li>
Suivez les conseils présentés ci-dessus.<br></li><li>Si vous commencez à vous sentir mal, même si vous n’avez que des symptômes bénins comme des maux de tête et un faible écoulement nasal, restez chez vous jusqu’à la guérison. Pourquoi ? Éviter d’entrer en contact avec d’autres personnes et de se rendre dans des établissements de santé permettra à ces établissements de fonctionner plus efficacement et vous protègera, ainsi que les autres personnes, de la COVID-19 et d’autres maladies virales. </li><li>En cas de fièvre, de toux et de difficultés respiratoires, consultez un médecin sans tarder, car il peut s’agir d’une infection respiratoire ou d’une autre affection grave. Appelez votre médecin et indiquez-lui si vous avez récemment voyagé ou été en contact avec des voyageurs. Pourquoi ? Si vous l’appelez, votre médecin pourra vous orienter rapidement vers l’établissement de santé le plus adapté. En outre, cela vous protègera et évitera la propagation de la COVID-19 et d’autres maladies virales</li></ul>',
                'slug' => 'mesures-de-protection-pour-les-personnes-qui-se-trouvent-ou-qui-se-sont-recemment-rendues-au-cours-des-14-derniers-jours-dans-des-regions-ou-la-covid-19-se-propage',
                'locale' => 'sw',
                'post_id' => 10
            ],
            [
                'title' => 'Mesures de protection pour les personnes qui se trouvent ou qui se sont récemment rendues (au cours des 14 derniers jours) dans des régions où la COVID-19 se propage',
                'content' => '<ul><li>
Suivez les conseils présentés ci-dessus.<br></li><li>Si vous commencez à vous sentir mal, même si vous n’avez que des symptômes bénins comme des maux de tête et un faible écoulement nasal, restez chez vous jusqu’à la guérison. Pourquoi ? Éviter d’entrer en contact avec d’autres personnes et de se rendre dans des établissements de santé permettra à ces établissements de fonctionner plus efficacement et vous protègera, ainsi que les autres personnes, de la COVID-19 et d’autres maladies virales. </li><li>En cas de fièvre, de toux et de difficultés respiratoires, consultez un médecin sans tarder, car il peut s’agir d’une infection respiratoire ou d’une autre affection grave. Appelez votre médecin et indiquez-lui si vous avez récemment voyagé ou été en contact avec des voyageurs. Pourquoi ? Si vous l’appelez, votre médecin pourra vous orienter rapidement vers l’établissement de santé le plus adapté. En outre, cela vous protègera et évitera la propagation de la COVID-19 et d’autres maladies virales</li></ul>',
                'slug' => 'mesures-de-protection-pour-les-personnes-qui-se-trouvent-ou-qui-se-sont-recemment-rendues-au-cours-des-14-derniers-jours-dans-des-regions-ou-la-covid-19-se-propage',
                'locale' => 'ts',
                'post_id' => 10
            ],
            [
                'title' => 'Les sèche-mains sont-ils efficaces pour tuer le nCoV 2019 ?',
                'content' => 'Non. Les sèche-mains ne sont pas efficaces pour tuer le 2019-nCoV. Pour vous protéger contre le nouveau coronavirus, vous devez vous nettoyer fréquemment les mains avec un produit hydroalcoolique ou à l’eau et au savon. Une fois que vos mains sont propres, vous devez les sécher soigneusement à l’aide de serviettes en papier ou d’un séchoir à air chaud. <br>',
                'slug' => 'les-seche-mains-sont-ils-efficaces-pour-tuer-le-ncov-2019',
                'locale' => 'fr',
                'post_id' => 13
            ],
            [
                'title' => 'Les sèche-mains sont-ils efficaces pour tuer le nCoV 2019 ?',
                'content' => 'Non. Les sèche-mains ne sont pas efficaces pour tuer le 2019-nCoV. Pour vous protéger contre le nouveau coronavirus, vous devez vous nettoyer fréquemment les mains avec un produit hydroalcoolique ou à l’eau et au savon. Une fois que vos mains sont propres, vous devez les sécher soigneusement à l’aide de serviettes en papier ou d’un séchoir à air chaud. <br>',
                'slug' => 'les-seche-mains-sont-ils-efficaces-pour-tuer-le-ncov-2019',
                'locale' => 'kg',
                'post_id' => 13
            ],
            [
                'title' => 'Les sèche-mains sont-ils efficaces pour tuer le nCoV 2019 ?',
                'content' => 'Non. Les sèche-mains ne sont pas efficaces pour tuer le 2019-nCoV. Pour vous protéger contre le nouveau coronavirus, vous devez vous nettoyer fréquemment les mains avec un produit hydroalcoolique ou à l’eau et au savon. Une fois que vos mains sont propres, vous devez les sécher soigneusement à l’aide de serviettes en papier ou d’un séchoir à air chaud. <br>',
                'slug' => 'les-seche-mains-sont-ils-efficaces-pour-tuer-le-ncov-2019',
                'locale' => 'ln',
                'post_id' => 13
            ],
            [
                'title' => 'Les sèche-mains sont-ils efficaces pour tuer le nCoV 2019 ?',
                'content' => 'Non. Les sèche-mains ne sont pas efficaces pour tuer le 2019-nCoV. Pour vous protéger contre le nouveau coronavirus, vous devez vous nettoyer fréquemment les mains avec un produit hydroalcoolique ou à l’eau et au savon. Une fois que vos mains sont propres, vous devez les sécher soigneusement à l’aide de serviettes en papier ou d’un séchoir à air chaud. <br>',
                'slug' => 'les-seche-mains-sont-ils-efficaces-pour-tuer-le-ncov-2019',
                'locale' => 'sw',
                'post_id' => 13
            ],
            [
                'title' => 'Les sèche-mains sont-ils efficaces pour tuer le nCoV 2019 ?',
                'content' => 'Non. Les sèche-mains ne sont pas efficaces pour tuer le 2019-nCoV. Pour vous protéger contre le nouveau coronavirus, vous devez vous nettoyer fréquemment les mains avec un produit hydroalcoolique ou à l’eau et au savon. Une fois que vos mains sont propres, vous devez les sécher soigneusement à l’aide de serviettes en papier ou d’un séchoir à air chaud. <br>',
                'slug' => 'les-seche-mains-sont-ils-efficaces-pour-tuer-le-ncov-2019',
                'locale' => 'ts',
                'post_id' => 13
            ],
            [
                'title' => 'Puis-je réutiliser un masque N95 ? Puis-je le laver ? Puis-je le stériliser avec des désinfectants pour les mains ?',
                'content' => 'Non. Les masques faciaux, y compris les masques médicaux plats ou les masques N95, ne doivent pas être réutilisés. Si vous avez été en contact étroit avec une personne infectée par le nouveau coronavirus ou qui présente une autre infection respiratoire, le devant de votre masque doit être considéré comme contaminé. Vous devez enlever le masque sans toucher sa partie avant et le jeter de manière appropriée. Après avoir enlevé votre masque, vous devez vous nettoyer les mains avec un produit hydroalcoolique ou à l’eau et au savon.',
                'slug' => 'puis-je-reutiliser-un-masque-n95-puis-je-le-laver-puis-je-le-steriliser-avec-des-desinfectants-pour-les-mains',
                'locale' => 'fr',
                'post_id' => 14
            ],
            [
                'title' => 'Puis-je réutiliser un masque N95 ? Puis-je le laver ? Puis-je le stériliser avec des désinfectants pour les mains ?',
                'content' => 'Non. Les masques faciaux, y compris les masques médicaux plats ou les masques N95, ne doivent pas être réutilisés. Si vous avez été en contact étroit avec une personne infectée par le nouveau coronavirus ou qui présente une autre infection respiratoire, le devant de votre masque doit être considéré comme contaminé. Vous devez enlever le masque sans toucher sa partie avant et le jeter de manière appropriée. Après avoir enlevé votre masque, vous devez vous nettoyer les mains avec un produit hydroalcoolique ou à l’eau et au savon.',
                'slug' => 'puis-je-reutiliser-un-masque-n95-puis-je-le-laver-puis-je-le-steriliser-avec-des-desinfectants-pour-les-mains',
                'locale' => 'kg',
                'post_id' => 14
            ],
            [
                'title' => 'Puis-je réutiliser un masque N95 ? Puis-je le laver ? Puis-je le stériliser avec des désinfectants pour les mains ?',
                'content' => 'Non. Les masques faciaux, y compris les masques médicaux plats ou les masques N95, ne doivent pas être réutilisés. Si vous avez été en contact étroit avec une personne infectée par le nouveau coronavirus ou qui présente une autre infection respiratoire, le devant de votre masque doit être considéré comme contaminé. Vous devez enlever le masque sans toucher sa partie avant et le jeter de manière appropriée. Après avoir enlevé votre masque, vous devez vous nettoyer les mains avec un produit hydroalcoolique ou à l’eau et au savon.',
                'slug' => 'puis-je-reutiliser-un-masque-n95-puis-je-le-laver-puis-je-le-steriliser-avec-des-desinfectants-pour-les-mains',
                'locale' => 'ln',
                'post_id' => 14
            ],
            [
                'title' => 'Puis-je réutiliser un masque N95 ? Puis-je le laver ? Puis-je le stériliser avec des désinfectants pour les mains ?',
                'content' => 'Non. Les masques faciaux, y compris les masques médicaux plats ou les masques N95, ne doivent pas être réutilisés. Si vous avez été en contact étroit avec une personne infectée par le nouveau coronavirus ou qui présente une autre infection respiratoire, le devant de votre masque doit être considéré comme contaminé. Vous devez enlever le masque sans toucher sa partie avant et le jeter de manière appropriée. Après avoir enlevé votre masque, vous devez vous nettoyer les mains avec un produit hydroalcoolique ou à l’eau et au savon.',
                'slug' => 'puis-je-reutiliser-un-masque-n95-puis-je-le-laver-puis-je-le-steriliser-avec-des-desinfectants-pour-les-mains',
                'locale' => 'sw',
                'post_id' => 14
            ],
            [
                'title' => 'Puis-je réutiliser un masque N95 ? Puis-je le laver ? Puis-je le stériliser avec des désinfectants pour les mains ?',
                'content' => 'Non. Les masques faciaux, y compris les masques médicaux plats ou les masques N95, ne doivent pas être réutilisés. Si vous avez été en contact étroit avec une personne infectée par le nouveau coronavirus ou qui présente une autre infection respiratoire, le devant de votre masque doit être considéré comme contaminé. Vous devez enlever le masque sans toucher sa partie avant et le jeter de manière appropriée. Après avoir enlevé votre masque, vous devez vous nettoyer les mains avec un produit hydroalcoolique ou à l’eau et au savon.',
                'slug' => 'puis-je-reutiliser-un-masque-n95-puis-je-le-laver-puis-je-le-steriliser-avec-des-desinfectants-pour-les-mains',
                'locale' => 'ts',
                'post_id' => 14
            ],
            [
                'title' => 'Une lampe de désinfection à ultraviolets (UV) peut-elle tuer le nouveau coronavirus (nCoV) ?',
                'content' => '<p>
Les lampes à UV ne doivent pas être utilisées pour se stériliser les mains ou d’autres parties du corps, car les rayons UV peuvent provoquer des érythèmes (irritation de la peau).<br>Pour vous protéger contre le nouveau coronavirus, tenez-vous au courant de toutes les mesures que vous pouvez adopter. Pour plus de détails, voir le site Web de l’OMS : </p><p><a href="https://www.who.int/fr/emergencies/diseases/novel-coronavirus-2019/advice-for-public" target="_blank">https://www.who.int/fr/emergencies/diseases/novel-coronavirus-2019/advice-for-public</a><br></p>',
                'slug' => 'une-lampe-de-desinfection-a-ultraviolets-uv-peut-elle-tuer-le-nouveau-coronavirus-ncov',
                'locale' => 'fr',
                'post_id' => 15
            ],
            [
                'title' => 'Une lampe de désinfection à ultraviolets (UV) peut-elle tuer le nouveau coronavirus (nCoV) ?',
                'content' => '<p>
Les lampes à UV ne doivent pas être utilisées pour se stériliser les mains ou d’autres parties du corps, car les rayons UV peuvent provoquer des érythèmes (irritation de la peau).<br>Pour vous protéger contre le nouveau coronavirus, tenez-vous au courant de toutes les mesures que vous pouvez adopter. Pour plus de détails, voir le site Web de l’OMS : </p><p><a href="https://www.who.int/fr/emergencies/diseases/novel-coronavirus-2019/advice-for-public" target="_blank">https://www.who.int/fr/emergencies/diseases/novel-coronavirus-2019/advice-for-public</a><br></p>',
                'slug' => 'une-lampe-de-desinfection-a-ultraviolets-uv-peut-elle-tuer-le-nouveau-coronavirus-ncov',
                'locale' => 'kg',
                'post_id' => 15
            ],
            [
                'title' => 'Une lampe de désinfection à ultraviolets (UV) peut-elle tuer le nouveau coronavirus (nCoV) ?',
                'content' => '<p>
Les lampes à UV ne doivent pas être utilisées pour se stériliser les mains ou d’autres parties du corps, car les rayons UV peuvent provoquer des érythèmes (irritation de la peau).<br>Pour vous protéger contre le nouveau coronavirus, tenez-vous au courant de toutes les mesures que vous pouvez adopter. Pour plus de détails, voir le site Web de l’OMS : </p><p><a href="https://www.who.int/fr/emergencies/diseases/novel-coronavirus-2019/advice-for-public" target="_blank">https://www.who.int/fr/emergencies/diseases/novel-coronavirus-2019/advice-for-public</a><br></p>',
                'slug' => 'une-lampe-de-desinfection-a-ultraviolets-uv-peut-elle-tuer-le-nouveau-coronavirus-ncov',
                'locale' => 'ln',
                'post_id' => 15
            ],
            [
                'title' => 'Une lampe de désinfection à ultraviolets (UV) peut-elle tuer le nouveau coronavirus (nCoV) ?',
                'content' => '<p>
Les lampes à UV ne doivent pas être utilisées pour se stériliser les mains ou d’autres parties du corps, car les rayons UV peuvent provoquer des érythèmes (irritation de la peau).<br>Pour vous protéger contre le nouveau coronavirus, tenez-vous au courant de toutes les mesures que vous pouvez adopter. Pour plus de détails, voir le site Web de l’OMS : </p><p><a href="https://www.who.int/fr/emergencies/diseases/novel-coronavirus-2019/advice-for-public" target="_blank">https://www.who.int/fr/emergencies/diseases/novel-coronavirus-2019/advice-for-public</a><br></p>',
                'slug' => 'une-lampe-de-desinfection-a-ultraviolets-uv-peut-elle-tuer-le-nouveau-coronavirus-ncov',
                'locale' => 'sw',
                'post_id' => 15
            ],
            [
                'title' => 'Une lampe de désinfection à ultraviolets (UV) peut-elle tuer le nouveau coronavirus (nCoV) ?',
                'content' => '<p>
Les lampes à UV ne doivent pas être utilisées pour se stériliser les mains ou d’autres parties du corps, car les rayons UV peuvent provoquer des érythèmes (irritation de la peau).<br>Pour vous protéger contre le nouveau coronavirus, tenez-vous au courant de toutes les mesures que vous pouvez adopter. Pour plus de détails, voir le site Web de l’OMS : </p><p><a href="https://www.who.int/fr/emergencies/diseases/novel-coronavirus-2019/advice-for-public" target="_blank">https://www.who.int/fr/emergencies/diseases/novel-coronavirus-2019/advice-for-public</a><br></p>',
                'slug' => 'une-lampe-de-desinfection-a-ultraviolets-uv-peut-elle-tuer-le-nouveau-coronavirus-ncov',
                'locale' => 'ts',
                'post_id' => 15
            ],
        ]);
    }
}
