<?php
/**
 * Leaves_And_Love\WP_GDPR_Cookie_Notice\Cookie_Notice\Cookie_Notice_Stylesheet class
 *
 * @package WP_GDPR_Cookie_Notice
 * @since 1.0.0
 */

namespace Leaves_And_Love\WP_GDPR_Cookie_Notice\Cookie_Notice;

use Leaves_And_Love\WP_GDPR_Cookie_Notice\Contracts\Inline_Asset;
use Leaves_And_Love\WP_GDPR_Cookie_Notice\Contracts\Option_Reader;
use Leaves_And_Love\WP_GDPR_Cookie_Notice\Settings\Plugin_Option_Reader;

/**
 * Class representing a cookie notice stylesheet.
 *
 * @since 1.0.0
 */
class Cookie_Notice_Stylesheet implements Inline_Asset {

	/**
	 * ID attribute for the stylesheet.
	 */
	const ID_ATTR = 'wp-gdpr-cookie-notice-stylesheet';

	/**
	 * Option reader.
	 *
	 * @since 1.0.0
	 * @var Option_Reader
	 */
	protected $options;

	/**
	 * Constructor.
	 *
	 * Sets the option reader to use.
	 *
	 * @since 1.0.0
	 *
	 * @param Option_Reader $options Optional. Option reader to use.
	 */
	public function __construct( Option_Reader $options = null ) {
		if ( null === $options ) {
			$options = new Plugin_Option_Reader();
		}

		$this->options = $options;
	}

	/**
	 * Gets the ID attribute used for the asset.
	 *
	 * @since 1.0.0
	 *
	 * @return string ID attribute.
	 */
	public function get_id() : string {
		return self::ID_ATTR;
	}

	/**
	 * Prints the full asset including the wrapping tags.
	 *
	 * @since 1.0.0
	 */
	public function print() {
		?>
		<style id="<?php echo esc_attr( self::ID_ATTR ); ?>" type="text/css">
			<?php $this->print_content(); ?>
		</style>
		<?php
	}

	/**
	 * Prints the actual asset content.
	 *
	 * @since 1.0.0
	 */
	public function print_content() {

	}
}