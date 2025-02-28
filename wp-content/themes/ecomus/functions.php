<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-
 functions/
 *
 * @package Ecomus
 */
 require_once get_template_directory() . '/inc/theme.php';
 \Ecomus\Theme::instance()->init();



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
 	if ( $text === 'Price:' ) {
 		return 'Prix:';
 	}
 	if ( $text === 'On sale' ) {
 		return 'En promotion';
 	}
 	if ( $text === 'In stock' ) {
 		return 'En stock';
 	}
 	if ( $text === 'Out of stock' ) {
 		return 'Rupture de stock';
 	}
 	if ( $text === 'Filter' ) {
 		return 'Filtrer';
 	}
 	if ( $text === 'Sort by popularity' ) {
 		return 'Trier par popularité';
 	}
 	if ( $text === 'Sort by average rating' ) {
 		return 'Trier par note moyenne';
 	}
 	if ( $text === 'Sort by latest' ) {
 		return 'Trier par nouveauté';
 	}
 	if ( $text === 'Sort by price: low to high' ) {
 		return 'Trier par prix : du plus bas au plus élevé';
 	}
 	if ( $text === 'Sort by price: high to low' ) {
 		return 'Trier par prix : du plus élevé au plus bas';
 	}
 	if ( $text === 'Shop' ) {
 		return 'Boutique';
 	}
 	if ( $text === 'New' ) {
 		return 'Nouveau';
 	}
 	if ( $text === 'Add to cart' ) {
 		return 'Ajouter au panier';
 	}
 	if ( $text === 'Quick View' ) {
 		return 'Aperçu rapide';
 	}
 	if ( $text === 'Wishlist is empty.' ) {
 		return 'La liste de souhaits est vide.';
 	}
 	if ( $text === 'Return to shop' ) {
 		return 'Retour à la boutique';
 	}
 	if ( $text === "You don't have any products in the wishlist yet. You will find a lot of interesting products on our &quot;Shop&quot; page." ) {
 		return "Vous n'avez encore aucun produit dans votre liste de souhaits. Vous trouverez de nombreux produits intéressants sur notre page \"Boutique\".";
 	}
	if ( $text === 'Shopping Cart' ) { // Not working
		return 'Panier d\'achat';
	}
	if ( $text === 'Remove' ) {
		return 'Supprimer';
	}
	if ( $text === 'Subtotal:' ) {
		return 'Sous-total:';
	}
	if ( $text === 'View cart' ) {
		return 'Voir le panier';
	}
	if ( $text === 'Checkout' ) {
		return 'Passer à la caisse';
	}
	if ( $text === 'Your cart is empty' ) {
		return 'Votre panier est vide';
	}
	if ( $text === 'You may check out all the available products and buy some in the shop' ) {
		return 'Vous pouvez consulter tous les produits disponibles et en acheter dans la boutique';
	}
	if ( $text === 'Product' ) {
		return 'Produit';
	}
	if ( $text === 'Price' ) {
		return 'Prix';
	}
	if ( $text === 'Quantity' ) {
		return 'Quantité';
	}
	if ( $text === 'Order notes' ) {
		return 'Notes de commande';
	}
	if ( $text === 'Cart totals' ) {
		return 'Totaux du panier';
	}
	if ( $text === 'Subtotal' ) {
		return 'Sous-total';
	}
	if ( $text === 'Total' ) {
		return 'Total';
	}
	if ( $text === 'Proceed to checkout' ) {
		return 'Passer à la caisse';
	}
	if ( $text === 'Coupon code' ) {
		return 'Code promo';
	}
	if ( $text === 'Apply coupon' ) {
		return 'Appliquer le coupon';
	}
	if ( $text === 'Notes about your order, e.g. special notes for delivery.' ) {
		return 'Remarques concernant votre commande, par ex. instructions spéciales pour la livraison.';
	}
	if ( $text === 'Update cart' ) {
		return 'Mise à jour panier';
	}
	if ( $text === 'Invalid billing email address' ) {
		return 'Adresse e-mail de facturation non valide';
	}
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
		}
	}
	return $translated_text;
}
add_filter( 'gettext', 'custom_translate_woocommerce_checkout', 10, 3 );

function custom_translate_woocommerce_coupons( $translated_text, $text, $domain ) {
	if ( $domain === 'woocommerce' ) {
		switch ( $text ) {
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
		}
	}
	return $translated_text;
}
add_filter( 'gettext', 'custom_translate_woocommerce_coupons', 10, 3 );

function custom_translate_coupon_text( $translated_text, $text, $domain ) {
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
		}
	}
	return $translated_text;
}
add_filter( 'gettext', 'custom_translate_coupon_text', 10, 3 );

function custom_translate_admin_menu( $translated_text, $text, $domain ) {
	if ( $domain === 'woocommerce' ) {
		switch ( $text ) {
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
		}
	}
	return $translated_text;
}
add_filter( 'gettext', 'custom_translate_admin_menu', 10, 3 );

function custom_translate_order_text( $translated_text, $text, $domain ) {
	if ( $domain === 'woocommerce' ) {
		switch ( $text ) {
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
			break;
			$translated_text =  'Ceci sera la façon dont votre nom sera affiché dans la section du compte et dans les avis.';
			case 'Display name':
			break;
			$translated_text =  'Nom affiché';
			case 'Password change':
			break;
			$translated_text =  'Changement de mot de passe';
			case 'Current password (leave blank to leave unchanged)':
			break;
			$translated_text =  'Mot de passe actuel (laissez vide pour ne pas modifier)';
			case 'New password (leave blank to leave unchanged)':
			break;
			$translated_text =  'Nouveau mot de passe (laissez vide pour ne pas modifier)';
			case 'Confirm new password':
			break;
			$translated_text =  'Confirmer le nouveau mot de passe';
			case 'Save changes':
			break;
			$translated_text =  'Enregistrer les modifications';
			case 'Save address':
			break;
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
		}
	}
	return $translated_text;
}
add_filter( 'gettext', 'custom_translate_order_text', 10, 3 );

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
