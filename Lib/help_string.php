<?php
class Helper_String
{
	/**
	 * 第一种截取字符串的方法
	 * @param  [type] $content [description]
	 * @param  string $length  [description]
	 * @return [type]          [description]
	 */
	static function substrs($content,$length='30')
	{
		if($length && strlen($content)>$length)
		{
			$num=0;
			for($i=0;$i<$length-3;$i++)
			{
				if(ord($content[$i])>127)
				{
					$num++;
				}
			}
			$num%2==1 ? $content=substr($content,0,$length-4):$content=substr($content,0,$length-3);
		}
		return $content;
	}

	/**
	 * 第二种截取字符串的方法
	 * @param  [type] $string [description]
	 * @param  [type] $length [description]
	 * @param  string $dot    [description]
	 * @return [type]         [description]
	 */
	static function cutstr($string, $length, $dot = ' ...') {
		$strcut = '';
		for($i = 0; $i < $length - strlen($dot) - 1; $i++) {
			$strcut .= ord($string[$i]) > 127 ? $string[$i].$string[++$i] : $string[$i];
		}
		return $strcut.$dot;
	}

	/**
	 * 第三种截取字符串的方法
	 * @param  [type] $str  [description]
	 * @param  [type] $len  [description]
	 * @param  string $tail [description]
	 * @return [type]       [description]
	 */
	static function cutTitle($str, $len, $tail = ""){
		$length = strlen($str);
		$lentail = strlen($tail);
		$result = "";
		if($length > $len){
			$len = $len - $lentail;
			for($i = 0;$i < $len;$i ++){
				if(ord($str[$i]) < 127){
					$result .= $str[$i];
				}else{
					$result .= $str[$i];
					++ $i;
					$result .= $str[$i];
				}
			}
			$result = strlen($result) > $len ? substr($result, 0, -2) . $tail : $result . $tail;
		}else{
			$result = $str;
		}
		return $result;
	}

	/**
	 * 第四种截取字符串的方法
	 * @param  [type] $str   [description]
	 * @param  [type] $start [description]
	 * @param  [type] $len   [description]
	 * @return [type]        [description]
	 */
	static function mysubstr($str, $start, $len="30") {
		$tmpstr = "";
		$strlen = $start + $len;
		for($i = 0; $i < $strlen; $i++) {
			if(ord(substr($str, $i, 1)) > 0xa0) {
				$tmpstr .= substr($str, $i, 2);
				$i++;
			} else{
				$tmpstr .= substr($str, $i, 1);
			}
		}
		return $tmpstr;
	} 

	/**
	 * 第五种截取字符串的方法
	 * @param  [type] $str  [description]
	 * @param  [type] $from [description]
	 * @param  [type] $len  [description]
	 * @return [type]       [description]
	 */
	static function utf8Substr($str, $len=30, $from=0){
		return preg_replace('#^(?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$from.'}'.
		'((?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$len.'}).*#s',
		'$1',$str);
	} 

	/**
	 * 第六种截取字符串的方法
	 * @param  [type]  $string [description]
	 * @param  [type]  $sublen [description]
	 * @param  integer $start  [description]
	 * @param  string  $code   [description]
	 * @return [type]          [description]
	 */
	static function cut_str($string, $sublen, $start = 0, $code = 'UTF-8')
	{
		if($code == 'UTF-8')
		{
			$pa ="/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|\xe0[\xa0-\xbf][\x80-\xbf]|[\xe1-\xef][\x80-\xbf][\x80-\xbf]|\xf0[\x90-\xbf][\x80-\xbf][\x80-\xbf]|[\xf1-\xf7][\x80-\xbf][\x80-\xbf][\x80-\xbf]/";
			preg_match_all($pa, $string, $t_string); if(count($t_string[0]) - $start > $sublen) return join('', array_slice($t_string[0], $start, $sublen))."...";
			return join('', array_slice($t_string[0], $start, $sublen));
		}
		else
		{
			$start = $start*2;
			$sublen = $sublen*2;
			$strlen = strlen($string);
			$tmpstr = ''; 
			for($i=0; $i<$strlen; $i++)
			{
				if($i>=$start && $i<($start+$sublen))
				{
					if(ord(substr($string, $i, 1))>129)
					{
						$tmpstr.= substr($string, $i, 2);
					}
					else
					{
						$tmpstr.= substr($string, $i, 1);
					}
				}
				if(ord(substr($string, $i, 1))>129) $i++;
			}
			if(strlen($tmpstr)<$strlen ) $tmpstr.= "...";
			return $tmpstr;
		}
	}

	/**
	 * 第七种截取字符串的方法
	 * @param  [type]  $String [description]
	 * @param  [type]  $Length [description]
	 * @param  boolean $Append [description]
	 * @return [type]          [description]
	 */
	static function sysSubStr($String,$Length,$Append = false)
	{
		if (strlen($String) <= $Length )
		{
			return $String;
		}
		else
		{
			$I = 0;
			while ($I < $Length)
			{
				$StringTMP = substr($String,$I,1);
				if ( ord($StringTMP) >=224 )
				{
					$StringTMP = substr($String,$I,3);
					$I = $I + 3;
				}
				elseif( ord($StringTMP) >=192 )
				{
					$StringTMP = substr($String,$I,2);
					$I = $I + 2;
				}
				else
				{
					$I = $I + 1;
				}
				$StringLast[] = $StringTMP;
			}
			$StringLast = implode("",$StringLast);
			if($Append)
			{
				$StringLast .= "...";
			}
			return $StringLast;
		}
	}

}