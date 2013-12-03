<?php

class SpecialDonate extends SpecialPage {
	/**
	 * Constructor -- set up the new special page
	 */
	public function __construct() {
		parent::__construct( 'Donate' );
	}

	/**
	 * Show the special page
	 *
	 * @param $par Mixed: parameter passed to the special page or null
	 */
	public function execute( $par ) {
		$output = $this->getOutput();

		$this->setHeaders();

		// Load the CSS via ResourceLoader
		$output->addModules( 'ext.donate' );

		// Load the main UI template and output its contents
		include( 'ui.tmpl.php' );
		$template = new SpecialDonateUITemplate;
		$output->addTemplate( $template );

		$wikitext = '<div style="margin-top:-45px;">{{MediaWiki:Donation-page-text}}</div>';
		$output->addWikiText( $wikitext );
	}
}