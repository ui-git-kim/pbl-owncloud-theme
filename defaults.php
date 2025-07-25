<?php
class OC_Theme {

	/**
	 * Returns the base URL
	 * @return string URL
	 */
	public function getBaseUrl() {
		return 'https://cloud.pbl.events/';
	}

	/**
	 * Returns the title
	 * @return string title
	 */
	public function getTitle() {
		return 'The Photo Booth-less Event Galleries';
	}

	/**
	 * Returns the short name of the software
	 * @return string title
	 */
	public function getName() {
		return 'PBL Event Galleries';
	}

	/**
	 * Returns the short name of the software containing HTML strings
	 * @return string title
	 */
	public function getHTMLName() {
		return '<b>PBL</b> Cloud';
	}

	/**
	 * Returns entity (e.g. company name) - used for footer, copyright
	 * @return string entity name
	 */
	public function getEntity() {
		return 'The Photo Booth-less';
	}

	/**
	 * Returns slogan
	 * @return string slogan
	 */
	public function getSlogan() {
		return '<span style="color: #ffffff;">Picture Perfect Fun</span><span style="color: #9C569D;">.</span>';
	}

		/**
	 * Returns short version of the footer
	 * @return string short footer
	 */
	public function getShortFooter() {
		$footer = '<a href="https://www.photoboothless.com.au" target="_blank">'.$this->getEntity().'</a>'.
			' - ' . $this->getSlogan();
		return $footer;
	}

	/**
	 * Returns long version of the footer
	 * @return string long footer
	 */
	public function getLongFooter() {
		$footer = '<a href="https://www.photoboothless.com.au" target="_blank">'.$this->getEntity().'</a>'.
			' - ' . $this->getSlogan();
		return $footer;
	}

	/**
	 * Returns mail header color
	 * @return string
	 */
	public function getMailHeaderColor() {
		return '#9C569D';
	}

}
