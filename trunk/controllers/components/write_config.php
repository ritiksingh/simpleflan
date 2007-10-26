<?php
/**
* WriteConfig Component
*/
class WriteConfigComponent extends Object
{

	function write($configKey,$fileName)
	{
		//store current $key config in a variable
		$configs=Configure::read($configKey);
		
		//construct new file content
		$fileContent="<?php \n \$config['$configKey']=array(\n";
		foreach ($configs as $key => $config) {
			$fileContent.="\t\t'$key'=>'$config',\n";
		}
		$fileContent.="\t);\n?>";

		//open file
		$configPath=CONFIGS.$fileName.'.php';
		$file=new File($configPath);

		//write file
		return ($file->write($fileContent));
	}

}

?>