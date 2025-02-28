<?php
/*
Plugin Name: Logics Translation
Plugin URI: https://explorelogics.com/
Description: This translation service is provided by Explore Logics IT. Translate your website and make it multilingual to reach a global audience.
Version: 1.0.7
Author: Explore Logics IT
Author URI: https://explorelogics.com/
Text Domain: Logics Translation
*/


// Start Translation Working by Explore Logics IT
function custom_wpml_translate_strings( $text, $name, $group ) {
    if ( $text === 'Product Categories' ) {
        return 'Catégories de produits';
    }
    if ( $text === 'Availability' ) {
        return 'Disponibilité';
    }
    if ( $text === 'Price' ) {
        return 'Prix';
    }
    if ( $text === 'Min price' ) {
        return 'Prix min';
    }
    if ( $text === 'Max price' ) {
        return 'Prix max';
    }
    return $text;
}
add_filter( 'wpml_translate_single_string', 'custom_wpml_translate_strings', 10, 3 );

function custom_translate_texts( $translated_text, $text, $domain ) {
    if ( strpos( $text, 'is a required field.' ) !== false ) {
        $translated_text = str_replace( 'is a required field.', 'est un champ obligatoire.', $text );
    }
    if ( strpos( $text, 'is not a valid postcode / ZIP.' ) !== false ) {
        $translated_text = str_replace( 'is not a valid postcode / ZIP.', "n'est pas un code postal valide.", $text );
    }
    return $translated_text;
}
add_filter( 'gettext', 'custom_translate_texts', 20, 3 );

function custom_translate_woocommerce_checkout( $translated_text, $text, $domain ) {
    if ( $domain === 'woocommerce' ) {
        switch ( $text ) {
            case 'Price:':
            $translated_text = 'Prix:';
            break;
            case 'On sale':
            $translated_text = 'En promotion';
            break;
            case 'In stock':
            $translated_text = 'En stock';
            break;
            case 'Out of stock':
            $translated_text = 'Rupture de stock';
            break;
            case 'Filter':
            $translated_text = 'Filtrer';
            break;
            case 'Sort by popularity':
            $translated_text = 'Trier par popularité';
            break;
            case 'Sort by average rating':
            $translated_text = 'Trier par note moyenne';
            break;
            case 'Sort by latest':
            $translated_text = 'Trier par nouveauté';
            break;
            case 'Sort by price: low to high':
            $translated_text = 'Trier par prix : du plus bas au plus élevé';
            break;
            case 'Sort by price: high to low':
            $translated_text = 'Trier par prix : du plus élevé au plus bas';
            break;
            case 'Shop':
            $translated_text = 'Boutique';
            break;
            case 'New':
            $translated_text = 'Nouveau';
            break;
            case 'Add to cart':
            $translated_text = 'Ajouter au panier';
            break;
            case 'Quick View':
            $translated_text = 'Aperçu rapide';
            break;
            case 'Wishlist is empty.':
            $translated_text = 'La liste de souhaits est vide.';
            break;
            case 'Return to shop':
            $translated_text = 'Retour à la boutique';
            break;
            case "You don't have any products in the wishlist yet. You will find a lot of interesting products on our &quot;Shop&quot; page.":
            break;$translated_text = "Vous n'avez encore aucun produit dans votre liste de souhaits. Vous trouverez de nombreux produits intéressants sur
            notre page \"Boutique\".";
            case 'Shopping Cart':
            $translated_text = 'Panier d\'achat';
            break;
            case 'Remove':
            $translated_text = 'Supprimer';
            break;
            case 'Subtotal:':
            $translated_text = 'Sous-total:';
            break;
            case 'View cart':
            $translated_text = 'Voir le panier';
            break;
            case 'Checkout':
            $translated_text = 'Passer à la caisse';
            break;
            case 'Your cart is empty':
            $translated_text = 'Votre panier est vide';
            break;
            case 'You may check out all the available products and buy some in the shop':
            $translated_text = 'Vous pouvez consulter tous les produits disponibles et en acheter dans la boutique';
            break;
            case 'Product':
            $translated_text = 'Produit';
            break;
            case 'Price':
            $translated_text = 'Prix';
            break;
            case 'Quantity':
            $translated_text = 'Quantité';
            break;
            case 'Order notes':
            $translated_text = 'Notes de commande';
            break;
            case 'Cart totals':
            $translated_text = 'Totaux du panier';
            break;
            case 'Subtotal':
            $translated_text = 'Sous-total';
            break;
            case 'Total':
            $translated_text = 'Total';
            break;
            case 'Proceed to checkout':
            $translated_text = 'Passer à la caisse';
            break;
            case 'Coupon code':
            $translated_text = 'Code promo';
            break;
            case 'Apply coupon':
            $translated_text = 'Appliquer le coupon';
            break;
            case 'Notes about your order, e.g. special notes for delivery.':
            $translated_text = 'Remarques concernant votre commande, par ex. instructions spéciales pour la livraison.';
            break;
            case 'Update cart':
            $translated_text = 'Mise à jour panier';
            break;
            case 'Invalid billing email address':
            $translated_text = 'Adresse e-mail de facturation non valide';
            break;
            case 'Have a coupon?':
            $translated_text = 'Vous avez un coupon ?';
            break;
            case 'Enter your code':
            $translated_text = 'Entrez votre code';
            break;
            case 'Billing details':
            $translated_text = 'Détails de facturation';
            break;
            case 'First name':
            $translated_text = 'Prénom';
            break;
            case 'Last name':
            $translated_text = 'Nom de famille';
            break;
            case 'Company name':
            $translated_text = 'Nom de l\'entreprise';
            break;
            case 'Country / Region':
            $translated_text = 'Pays / Région';
            break;
            case 'Street address':
            $translated_text = 'Adresse';
            break;
            case 'House number and street name':
            $translated_text = 'Numéro et nom de la rue';
            break;
            case 'Apartment, suite, unit, etc. (optional)':
            $translated_text = 'Appartement, suite, unité, etc. (optionnel)';
            break;
            case 'Town / City':
            $translated_text = 'Ville';
            break;
            case 'State':
            $translated_text = 'État / Province';
            break;
            case 'ZIP Code':
            $translated_text = 'Code postal';
            break;
            case 'Phone':
            $translated_text = 'Téléphone';
            break;
            case 'Email address':
            $translated_text = 'Adresse e-mail';
            break;
            case 'optional':
            $translated_text = 'optionnel';
            break;
            case 'Your order':
            $translated_text = 'Votre commande';
            break;
            case 'Place order':
            $translated_text = 'Passer la commande';
            break;
            case 'Sorry, it seems that there are no available payment methods. Please contact us if you require assistance or wish to make alternate arrangements.':
            $translated_text = 'Désolé, il semble qu\'il n\'y ait pas de méthodes de paiement disponibles. Veuillez nous contacter si vous avez besoin d\'aide ou souhaitez prendre d\'autres dispositions.';
            break;
            case 'Please enter a coupon code.':
            $translated_text = 'Veuillez entrer un code promo.';
            break;
            case 'Coupon "%s" does not exist!':
            $translated_text = 'Le coupon "%s" n\'existe pas !';
            break;
            case 'Coupon code applied successfully.':
            $translated_text = 'Code de réduction appliqué avec succès.';
            break;
            case 'Coupon code removed successfully.':
            $translated_text = 'Code de réduction supprimé avec succès.';
            break;
            case 'Coupon usage limit has been reached.':
            $translated_text = 'La limite d\'utilisation du coupon a été atteinte.';
            break;
            case 'This coupon has expired.':
            $translated_text = 'Ce coupon a expiré.';
            break;
            case 'This coupon is not valid for the items in your cart.':
            $translated_text = 'Ce coupon n\'est pas valide pour les articles dans votre panier.';
            break;
            case 'Sorry, this coupon is not applicable to your cart contents.':
            $translated_text = 'Désolé, ce coupon n\'est pas applicable au contenu de votre panier.';
            break;
            case 'Coupon code is required.':
            $translated_text = 'Le code du coupon est requis.';
            break;
            case 'Coupon has already been applied.':
            $translated_text = 'Le coupon a déjà été appliqué.';
            break;
            case 'Coupon usage limit per user has been reached.':
            $translated_text = 'La limite d\'utilisation du coupon par utilisateur a été atteinte.';
            break;
            case 'Coupon has been disabled.':
            $translated_text = 'Le coupon a été désactivé.';
            break;
            case 'This coupon does not apply to the products in your cart.':
            $translated_text = 'Ce coupon ne s\'applique pas aux produits de votre panier.';
            break;
            case 'Coupon "%s" has already been applied and cannot be used in conjunction with other coupons.':
            $translated_text = 'Le coupon "%s" a déjà été appliqué et ne peut pas être utilisé avec d\'autres coupons.';
            break;
            case 'If you have a coupon code, please apply it below.':
            $translated_text = "Si vous avez un code promo, veuillez l'appliquer ci-dessous.";
            break;
            case 'Shopping Cart ':
            $translated_text =  'Panier d\'achat';
            break;
            case 'Dashboard':
            $translated_text = 'Tableau de bord';
            break;
            case 'Orders':
            $translated_text = 'Commandes';
            break;
            case 'Downloads':
            $translated_text = 'Téléchargements';
            break;
            case 'Addresses':
            $translated_text = 'Adresses';
            break;
            case 'Account details':
            $translated_text = 'Détails du compte';
            break;
            case 'Log out':
            $translated_text = 'Se déconnecter';
            break;
            case 'Invalid payment method.':
            $translated_text = 'Méthode de paiement invalide.';
            break;
            case 'Thank you. Your order has been received.':
            $translated_text = 'Merci. Votre commande a été reçue.';
            break;
            case 'Order number:':
            $translated_text = 'Numéro de commande :';
            break;
            case 'Date:':
            $translated_text = 'Date :';
            break;
            case 'Email:':
            $translated_text = 'E-mail :';
            break;
            case 'Total:':
            $translated_text = 'Total :';
            break;
            case 'Payment method:':
            $translated_text = 'Mode de paiement :';
            break;
            case 'Order details':
            $translated_text = 'Détails de la commande';
            break;
            case 'Billing address':
            $translated_text = 'Adresse de facturation';
            break;
            case 'Order':
            $translated_text = 'Commande';
            break;
            case 'Date':
            $translated_text = 'Date';
            break;
            case 'Status':
            $translated_text = 'Statut';
            break;
            case 'Total':
            $translated_text = 'Total';
            break;
            case 'Actions':
            $translated_text = 'Actions';
            break;
            case 'View':
            $translated_text = 'Voir';
            break;
            case 'Hello':
            $translated_text = 'Bonjour';
            break;
            case 'not':
            $translated_text = 'non';
            break;
            case 'Log out':
            $translated_text = 'Déconnexion';
            break;
            case 'No downloads available yet.':
            $translated_text =  'Aucun téléchargement disponible pour le moment.';
            break;
            case 'Browse products':
            $translated_text =  'Parcourir les produits';
            break;
            case 'Shipping address':
            $translated_text =  'Adresse de livraison';
            break;
            case 'Add Shipping address':
            $translated_text =  'Ajouter une adresse de livraison';
            break;
            case 'You have not set up this type of address yet.':
            $translated_text =  'Vous n\'avez pas encore configuré ce type d\'adresse.';
            break;
            case 'The following addresses will be used on the checkout page by default.':
            $translated_text =  'Les adresses suivantes seront utilisées par défaut sur la page de paiement.';
            break;
            case 'This will be how your name will be displayed in the account section and in reviews':
            $translated_text =  'Ceci sera la façon dont votre nom sera affiché dans la section du compte et dans les avis.';
            break;
            case 'Display name':
            $translated_text =  'Nom affiché';
            break;
            case 'Password change':
            $translated_text =  'Changement de mot de passe';
            break;
            case 'Current password (leave blank to leave unchanged)':
            $translated_text =  'Mot de passe actuel (laissez vide pour ne pas modifier)';
            break;
            case 'New password (leave blank to leave unchanged)':
            $translated_text =  'Nouveau mot de passe (laissez vide pour ne pas modifier)';
            break;
            case 'Confirm new password':
            $translated_text =  'Confirmer le nouveau mot de passe';
            break;
            case 'Save changes':
            $translated_text =  'Enregistrer les modifications';
            break;
            case 'Save address':
            $translated_text =  'Enregistrer l\'adresse';
            break;
            case 'Hello %1$s (not %1$s? <a href="%2$s">Log out</a>)':
            $translated_text = 'Bonjour %1$s (pas %1$s? <a href="%2$s">Se déconnecter</a>)';
            break;
            case 'From your account dashboard you can view your <a href="%1$s">recent orders</a>, manage your <a href="%2$s">billing address</a>, and <a href="%3$s">edit your password and account details</a>.':
            $translated_text = 'Depuis votre tableau de bord, vous pouvez consulter vos <a href="%1$s">commandes récentes</a>, gérer votre <a href="%2$s">adresse de facturation</a> et <a href="%3$s">modifier votre mot de passe et les détails de votre compte</a>.';
            break;
            case 'From your account dashboard you can view your <a href="%1$s">recent orders</a>, manage your <a href="%2$s">shipping and billing addresses</a>, and <a href="%3$s">edit your password and account details</a>.':
            $translated_text = 'Depuis votre tableau de bord, vous pouvez consulter vos <a href="%1$s">commandes récentes</a>, gérer vos <a href="%2$s">adresses de livraison et de facturation</a> et <a href="%3$s">modifier votre mot de passe et les détails de votre compte</a>.';
            break;
            case 'Description':
            $translated_text = 'Description';
            break;
            case 'In stock':
            $translated_text = 'En stock';
            break;
            case '%s in stock':
            $translated_text = 'En stock';
            break;
            case 'Reviews (%d)':
            $translated_text = 'Avis (%d)';
            break;
            case 'Reviews':
            $translated_text = 'Avis';
            break;
        }
    }
    return $translated_text;
}
add_filter( 'gettext', 'custom_translate_woocommerce_checkout', 10, 3 );

function custom_translate_product_page_ecomus( $translated_text, $text, $domain ) {
    if ( $domain === 'ecomus' ) {
        switch ( $text ) {
            case 'Have a coupon?':
            $translated_text = 'Vous avez un coupon ?';
            break;
            case 'Enter your code':
            $translated_text = 'Entrez votre code';
            break;
            case 'Shopping Cart ':
            $translated_text =  'Panier d\'achat';
            break;
            case 'Show More':
            $translated_text = 'Afficher plus';
            break;
            case 'Show Less':
            $translated_text = 'Afficher moins';
            break;
            case 'Ask a question':
            $translated_text = 'Poser une question';
            break;
            case 'Delivery & Return':
            $translated_text = 'Livraison et retour';
            break;
            case 'Share':
            $translated_text = 'Partager';
            break;
            case 'Quantity:':
            $translated_text = 'Quantité:';
            break;
            case 'Customer Reviews':
            $translated_text = 'Avis des clients';
            break;
            case 'No reviews yet.':
            $translated_text = 'Aucun avis pour le moment.';
            break;
            case 'Recently Viewed':
            $translated_text = 'Vu récemment';
            break;
            case 'Your rating':
            $translated_text = 'Votre note';
            break;
            case 'Your review':
            $translated_text = 'Votre avis';
            break;
            case 'Submit Review':
            $translated_text = 'Soumettre un avis';
            break;
            case 'Write a review':
            $translated_text = 'Écrire un avis';
            break;
            case '%1$s review for %2$s':
            $translated_text = '%1$s avis pour %2$s';
            break;
            case '%1$s reviews for %2$s':
            $translated_text = '%1$s avis pour %2$s';
            break;
            case 'Based on %s review':
            $translated_text = 'Basé sur %s avis';
            break;
            case 'Based on %s reviews':
            $translated_text = 'Basé sur %s avis';
            break;
            case 'No reviews yet.':
            $translated_text = 'Aucun avis pour le moment.';
            break;
            case 'Write a product review':
            $translated_text = 'Écrire un avis sur le produit';
            break;
            case 'Be the first to review &ldquo;%s&rdquo;':
            $translated_text = 'Soyez le premier à donner votre avis sur &ldquo;%s&rdquo;';
            break;
            case 'Leave a Reply to %s':
            $translated_text = 'Laisser une réponse à %s';
            break;
            case 'You must be %slogged in%s to post a review.':
            $translated_text = 'Vous devez être %sconnecté%s pour poster un avis.';
            break;
            case 'Rate&hellip;':
            $translated_text = 'Noter&hellip;';
            break;
            case 'Perfect':
            $translated_text = 'Parfait';
            break;
            case 'Good':
            $translated_text = 'Bon';
            break;
            case 'Average':
            $translated_text = 'Moyen';
            break;
            case 'Not that bad':
            $translated_text = 'Pas si mal';
            break;
            case 'Very poor':
            $translated_text = 'Très mauvais';
            break;
            case 'Your review':
            $translated_text = 'Votre avis';
            break;
            case 'Only logged in customers who have purchased this product may leave a review.':
            $translated_text = 'Seuls les clients connectés ayant acheté ce produit peuvent laisser un avis.';
            break;
            case 'Reviews':
            $translated_text = 'Avis';
            break;
        }
    }
    return $translated_text;
}
add_filter( 'gettext', 'custom_translate_product_page_ecomus', 10, 3 );

function custom_translate_plural_texts( $translated_text, $text, $plural, $number, $domain ) {
    if ( $domain === 'ecomus' ) {
        switch ( $text ) {
            case 'Based on %s review':
            $translated_text = 'Basé sur %s avis';
            break;
            case 'Based on %s reviews':
            $translated_text = 'Basé sur %s avis';
            break;
            case '%1$s review for %2$s':
            $translated_text = '%1$s avis pour %2$s';
            break;
            case '%1$s reviews for %2$s':
            $translated_text = '%1$s avis pour %2$s';
            break;
            case '%s review':
            $translated_text = "%s avis";
            break;
            case '%s reviews':
            $translated_text = "%s avis";
            break;
        }
    }
    return $translated_text;
}
add_filter( 'ngettext', 'custom_translate_plural_texts', 20, 5 );

function custom_translate_cod_gateway( $available_gateways ) {
    if ( isset( $available_gateways['cod'] ) ) {
        $available_gateways['cod']->title = 'Paiement à la livraison';
        $available_gateways['cod']->description = 'Payez en espèces à la livraison.';
    }
    return $available_gateways;
}
add_filter( 'woocommerce_available_payment_gateways', 'custom_translate_cod_gateway' );

function custom_wishlist_tooltip_text() {
    ?>
    <script type="text/javascript">
        jQuery(document).ready( function($) {
            setTimeout(
                function() {
                    $('.wcboost-wishlist-button').attr('data-tooltip', 'Ajouter à la liste de souhaits');
                    $('.wcboost-wishlist-button').attr('data-tooltip_added', 'Retirer de la liste de souhaits');
                    $('.wcboost-products-compare-button').attr('data-tooltip', 'Comparer');
                    $('.wcboost-products-compare-button').attr('data-tooltip_added', 'Parcourir la comparaison');
                }, 5000);
        });
    </script>
    <?php
}
add_action('wp_footer', 'custom_wishlist_tooltip_text');