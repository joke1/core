<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Winans Creative 2009, Intelligent Spark 2010, iserv.ch GmbH 2010
 * @author     Rebecca Jutzi <rebecca.jutzi@bluewin.ch>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */

$GLOBALS['TL_LANG']['CTE']['attributeLinkRepeater'][0] = 'Table des filtres d\'attributs';
$GLOBALS['TL_LANG']['CTE']['attributeLinkRepeater'][1] = 'Cet élément crée une collection de liens d\'après un filtre choisi d\'attributs de produits';
$GLOBALS['TL_LANG']['ERR']['systemColumn'] = 'Le nom `%s` que vous avez choisi, est reservé pour l\'administration du système. Choisisez un autre nom s.v.p.';
$GLOBALS['TL_LANG']['ERR']['missingButtonTemplate'] = 'Vous devez choisir un document de mise en page pour le bouton "%s"';
$GLOBALS['TL_LANG']['ERR']['order_conditions'] = 'Vous devez accepter les termes et conditions avant de continuer';
$GLOBALS['TL_LANG']['ERR']['noStoreConfigurationSet'] = 'Il n\'existe pas de configuration pour cette boutique';
$GLOBALS['TL_LANG']['ERR']['noDefaultStoreConfiguration'] = 'Créez d\'abord une configuration de boutique';
$GLOBALS['TL_LANG']['ERR']['productNameMissing'] = 'Nom de produit inconnu';
$GLOBALS['TL_LANG']['ERR']['noSubProducts'] = 'Nom de sous-produit inconnu';
$GLOBALS['TL_LANG']['ERR']['emptyOrderHistory'] = 'Vous n\'avez rien commandé jusqu\'ici';
$GLOBALS['TL_LANG']['ERR']['orderNotFound'] = 'La commande désirée n\'a pas pu être trouvée';
$GLOBALS['TL_LANG']['ERR']['missingCurrencyFormat'] = 'Monnaie inconnue';
$GLOBALS['TL_LANG']['ERR']['searchNotEnabled'] = 'La fonction de recherche n\'est pas installée';
$GLOBALS['TL_LANG']['ERR']['isoLoginRequired'] = 'Vous devez être enregistré pour fermer la session';
$GLOBALS['TL_LANG']['ERR']['mandatoryOption'] = 'Choisisez une option';
$GLOBALS['TL_LANG']['ERR']['noAddressData'] = 'Votre adresse est nécessaire pour calculer les taxes';
$GLOBALS['TL_LANG']['ERR']['variantDuplicate'] = 'Il existe déjà une variante avec ces attributs. Choisisez une autre combination s.v.p.';
$GLOBALS['TL_LANG']['ERR']['breadcrumbEmpty'] = 'La catégorie filtrée est vide, tous les produits sont maintenant indiquées.';
$GLOBALS['TL_LANG']['ERR']['invalidCoupon'] = 'Coupon invalide';
$GLOBALS['TL_LANG']['ERR']['discountFactors'] = 'Prière de remplir des nombres entiers ou décimaux, ou par option un pourcentage.';
$GLOBALS['TL_LANG']['ERR']['generalFactors'] = 'Prière de remplir des nombres entiers ou décimaux, ou par option marqué avec + ou -, ou par option en pourcentage.';
$GLOBALS['TL_LANG']['ERR']['orderFailed'] = 'Paiement échoué. Essayez encore une fois ou choisisez un autre mode de paiement';
$GLOBALS['TL_LANG']['ERR']['specifyBillingAddress'] = 'Il n\'y a pas d\'adresse de facturation. Prière de mentionner une adresse de facturation.';
$GLOBALS['TL_LANG']['ERR']['cc_num'] = 'Prière de mentionner le numéro valide de la carte de crédit';
$GLOBALS['TL_LANG']['ERR']['cc_type'] = 'Prière de sélectionner une carte de crédit.';
$GLOBALS['TL_LANG']['ERR']['cc_exp'] = 'Prière de mentionner une date d\'expiration de la carte de crédit en format mm/aa';
$GLOBALS['TL_LANG']['ERR']['cc_ccv'] = 'Prière de mentionner le numéro de vérification de la carte de crédit (3 ou 4 chiffres disponibles au recto ou au verso de la carte.';
$GLOBALS['TL_LANG']['ERR']['cc_match'] = 'Votre numéro de carte de crédit ne correspond pas au type de carte de crédit sélectionnée.';
$GLOBALS['TL_LANG']['ERR']['cc_exp_paypal'] = 'Prière de mentionner une date d\'expiration de carte de crédit en format mm/aaaa.';
$GLOBALS['TL_LANG']['ERR']['addressDoesNotExist'] = 'Cette adresse n\'existe pas dans votre carnet d\'adresses.';
$GLOBALS['TL_LANG']['ERR']['noAddressBookEntries'] = 'Il n\'y a pas d\'entrées dans votre carnet d\'adresses';
$GLOBALS['TL_LANG']['MSC']['labelLanguage'] = 'Langue';
$GLOBALS['TL_LANG']['MSC']['editLanguage'] = 'Editer';
$GLOBALS['TL_LANG']['MSC']['deleteLanguage'] = 'Supprimer';
$GLOBALS['TL_LANG']['MSC']['defaultLanguage'] = 'De retour';
$GLOBALS['TL_LANG']['MSC']['editingLanguage'] = 'ATTENTION: vous éditez des données spécifiques de langue';
$GLOBALS['TL_LANG']['MSC']['deleteLanguageConfirm'] = 'Etes-vous sûre de vouloir supprimer cette langue? Il n\'y aura pas de retour!';
$GLOBALS['TL_LANG']['MSC']['undefinedLanguage'] = 'Indéfini';
$GLOBALS['TL_LANG']['MSC']['noSurcharges'] = 'Pas de surtaxes trouvées';
$GLOBALS['TL_LANG']['MSC']['ajaxLoadingMessage'] = 'Chargement';
$GLOBALS['TL_LANG']['MSC']['orderDetailsHeadline'] = 'Numéro de commande de %s / %s';
$GLOBALS['TL_LANG']['MSC']['payment_processing'] = 'Votre paiement est traité. Soyez patient...';
$GLOBALS['TL_LANG']['MSC']['authorizedotnet_process_failed'] = 'Votre paiement n\'a pas pu être traité. <br /><br />cause: %s';
$GLOBALS['TL_LANG']['MSC']['mmNoImagesUploaded'] = 'Pas d\'images téléchargées.';
$GLOBALS['TL_LANG']['MSC']['mmUploadImage'] = 'Téléchargez une image supplémentaire';
$GLOBALS['TL_LANG']['MSC']['quantity'] = 'Quantité';
$GLOBALS['TL_LANG']['MSC']['order_conditions'] = 'J\'accepte les termes et conditions';
$GLOBALS['TL_LANG']['MSC']['downloadCount'] = '%s téléchargements';
$GLOBALS['TL_LANG']['MSC']['defaultSearchText'] = 'Produits à rechercher';
$GLOBALS['TL_LANG']['MSC']['blankSelectOptionLabel'] = '-';
$GLOBALS['TL_LANG']['MSC']['emptySelectOptionLabel'] = 'Prière de sélectionner';
$GLOBALS['TL_LANG']['MSC']['downloadsLabel'] = 'Vos produits téléchargeables';
$GLOBALS['TL_LANG']['MSC']['priceRangeLabel'] = 'De %s';
$GLOBALS['TL_LANG']['MSC']['detailLabel'] = 'Voire détails';
$GLOBALS['TL_LANG']['MSC']['searchTextBoxLabel'] = 'Cherchez le terme:';
$GLOBALS['TL_LANG']['MSC']['searchFieldsLabel'] = 'Champs de recherche:';
$GLOBALS['TL_LANG']['MSC']['perPageLabel'] = 'Produits par page';
$GLOBALS['TL_LANG']['MSC']['searchTermsLabel'] = 'Mots-clés';
$GLOBALS['TL_LANG']['MSC']['searchLabel'] = 'Recherche';
$GLOBALS['TL_LANG']['MSC']['submitLabel'] = 'Soumettre';
$GLOBALS['TL_LANG']['MSC']['clearFiltersLabel'] = 'Eloignez les filtres';
$GLOBALS['TL_LANG']['MSC']['buttonLabel']['update'] = 'Mise à jour';
$GLOBALS['TL_LANG']['MSC']['buttonLabel']['add_to_cart'] = 'Mettre dans le panier';
$GLOBALS['TL_LANG']['MSC']['pagerSectionTitleLabel'] = 'Page:';
$GLOBALS['TL_LANG']['MSC']['orderByLabel'] = 'Commande par:';
$GLOBALS['TL_LANG']['MSC']['buttonActionString']['add_to_cart'] = 'Mettre le produit %s dans le panier';
$GLOBALS['TL_LANG']['MSC']['noProducts'] = 'Pas de produits trouvés';
$GLOBALS['TL_LANG']['MSC']['invalidProductInformation'] = 'Désolé, l\'information désirée de produit ne se trouve pas dans notre Webshop. Pour vous supporter, contactez-nous s.v.p.';
$GLOBALS['TL_LANG']['MSC']['productDescriptionLabel'] = 'Description';
$GLOBALS['TL_LANG']['MSC']['productDetailLabel'] = 'Détails';
$GLOBALS['TL_LANG']['MSC']['productMediaLabel'] = 'Audio et vidéo';
$GLOBALS['TL_LANG']['MSC']['productOptionsLabel'] = 'Options';
$GLOBALS['TL_LANG']['MSC']['previousStep'] = 'Retour';
$GLOBALS['TL_LANG']['MSC']['nextStep'] = 'Continuer';
$GLOBALS['TL_LANG']['MSC']['confirmOrder'] = 'Commande';
$GLOBALS['TL_LANG']['MSC']['noCategoriesAssociated'] = 'Pas de catégories associées avec ce produit';
$GLOBALS['TL_LANG']['MSC']['labelPerPage'] = 'Par page';
$GLOBALS['TL_LANG']['MSC']['labelSortBy'] = 'Triage par';
$GLOBALS['TL_LANG']['MSC']['labelSubmit'] = 'Soumetttre';
$GLOBALS['TL_LANG']['MSC']['labelProductVariants'] = 'Prière de sélectionner';
$GLOBALS['TL_LANG']['MSC']['removeProductLinkText'] = 'Supprimer';
$GLOBALS['TL_LANG']['MSC']['noItemsInCart'] = 'Il n\'y a pas d\'articles dans votre panier';
$GLOBALS['TL_LANG']['MSC']['removeProductLinkTitle'] = 'Supprime %s de votre panier';
$GLOBALS['TL_LANG']['MSC']['subTotalLabel'] = 'Soustotal de la commande:';
$GLOBALS['TL_LANG']['MSC']['shippingLabel'] = 'Livraison';
$GLOBALS['TL_LANG']['MSC']['paymentLabel'] = 'Paiement';
$GLOBALS['TL_LANG']['MSC']['taxLabel'] = '%s Taxe:';
$GLOBALS['TL_LANG']['MSC']['grandTotalLabel'] = 'Commande totale:';
$GLOBALS['TL_LANG']['MSC']['shippingOptionsLabel'] = 'Choisisez une option de livraison:';
$GLOBALS['TL_LANG']['MSC']['noVariants'] = 'Pas de produit différent trouvé';
$GLOBALS['TL_LANG']['MSC']['generateSubproducts'] = 'Créez des sous-produits';
$GLOBALS['TL_LANG']['MSC']['selectItemPrompt'] = '(sélectionner)';
$GLOBALS['TL_LANG']['MSC']['actualPrice'] = 'Prix actuel';
$GLOBALS['TL_LANG']['MSC']['noPaymentModules'] = 'Il n\'y a pas d\'options de paiement actuellement';
$GLOBALS['TL_LANG']['MSC']['noShippingModules'] = 'Il n\'y a pas d\'options de livraison actuellement';
$GLOBALS['TL_LANG']['MSC']['noOrderEmails'] = 'Pas d\'e-mails trouvés';
$GLOBALS['TL_LANG']['ISO']['couponsInputLabel'] = 'Code de promotion';
$GLOBALS['TL_LANG']['ISO']['couponsHeadline'] = 'Entrez un code de promotion';
$GLOBALS['TL_LANG']['ISO']['couponsSubmitLabel'] = 'Appliquer';
$GLOBALS['TL_LANG']['MSC']['cartBT'] = 'Panier d\'achat';
$GLOBALS['TL_LANG']['MSC']['checkoutBT'] = 'Passez à la caisse';
$GLOBALS['TL_LANG']['MSC']['continueShoppingBT'] = 'Continuez vos achats';
$GLOBALS['TL_LANG']['MSC']['updateCartBT'] = 'Mettez votre panier à jour';
$GLOBALS['TL_LANG']['MSC']['orderStatusHeadline'] = 'Statut de commande: %s';
$GLOBALS['TL_LANG']['addressBookLabel'] = 'Adresses';
$GLOBALS['TL_LANG']['editAddressLabel'] = 'Editer';
$GLOBALS['TL_LANG']['deleteAddressLabel'] = 'Supprimer';
$GLOBALS['TL_LANG']['MSC']['createNewAddressLabel'] = 'Créez une nouvelle adresse';
$GLOBALS['TL_LANG']['MSC']['useBillingAddress'] = 'Utilisez l\'adresse de paiement';
$GLOBALS['TL_LANG']['MSC']['differentShippingAddress'] = 'Adresse de livraison différente';
$GLOBALS['TL_LANG']['MSC']['iso_invoice_title'] = 'Facture';
$GLOBALS['TL_LANG']['MSC']['iso_order_status'] = 'Statut';
$GLOBALS['TL_LANG']['MSC']['iso_order_date'] = 'Date de la commande';
$GLOBALS['TL_LANG']['MSC']['iso_billing_address_header'] = 'Adresse de facturation';
$GLOBALS['TL_LANG']['MSC']['iso_shipping_address_header'] = 'Adresse de livraison';
$GLOBALS['TL_LANG']['MSC']['iso_tax_header'] = 'Taxe';
$GLOBALS['TL_LANG']['MSC']['iso_subtotal_header'] = 'Sous-total';
$GLOBALS['TL_LANG']['MSC']['iso_order_shipping_header'] = 'Livraison et traitement';
$GLOBALS['TL_LANG']['MSC']['iso_order_grand_total_header'] = 'Grand total';
$GLOBALS['TL_LANG']['MSC']['iso_order_items'] = 'Articles';
$GLOBALS['TL_LANG']['MSC']['iso_quantity_header'] = 'Quantité';
$GLOBALS['TL_LANG']['MSC']['iso_price_header'] = 'Prix';
$GLOBALS['TL_LANG']['MSC']['iso_sku_header'] = 'SKU';
$GLOBALS['TL_LANG']['MSC']['iso_product_name_header'] = 'Nom de produit';
$GLOBALS['TL_LANG']['MSC']['iso_card_name_title'] = 'Nom sur la carte de crédit';
$GLOBALS['TL_LANG']['ORDER']['pending'] = 'En cours';
$GLOBALS['TL_LANG']['ORDER']['processing'] = 'Traitement';
$GLOBALS['TL_LANG']['ORDER']['complete'] = 'Complet';
$GLOBALS['TL_LANG']['ORDER']['on_hold'] = 'En attente';
$GLOBALS['TL_LANG']['ORDER']['cancelled'] = 'Annulé';
$GLOBALS['TL_LANG']['MSC']['low_to_high'] = 'De bas en haut';
$GLOBALS['TL_LANG']['MSC']['high_to_low'] = 'De haut en bas';
$GLOBALS['TL_LANG']['MSC']['a_to_z'] = 'De A à Z';
$GLOBALS['TL_LANG']['MSC']['z_to_a'] = 'De Z à A';
$GLOBALS['TL_LANG']['MSC']['old_to_new'] = 'Des plus anciens aux plus actuels';
$GLOBALS['TL_LANG']['MSC']['new_to_old'] = 'Des plus actuels aux plus ancients';
$GLOBALS['TL_LANG']['ISO']['productSingle'] = '1 produit';
$GLOBALS['TL_LANG']['ISO']['productMultiple'] = '%s produits';
$GLOBALS['TL_LANG']['ISO']['shipping_address_message'] = 'Entrez vos informations de livraison ou choisisez une adresse existante';
$GLOBALS['TL_LANG']['ISO']['billing_address_message'] = 'Entrez vos informations de facturation ou choisisez une adresse existante';
$GLOBALS['TL_LANG']['ISO']['billing_address_guest_message'] = 'Entrez vos informations de facturation';
$GLOBALS['TL_LANG']['ISO']['shipping_method_message'] = 'Sélectionnez un mode de livraison';
$GLOBALS['TL_LANG']['ISO']['shipping_method_missing'] = 'Choisisez un mode de livraison s.v.p.';
$GLOBALS['TL_LANG']['ISO']['payment_method_message'] = 'Entrez vos informations de paiement';
$GLOBALS['TL_LANG']['ISO']['payment_method_missing'] = 'Sélectionnez une méthode de paiement';
$GLOBALS['TL_LANG']['ISO']['order_review_message'] = 'Contrôlez et confirmez les dtails de votre commande';
$GLOBALS['TL_LANG']['ISO']['checkout_address'] = 'Adresse';
$GLOBALS['TL_LANG']['ISO']['checkout_shipping'] = 'Livraison';
$GLOBALS['TL_LANG']['ISO']['checkout_payment'] = 'Paiement';
$GLOBALS['TL_LANG']['ISO']['checkout_review'] = 'Revue';
$GLOBALS['TL_LANG']['ISO']['billing_address'] = 'Adresse de facturation';
$GLOBALS['TL_LANG']['ISO']['shipping_address'] = 'Adresse de livraison';
$GLOBALS['TL_LANG']['ISO']['billing_shipping_address'] = 'Adresse de facturation & livraison';
$GLOBALS['TL_LANG']['ISO']['shipping_method'] = 'Mode de livraison';
$GLOBALS['TL_LANG']['ISO']['payment_method'] = 'Mode de facturation';
$GLOBALS['TL_LANG']['ISO']['order_conditions'] = 'Conditions de commande';
$GLOBALS['TL_LANG']['ISO']['order_review'] = 'Revue de la commande';
$GLOBALS['TL_LANG']['ISO']['changeCheckoutInfo'] = 'Change';
$GLOBALS['TL_LANG']['ISO']['cc_num'] = 'Numéro de carte de crédit';
$GLOBALS['TL_LANG']['ISO']['cc_type'] = 'Type de carte de crédit';
$GLOBALS['TL_LANG']['ISO']['cc_ccv'] = 'Numéro CCV (code de 3 ou 4 chiffres)';
$GLOBALS['TL_LANG']['ISO']['cc_exp_paypal'] = 'Date d\'expiration de la carte de crédit (mm/aaaa)';
$GLOBALS['TL_LANG']['ISO']['cc_exp_month'] = 'Mois de l\'expiration';
$GLOBALS['TL_LANG']['ISO']['cc_exp_year'] = 'Année de l\'expiration';
$GLOBALS['TL_LANG']['ISO']['cc_issue_number'] = 'Numéro de parution de la carte de crédit, 2 chiffres (pour les cartes Maestro et Solo)';
$GLOBALS['TL_LANG']['ISO']['cc_start_date'] = 'Date du début de la carte de crédit (pour les cartes Maestro et Solo)';
$GLOBALS['TL_LANG']['ISO']['pay_with_paypal'][0] = 'Paiement par PayPal';
$GLOBALS['TL_LANG']['ISO']['pay_with_paypal'][1] = 'Vous êtes redirigés au site de PayPal. Si ça ne se passe pas automatiquement, appuyez sur le bouton "Payer maintenant"';
$GLOBALS['TL_LANG']['ISO']['pay_with_paypal'][2] = 'Payer maintenant';
$GLOBALS['TL_LANG']['ISO']['pay_with_epay'][0] = 'Payer par ePaiement';
$GLOBALS['TL_LANG']['ISO']['pay_with_epay'][1] = 'Vous êtes redirigés au site de ePay. Si ça ne se passe pas automatiquement, appuyez sur le bouton "Payer maintenant"';
$GLOBALS['TL_LANG']['ISO']['pay_with_epay'][2] = 'Payer maintenant';
$GLOBALS['TL_LANG']['ISO']['backendPaymentNotFound'] = 'Module de paiement inconnu!';
$GLOBALS['TL_LANG']['ISO']['backendShippingNotFound'] = 'Module de livraison inconnu!';
$GLOBALS['TL_LANG']['ISO']['backendPaymentNoInfo'] = 'Ce module de paiement ne fournit pas d\'informations supplémentaires';
$GLOBALS['TL_LANG']['ISO']['backendShippingNoInfo'] = 'Ce module de livraison ne fournit pas d\'informations supplémentaires';
$GLOBALS['TL_LANG']['SHIP']['flat'][0] = 'Livraison à bas prix';
$GLOBALS['TL_LANG']['SHIP']['weight_total'][0] = 'Poids total de la livraison';
$GLOBALS['TL_LANG']['SHIP']['order_total'][0] = 'Commande totale de la livraison';
$GLOBALS['TL_LANG']['SHIP']['collection'][0] = 'Collection';
$GLOBALS['TL_LANG']['SHIP']['ups'][0] = 'Tarifs UPS et service de livraison';
$GLOBALS['TL_LANG']['SHIP']['usps'][0] = 'Tarifs USPS et service de livraison';
$GLOBALS['TL_LANG']['PAY']['cash'][0] = 'Paiement en espèces';
$GLOBALS['TL_LANG']['PAY']['cash'][1] = 'Choisisez cette option pour tous le paiements en mode hors connexion';
$GLOBALS['TL_LANG']['PAY']['paypal'][0] = 'Passage à la caisse standard PayPal';
$GLOBALS['TL_LANG']['PAY']['paypal'][1] = 'Ce module Paypal supporte IPN (notification instantanée de paiement)';
$GLOBALS['TL_LANG']['PAY']['paypalpayflowpro'][0] = 'PayPal Payflow Pro';
$GLOBALS['TL_LANG']['PAY']['paypalpayflowpro'][1] = 'Le module PayPal Payflow offre un portail de service complet pour cartes de crédit, une solution robuste pour presque tous les sites de e-commerce';
$GLOBALS['TL_LANG']['PAY']['postfinance'][0] = 'Postfinance';
$GLOBALS['TL_LANG']['PAY']['postfinance'][1] = 'Portail du service de paiement du système de la poste Suisse pour différents types de cartes. Le Webshop est instantanéement informé de toute transaction réussie';
$GLOBALS['TL_LANG']['PAY']['authorizedotnet'][0] = 'Authorize.net';
$GLOBALS['TL_LANG']['PAY']['authorizedotnet'][1] = 'Portail de paiement Authorize.net';
$GLOBALS['TL_LANG']['GAL']['default'][0] = 'Galerie standard (Lightbox/Mediabox)';
$GLOBALS['TL_LANG']['GAL']['default'][1] = 'Se sert de Lightbox/Mediabox pour des images de grande taille. Assurez-vous d\'avoir bien selectionné le document juste (moo-template) dans votre configuration de mise en page';
$GLOBALS['TL_LANG']['ISO_PRODUCT']['regular'][0] = 'Produit régulaire';
$GLOBALS['TL_LANG']['ISO_PRODUCT']['regular'][1] = 'Produit standard. Sélectionner s\'il n\'y a pas d\'autres possibilité.';
$GLOBALS['TL_LANG']['CCT']['mc'] = 'MasterCard';
$GLOBALS['TL_LANG']['CCT']['visa'] = 'Visa';
$GLOBALS['TL_LANG']['CCT']['amex'] = 'American Express';
$GLOBALS['TL_LANG']['CCT']['discover'] = 'Découvrir';
$GLOBALS['TL_LANG']['CCT']['jcb'] = 'JBC';
$GLOBALS['TL_LANG']['CCT']['diners'] = 'Diner\'s Club';
$GLOBALS['TL_LANG']['CCT']['enroute'] = 'EnRoute';
$GLOBALS['TL_LANG']['CCT']['carte_blanche'] = 'Carte Blanche';
$GLOBALS['TL_LANG']['WGT']['mg'][0] = 'Milligramme (mg)';
$GLOBALS['TL_LANG']['WGT']['mg'][1] = 'Unité de masse correspondant à un millième de gramme';
$GLOBALS['TL_LANG']['WGT']['g'][0] = 'Gramme (g)';
$GLOBALS['TL_LANG']['WGT']['g'][1] = 'Unité métrique de poids correspondant à un millième de kilogramme';
$GLOBALS['TL_LANG']['WGT']['kg'][0] = 'Kilogramme (kg)';
$GLOBALS['TL_LANG']['WGT']['kg'][1] = 'Un kilogramme est l\'équivalent de 1\'000 grammes ou de 2,2  livres; la masse d\'un litre d\'eau';
$GLOBALS['TL_LANG']['WGT']['t'][0] = 'Tonne métrique (t)';
$GLOBALS['TL_LANG']['WGT']['t'][1] = 'Unité de poids kilogramme correspondant à 1\'000 kilogrammes ou 2,204.6 livres';
$GLOBALS['TL_LANG']['WGT']['ct'][0] = 'Carats (ct)';
$GLOBALS['TL_LANG']['WGT']['ct'][1] = 'Unité de poids utilisée pour pierres précieuses. Un carate correspondant à 1/5 d\'un gramme (200 milligrammes). Prenez note que carate avec un "K" est une mesure pour la pureté d\'un alliage d\'or';
$GLOBALS['TL_LANG']['WGT']['oz'][0] = 'Once (oz)';
$GLOBALS['TL_LANG']['WGT']['oz'][1] = 'Unité de poids correspondant à 1/16 d\'un livre ou 28.35 grammes.';
$GLOBALS['TL_LANG']['WGT']['lb'][0] = 'Livre (lb)';
$GLOBALS['TL_LANG']['WGT']['lb'][1] = 'Unité de masse correspondant à 16 onces';
$GLOBALS['TL_LANG']['WGT']['st'][0] = 'Stone (st)';
$GLOBALS['TL_LANG']['WGT']['st'][1] = 'Une mesure britannique correspondant à 14 livres';
$GLOBALS['TL_LANG']['WGT']['grain'][0] = 'Grain';
$GLOBALS['TL_LANG']['WGT']['grain'][1] = '1/7000 d\'un livre, correspondant à 64.799 milligrammes';
$GLOBALS['TL_LANG']['ATTR']['text'] = 'Texte (jusqu\'à 255 caractères)';
$GLOBALS['TL_LANG']['ATTR']['integer'] = 'Chiffres entiers';
$GLOBALS['TL_LANG']['ATTR']['decimal'] = 'Décimal';
$GLOBALS['TL_LANG']['ATTR']['textarea'] = 'Texte long (plus de 255 caractères)';
$GLOBALS['TL_LANG']['ATTR']['datetime'] = 'Date/valeur temps';
$GLOBALS['TL_LANG']['ATTR']['select'] = 'Sélectionnez une liste';
$GLOBALS['TL_LANG']['ATTR']['checkbox'] = 'Case à cocher';
$GLOBALS['TL_LANG']['ATTR']['options'] = 'Liste des options';
$GLOBALS['TL_LANG']['ATTR']['file'] = 'Annexe';
$GLOBALS['TL_LANG']['ATTR']['media'] = 'Médias (images, films, MP3 etc.)';
$GLOBALS['TL_LANG']['ATTR']['label'] = 'Etiquette/affichage fixe';
$GLOBALS['TL_LANG']['ATTR']['input'] = 'Accepte l\'entrée de données du client';
$GLOBALS['TL_LANG']['ATTR']['conditionalselect'] = 'Menu de sélection conditionnel';
$GLOBALS['TL_LANG']['CUR']['AED'] = 'AED - United Arab Emirates Dirham';
$GLOBALS['TL_LANG']['CUR']['AFN'] = 'AFN - Afghani';
$GLOBALS['TL_LANG']['CUR']['ALL'] = 'ALL - Lek';
$GLOBALS['TL_LANG']['CUR']['AMD'] = 'AMD - Dram';
$GLOBALS['TL_LANG']['CUR']['ANG'] = 'ANG - Netherlands Antilles Guilder';
$GLOBALS['TL_LANG']['CUR']['AOA'] = 'AOA - Kwanza';
$GLOBALS['TL_LANG']['CUR']['ARS'] = 'ARS - Argentinian Nuevo Peso';
$GLOBALS['TL_LANG']['CUR']['AUD'] = 'AUD - Australian Dollar';
$GLOBALS['TL_LANG']['CUR']['AWG'] = 'AWG - Aruban Guilder';
$GLOBALS['TL_LANG']['CUR']['AZN'] = 'AZN - Azerbaijani Manat';
$GLOBALS['TL_LANG']['CUR']['BAM'] = 'BAM - Convertible Mark';
$GLOBALS['TL_LANG']['CUR']['BBD'] = 'BBD - Barbados Dollar';
$GLOBALS['TL_LANG']['CUR']['BDT'] = 'BDT - Taka';
$GLOBALS['TL_LANG']['CUR']['BGN'] = 'BGN - Bulgarian Lev';
$GLOBALS['TL_LANG']['CUR']['BHD'] = 'BHD - Bahraini Dinar';
$GLOBALS['TL_LANG']['CUR']['BIF'] = 'BIF - Burundi Franc';
$GLOBALS['TL_LANG']['CUR']['BMD'] = 'BMD - Bermudian Dollar';
$GLOBALS['TL_LANG']['CUR']['BND'] = 'BND - Brunei Dollar';
$GLOBALS['TL_LANG']['CUR']['BOB'] = 'BOB - Boliviano';
$GLOBALS['TL_LANG']['CUR']['BRL'] = 'BRL - Brazilian real';
$GLOBALS['TL_LANG']['CUR']['BSD'] = 'BSD - Bahamian Dollar';
$GLOBALS['TL_LANG']['CUR']['BTN'] = 'BTN - Ngultrum';
$GLOBALS['TL_LANG']['CUR']['BWP'] = 'BWP - Pula';
$GLOBALS['TL_LANG']['CUR']['BYR'] = 'BYR - Belarussian Rouble';
$GLOBALS['TL_LANG']['CUR']['BZD'] = 'BZD - Belize Dollar';
$GLOBALS['TL_LANG']['CUR']['CAD'] = 'CAD - Canadian Dollar';
$GLOBALS['TL_LANG']['CUR']['CDZ'] = 'CDZ - New Zaïre';
$GLOBALS['TL_LANG']['CUR']['CHF'] = 'CHF - Swiss Franc';
$GLOBALS['TL_LANG']['CUR']['CLF'] = 'CLF - Unidades de Fomento';
$GLOBALS['TL_LANG']['CUR']['CLP'] = 'CLP - Chilean Peso';
$GLOBALS['TL_LANG']['CUR']['CNY'] = 'CNY - Yuan Renminbi';
$GLOBALS['TL_LANG']['CUR']['COP'] = 'COP - Colombian Peso';
$GLOBALS['TL_LANG']['CUR']['CRC'] = 'CRC - Costa Rican Colón';
$GLOBALS['TL_LANG']['CUR']['CUP'] = 'CUP - Cuban Peso';
$GLOBALS['TL_LANG']['CUR']['CVE'] = 'CVE - Escudo Caboverdiano';
$GLOBALS['TL_LANG']['CUR']['CZK'] = 'CZK - Czech Koruna';
$GLOBALS['TL_LANG']['CUR']['DJF'] = 'DJF - Djibouti Franc';
$GLOBALS['TL_LANG']['CUR']['DKK'] = 'DKK - Danish Krone';
$GLOBALS['TL_LANG']['CUR']['DOP'] = 'DOP - Dominican Republic Peso';
$GLOBALS['TL_LANG']['CUR']['DZD'] = 'DZD - Algerian Dinar';
$GLOBALS['TL_LANG']['CUR']['EEK'] = 'EEK - Kroon';
$GLOBALS['TL_LANG']['CUR']['EGP'] = 'EGP - Egyptian Pound';
$GLOBALS['TL_LANG']['CUR']['ERN'] = 'ERN - Eritrean Nakfa';
$GLOBALS['TL_LANG']['CUR']['ETB'] = 'ETB - Ethiopian Birr';
$GLOBALS['TL_LANG']['CUR']['EUR'] = 'EUR - Euro';
$GLOBALS['TL_LANG']['CUR']['FJD'] = 'FJD - Fiji Dollar';
$GLOBALS['TL_LANG']['CUR']['FKP'] = 'FKP - Falkland Pound';
$GLOBALS['TL_LANG']['CUR']['GBP'] = 'GBP - Pound Sterling';
$GLOBALS['TL_LANG']['CUR']['GEL'] = 'GEL - Lari';
$GLOBALS['TL_LANG']['CUR']['GHS'] = 'GHS - Ghanaian cedi';
$GLOBALS['TL_LANG']['CUR']['GIP'] = 'GIP - Gibraltar Pound';
$GLOBALS['TL_LANG']['CUR']['GMD'] = 'GMD - Dalasi';
$GLOBALS['TL_LANG']['CUR']['GNS'] = 'GNS - Syli (also known as Guinea Franc)';
$GLOBALS['TL_LANG']['CUR']['GTQ'] = 'GTQ - Quetzal';
$GLOBALS['TL_LANG']['CUR']['GYD'] = 'GYD - Guyana Dollar';
$GLOBALS['TL_LANG']['CUR']['HKD'] = 'HKD - Hong Kong Dollar';
$GLOBALS['TL_LANG']['CUR']['HNL'] = 'HNL - Lempira';
$GLOBALS['TL_LANG']['CUR']['HRD'] = 'HRD - Croatian Dinar';
$GLOBALS['TL_LANG']['CUR']['HRK'] = 'HRK - Croatian Kuna';
$GLOBALS['TL_LANG']['CUR']['HTG'] = 'HTG - Gourde';
$GLOBALS['TL_LANG']['CUR']['HUF'] = 'HUF - Forint';
$GLOBALS['TL_LANG']['CUR']['IDR'] = 'IDR - Rupiah';
$GLOBALS['TL_LANG']['CUR']['ILS'] = 'ILS - Shekel';
$GLOBALS['TL_LANG']['CUR']['INR'] = 'INR - Indian Rupee';
$GLOBALS['TL_LANG']['CUR']['IQD'] = 'IQD - Iraqi Dinar';
$GLOBALS['TL_LANG']['CUR']['IRR'] = 'IRR - Iranian Rial';
$GLOBALS['TL_LANG']['CUR']['ISK'] = 'ISK - Icelandic Króna';
$GLOBALS['TL_LANG']['CUR']['JMD'] = 'JMD - Jamaican Dollar';
$GLOBALS['TL_LANG']['CUR']['JOD'] = 'JOD - Jordanian Dinar';
$GLOBALS['TL_LANG']['CUR']['JPY'] = 'JPY - Yen';
$GLOBALS['TL_LANG']['CUR']['KES'] = 'KES - Kenyan Shilling';
$GLOBALS['TL_LANG']['CUR']['KGS'] = 'KGS - Kyrgyzstani Som';
$GLOBALS['TL_LANG']['CUR']['KHR'] = 'KHR - Riel';
$GLOBALS['TL_LANG']['CUR']['KMF'] = 'KMF - Comorian Franc';
$GLOBALS['TL_LANG']['CUR']['KPW'] = 'KPW - Democratic People\'s Republic of Korean Won';
$GLOBALS['TL_LANG']['CUR']['KRW'] = 'KRW - Republic of Korean Won';
$GLOBALS['TL_LANG']['CUR']['KWD'] = 'KWD - Kuwaiti Dinar';
$GLOBALS['TL_LANG']['CUR']['KYD'] = 'KYD - Cayman Islands Dollar';
$GLOBALS['TL_LANG']['CUR']['KZT'] = 'KZT - Tenge';
$GLOBALS['TL_LANG']['CUR']['LAK'] = 'LAK - Kip';
$GLOBALS['TL_LANG']['CUR']['LBP'] = 'LBP - Lebanese Pound';
$GLOBALS['TL_LANG']['CUR']['LKR'] = 'LKR - Sri Lankan Rupee';
$GLOBALS['TL_LANG']['CUR']['LRD'] = 'LRD - Liberian Dollar';
$GLOBALS['TL_LANG']['CUR']['LSL'] = 'LSL - Loti';
$GLOBALS['TL_LANG']['CUR']['LSM'] = 'LSM - Maloti';
$GLOBALS['TL_LANG']['CUR']['LTL'] = 'LTL - Litas';
$GLOBALS['TL_LANG']['CUR']['LVL'] = 'LVL - Lats';
$GLOBALS['TL_LANG']['CUR']['LYD'] = 'LYD - Libyan Dinar';
$GLOBALS['TL_LANG']['CUR']['MAD'] = 'MAD - Moroccan Dirham';
$GLOBALS['TL_LANG']['CUR']['MDL'] = 'MDL - Moldavian Leu';
$GLOBALS['TL_LANG']['CUR']['MGA'] = 'MGA - Malagasy ariary';
$GLOBALS['TL_LANG']['CUR']['MKD'] = 'MKD - Macedonian Dinar';
$GLOBALS['TL_LANG']['CUR']['MMK'] = 'MMK - Kyat';
$GLOBALS['TL_LANG']['CUR']['MNT'] = 'MNT - Tugrik';
$GLOBALS['TL_LANG']['CUR']['MOP'] = 'MOP - Pataca';
$GLOBALS['TL_LANG']['CUR']['MRO'] = 'MRO - Ouguiya';
$GLOBALS['TL_LANG']['CUR']['MUR'] = 'MUR - Mauritius Rupee';
$GLOBALS['TL_LANG']['CUR']['MVR'] = 'MVR - Rufiyaa';
$GLOBALS['TL_LANG']['CUR']['MWK'] = 'MWK - Malawian Kwacha';
$GLOBALS['TL_LANG']['CUR']['MYR'] = 'MYR - Ringgit (Malaysian Dollar)';
$GLOBALS['TL_LANG']['CUR']['MZN'] = 'MZN - Mozambican metical';
$GLOBALS['TL_LANG']['CUR']['NAD'] = 'NAD - Namibia Dollar';
$GLOBALS['TL_LANG']['CUR']['NGN'] = 'NGN - Naira';
$GLOBALS['TL_LANG']['CUR']['NIC'] = 'NIC - Córdoba';
$GLOBALS['TL_LANG']['CUR']['NOK'] = 'NOK - Norwegian Krone';
$GLOBALS['TL_LANG']['CUR']['NPR'] = 'NPR - Nepalese Rupee';
$GLOBALS['TL_LANG']['CUR']['NZD'] = 'NZD - New Zealand Dollar';
$GLOBALS['TL_LANG']['CUR']['OMR'] = 'OMR - Omani Rial';
$GLOBALS['TL_LANG']['CUR']['PAB'] = 'PAB - Balboa';
$GLOBALS['TL_LANG']['CUR']['PEN'] = 'PEN - New Sol';
$GLOBALS['TL_LANG']['CUR']['PGK'] = 'PGK - Kina';
$GLOBALS['TL_LANG']['CUR']['PHP'] = 'PHP - Philippines Peso';
$GLOBALS['TL_LANG']['CUR']['PKR'] = 'PKR - Pakistani Rupee';
$GLOBALS['TL_LANG']['CUR']['PLN'] = 'PLN - New Zloty';
$GLOBALS['TL_LANG']['CUR']['PYG'] = 'PYG - Guarani';
$GLOBALS['TL_LANG']['CUR']['QAR'] = 'QAR - Qatari Riyal';
$GLOBALS['TL_LANG']['CUR']['RON'] = 'RON - Romanian New Leu';
$GLOBALS['TL_LANG']['CUR']['RSD'] = 'RSD - Serbian Dinar';
$GLOBALS['TL_LANG']['CUR']['RUB'] = 'RUB - Russian Federation Rouble';
$GLOBALS['TL_LANG']['CUR']['RWF'] = 'RWF - Rwandan Franc';
$GLOBALS['TL_LANG']['CUR']['SAR'] = 'SAR - Saudi Riyal';
$GLOBALS['TL_LANG']['CUR']['SBD'] = 'SBD - Solomon Islands Dollar';
$GLOBALS['TL_LANG']['CUR']['SCR'] = 'SCR - Seychelles Rupee';
$GLOBALS['TL_LANG']['CUR']['SDG'] = 'SDG - Sudanese Pound';
$GLOBALS['TL_LANG']['CUR']['SEK'] = 'SEK - Swedish Krona';
$GLOBALS['TL_LANG']['CUR']['SGD'] = 'SGD - Singapore Dollar';
$GLOBALS['TL_LANG']['CUR']['SHP'] = 'SHP - St Helena Pound';
$GLOBALS['TL_LANG']['CUR']['SLL'] = 'SLL - Leone';
$GLOBALS['TL_LANG']['CUR']['SOS'] = 'SOS - Somali Shilling';
$GLOBALS['TL_LANG']['CUR']['SRD'] = 'SRD - Surinamese Dollar';
$GLOBALS['TL_LANG']['CUR']['STD'] = 'STD - Dobra';
$GLOBALS['TL_LANG']['CUR']['SYP'] = 'SYP - Syrian Pound';
$GLOBALS['TL_LANG']['CUR']['SZL'] = 'SZL - Lilangeni';
$GLOBALS['TL_LANG']['CUR']['THB'] = 'THB - Baht';
$GLOBALS['TL_LANG']['CUR']['TJS'] = 'TJS - Tajikistani Somoni';
$GLOBALS['TL_LANG']['CUR']['TMT'] = 'TMT - Turkmenistani Manat';
$GLOBALS['TL_LANG']['CUR']['TND'] = 'TND - Tunisian Dinar';
$GLOBALS['TL_LANG']['CUR']['TOP'] = 'TOP - Pa\'anga';
$GLOBALS['TL_LANG']['CUR']['TPE'] = 'TPE - Timorian Escudo';
$GLOBALS['TL_LANG']['CUR']['TRY'] = 'TRY - New Turkish Lira';
$GLOBALS['TL_LANG']['CUR']['TTD'] = 'TTD - Trinidad and Tobago Dollar';
$GLOBALS['TL_LANG']['CUR']['TWD'] = 'TWD - Taiwan Dollar';
$GLOBALS['TL_LANG']['CUR']['TZS'] = 'TZS - Tanzanian Shilling';
$GLOBALS['TL_LANG']['CUR']['UAH'] = 'UAH - Hryvna';
$GLOBALS['TL_LANG']['CUR']['UGX'] = 'UGX - Ugandan Shilling';
$GLOBALS['TL_LANG']['CUR']['USD'] = 'USD - United States Dollar';
$GLOBALS['TL_LANG']['CUR']['UYU'] = 'UYU - Uruguayan Peso';
$GLOBALS['TL_LANG']['CUR']['UZS'] = 'UZS - Uzbekistani Som';
$GLOBALS['TL_LANG']['CUR']['VEF'] = 'VEF - Bolivar Fuerte';
$GLOBALS['TL_LANG']['CUR']['VND'] = 'VND - Viet Nam Dông';
$GLOBALS['TL_LANG']['CUR']['VUV'] = 'VUV - Vatu';
$GLOBALS['TL_LANG']['CUR']['WST'] = 'WST - Tala';
$GLOBALS['TL_LANG']['CUR']['YER'] = 'YER - Yemeni Riyal';
$GLOBALS['TL_LANG']['CUR']['ZAR'] = 'ZAR - Rand';
$GLOBALS['TL_LANG']['CUR']['ZMK'] = 'ZMK - Zambian Kwacha';
$GLOBALS['TL_LANG']['CUR']['ZWL'] = 'ZWL - Zimbabwe Dollar';
$GLOBALS['TL_LANG']['CUR_SYMBOL']['USD'] = '$';
$GLOBALS['TL_LANG']['CUR_SYMBOL']['EUR'] = '€';
$GLOBALS['TL_LANG']['CUR_SYMBOL']['GBP'] = '£';
$GLOBALS['TL_LANG']['CUR_SYMBOL']['JPY'] = '¥';

