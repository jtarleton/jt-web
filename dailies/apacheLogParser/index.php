<?php

/**
 * @file index.php
 * @encoding UTF-8
 * @author Marcelo Altmann <altmannmarcelo@gmail.com>
 */
class ApacheParser
{

	private $map = array(
		'ip' => 0,
		'' => 1,
		'date' => 3,
		'timeZoneOffset' => 4, //confirm
		'method' => 5, //GET , POST, HEAD
		'request' => 6,
		'protocol' => 7, //HTTP1.1
		'returnCode' => 8, //200, 404
		'size' => 9,
		'refer' => 10,
		'userAgent' => 11,
	);
	private $log;
	private $ip = array();
	private $ipTimes = array();
	private $requests = array();
	private $startDate;
	private $endDate;
	private $fetchIP;

	public function __construct()
	{
		
	}

	private function bytesToSize($bytes, $precision = 2)
	{
		$kilobyte = 1024;
		$megabyte = $kilobyte * 1024;
		$gigabyte = $megabyte * 1024;
		$terabyte = $gigabyte * 1024;

		if (($bytes >= 0) && ($bytes < $kilobyte))
		{
			return $bytes . ' B';
		}
		elseif (($bytes >= $kilobyte) && ($bytes < $megabyte))
		{
			return round($bytes / $kilobyte, $precision) . ' KB';
		}
		elseif (($bytes >= $megabyte) && ($bytes < $gigabyte))
		{
			return round($bytes / $megabyte, $precision) . ' MB';
		}
		elseif (($bytes >= $gigabyte) && ($bytes < $terabyte))
		{
			return round($bytes / $gigabyte, $precision) . ' GB';
		}
		elseif ($bytes >= $terabyte)
		{
			return round($bytes / $terabyte, $precision) . ' TB';
		}
		else
		{
			return $bytes . ' B';
		}
	}

	private function getIPs($print = true)
	{
		$handle = @fopen($this->log, "r");
		if ($handle)
		{
			while (($buffer = fgets($handle, 4096)) !== false)
			{
				$exploded = explode(' ', $buffer);
				$time = str_replace('[', '', $exploded[$this->map['date']]);
				$timeOffset = str_replace(']', '', $exploded[$this->map['timeZoneOffset']]);
				$logDate = new DateTime($time . ' ' . $timeOffset);
				$ip = $exploded[$this->map['ip']];
				if (!empty($this->startDate))
				{
					if ($logDate->format('YmdHis') < $this->startDate->format('YmdHis'))
						continue;
				}
				if (!empty($this->endtDate))
				{
					if ($logDate->format('YmdHis') > $this->endDate->format('YmdHis'))
						continue;
				}
				if (!empty($this->fetchIP))
				{
					if ($ip != $this->fetchIP)
						continue;
				}
				if (isset($this->ip[$exploded[$this->map['ip']]]))
					$this->ip[$exploded[$this->map['ip']]]++;
				else
					$this->ip[$exploded[$this->map['ip']]] = 1;
			}
			fclose($handle);
		}
		asort($this->ip);
		if ($print)
		{
			foreach ($this->ip as $ip => $count)
				echo $ip . '  =>  ' . $count . "\n";
		}
	}

	private function getTimesByIP($ip, $print = true)
	{
		$handle = @fopen($this->log, "r");
		if ($handle)
		{
			while (($buffer = fgets($handle, 4096)) !== false)
			{
				$exploded = explode(' ', $buffer);
				$time = str_replace('[', '', $exploded[$this->map['date']]);
				$timeOffset = str_replace(']', '', $exploded[$this->map['timeZoneOffset']]);
				$logDate = new DateTime($time . ' ' . $timeOffset);
				$ip = $exploded[$this->map['ip']];
				if (!empty($this->startDate))
				{
					if ($logDate->format('YmdHis') < $this->startDate->format('YmdHis'))
						continue;
				}
				if (!empty($this->endtDate))
				{
					if ($logDate->format('YmdHis') > $this->endDate->format('YmdHis'))
						continue;
				}
				if (!empty($this->fetchIP))
				{
					if ($ip != $this->fetchIP)
						continue;
				}
				$time = str_replace('[', '', $exploded[$this->map['date']]);

				if ($exploded[$this->map['ip']] == $ip)
					if (isset($this->ipTimes[$time]))
						$this->ipTimes[$time]++;
					else
						$this->ipTimes[$time] = 1;
			}
			fclose($handle);
		}
		asort($this->ipTimes);
		if ($print)
		{
			foreach ($this->ipTimes as $date => $count)
				echo $date . '  =>  ' . $count . "\n";
		}
	}

	private function getRequests($withoutParameters = true, $print = true)
	{
		$handle = @fopen($this->log, "r");
		if ($handle)
		{
			while (($buffer = fgets($handle, 4096)) !== false)
			{
				$exploded = explode(' ', $buffer);
				$time = str_replace('[', '', $exploded[$this->map['date']]);
				$timeOffset = str_replace(']', '', $exploded[$this->map['timeZoneOffset']]);
				$logDate = new DateTime($time . ' ' . $timeOffset);
				$ip = $exploded[$this->map['ip']];
				if (!empty($this->startDate))
				{
					if ($logDate->format('YmdHis') < $this->startDate->format('YmdHis'))
						continue;
				}
				if (!empty($this->endtDate))
				{
					if ($logDate->format('YmdHis') > $this->endDate->format('YmdHis'))
						continue;
				}
				if (!empty($this->fetchIP))
				{
					if ($ip != $this->fetchIP)
						continue;
				}
				$request = $exploded[$this->map['request']];
				if ($withoutParameters)
				{
					$request = explode('?', $exploded[$this->map['request']]);
					$request = $request[0];
				}

				if (isset($this->requests[$request]))
					$this->requests[$request]++;
				else
					$this->requests[$request] = 1;
			}
			fclose($handle);
		}
		asort($this->requests);
		if ($print)
		{

			foreach ($this->requests as $path => $count)
				echo $path . '  =>  ' . $count . "\n";
		}
	}

	private function getRequestsByHour($showMinutes = false, $print = true)
	{
		$this->hours = array();
		$handle = @fopen($this->log, "r");
		if ($handle)
		{
			while (($buffer = fgets($handle, 4096)) !== false)
			{

				$exploded = explode(' ', $buffer);
				$time = str_replace('[', '', $exploded[$this->map['date']]);
				$timeOffset = str_replace(']', '', $exploded[$this->map['timeZoneOffset']]);
				$logDate = new DateTime($time . ' ' . $timeOffset);
				$ip = $exploded[$this->map['ip']];
				if (!empty($this->startDate))
				{
					if ($logDate->format('YmdHis') < $this->startDate->format('YmdHis'))
						continue;
				}
				if (!empty($this->endtDate))
				{
					if ($logDate->format('YmdHis') > $this->endDate->format('YmdHis'))
						continue;
				}
				if (!empty($this->fetchIP))
				{
					if ($ip != $this->fetchIP)
						continue;
				}


				$hour = $logDate->format('H');
				$minute = $logDate->format('i');
				if (isset($this->hours[$hour]))
				{
					$this->hours[$hour]++;
					if (isset($this->minutes[$hour][$minute]))
						$this->minutes[$hour][$minute]++;
					else
						$this->minutes[$hour][$minute] = 1;
				}
				else
					$this->hours[$hour] = 1;
			}
			fclose($handle);
		}
		if (count($this->hours) > 0)
			asort($this->hours);
		if ($print)
		{
			foreach ($this->hours as $date => $count)
			{
				echo $date . '  =>  ' . $count . "\n";
				if ($showMinutes)
				{
					asort($this->minutes[$date]);
					foreach ($this->minutes[$date] as $minute => $minutecount)
						echo '   ' . $minute . '  =>  ' . $minutecount . "\n";
				}
			}
		}
	}

	private function graphGetAccessByHour()
	{
		if (count($this->hours) == 0)
			$line = "No data avaliable\n";
		else
		{
			ksort($this->hours);
			$max = max($this->hours);
			$lenght = strlen($max) + 7;
			$total = array_sum($this->hours);
			$line = "";

			foreach ($this->hours as $key => $value)
			{
				$col = $key . ' (' . $value . ') ';
				$currntLine = str_pad($col, $lenght);
				$percent = '(' . round((($value * 100) / $total), 2) . '%)';
				$percentGraph = round((($value * 100) / $max) / 2);

				for ($i = 0; $i < 50; $i++)
				{
					if ($percentGraph >= $i)
						$currntLine .= '=';
					else
						$currntLine .= '';
				}
				$currntLine .=str_pad($percent, 80 - strlen($currntLine), " ", STR_PAD_LEFT);
				$line .= $currntLine . "\n";
			}
		}
		echo $this->printSettings();
		echo "Requests graph by hour\n\n";
		echo "HR  REQs                              GRAPH                               PERC\n\n";
		echo $line . "T: ($total)\n\n";
	}

	private function setLog($log)
	{
		$this->log = $log;
		try
		{
			$handle = fopen($this->log, "r");
		}
		catch (Exception $e)
		{
			echo $e->getMessage() . "\n";
			exit();
		}
	}

	private function loadArgs()
	{
		$args = getopt("l:");
		if (!isset($args['l']))
		{
			echo "ERROR: You must especified a log file\nphp logParser.php -l /var/logs/httpd/acess-log\n";
			exit();
		}

		if (!file_exists($args['l']))
		{
			echo 'ERROR: Unable to open ' . $args['l'] . "\n";
			exit();
		}

		$this->setLog($args['l']);
	}

	private function printSettings()
	{
		$menu = "+-------------------------+\n";
		$menu .= "|    Apache Log Parser    |\n";
		$menu .= "+-------------------------+\n\n";
		$menu .= "Settings:\n";
		$menu .= "Start Date: ";
		if ($this->startDate)
			$menu .= $this->startDate->format('Y/m/d H:i:s') . "\n";
		else
			$menu .= "Not setted\n";
		$menu .= "End Date: ";
		if ($this->endDate)
			$menu .= $this->endDate->format('Y/m/d H:i:s') . "\n";
		else
			$menu .= "Not setted\n";
		$menu .= "Fetching by IP: ";
		if (!empty($this->fetchIP))
			$menu .= $this->fetchIP;
		else
			$menu .= "All";
		$menu .= "\n\n";

		return $menu;
	}

	private function showSettingsMenu()
	{

		$menu = $this->printSettings();
		$menu .= "0 - Main menu\n";
		$menu .= "1 - Set start date\n";
		$menu .= "2 - Set end date\n";
		$menu .= "3 - Set IP to fetch\n";
		$menu .="Option: ";
		unset($option);
		fwrite(STDOUT, $menu);
		$option = trim(fgets(STDIN));

		switch ($option)
		{

			case '0':
				$this->showMenu();
				break;
			case '1':
				fwrite(STDOUT, 'Enter start date (yyyy/mm/dd or yyyy/mm/dd hh:mm:ss): ');
				$startDate = trim(fgets(STDIN));
				if ($data = $this->validateData($startDate))
					$this->startDate = $data;
				else
					echo $startDate . " is an invalid data\n";
				$this->showSettingsMenu();
				break;
			case '2':
				fwrite(STDOUT, 'Enter end date (yyyy/mm/dd or yyyy/mm/dd hh:mm:ss): ');

				$endDate = trim(fgets(STDIN));
				if ($data = $this->validateData($endDate))
					$this->endDate = $data;
				else
					echo $endDate . " is an invalid data\n";
				$this->showSettingsMenu();
				break;
			case '3':
				fwrite(STDOUT, 'Enter an IP to fetch: ');
				$ip = trim(fgets(STDIN));
				if ($this->validateIp($ip))
					$this->fetchIP = $ip;
				else
					echo $ip . "is an invalid IP address\n";
				$this->showSettingsMenu();
				break;
			default :
				echo "you must select a valid option\n\n";
				exit();
		}
	}

	private function showMenu()
	{
		$menu = $this->printSettings();
		$menu .= "Select an option:\n";
		$menu .= "0 - Settings\n";
		$menu .= "1 - IPs count\n";
		$menu .= "2 - Requests count \n";
		$menu .= "3 - Access by hour\n";
		$menu .= "4 - Requests graph  by hour\n";
		$menu .= "\nOption: ";
		unset($option);
		fwrite(STDOUT, $menu);
		$option = trim(fgets(STDIN));

		switch ($option)
		{
			case '0':
				$this->showSettingsMenu();
				break;
			case '1':
				$this->getIPs();
				break;
			case '2':
				$this->getRequests();
				break;
			case '3':
				do
				{
					$repeat = true;
					fwrite(STDOUT, 'Do you want to breakdown by minutes? yes/no: ');
					$breakDownByMinute = trim(strtolower(fgets(STDIN)));
					if ($breakDownByMinute == 'yes' || $breakDownByMinute == 'no')
					{
						$repeat = false;
						$withMinute = false;
						if ($breakDownByMinute == 'yes')
							$withMinute = true;
						$this->getRequestsByHour($withMinute);
						continue;
					}
					echo 'Please, type just yes or no. ';
				}
				while ($repeat);
				break;

			case '4':
				$this->getRequestsByHour(false, false);
				$this->graphGetAccessByHour();
				break;
			default:
				echo "you must select a valid option\n\n";
				exit();
		}
		fwrite(STDOUT, 'Do you want to do a new query? (yes/no) ');
		$newQuery = trim(fgets(STDIN));
		if ($newQuery == 'yes')
			$this->showMenu();
		else
			exit();
	}

	private function validateData($dt)
	{
		try
		{
			$data = new DateTime($dt);
		}
		catch (Exception $e)
		{
			$data = false;
		}
		return $data;
	}

	public function run()
	{

		$this->loadArgs();
		$this->showMenu();
	}

	private function validateIp($ip)
	{
		if (preg_match("/^(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})$/", $ip))
		{
			$parts = explode(".", $ip);
			foreach ($parts as $ip_parts)
			{
				if (intval($ip_parts) > 255 || intval($ip_parts) < 0)
					return false;
			}
			return true;
		}
		else
			return false;
	}

}

$apacheParser = new ApacheParser();
$apacheParser->run();
?>
