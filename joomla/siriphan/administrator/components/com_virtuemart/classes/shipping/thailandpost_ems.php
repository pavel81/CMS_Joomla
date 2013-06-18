<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );
/*
* @version $Id: shipvalue.php,v .1 2005/09  r_lewis
* @package VirtueMart
* @subpackage shipping
* @copyright (C) 2005 Rhys Lewis with due respect to Micah Shawn and Bret (allbloodrunsred)

* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Based on VirtueMart.  Thank you Soeren!
* VirtueMart is Free Software.
* VirtueMart comes with absolute no warranty.
* www.virtuemart.net
******************************************************************************
*
* This class will charge a fixed shipping rate based on the total order value
* up to 10 thresholds for  total order value can be set in admin>store>shipping module list>shipvalue
*
*******************************************************************************
*/
class thailandpost_ems {

	var $classname = "thailandpost_ems";

	function list_rates( &$d ) {
		global $total, $tax_total, $CURRENCY_DISPLAY;
		$db =& new ps_DB;
		$dbv =& new ps_DB;

		$cart = $_SESSION['cart'];

		/** Read current Configuration ***/
		require_once(CLASSPATH ."shipping/".$this->classname.".cfg.php");

		if ( $_SESSION['auth']['show_price_including_tax'] != 1 ) {
			$taxrate = 1;
			$order_total = $total + $tax_total;
		}
		else {
			$taxrate = $this->get_tax_rate() + 1;
			$order_total = $total;
		}

		//Define shipping value breaks
		$base_ship1 = BASE_SHIPEMS1;
		$base_ship2 = BASE_SHIPEMS2;
		$base_ship3 = BASE_SHIPEMS3;
		$base_ship4 = BASE_SHIPEMS4;
		$base_ship5 = BASE_SHIPEMS5;
		$base_ship6 = BASE_SHIPEMS6;
		$base_ship7 = BASE_SHIPEMS7;
		$base_ship8 = BASE_SHIPEMS8;
		$base_ship9 = BASE_SHIPEMS9;
		$base_ship10 = BASE_SHIPEMS10;

		//Flat rate shipping charge up to minimum value
		$flat_charge1 = BASE_CHARGEEMS1;
		$flat_charge2 = BASE_CHARGEEMS2;
		$flat_charge3 = BASE_CHARGEEMS3;
		$flat_charge4 = BASE_CHARGEEMS4;
		$flat_charge5 = BASE_CHARGEEMS5;
		$flat_charge6 = BASE_CHARGEEMS6;
		$flat_charge7 = BASE_CHARGEEMS7;
		$flat_charge8 = BASE_CHARGEEMS8;
		$flat_charge9 = BASE_CHARGEEMS9;
		$flat_charge10 = BASE_CHARGEEMS10;


		if($order_total < $base_ship1) {
			$flat_charge1 *= $taxrate;
			$shipping_rate_id = urlencode($this->classname."|Thailand Post|EMS ด่วนพิเศษ มูลค่าไม่เกิน ".$base_ship1."|".$flat_charge1);
			$html = "";
			$html .= "\n<input type=\"radio\" name=\"shipping_rate_id\" checked=\"checked\" value=\"$shipping_rate_id\" id=\"$shipping_rate_id\" />\n";
			$html .= "<label for=\"$shipping_rate_id\">EMS ด่วนพิเศษ : ".$CURRENCY_DISPLAY->getFullValue($flat_charge1).'</label>';
			$_SESSION[$shipping_rate_id] = 1;
		}
		else if($order_total < $base_ship2) {
			$flat_charge2 *= $taxrate;
			$shipping_rate_id = urlencode($this->classname."|Thailand Post|EMS ด่วนพิเศษ มูลค่าไม่เกิน ".$base_ship2."|".$flat_charge2);
			$html = "";
			$html .= "\n<input type=\"radio\" name=\"shipping_rate_id\" checked=\"checked\" value=\"$shipping_rate_id\" id=\"$shipping_rate_id\" />\n";
			$html .= "<label for=\"$shipping_rate_id\">EMS ด่วนพิเศษ: ".$CURRENCY_DISPLAY->getFullValue($flat_charge2).'</label>';
			$_SESSION[$shipping_rate_id] = 1;
		}
		else if($order_total < $base_ship3) {
			$flat_charge3 *= $taxrate;
			$shipping_rate_id = urlencode($this->classname."|Thailand Post|EMS ด่วนพิเศษ มูลค่าไม่เกิน ".$base_ship3."|".$flat_charge3);
			$html = "";
			$html .= "\n<input type=\"radio\" name=\"shipping_rate_id\" checked=\"checked\" value=\"$shipping_rate_id\" id=\"$shipping_rate_id\" />\n";
			$html .= "<label for=\"$shipping_rate_id\">EMS ด่วนพิเศษ: ".$CURRENCY_DISPLAY->getFullValue($flat_charge3).'</label>';
			$_SESSION[$shipping_rate_id] = 1;
		}
		else if($order_total < $base_ship4) {
			$flat_charge4 *= $taxrate;
			$shipping_rate_id = urlencode($this->classname."|Thailand Post|EMS ด่วนพิเศษ มูลค่าไม่เกิน ".$base_ship4."|".$flat_charge4);
			$html = "";
			$html .= "\n<input type=\"radio\" name=\"shipping_rate_id\" checked=\"checked\" value=\"$shipping_rate_id\" id=\"$shipping_rate_id\" />\n";
			$html .= "<label for=\"$shipping_rate_id\">EMS ด่วนพิเศษ: ".$CURRENCY_DISPLAY->getFullValue($flat_charge4).'</label>';
			$_SESSION[$shipping_rate_id] = 1;
		}
		else if($order_total < $base_ship5) {
			$flat_charge5 *= $taxrate;
			$shipping_rate_id = urlencode($this->classname."|Thailand Post|EMS ด่วนพิเศษ มูลค่าไม่เกิน ".$base_ship5."|".$flat_charge5);
			$html = "";
			$html .= "\n<input type=\"radio\" name=\"shipping_rate_id\" checked=\"checked\" value=\"$shipping_rate_id\" id=\"$shipping_rate_id\" />\n";
			$html .= "<label for=\"$shipping_rate_id\">EMS ด่วนพิเศษ: ".$CURRENCY_DISPLAY->getFullValue($flat_charge5).'</label>';
			$_SESSION[$shipping_rate_id] = 1;
		}
		else if($order_total < $base_ship6) {
			$flat_charge6 *= $taxrate;
			$shipping_rate_id = urlencode($this->classname."|Thailand Post|EMS ด่วนพิเศษ มูลค่าไม่เกิน ".$base_ship6."|".$flat_charge6);
			$html = "";
			$html .= "\n<input type=\"radio\" name=\"shipping_rate_id\" checked=\"checked\" value=\"$shipping_rate_id\" id=\"$shipping_rate_id\" />\n";
			$html .= "<label for=\"$shipping_rate_id\">EMS ด่วนพิเศษ: ".$CURRENCY_DISPLAY->getFullValue($flat_charge6).'</label>';
			$_SESSION[$shipping_rate_id] = 1;
		}
		else if($order_total < $base_ship7) {
			$flat_charge7 *= $taxrate;
			$shipping_rate_id = urlencode($this->classname."|Thailand Post|EMS ด่วนพิเศษ มูลค่าไม่เกิน ".$base_ship7."|".$flat_charge7);
			$html = "";
			$html .= "\n<input type=\"radio\" name=\"shipping_rate_id\" checked=\"checked\" value=\"$shipping_rate_id\" id=\"$shipping_rate_id\" />\n";
			$html .= "<label for=\"$shipping_rate_id\">EMS ด่วนพิเศษ: ".$CURRENCY_DISPLAY->getFullValue($flat_charge7).'</label>';
			$_SESSION[$shipping_rate_id] = 1;
		}
		else if($order_total < $base_ship8) {
			$flat_charge8 *= $taxrate;
			$shipping_rate_id = urlencode($this->classname."|Thailand Post|EMS ด่วนพิเศษ มูลค่าไม่เกิน ".$base_ship8."|".$flat_charge8);
			$html = "";
			$html .= "\n<input type=\"radio\" name=\"shipping_rate_id\" checked=\"checked\" value=\"$shipping_rate_id\" id=\"$shipping_rate_id\" />\n";
			$html .= "<label for=\"$shipping_rate_id\">EMS ด่วนพิเศษ: ".$CURRENCY_DISPLAY->getFullValue($flat_charge8).'</label>';
			$_SESSION[$shipping_rate_id] = 1;
		}
		else if($order_total < $base_ship9) {
			$flat_charge9 *= $taxrate;
			$shipping_rate_id = urlencode($this->classname."|Thailand Post|EMS ด่วนพิเศษ มูลค่าไม่เกิน ".$base_ship9."|".$flat_charge9);
			$html = "";
			$html .= "\n<input type=\"radio\" name=\"shipping_rate_id\" checked=\"checked\" value=\"$shipping_rate_id\" id=\"$shipping_rate_id\" />\n";
			$html .= "<label for=\"$shipping_rate_id\">EMS ด่วนพิเศษ: ".$CURRENCY_DISPLAY->getFullValue($flat_charge9).'</label>';
			$_SESSION[$shipping_rate_id] = 1;
		}
		else if($order_total < $base_ship10) {
			$flat_charge10 *= $taxrate;
			$shipping_rate_id = urlencode($this->classname."|Thailand Post|EMS ด่วนพิเศษ มูลค่าไม่เกิน ".$base_ship10."|".$flat_charge10);
			$html = "";
			$html .= "\n<input type=\"radio\" name=\"shipping_rate_id\" checked=\"checked\" value=\"$shipping_rate_id\" id=\"$shipping_rate_id\" />\n";
			$html .= "<label for=\"$shipping_rate_id\">EMS ด่วนพิเศษ: ".$CURRENCY_DISPLAY->getFullValue($flat_charge10).'</label>';
			$_SESSION[$shipping_rate_id] = 1;
		}

		echo $html;
		return true;


	}

	function get_rate( &$d ) {

		$shipping_rate_id = $d["shipping_rate_id"];
		$is_arr = explode("|", urldecode(urldecode($shipping_rate_id)) );
		$order_shipping = $is_arr[3];

		return $order_shipping;

	}


	function get_tax_rate() {

		/** Read current Configuration ***/
		require_once(CLASSPATH ."shipping/".$this->classname.".cfg.php");

		if( intval(SHIPVALUE_TAX_CLASS)== 0 )
		return( 0 );
		else {
			require_once( CLASSPATH. "ps_tax.php" );
			$tax_rate = ps_tax::get_taxrate_by_id( intval(SHIPVALUE_TAX_CLASS) );
			return $tax_rate;
		}
	}

	/* Validate this Shipping method by checking if the SESSION contains the key
	* @returns boolean False when the Shipping method is not in the SESSION
	*/
	function validate( $d ) {

		$shipping_rate_id = $d["shipping_rate_id"];

		if( array_key_exists( $shipping_rate_id, $_SESSION ))
		return true;
		else
		return false;
	}
	/**
    * Show all configuration parameters for this Shipping method
    * @returns boolean False when the Shipping method has no configration
    */
	function show_configuration() {
		global $VM_LANG;
		/** Read current Configuration ***/
		require_once(CLASSPATH ."shipping/".__CLASS__.".cfg.php");
    ?>
      <table>
	  <th colspan="5"><font color="red">EMS</font></th>
    <tr>
        <td><strong>มูลค่าการสั่งซื้อ 1:</strong></td>
		<td>
            <input type="text" name="BASE_SHIP1" class="inputbox" value="<?php echo BASE_SHIPEMS1 ?>" />
		</td>
        <td><strong>ค่าจัดส่ง 1:</strong></td>
		<td>
            <input type="text" name="BASE_CHARGE1" class="inputbox" value="<?php echo BASE_CHARGEEMS1 ?>" />
		</td>
		<td>
        <?php echo vmToolTip("ค่าสินค้าที่มีจำนวนน้อยกว่า มูลค่าการสั่งซื้อ 1. จะใช้ค่าจัดส่งในช่อง 1.") ?>
        </td>
    </tr>
    <tr>
        <td><strong>มูลค่าการสั่งซื้อ 2:</strong></td>
		<td>
            <input type="text" name="BASE_SHIP2" class="inputbox" value="<?php echo BASE_SHIPEMS2 ?>" />
		</td>
        <td><strong>ค่าจัดส่ง 2:</strong></td>
		<td>
            <input type="text" name="BASE_CHARGE2" class="inputbox" value="<?php echo BASE_CHARGEEMS2 ?>" />
		</td>
		<td>
        <?php echo vmToolTip("ค่าสินค้าที่มีจำนวนน้อยกว่า มูลค่าการสั่งซื้อ 2. จะใช้ค่าจัดส่งในช่อง 2.") ?>
        </td>
    </tr>
    <tr>
        <td><strong>มูลค่าการสั่งซื้อ 3:</strong></td>
		<td>
            <input type="text" name="BASE_SHIP3" class="inputbox" value="<?php echo BASE_SHIPEMS3 ?>" />
		</td>
        <td><strong>ค่าจัดส่ง 3:</strong></td>
		<td>
            <input type="text" name="BASE_CHARGE3" class="inputbox" value="<?php echo BASE_CHARGEEMS3 ?>" />
		</td>
		<td>
        <?php echo vmToolTip("ค่าสินค้าที่มีจำนวนน้อยกว่า มูลค่าการสั่งซื้อ 3. จะใช้ค่าจัดส่งในช่อง 3.") ?>
        </td>
    </tr>
    <tr>
        <td><strong>มูลค่าการสั่งซื้อ 4:</strong></td>
		<td>
            <input type="text" name="BASE_SHIP4" class="inputbox" value="<?php echo BASE_SHIPEMS4 ?>" />
		</td>
        <td><strong>ค่าจัดส่ง 4:</strong></td>
		<td>
            <input type="text" name="BASE_CHARGE4" class="inputbox" value="<?php echo BASE_CHARGEEMS4 ?>" />
		</td>
		<td>
        <?php echo vmToolTip("ค่าสินค้าที่มีจำนวนน้อยกว่า มูลค่าการสั่งซื้อ 4. จะใช้ค่าจัดส่งในช่อง 4.") ?>
        </td>
    </tr>
    <tr>
        <td><strong>มูลค่าการสั่งซื้อ 5:</strong></td>
		<td>
            <input type="text" name="BASE_SHIP5" class="inputbox" value="<?php echo BASE_SHIPEMS5 ?>" />
		</td>
        <td><strong>ค่าจัดส่ง 5:</strong></td>
		<td>
            <input type="text" name="BASE_CHARGE5" class="inputbox" value="<?php echo BASE_CHARGEEMS5 ?>" />
		</td>
		<td>
        <?php echo vmToolTip("ค่าสินค้าที่มีจำนวนน้อยกว่า มูลค่าการสั่งซื้อ 5. จะใช้ค่าจัดส่งในช่อง 5.") ?>
        </td>
    </tr>
    <tr>
        <td><strong>มูลค่าการสั่งซื้อ 6:</strong></td>
		<td>
            <input type="text" name="BASE_SHIP6" class="inputbox" value="<?php echo BASE_SHIPEMS6 ?>" />
		</td>
        <td><strong>ค่าจัดส่ง 6:</strong></td>
		<td>
            <input type="text" name="BASE_CHARGE6" class="inputbox" value="<?php echo BASE_CHARGEEMS6 ?>" />
		</td>
		<td>
        <?php echo vmToolTip("ค่าสินค้าที่มีจำนวนน้อยกว่า มูลค่าการสั่งซื้อ 6. จะใช้ค่าจัดส่งในช่อง 6.") ?>
        </td>
    </tr>
    <tr>
        <td><strong>มูลค่าการสั่งซื้อ 7:</strong></td>
		<td>
            <input type="text" name="BASE_SHIP7" class="inputbox" value="<?php echo BASE_SHIPEMS7 ?>" />
		</td>
        <td><strong>ค่าจัดส่ง 7:</strong></td>
		<td>
            <input type="text" name="BASE_CHARGE7" class="inputbox" value="<?php echo BASE_CHARGEEMS7 ?>" />
		</td>
		<td>
        <?php echo vmToolTip("ค่าสินค้าที่มีจำนวนน้อยกว่า มูลค่าการสั่งซื้อ 7. จะใช้ค่าจัดส่งในช่อง 7.") ?>
        </td>
    </tr>
    <tr>
        <td><strong>มูลค่าการสั่งซื้อ 8:</strong></td>
		<td>
            <input type="text" name="BASE_SHIP8" class="inputbox" value="<?php echo BASE_SHIPEMS8 ?>" />
		</td>
        <td><strong>ค่าจัดส่ง 8:</strong></td>
		<td>
            <input type="text" name="BASE_CHARGE8" class="inputbox" value="<?php echo BASE_CHARGEEMS8 ?>" />
		</td>
		<td>
        <?php echo vmToolTip("ค่าสินค้าที่มีจำนวนน้อยกว่า มูลค่าการสั่งซื้อ 8. จะใช้ค่าจัดส่งในช่อง 8.") ?>
        </td>
    </tr>
    <tr>
        <td><strong>มูลค่าการสั่งซื้อ 9:</strong></td>
		<td>
            <input type="text" name="BASE_SHIP9" class="inputbox" value="<?php echo BASE_SHIPEMS9 ?>" />
		</td>
        <td><strong>ค่าจัดส่ง 9:</strong></td>
		<td>
            <input type="text" name="BASE_CHARGE9" class="inputbox" value="<?php echo BASE_CHARGEEMS9 ?>" />
		</td>
		<td>
        <?php echo vmToolTip("ค่าสินค้าที่มีจำนวนน้อยกว่า มูลค่าการสั่งซื้อ 9. จะใช้ค่าจัดส่งในช่อง 9.") ?>
        </td>
    </tr>
    <tr>
        <td><strong>มูลค่าการสั่งซื้อ 10:</strong></td>
		<td>
            <input type="text" name="BASE_SHIP10" class="inputbox" value="<?php echo BASE_SHIPEMS10 ?>" />
		</td>
        <td><strong>ค่าจัดส่ง 10:</strong></td>
		<td>
            <input type="text" name="BASE_CHARGE10" class="inputbox" value="<?php echo BASE_CHARGEEMS10 ?>" />
		</td>
		<td>
        <?php echo vmToolTip("ค่าสินค้าที่มีจำนวนน้อยกว่า มูลค่าการสั่งซื้อ 10. จะใช้ค่าจัดส่งในช่อง 10.") ?>
        </td>
    </tr>

	  <tr>
		<td><strong><?php echo $VM_LANG->_('PHPSHOP_UPS_TAX_CLASS') ?></strong></td>
		<td>
		  <?php
		  require_once(CLASSPATH.'ps_tax.php');
		  ps_tax::list_tax_value("SHIPVALUE_TAX_CLASS", SHIPVALUE_TAX_CLASS) ?>
		</td>
		<td colspan="3"><?php echo vmToolTip("เลือกตัวเลือกนี้.  ค่าจัดส่งด้านบนจะรวมอัตราภาษีนี้.") ?><td>
	  </tr>	

	</table>
   <?php
   // return false if there's no configuration
   return true;
	}
	/**
  * Returns the "is_writeable" status of the configuration file
  * @param void
  * @returns boolean True when the configuration file is writeable, false when not
  */
	function configfile_writeable() {
		return is_writeable( CLASSPATH."shipping/".$this->classname.".cfg.php" );
	}

	/**
	* Writes the configuration file for this shipping method
	* @param array An array of objects
	* @returns boolean True when writing was successful
	*/
	function write_configuration( &$d ) {

		$my_config_array = array("BASE_SHIPEMS1" => $d['BASE_SHIP1'],
		"BASE_SHIPEMS2" => $d['BASE_SHIP2'],
		"BASE_SHIPEMS3" => $d['BASE_SHIP3'],
		"BASE_SHIPEMS4" => $d['BASE_SHIP4'],
		"BASE_SHIPEMS5" => $d['BASE_SHIP5'],
		"BASE_SHIPEMS6" => $d['BASE_SHIP6'],
		"BASE_SHIPEMS7" => $d['BASE_SHIP7'],
		"BASE_SHIPEMS8" => $d['BASE_SHIP8'],
		"BASE_SHIPEMS9" => $d['BASE_SHIP9'],
		"BASE_SHIPEMS10" => $d['BASE_SHIP10'],
		"BASE_CHARGEEMS1" => $d['BASE_CHARGE1'],
		"BASE_CHARGEEMS2" => $d['BASE_CHARGE2'],
		"BASE_CHARGEEMS3" => $d['BASE_CHARGE3'],
		"BASE_CHARGEEMS4" => $d['BASE_CHARGE4'],
		"BASE_CHARGEEMS5" => $d['BASE_CHARGE5'],
		"BASE_CHARGEEMS6" => $d['BASE_CHARGE6'],
		"BASE_CHARGEEMS7" => $d['BASE_CHARGE7'],
		"BASE_CHARGEEMS8" => $d['BASE_CHARGE8'],
		"BASE_CHARGEEMS9" => $d['BASE_CHARGE9'],
		"BASE_CHARGEEMS10" => $d['BASE_CHARGE10'],
		"SHIPVALUE_TAX_CLASS" => $d['SHIPVALUE_TAX_CLASS']
		);
		$config = "<?php\n";
		$config .= "if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); \n\n";
		foreach( $my_config_array as $key => $value ) {
			$config .= "define ('$key', '$value');\n";
		}

		$config .= "?>";

		if ($fp = fopen(CLASSPATH ."shipping/".$this->classname.".cfg.php", "w")) {
			fputs($fp, $config, strlen($config));
			fclose ($fp);
			return true;
		}
		else {
			$vmLogger->err( "Error writing to configuration file" );
			return false;
		}
	}
}


?>